<?php
session_start();
include('database.php');
include('mtech-insert.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M TECH</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
    <script>
        function add(){
            var var1,var2,var3,var4,var5,var6,var7,var8;
            var1 = parseInt(document.getElementById("var1").value);
            var2 = parseInt(document.getElementById("var2").value);
            var3 = parseInt(document.getElementById("var3").value);
            var4 = parseInt(document.getElementById("var4").value);
            var5 = parseInt(document.getElementById("var5").value);
            var6 = parseInt(document.getElementById("var6").value);
            var7 = parseInt(document.getElementById("var7").value);
            var8 = parseInt(document.getElementById("var8").value);

            sum1 = var1+var5;
            sum2 = var2+var6;
            sum3 = var3+var7;
            sum4 = var4+var8;
            sum5 = var2+var3-var4;
            sum6 = var6+var7-var8;
            sum7 = var2+var3-var4+var6+var7-var8;

            document.getElementById("var1+var5").value = sum1;
            document.getElementById("var2+var6").value = sum2;
            document.getElementById("var3+var7").value = sum3;
            document.getElementById("var4+var8").value = sum4;
            document.getElementById("var2+var3-var4").value = sum5;
            document.getElementById("var6+var7-var8").value = sum6;
            document.getElementById("var2+var3-var4+var6+var7-var8").value=sum7;

            var date = new Date();
            var components = [
                date.getYear(),
                date.getMonth(),
                date.getDate(),
                // date.getHours(),
                // date.getMinutes(),
                // date.getSeconds(),
                // date.getMilliseconds()
            ];

            var id = components.join("");
        }
    </script>
</head>
<body>
    <div class="container" style="margin: 50px auto;">
    <div class="row">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="2.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">ENTRY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="4.php">RECORDS</a>
            </li>
          </ul>
    </div>
</div>
    <form action="" method="POST">
    <div class="col-md-4">
        <table id="myTable" class="table table-striped table-bordered table-hover text-center" style="margin-top: 100px; margin-left:10%; padding: 15px 0px 0px 0px;">
            <thead>
                <tr style="background-color: #4472c4; color:white;">
                    <th scope="col">COURSE</th>
                    <th scope="col">M TECH</th>
                    <th scope="col" colspan = '3'>FEES DETAILS</th>
                    <th scope="col">Total</th>
                </tr>
                <tr style="background-color: white;">
                    <!-- <th scope="col"><input name = "id" type="text" id="id" ></th> -->
                    <th scope="col">Year</th>
                    <th scope="col">No of Students</th>
                    <th scope="col">Committed (A)</th>
                    <th scope="col">Received (B)</th>
                    <th scope="col">Collected Today</th>
                    <th scope="col">Balance</th>
                    </tr>
            </thead>
            <tbody>
                <tr scope="row">
                    <th>1</th>
                    <td><input name = "stu1" type="text" id="var1" value=0></td>
                    <td><input name = "com1" type="text" id="var2" value=0></td>
                    <td><input name = "rec1" type="text" id="var3" value=0></td>
                    <td><input name = "col1"type="text" id="var4" value=0></td>
                    <td><p><input name = "sum5" id="var2+var3-var4" style="display: block;"></p></td>  
                </tr>
                <tr scope="row">
                    <th>2</th> 
                    <td><input name = "stu2" type="text" id="var5" value=0></td>
                    <td><input name = "com2" type="text" id="var6" value=0></td>
                    <td><input name = "rec2" type="text" id="var7" value=0></td>
                    <td><input name = "col2" type="text" id="var8" value=0></td>
                    <td><p><input name = "sum6" id="var6+var7-var8" style="display: block;"></p></td> 
                </tr>
                <tr scope="row">
                    <th>Grand Total</th> 
                    <td><p><input name = "sum1" id="var1+var5" style="display: block;"></p></td> 
                    <td><p><input name = "sum2" id="var2+var6" style="display: block;"></p></td>
                    <td><p><input name = "sum3" id="var3+var7" style="display: block;"></p></td> 
                    <td><p><input name = "sum4" id="var4+var8" style="display: block;"></p></td>
                    <td><p><input name = "sum7" id="var2+var3-var4+var6+var7-var8" style="display: block;"></p></td> 
                </tr>
                
            </tbody>
        </table>
        <p style="margin-top: 20px; margin-left: 1000px; " onclick="add()">Total</p>
        <button type = "submit" name="submit1" class="btn btn-success align-text-bottom action_btn" style="margin-top: 10px; margin-left: 1000px;">SUBMIT</button>
                <!-- <button class="btn btn-success align-text-bottom action_btn"><a type="button" href="4.html" name="log" id="log" value="Next">Next</a></button> -->
            
        <!-- <button href="" name="log" id="log" value="Total" onclick ="add()">Total</button> -->
        <!-- <button type="submit" name="submit" class="btn btn-primary align-text-bottom" style="margin-top: 50px; margin-left: 1000px;" onclick="add()">Total</button>
        <button class="btn btn-success align-text-bottom" style="margin-top: 50px;"><a type="button" href="4.php" name="log" id="log" value="Next">Next</a></button> -->
    </div>
    </form>
</body>

</html>