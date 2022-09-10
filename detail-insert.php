<?php 

if(isset($_POST['submit'])){
  $Block = $_POST['Block'];
  $RoomNo = $_POST['RoomNo'];
  $Department = $_POST['Department'];
  $Description = $_POST['Description'];
  $Institute = $_POST['Institute'];
  $Type=$_POST['Type'];
  $Category=$_POST['Category'];
     if(!empty($Block) && !empty($RoomNo ) && !empty($Department) && !empty($Description)){
      $query = 
      "INSERT INTO indentdb(Institute,Type,Category,Block,RoomNo,Department,Description,uniqueid) 
      VALUES('$Institute',
             '$Type',
             '$Category',
             '$Block', 
             '$RoomNo',
             '$Department',
             '$Description',
             concat('$Block',' ','$RoomNo')
             )";


      $result = $conn->query($query);
     
      if($result){
        $_SESSION['Block']=$Block;
        $_SESSION['RoomNo']=$RoomNo;
        $_SESSION['Department']=$Department;
        $_SESSION['Description']=$Description;
        $_SESSION['Institute']=$Institute;
        $_SESSION['Category']=$Category;
        $_SESSION['Type']=$Type;
        header("location:3.php");
      }  
    }

  }

?>