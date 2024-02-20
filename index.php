<?php
	if(!isset($_SESSION)){
    	session_start(); //---> Crea una sesión
	}

	$user = $_SESSION['UserName'];
    
    //--> Le agrego los datos a la session
    $_SESSION['UserData'][] = "Gatti323";
    $_SESSION['UserData'][] = "23640905";
    $_SESSION['UserData'][] = "gd@gmail.com";
    $_SESSION['UserData']['category'] = array(); //--> Creo el Array asi agrego los datos

    if(!isset ($_SESSION['UserName'])) {
    	header('Location: login.php');
	}

    if(isset ($_SESSION['UserData']['category'])) {
    	header('Location: views/home.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GattiDev ~ Intereses</title>
        <link rel="icon" type="favicon/x-icon" href="gallery/icon/favicon.ico" />
        <!--/ Styles /-->
        <link rel="stylesheet" type="text/css" href="css/checkbox.css" />
        
        <script src="js/checkbox.js"></script>
    </head>
    <body>
        <div id="container">
            <header id="header">
                <h2>¡¡ Rubro !!</h2>
            </header>

            <main id="main">
                <article class="intereses">
                    <h3><?php echo $user;?></h3>
                    <section class="intereses">
                                               
                        <h4> Intereses: </h4>
                        <div class="bloque">
                            <form action="en-rubo.php" method="post">

                                <div id="opciones">
                                    <div class= "caja">
                                        <label class="containerRubro"> 
                                            <p>Anime</p>
                                            <input type="checkbox"  class="settings"  name="opcion[]" value=Anime>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>

                                    <div class= "caja">
                                        <label class="containerRubro"> 
                                            <p>Paisaje</p>
                                            <input type="checkbox"  class="settings"  name="opcion[]" value=Paisaje>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>

                                    
                                    <div class= "caja">
                                        <label class="containerRubro">
                                            <p>Spider</p>
                                            <input type="checkbox"  class="settings"  name="opcion[]" value=Spider>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <!--Linea para separar-->            
                                <hr/>
                                <div id="opciones">
                                    <div class= "caja">
                                        <label class="containerRubro">
                                            <p>Todos los Rubros</p>
                                            <input type="checkbox" onclick="marcar(this);" name="TodosLosRubros[]" value= "Todos"> 
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
        
                                <button class="btnIngresar rounded">
                                    <span class="text-green">Continuar</span>
                                </button>
                    
                            </form>
                        </div>
                    </section>
                </article>
            </main>

            <footer>
            </footer>
        </div>
    </body>
</html>


                      		                        
