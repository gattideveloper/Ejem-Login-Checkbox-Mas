<?php
    session_start(); //---> Crea una sesión
	
    $user = $_SESSION['UserName'];
    $category = $_SESSION['UserData']['category'];
    $_SESSION['CategoryAnime'] = array();
    $_SESSION['CategoryPaisaje'] = array(); 
    $_SESSION['CategorySpider'] = array();  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GattiDev ~ Libro</title>
        <link rel="icon" type="favicon/x-icon" href="../gallery/icon/favicon.ico" />
        <!--/ Styles /-->
		<link rel="stylesheet" type="text/css" href="../css/style.css" />

        <!--/ Font Awesome V6 /-->
        <script src="https://kit.fontawesome.com/e28972e8bb.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="container">
            <header id="header">
                <span class="logo">Gatti Dev</span>

                <address>
                    <label class="menu-icon" for="menu-btn">
                        <span class="navicon"></span>
                    </label>
                    
                    <ul class="menu" >
                        <li>
                            <a>
                                <i class="fa-solid fa-circle-user fa-lg icon" style="color: #333 !important;"></i>
                                <?php echo $user;?>
                            </a>
                        </li>
                        <li>
                            <a href="home.php">
                                <i class="fa-solid fa-house fa-lg icon icon-sombra" title="Home"></i>
                            </a>
                        </li>
                        <li>
                            <a>
                                <i class="fa-solid fa-book fa-lg activated" title="Libro"></i>   
                            </a>
                        </li>
                        <li>        
                            <a href="logout.php">
                                <i class="fa-solid fa-person-walking-dashed-line-arrow-right fa-lg icon icon-sombra" title="Salir"></i>                                
                            </a>
                        </li>
                    </ul>
                </address>
            </header>

            
    
            <main id="main">
                  

                <article>
                    <div class="section">
                        <h1>Categoría</h1>
                        <?php 
                            $catg = "";
                            foreach($category as $ctg){
                                $catg = $catg. "~" . $ctg;               
                            }

                            $categoria = trim($catg, "~");
                        
                            foreach($category as $ctg){
                              
                                switch ($ctg) {

                                    case 'Anime':
                                        echo "<h2>".$ctg."</h2>";
                                                                                 
                                        $directory="../gallery/category/".$ctg."/";
                                        $dirint = dir($directory);
                                          
                                        while (false !== ($archivo = $dirint->read())) {
                                            $_SESSION['CategoryAnime'][] = $archivo;
                                        }
                                            
                                        $dirint->close();

                                        //--> Acá elimino los dos primeros valore por qie son los puntos.
                                        unset($_SESSION['CategoryAnime'][0]);
                                        unset($_SESSION['CategoryAnime'][1]);

                                        //--> Cuento cuanto me quedaron.
                                        $cantidad = count($_SESSION['CategoryAnime']);
                                            
                                        echo"<section class='gallery'>";
                                            
                                            //--> Recorro el Array 
                                            foreach ($_SESSION['CategoryAnime'] as &$valor) {
                                                //--> Muestro la Img                                             
                                                echo "<img src='".$directory.$valor."' alt=''>";                                              
                                            }
                                        echo"</section>";                   
                                    break;
                                        
                                    case 'Paisaje':
                            
                                        echo "<h2>".$ctg."</h2>";
                                                                                 
                                        $directory="../gallery/category/".$ctg."/";
                                        $dirint = dir($directory);
                                            
                                        while (false !== ($archivo = $dirint->read())) {
                                            $_SESSION['CategoryPaisaje'][] = $archivo;
                                        }
                                            
                                        $dirint->close();

                                        //--> Acá elimino los dos primeros valore por qie son los puntos.
                                        unset($_SESSION['CategoryPaisaje'][0]);
                                        unset($_SESSION['CategoryPaisaje'][1]);

                                        //--> Cuento cuanto me quedaron.
                                        $cantidad = count($_SESSION['CategoryPaisaje']);
                                            
                                        echo"<section class='gallery'>";
                                            
                                            //--> Recorro el Array 
                                            foreach ($_SESSION['CategoryPaisaje'] as &$valor) {
                                                //--> Muestro la Img                                             
                                                echo "<img src='".$directory.$valor."' alt=''>";                                              
                                            }
                                        echo"</section>";        
                                    break;
                                        
                                    case 'Spider':
                                            
                                        echo "<h2>".$ctg."</h2>";
                                                                                 
                                        $directory="../gallery/category/".$ctg."/";
                                        $dirint = dir($directory);
                                            
                                        while (false !== ($archivo = $dirint->read())) {
                                            $_SESSION['CategorySpider'][] = $archivo;
                                        }
                                            
                                        $dirint->close();

                                        //--> Acá elimino los dos primeros valore por qie son los puntos.
                                        unset($_SESSION['CategorySpider'][0]);
                                        unset($_SESSION['CategorySpider'][1]);

                                        //--> Cuento cuanto me quedaron.
                                        $cantidad = count($_SESSION['CategorySpider']);
                                            
                                        echo"<section class='gallery'>";
                                            
                                            //--> Recorro el Array 
                                            foreach ($_SESSION['CategorySpider'] as &$valor) {
                                                //--> Muestro la Img                                             
                                                echo "<img src='".$directory.$valor."' alt=''>";                                              
                                            }
                                        echo"</section>";        
                                    break;   
                                }
                            }
                        ?>
				    </div>
                </article>
            </main>
            <?php require_once("includes/footer_inc.php")?>
        </div>       
    </body>
</html>