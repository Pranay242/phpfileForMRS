<?php session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MRSN Excel sheet Upload </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">

                <?php
                if(isset($_SESSION['message']))
                {
                    echo "<h4>".$_SESSION['message']."</h4>";
                    unset($_SESSION['message']);
                }
                ?>

                <div class="card">
                    <div class="card-header">
                        <h4>MRSN Excel sheet Upload</h4>
                    </div>
                    <div class="card-body">

                        <form action="update2.php" method="POST" enctype="multipart/form-data">
                            <h3>MRSN</h3>
                            <input  type="text" name="data1" id="data1" class="form-control" required />
                            <hr>
                            <input type="file" name="import_file" class="form-control" required/>
                            <button type="submit" name="save_excel_data" class="btn btn-primary mt-3">Import</button>

                        </form>
                        <br>
                        <section>
                            <h1 style = "color:red">Important Note</h1>
                            <h2>1) In MRSN field table name Written in following format</h2>
                            <h3>Pattern : (short name of theatre)+(movie name)+(date[25012023]these format)+(screen number[SCR01])</h3>
                            <h3>Example : [PVRPUNEPATHAN251023SCR01]</h3>
                            <h2>2) In upload xmls file Write three field MRSNumber,mood1,msgfeedback as it is and in xmlsfile only MRSNumber field write as per theatre screens seats availables Patter-->table name in above note {Example : [PVRPUNEPATHAN251023SCR01]}+seat number(A01)</h2>
                            <h3>Example : [PVRPUNEPATHAN251023SCR01A01]</h3>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>