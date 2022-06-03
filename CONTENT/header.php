<header class="header1">
    <div class="container-fluid bg-ghost mt-3 text-center">
        <div id="navInfos">
            <a id="email" href="#"><i id="emailIcon" class="fa-solid fa-envelope fa-xl"></i>porto@companhiasaude.com</a>
            <a id="phone" href="tel:+351919015631"><i id="phoneIcon" class="fa-solid fa-phone-volume fa-xl"></i>919015631</a>

            <b id="reg">Registe-se</b>
        </div>
    </div>
    <hr id="linha-horizontal">
</header>



<header class="header2">
    <div class="container-fluid bg-ghost">
        <div class="row">
            <div class="col">
                <img id="logotipo" src="ASSETS/logotipo.png" alt="Logotipo">
            </div>
            <div class="col text-end my-auto">
                <?php 
                // if(isset($_SESSION['tipoUtilizador'])){
                //     if($_SESSION['tipoUtilizador'] == 1)
                //         include('CONTENT/nav_admin.php');
                //     else if($_SESSION['tipoUtilizador'] == 2)
                //         include('CONTENT/nav_registado.php');
                //     else
                //         include('CONTENT/nav.php');
                // }
                // else
                    include('CONTENT/navbar.php');
                ?>
            </div>
        </div>
    </div>
    <hr id="linha-horizontal">
</header>
<main class="container p-3">