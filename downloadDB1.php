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
    <title>How to Import Excel Data into database in PHP</title>
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
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
                        <h4>Download Excel Data into database</h4>
                    </div>
                    <div class="card-body">

                        <form action="downloadDB2.php" method="POST" enctype="multipart/form-data">
                            <h3>TMS Number</h3>
                            <input  type="text" name="data1" id="data1" class="form-control" required />
                            <hr>
                            <button type="submit" name="save_excel_data" class="btn btn-primary mt-3">Import</button>

                        </form>

                        <section>
                            <h1 style = "color:red">Important Note</h1>
                            <h2>1) In TMS Number field table name Written in following format</h2>
                            <h3>Pattern : (short name of theatre)+(movie name)+(date[25012023]these format)+(screen number[SCR01])</h3>
                            <h3>Example : [PVRPUNEPATHAN251023SCR01]</h3>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>