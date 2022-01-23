<?php
//array for navbar elements/attributes for use below
$navBarArr = array(
    array("index.php", "Home"),
    array("blogPage.php", "Blog"),
    array("", "About"),
    array("", "Contact"),
    array("", "Gallery"),
    array("logout.php", "Log Out"),
    array("loginpage.php", "Log In")
); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="style.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-light">
                <div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="true" aria-label="Toggle navigation">
                        <span>Menu</span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <?php 
                            //display navbar - DRY code
                            foreach($navBarArr as $section){
                                if($section[1] === "Log Out"){
                                    if(isset($_SESSION['user_id'])){
                                        echo '<li class="nav-item"> <a class="nav-link" aria-current="page" href="'. $section[0] .'">'. $section[1] .'</a> </li>';
                                    }else{
                                        continue;
                                    }
                                    break;
                                }
                                echo '<li class="nav-item"> <a class="nav-link" aria-current="page" href="'. $section[0] .'">'. $section[1] .'</a> </li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </body>
</html>