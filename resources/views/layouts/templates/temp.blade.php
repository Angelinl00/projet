<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="temp.css"> --}}
    @vite([
        'resources/css/temp.css'
        ])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
</head>
<body >
    <header class="topbar">
        <div class="topbar-div">

            <a href="#" class="g">HighSchool</a>
            <a href="#" class="active">Home</a>
            <a href="#">A Propos</a>
            <a href="#">Actualités</a>
            <a href="#">Evènement</a>
            <a href="#">Contact</a>
            <a href="#" class="topbar-c"><i class="far fa-user"></i>Connexion</a>

        </div>
    </header>

<div class="container">
    <!-- Container -->

    @yield('content')


</div>

<footer>
    <div class="h">
        <a href="#" >HighSchool</a>
    </div>

    <nav class="fbar"> <br>
        <a href="#"><b>Menu</b></a><br><br>
        <a href="#">Home</a> <br><br>
        <a href="#">A Propos</a> <br><br>
        <a href="#">Actualités</a><br><br>
        <a href="#">Evènement</a> <br><br>
        <a href="#">Contact</a>
    </nav>


    <nav class="fobar">
        <a href="#"><b>Contenu</b>   </a> <br><br>
        <a href="#">Termes et conditions</a> <br><br>
        <a href="#">A Propos</a> <br><br>
        <a href="#">Politiques de confidentialité</a><br><br>
        <a href="#">Mention légale</a> <br><br>
        <a href="#">Politiques de cookies</a>
    </nav><br><br>

    <div class="c"><h4>2023 par Université HighSchool Crée avec SLICmart</h4></div>

</footer>
</body>
</html>
