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
    <link rel="stylesheet" type = "text/css" href="public/css/styleSearch.css">

    <script src="https://kit.fontawesome.com/06bfc23a09.js" crossorigin="anonymous"></script>

    <title>search</title>
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
<!--        --><?php
//        echo "search";
//        ?>

        <div class="wrapper">
            <div class = "Time">
                <i class = "fa-regular fa-clock fa-2xl"></i>
                <p>Ilość czasu</p>
            </div>

            <div class="container">

                <div class="slider-track"></div>
                <input type="range" min = "1" max = "240" value="30" id="slider-1" oninput="slideOne()">
                <input type="range" min = "1" max = "240" value="60" id="slider-2" oninput="slideTwo()">
<!--                <input type="range" min = "1" max = "1" value="1" id="slider-3">-->
<!--                <input type="range" min = "240" max = "240" value="240" id="slider-4">-->



            </div>
            <div class = "values">
                <span id = "range1">
                    0'
                </span>
                <span>&dash;</span>
                <span id = "range2">
                    240'
                </span>
            </div>

        </div>
        <script type="text/javascript" src = "./public/js/doubleSliderSearchTime.js">  </script>

        <div class = "dropDownMenus">
            <select id = "dropDown-1">
                <option value="India">India</option>
                <option value="US">US</option>
                <option value="UK">UK</option>
                <option value="Canada">Canada</option>
                <option value="Germany">Germany</option>
            </select>
        </div>

    </main>
</div>

</body>
</html>