<?php
    if(!isset($_SESSION)){
        session_start(); 
    }

    if(isset($_SESSION)){
               
	    clearstatcache(); //--> Borro el cache

        if($_COOKIE['pw'] && $_COOKIE['ph'] && $_COOKIE['ml']){
       
            unset($_COOKIE['pw']); 
            unset($_COOKIE['ph']);
            unset($_COOKIE['ml']);
   
            setcookie('pw', '',time()-100);
            setcookie('ph', '',time()-100);
            setcookie('ml', '',time()-100);
        }
        session_unset(); //--> Eliminar todas las sesiones
        header('Location: ../login.php');
    }
?>