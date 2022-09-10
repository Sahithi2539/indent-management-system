<?php 

if(isset($_POST['submit'])){
  session_start();
  $Institute = $_POST['Institute'];
  $Category = $_POST['Category'];
  $Type = $_POST['Type'];

     if(!empty($Institute) && !empty($Category ) && !empty($Type)){
      $query = "INSERT INTO indentdb (Institute,Category,Type) VALUES('$Institute', '$Category','$Type')";
      $result = $conn->query($query);
     
      if($result){
        $_SESSION['Institute']=$Institute;
        $_SESSION['Category']=$Category;
        $_SESSION['Type']=$Type;
        header("location: 5.php");
      }  
    }
  }

?>