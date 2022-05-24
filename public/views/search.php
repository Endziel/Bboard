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
<form class = "searchForGames" action="searchForGames" method="POST">
        <div class="wrapper">
            <div class = "Time">
                <i class = "fa-regular fa-clock fa-3x"></i>
                <p>Ilość czasu</p>
            </div>

            <div class="container">

                <div class="slider-track"></div>
                <input type="range" min = "1" max = "240" value="30" id="slider-1" oninput="slideOne()" input name="low-slider">
                <input type="range" min = "1" max = "240" value="60" id="slider-2" oninput="slideTwo()" input name="high-slider">

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

        <div class = "dropDownMenus" action = "searchForGames" method = "POST">
            <div class = "numberOfPlayers">
                <div class = "icon-text">
                <i class = "fa-solid fa-user-plus fa-3x"></i>
                <p>Ilość graczy</p>
                </div>

                <select id = "dropDown-1" input name="players">
                    <?php for ($x = 1; $x <= 9; $x++){ ?>
                    {
                        <option value = <?= $x ?> > <?= $x ?> </option>
                    }
                    <?php } ?>
                    <option value="10">10+</option>


                </select>
            </div>

            <div class = "age">
                <div class = "icon-text">
                <i class="fa-solid fa-child-reaching fa-3x"></i>
                <p>Wiek najmłodszego z graczy</p>
                </div>


                <select id = "dropDown-2" input name="age">
                    <option value="3">3</option>
                    <option value="5">5</option>
                    <option value="7" selected>7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="18">18</option>

                </select>
            </div>

            <div class="difficulty">
                <div class = "icon-text">
                <i class = "fa-solid fa-fire fa-3x"></i>
                <p>Poziom trudności</p>
                </div>

                <select id = "dropDown-3" input name="difficulty">

                    <option value="Niski">Niski</option>
                    <option value="Średni" selected>Średni</option>
                    <option value="Wysoki">Wysoki</option>


                </select>


            </div>
        </div>


        <div class = "accept-button">
            <button type="submit">Akceptuj</button>
        </div>
    </div>


</div>
    </main>


</body>
</html>