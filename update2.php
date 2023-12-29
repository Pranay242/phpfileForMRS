<?php
session_start();
include('update3DBconfg.php');

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if(isset($_POST['save_excel_data']))
{
    $fileName = $_FILES['import_file']['name'];
    $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);

    $allowed_ext = ['xls','csv','xlsx'];

    if(in_array($file_ext, $allowed_ext))
    {
        $inputFileNamePath = $_FILES['import_file']['tmp_name'];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
        $data = $spreadsheet->getActiveSheet()->toArray();
        $count = "0";
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve the data from the form input
            $data1 = isset($_POST['data1']) ? $_POST['data1'] : '';
        }
        //create table
        $createTableSQL = "CREATE TABLE $data1 (
            MRSNumber varchar(255),
            mood1 varchar(255),
            msgfeedback varchar(255)
        )";
        
        if ($conn->query($createTableSQL) === TRUE) {
            echo "Table created successfully";
        } else {
            echo "Error creating table: " . $conn->error;
        }
        
    
        foreach($data as $row)
        {
            if($count > 0)
            {
                $MRSNumber = $row['0'];
                $mood1 = $row['1'];
                $msgfeedback = $row['2'];
                
                $studentQuery = "INSERT INTO $data1(MRSNumber,mood1,msgfeedback) VALUES ('$MRSNumber','$mood1','$msgfeedback')";
                $result = mysqli_query($conn, $studentQuery);
                $msg = true;
            }
            else
            {
                $count = "1";
            }
        }

        if(isset($msg))
        {
            $_SESSION['message'] = "Successfully Imported";
            header('Location: update1.php');
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Not Imported";
            header('Location: update1.php');
            exit(0);
        }
    }
    else
    {
        $_SESSION['message'] = "Invalid File";
        header('Location: update1.php');
        exit(0);
    }
}
?>