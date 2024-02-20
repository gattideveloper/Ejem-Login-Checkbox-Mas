<?php
    session_start(); //---> Crea una sesión
        
    if(isset($_POST['TodosLosRubros'])){
            
        $_SESSION['UserData']['category'][] = "Anime";
        $_SESSION['UserData']['category'][] = "Paisaje";
        $_SESSION['UserData']['category'][] = "Spider";                                        
                                                  
                                                
    }else{
        if(isset($_POST['opcion'])){
           
            foreach($_POST['opcion'] as $valor){
                $_SESSION['UserData']['category'][] = $valor;               
            }
        }
        else{
            header('Location: index.php');
        }
    }
   
    if(isset($_SESSION['UserName']) && isset($_SESSION['UserData']) && isset($_SESSION['UserData']['category'])){
        header('Location: views/home.php');    
    }
?>