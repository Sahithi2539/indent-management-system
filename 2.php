<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" style="margin: 100px auto;">
        <div class="row">
            <p class="headingparagraph text-center centertext">MANAGEMENT INFORMATION SYSTEM</p>
        </div>
        <div class="row">
            <p class="text-end" style="font-size: larger; font-weight: bold;">Welcome, <?php echo($_SESSION['username'] ); ?></p>
        </div>
        <div class="row">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-4" style="height: 150px; margin: 20px 0;"><button type="button" onclick="window.location.href='0.html';" class="btn btn-primary homebtn">B.TECH</button></div>
                    <div class="col-md-4" style="height: 150px; margin: 20px 0;"><button type="submit" onclick="window.location.href='mtech.php';" class="btn btn-primary homebtn" >M.TECH</a></button></div>
                    <div class="col-md-4" style="height: 150px; margin: 20px 0;"><button type="button" onclick="window.location.href='5.html';" class="btn btn-primary homebtn">MBA</button></div>
                </div>
                <div class="row">
                    <div class="col-md-4" style="height: 150px; margin: 20px 0;"><button type="button" onclick="window.location.href='7.html';" class="btn btn-primary homebtn">MCA</button></div>
                    <div class="col-md-4" style="height: 150px; margin: 20px 0;"><button type="button" onclick="window.location.href='9.html';" class="btn btn-primary homebtn">OLD DUES(FROM STUDENTS)</button></div>
                    <div class="col-md-4" style="height: 150px; margin: 20px 0;"><button type="button" onclick="window.location.href='11.html';" class="btn btn-primary homebtn">PRIOR TO 2020-21</button></div>
                </div>
                <div class="row">
                    <div class="col-md-4" style="height: 150px; margin: 20px 0;"><button type="button" onclick="window.location.href='13.html';"class="btn btn-primary homebtn">CASH DETAILS</button></div>
                    <div class="col-md-4" style="height: 150px; margin: 20px 0;"><button type="button" onclick="window.location.href='15.html';"class="btn btn-primary homebtn">CASH PAYMENTS</button></div>
                    <div class="col-md-4" style="height: 150px; margin: 20px 0;"><button type="button" onclick="window.location.href='17.html';"class="btn btn-primary homebtn">JVD Details</button></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>