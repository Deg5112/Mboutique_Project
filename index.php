<?php
require_once('settings.php');
if(!empty($_GET['page'])){
    if(isset($linkArray[$_GET['page']]['url'])){
        $page = $linkArray[$_GET['page']]['url'];
    }else{
        $page = $linkArray['welcome']['url'];
    }

}else{
    $page = $linkArray['welcome']['url'];
}
?>

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
            include($page);
        ?>

    </main>
<!--main end-->
<!--list section-->


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


