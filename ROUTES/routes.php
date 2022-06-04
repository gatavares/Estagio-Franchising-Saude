<?php 

if(isset($_GET['p'])){
    $pagina = $_GET['p'];

    if($pagina == "home")
        include('CONTENT/PAGES/home.php');


    // else if($pagina == "login")
    //     include('CONTENT/PAGES/login.php');
    // else if($pagina == "registo")
    //     include('CONTENT/PAGES/registo.php');
    // else if($pagina == "logout")
    //     include('CONTENT/PAGES/logout.php'); 
    else
        include('CONTENT/PAGES/404.php');
}else{
    include('CONTENT/PAGES/home.php');
}