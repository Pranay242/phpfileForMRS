<?php
$connect = mysqli_connect("localhost", "root", "", "moviereviewsystem");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the data from the form input
    $data1 = isset($_POST['data1']) ? $_POST['data1'] : '';
}
$sql = "SELECT * FROM $data1";  
$result = mysqli_query($connect, $sql);
?>
<html>  
 <head>  
  <title>Export MySQL data to Excel in PHP</title>  
  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>  
 <body>  
  <div class="container">  
   <br />  
   <br />  
   <br />  
   <div class="table-responsive">  
    <h2 align="center">Download MySQL data to Excel</h2><br /> 
    <table class="table table-bordered">
     <tr>  
                         <th>MRSNumber</th>  
                         <th>mood1</th>  
                         <th>msgfeedback</th>  
     </tr>
     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
       <tr>  
         <td>'.$row["MRSNumber"].'</td>  
         <td>'.$row["mood1"].'</td>  
         <td>'.$row["msgfeedback"].'</td>  
       </tr>  
        ';  
     }
     ?>
    </table>
    <br />
    <form action="downloadDB3.php" method="post" >
        <h3>TMS Number</h3>
        <input  type="text" name="data2" id="data2" class="form-control" required />
        <hr>   
        <input type="submit" name="Download" class="btn btn-success" value="Download" />
    </form>

    <form action="adminPage.php" method="post" >
        <input type="submit" name="AdminPage" class="btn btn-success" value="AdminPage" />
    </form>

   </div>  
  </div>  
 </body>  
</html>
