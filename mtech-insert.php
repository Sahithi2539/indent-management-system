<?php
include('database.php');
include('connection.php');

if(isset($_POST['submit1'])){
    $stu1 = $_POST['stu1'];
    $com1 = $_POST['com1'];
    $rec1 = $_POST['rec1'];
    $col1 = $_POST['col1'];
    $sum5 = $_POST['sum5'];
    $stu2 = $_POST['stu2'];
    $com2 = $_POST['com2'];
    $rec2 = $_POST['rec2'];
    $col2 = $_POST['col2'];
    $sum6 = $_POST['sum6'];
    $sum1 = $_POST['sum1'];
    $sum2 = $_POST['sum2'];
    $sum3 = $_POST['sum3'];
    $sum4 = $_POST['sum4'];
    $sum7 = $_POST['sum7'];

    $query = "INSERT INTO mtech (stu1,com1,rec1,col1,sum5,stu2,com2,rec2,col2,sum6,sum1,sum2,sum3,sum4,sum7)
    VALUES('$stu1','$com1','$rec1','$col1','$sum5','$stu2','$com2','$rec2','$col2','$sum6','$sum1','$sum2','$sum3','$sum4','$sum7')
    ";

    $result = $conn->query($query);
    if($result){
        header("location:4.php");
    }
}
?>