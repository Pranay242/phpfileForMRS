<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "moviereviewsystem");
$output = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve the data from the form input
            $data2 = isset($_POST['data2']) ? $_POST['data2'] : '';
}
       
if(isset($_POST["Download"]))
{
 $query = "SELECT * FROM $data2";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>MRSNumber</th>  
                         <th>mood1</th>  
                         <th>msgfeedback</th>  
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["MRSNumber"].'</td>  
                         <td>'.$row["mood1"].'</td>  
                         <td>'.$row["msgfeedback"].'</td>    
    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>








