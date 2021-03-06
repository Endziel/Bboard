<?php
if (!session_status() == PHP_SESSION_ACTIVE){
    session_start();
}
if(!isset($_SESSION)) {
    header("location:logout");
}
?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" type = "text/css" href="public/css/styleHome.css">
    <link rel="stylesheet" type = "text/css" href="public/css/styleNavMenu.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>HOME</title>
</head>

<body>
    <div class="base-container">
        <nav class = "navigate">
            <div class ="logo">
                <img src="public/img/bboardLogoCut.png">
            </div>


            <div class = "buttons" id = "navMenu">
                <form class = "myGames" action = "myGames" method = "GET">
                    <button>Moje gry</button>
                </form>
                <form class = "search" action = "search" method = "GET">
                    <button>Wyszukaj</button>
                </form>
                <form class = "whereToBuyGames" action = "whereToBuyGames" method = "GET">
                    <button>Gdzie kupić grę</button>
                </form>
                <form class = "logout" action="logout" method="POST">
                    <button>Wyloguj</button>
                </form>
            </div>

            <div class = "burger">
                <button>MENU</button>
            </div>


            <script type="text/javascript" src = "./public/js/hamMenu.js">  </script>
        </nav>
        <main>
            <div class="text-suggested">
                <p>Propozycje na dziś:</p>
            </div>
            <section class = "suggested">
                <div id = "suggest-1">
                    <img src="public/img/uploads/catan.jpg">
                    <p>description</p>
                </div>
                <div id = "suggest-2">
                    <img src="public/img/uploads/catan.jpg">
                    <p>description</p>
                </div>
                <div id = "suggest-3">
                    <img src="public/img/uploads/catan.jpg">
                    <p>description</p>
                </div>


            </section>

        </main>
    </div>

</body>