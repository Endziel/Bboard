<?php
session_start();
if(!isset($_SESSION['email'])) {
    header("location:logout");
}
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type = "text/css" href="public/css/styleNavMenu.css">
    <link rel="stylesheet" type = "text/css" href="public/css/styleMyGames.css">

    <title>myGames</title>
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
            <section class="games">
                <div id="game-1">
                    <img src="public/img/uploads/catan.jpg">
                    <div>
                        <p>description</p>
                    </div>
                </div>
            </section>
        </main>
</div>

</body>
</html>