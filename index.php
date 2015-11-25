<!DOCTYPE html>
<html>
<head>
    <title>MBoutique</title>
    <meta name="description" content="Macarons and Gifts">
    <meta name="keywords" content="Macarons, Gifts">
    <meta name="author" content="David Goodman">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <!--jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    <?php

    include("checkdate.php");
    ?>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>
<body>

<div id="google_translate_element" class="navbar"></div>
<!--header-->
<header>
    <?php
    include('header.php');
    ?>
</header>

<!--jumbo-->
    <div id ='jumbo-wrapper'>
        <div class="jumbotron welcome-jumbotron">
        </div><!--jumbo end-->
    </div>
<div class="container">
<!--main-->
    <main class="main"><!--main begin-->
        <?php
        include('mainContent.php');
        ?>

    </main>
<!--main end-->
<!--list section-->
    <section class="list-section">
            <div class="row">

                    <div class="col-xs-6 col-sm-3 col-md-2">
                        <ul class="list-group">
                            <li><span>Monday</span><br>
                                15:00-16:00</li>
                            <li>chocolate <img src="assets/images/chocolate.png"></li>
                            <li class="last-item" id="wildcard1">Coconut<img src="assets/images/coconut.png"></li>
                        </ul>
                    </div>

                    <div class="col-xs-6 col-sm-3 col-md-2">
                        <ul class="list-group ">
                            <li><span>Tuesday</span><br>
                                14:00-15:00</li>
                            <li>violet cassis<img src="assets/images/violet-cassis.png"></li>
                            <li>green tea<img src="assets/images/passion-fruit.png"></li>
                        </ul>
                    </div>


                    <div class="col-xs-6 col-sm-3 col-md-2">
                        <ul class="list-group ">
                            <li ><span>Wednesday</span><br>
                                09:00-10:00</li>
                            <li>passion fruit<img src="assets/images/passion-fruit.png"></li>
                            <li class="last-item" id="wildcard2">vanilla<img src="assets/images/vanilla.png"></li>
                        </ul>
                    </div>



                    <div class="col-xs-6 col-sm-3 col-md-2">
                        <ul class="list-group">
                            <li><span>Thursday</span><br>
                                18:00-19:00</li>
                            <li>coffee<img src="assets/images/coffee.png"></li>
                            <li>pistachio<img src="assets/images/pistachio.png"></li>
                        </ul>
                    </div>



                    <div class="col-xs-6 col-sm-3 col-sm-offset-1 col-md-2 col-md-offset-0">
                        <ul class="list-group ">
                            <li><span>Friday</span><br>
                                11:00-12:00</li>
                            <li>raspberry<img src="assets/images/raspbery.png"></li>
                            <li class="last-item" id="wildcard3">lemon<img src="assets/images/lemon.png"></li>
                        </ul>
                    </div>


                     <div class="col-xs-6 col-sm-3 col-md-2">
                        <ul class="list-group ">
                            <li><span>Saturday</span><br>
                                13:00-14:00</li>
                            <li>rose<img src="assets/images/rose.png"></li>
                            <li>tiffany blue<img src="assets/images/tiffany-blue.png"></li>
                        </ul>
                    </div>



                    <div class="col-xs-6 col-xs-offset-3 col-sm-offset-0 col-sm-3 col-md-2">
                        <ul class="list-group ">
                            <li><span>Sunday</span><br>
                                10:00-11:00</li>
                            <li>caramel<img src="assets/images/caramel.png"></li>
                            <li class="last-item" id="wildcard4">almond<img src="assets/images/almond.png"></li>
                        </ul>
                    </div>
            </div>
    </section>
</div>

<!--footer-->
<footer class="">
    <?php
    include('footer.php');
    ?>
</footer>
<script src="javascript.js"></script>

</body>
</html>


