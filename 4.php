<?php
session_start();
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

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
        <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container" style="margin: 50px auto;">
        <div class="row">
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link" href="2.php">HOME</a>
              </li>
                <li class="nav-item">
                  <a class="nav-link" href="mtech.php">ENTRY</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">RECORDS</a>
                </li>
              </ul>
        </div>  
        <div class="table-responsive">
          <table id="myTable" class="table table-striped table-bordered table-hover text-center" style="padding: 15px;">
          <style>
                a,a:hover{
                  color: black;
                }
              </style> 
            <thead>
                <tr style="background-color: #4472c4; color:white;">
                    <th scope="col" colspan="2">COURSE</th>
                    <th scope="col">M TECH</th>
                    <th scope="col" colspan = '3'>FEES DETAILS</th>
                    <th scope="col">Total</th>
                    <th>Delete</th>
                </tr>
                <tr style="background-color: white;">
                    <th scope="col">Date</th>
                    <th scope="col">Year</th>
                    <th scope="col">No of Students</th>
                    <th scope="col">Committed (A)</th>
                    <th scope="col">Received (B)</th>
                    <th scope="col">Collected Today</th>
                    <th scope="col">Balance</th>
                    <th></th>
                    </tr>
            </thead>
            <tbody>
              <?php
              include("connection.php");
              include("database.php");
              $sql = "SELECT id,date,stu1,com1,rec1,col1,sum5,stu2,com2,rec2,col2,sum6,sum1,sum2,sum3,sum4,sum7 from mtech order by id desc";
              $result = $con->query($sql);
              // $value2 = "DELETE FROM indents";
              // $result3 = $conn->query($value2);
              // $value1 = "INSERT INTO indents SELECT id,concat(uniqueid,id) as uniqueid, DATEDIFF(CURDATE(),subdate) as age FROM indentdb";
              // $result2 = $conn->query($value1);

              if (!$result) {
                die("Invalid query: " . $connection->error);
              }

              while ($row = $result->fetch_assoc()) {
                echo "
                  <tr>
                  <th>".$row["id"]."</th>
                  <th>1</th>
                  <td>" . $row["stu1"] . "</td>
                  <td>" . $row["com1"] . "</td>
                  <td>" . $row["rec1"] . "</td>
                  <td>" . $row["col1"] . "</td>
                  <td>" . $row["sum5"] . "</td>
                  <td></td>
                  </tr>
                  <tr>
                  <th>".$row["date"]."</th>
                  <th>2</th>
                  <td>" . $row["stu2"] . "</td>
                  <td>" . $row["com2"] . "</td>
                  <td>" . $row["rec2"] . "</td>
                  <td>" . $row["col2"] . "</td>
                  <td>" . $row["sum6"] . "</td>
                  <td></td>
                  <br>
                  </tr>
                  <tr>
                  <th></th>
                  <th>Balance</th>
                  <td>" . $row["sum1"] . "</td>
                  <td>" . $row["sum2"] . "</td>
                  <td>" . $row["sum3"] . "</td>
                  <td>" . $row["sum4"] . "</td>
                  <td>" . $row["sum7"] . "</td>
                  <td>
                  <a href='delete.php?title=".$row["id"]."'><button type='button' class='btn btn-danger btn-sm'>DELETE</button></a>
                  </td>
                </tr>";
              }
              ?>
                
            </tbody>
        </table>
       
        </div>
        
    </div>
</body>

</html>


