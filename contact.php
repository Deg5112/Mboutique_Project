<?php

if(count($_POST)===0){
  $pageToInclude = 'form.php';
}else{
$pageToInclude = 'thanks.php';
}
?>
<!--include -->
<div class="container">
    <main class="main-contact"><!--main begin-->
        <div class="row">

            <section class='col-md-4'>
                <h2>Visit us!</h2>
                <ul>
                    <li>Monday - Friday | 10am-9pm</li>
                    <li>Saturday | 10am-8px</li>
                    <li>Sunday | 11am-7pm</li>
                    <li>Close Thanksgiving Day, Christmas Day and Easter Day</li>
                </ul>

                <address>1625 Post St<br>
                    San Francisco CA 94115<br>

                    <p>949.800-3111</p>
                </address>

                <p><a href="#">orders@mboutique.com</a></p>

                <p>Send your questions comments and flavor suggestion or place an order!</p>
            </section>

            <div class="col-md-4">
<!--get this form out of here when something has been submitted-->
                <?php
                    include($pageToInclude);
                ?>

            <div class="col-md-2 hidden-xs hidden-sm text-center">
                <img src="assets/images/macarons-image.png">
            </div>



        </div>
    </main>
</div>

