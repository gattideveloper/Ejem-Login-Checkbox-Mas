<?php 
  	session_start();
    
    function Good() {
        $_SESSION['UserData'] = array();      
        header("Location: ../index.php");
    }

    function Mistake(){
        header("Location: ../login.php"); 
    }

    $pass_data = $_POST['password'];
          
    if($pass_data == 'Gatti323'){
            	
        $_SESSION['UserName'] = 'Ezequiel';

        Good();
    } else{
        Mistake();
    }
?>