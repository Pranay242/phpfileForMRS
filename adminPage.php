<?php session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Movies Review System Home</title>
    <style>
        @media only screen and (max-width: 600px) {
        body {
            background-color: lightblue;
            padding: auto;
            }
        }

        .header {
            padding: 0px;
            text-align: center;
            justify-content: center;
            background: skyblue;
            color: white;
            font-size: 12px;
        }
        
        h1{
            margin : 0;
            padding : 0;
            display : flex;
            align-items : center;
            justify-content: center;
            min-height : 20vh;
            font-family : 'Barlow Condensed' , sans-selif;
            background-color: skyblue;
        }

        nav{
            margin : 0;
            padding: 20px;
            position: sticky;
            display : flex;
            align-items : center;
            justify-content: center;
            min-height : 1vh;
            background-color: lightblue;
        }


        a{
            text-decoration: none;
            text-align: center;
            padding: 20px;
            float: center;  
            font-size: 220%;  
        }
        
        
        
        
        .radio
        {
            display: none;
        }
        

        
        
        body {
            background: lightblue;
        }
        
        section
        {
            margin: 110px;
            margin-left: 22%;
            margin-top: 4%;
        }
        
        
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: skyblue;
            background-color: skyblue;
            color: black;
            text-align: center;
            font-size: x-large;
            }
     
        .btn-group button {
            background-color: #04AA6D; /* Green background */
            border: 1px solid green; /* Green border */
            color: white; /* White text */
            padding: 10px 24px; /* Some padding */
            cursor: pointer; /* Pointer/hand icon */
            float: left; /* Float the buttons side by side */
        }

        /* Clear floats (clearfix hack) */
        .btn-group:after {
            content: "";
            clear: both;
            display: table;
        }

        .btn-group button:not(:last-child) {
            border-right: none; /* Prevent double borders */
        }

        /* Add a background color on hover */
        .btn-group button:hover {
            background-color: #3e8e41;
        }

    </style>
</head>

<body>

   
        <header>
            <h1 style="font-family: elephant">MOVIES REVIEW SYSTEM</h1>
        </header>
        
        <section action="/action_page.php">
            <div class="btn-group" style="width:100%">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <!-- <form action="index.php" method="post" enctype="multipart/form-data">
                    <button style="width:40%">Upload Excel File</button>
                </form>
                <br>
                <form action="downloadDB.php" method="post" enctype="multipart/form-data">
                    <button style="width:40%">Download Excel File</button>
                </form>  -->
                <!-- <button style="width:40%">Upload Excel File</button>
                <button style="width:40%">Download Excel File</button> -->

                <form action="update1.php" method="post" >
                    <button style="width:40%">Upload MRSN Excel File</button>
                    <!-- <button style="width:40%">Download Excel File</button> -->
                </form>

                <form action="downloadDB1.php" method="post" >
                    <!-- <button style="width:40%">Upload Excel File</button> -->
                    <button style="width:40%">Download MRSN Excel File</button>
                </form>
                
            </div>
        </section>
    
  

    <div class="footer" style="font-size: 20px;">
        <p style="font:xx-large">
            <marquee direction="right"> 
            PVR THEATER PULZION MALL, DELHI(MOVIE NAME)
            </marquee>
        </p>
    </div>
    
</body>



</html>