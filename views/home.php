<?php
  	session_start(); //---> Crea una sesión

	$user = $_SESSION['UserName'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GattiDev ~ Home</title>
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
                            <a>
                                <i class="fa-solid fa-house fa-lg activated" title="Home"></i>
                            </a>
                        </li>
                        <li>
                            <a href="book.php">
                                <i class="fa-solid fa-book fa-lg icon icon-sombra" title="Libro"></i>   
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
                       <h1>Datos Personales</h1>

                       <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent luctus nisl vel velit volutpat, quis vulputate sem mollis. In a est ac est sollicitudin ultricies sit amet eget massa. Praesent tincidunt tortor non justo condimentum elementum eget in magna. Sed porta magna nec orci fringilla ornare. 
                            Etiam malesuada lacinia diam in pharetra. Sed mollis orci tellus, non imperdiet metus interdum venenatis. Donec vitae auctor lorem. Donec et lacus sagittis, luctus magna quis, lobortis lorem. Quisque pellentesque diam nec mi accumsan tincidunt. Mauris varius, purus in suscipit posuere, lectus enim tincidunt magna, nec bibendum tortor sem ac ipsum. 
                        </p>    
                        <p> Nulla metus erat, vestibulum at quam quis, convallis euismod ipsum. Aenean lectus dui, posuere quis ex eget, tempus blandit augue.
                            Integer sem metus, tincidunt ac felis in, convallis ornare quam. Nam consectetur nibh non purus semper elementum. Nam a semper purus, vehicula consectetur nibh. 
                            Vestibulum sed est quis nisi porttitor malesuada. Curabitur nec eros eu ex tristique convallis. 
                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed convallis eu massa nec placerat. Praesent diam augue, gravida id tincidunt et, tincidunt sit amet libero. 
                        </p>    
                        <p> Cras felis augue, interdum nec venenatis et, lacinia non odio. Sed aliquet, ex at lacinia convallis, nunc ligula semper leo, eget fringilla nisi elit in mi. Fusce tincidunt leo in justo viverra venenatis. In ac leo mi. 
                            Nam a fermentum dui. Praesent tempor nisl id egestas interdum. Integer quis posuere libero. 
                            Nam egestas in sapien eget porta. Fusce et quam eget elit vulputate elementum. 
                            Nam ullamcorper arcu dui, vitae elementum lacus condimentum at. 
                            Nam viverra eleifend purus ac viverra. Suspendisse ultricies a magna nec facilisis. 
                            Fusce et dolor magna. Proin id iaculis odio. In id mauris vitae eros ultrices congue. 
                            Phasellus vel tempor libero. Mauris sed justo eros. Nam maximus justo ac gravida porta. 
                        </p>
                        <p> Etiam pharetra elementum velit, vitae faucibus ipsum dapibus eu. Etiam fermentum ultrices libero non consectetur. 
                            Pellentesque egestas nisi id est ullamcorper iaculis. In sit amet varius eros, at cursus dolor. 
                            In ultrices convallis venenatis. Vestibulum risus justo, pharetra vel blandit eu, suscipit non magna. 
                            Morbi mattis, dui nec viverra porta, quam sapien molestie ipsum, quis mollis sem eros eget purus. 
                            Vestibulum viverra lacinia euismod. Praesent at dictum dui, commodo mattis mi. Pellentesque a lorem tellus. 
                            Proin ante nisi, venenatis vitae velit vel, accumsan aliquam turpis. Nunc sed sapien nibh. 
                            Pellentesque fermentum tellus ac malesuada ullamcorper. Integer pulvinar ornare nunc sodales cursus.
                        </p>
                        <p> Curabitur condimentum dignissim pellentesque. Fusce massa sem, condimentum eu nunc id, dignissim vehicula augue. 
                            Etiam malesuada dapibus mattis. Proin at arcu suscipit, cursus turpis quis, consequat nunc. 
                            Morbi eget mi ultricies, molestie leo in, ullamcorper leo. In quis sodales arcu, id semper sapien. 
                            Ut sed sagittis erat. Praesent et consequat risus, in ullamcorper orci. 
                            Cras eu tellus non enim commodo pharetra in et leo. Donec consequat, neque id porttitor bibendum, mauris odio lacinia ante, at hendrerit sapien lectus eu libero. 
                            Quisque nulla nibh, vulputate in faucibus eget, rhoncus nec quam. 
                            Donec volutpat enim turpis, id tincidunt sem elementum commodo. Donec ut massa lorem.
                        </p>
                    </div>
                    
                    <aside id="aside">
                        <h2>Datos</h2>
					    <section>
                            <?php 
                                echo "<p> Contraseña: ".$_SESSION['UserData'][0]."</p>";
                                echo "<p> Telefono: ".$_SESSION['UserData'][1]."</p>";
                                echo "<p> Correo: ".$_SESSION['UserData'][2]."</p>";
                            ?>
                        </section>
				    </aside>

                    
                </article>
            </main>


            <?php require_once("includes/footer_inc.php")?>
            
        </div>
    </body>
</html>