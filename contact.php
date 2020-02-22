<!DOCTYPE html>
<html lang="en">

<head>
     <link rel="apple-touch-icon" sizes="57x57" href="/favicon.ico">
        <link rel="apple-touch-icon" sizes="60x60" href="/favicon.ico">
        <link rel="apple-touch-icon" sizes="72x72" href="/favicon.ico">
        <link rel="apple-touch-icon" sizes="76x76" href="/favicon.ico">
        <link rel="apple-touch-icon" sizes="114x114" href="/favicon.ico">
        <link rel="apple-touch-icon" sizes="120x120" href="/favicon.ico">
        <link rel="apple-touch-icon" sizes="144x144" href="/favicon.ico">
        <link rel="apple-touch-icon" sizes="152x152" href="/favicon.ico">
        <link rel="apple-touch-icon" sizes="180x180" href="/favicon.ico">
        <link rel="icon" type="image/ico" sizes="192x192" href="/favicon.ico">
        <link rel="icon" type="image/ico" sizes="32x32" href="/favicon.ico">
        <link rel="icon" type="image/ico" sizes="96x96" href="/favicon.ico">
        <link rel="icon" type="image/ico" sizes="16x16" href="/favicon.ico">
    <link rel="manifest" href="manifest.json">
    <meta name="msapplication-TileColor" content="#191919">
    <meta name="msapplication-TileImage" content="ms-icon-144x144.png">
    <meta name="theme-color" content="#191919">
    <meta charset="UTF-8">
    <title>E-Cell GLAU | Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Links -->
    <link rel="stylesheet" href="assets/contact_style.css">
    <!--    fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <style>


    </style>
</head>

<body>
<?php include "navbar.php" ?>
    <div class="top_banner">

        <div class="logo_holder">
            <img src="images/E-Cell%20Logo%20Black.png" alt="">
            <h3 class="slogan"> <span style="color: #fff;">Contact </span>US </h3>
            <a href="https://www.gla.ac.in/ecell/"><button onclick="open_register()" id="signup_button_nav" class="bck_button_for_founder">BACK</button></a>
        </div>

    </div>


    <div class="info_holder">
        <div class="about_heading_holder" style="position:relative;">
            <h3 class="slogan_about" style="margin-top:15px;">CONTACT US </h3>


        </div>

    </div>

    <div class="holder_for_dertails">
        <div class="left_details">
            <div class="about_heading_holder" style="position:relative;">
                <h3 class="slogan_about" style="margin-top:15px;">Contact Details </h3>
                <p class="text_content_for_about_page"> GLA University, Mathura.<br>

17km Stone, NH-2, Mathura-Delhi Road, <br>
Chaumuhan Mathura,<br> Uttar Pradesh 281406 <br>

                   </p>


            </div>
        </div>
        <div class="right_form">
            <div class="about_heading_holder" style="position:relative;">
                <h3 class="slogan_about" style="margin-top:15px;">Contact Form</h3>
            </div>
            <form id="form_contact" class="form_register" action="contact_form_handle.php" method="post">
                <input class="short" type="text" placeholder="First Name" autocomplete="given-name" name="first_name" id="fist_name" required>
                <input class="short" type="text" placeholder="Lastname" autocomplete="family-name" name="last_name" id="last_name" required>
                <input type="email" placeholder="Email" autocomplete="email" name="email" id="email_add" required>
                <input type="text" placeholder="Contact Number" autocomplete="tel" name="phonenumber" id="phonenumber_check" required>
                <input type="text" placeholder="Message" name="message" id="message" required>

                <div>
                    <div class="round">
                        <input type="checkbox" id="myCheck" onclick="myFunction()" />
                        <label for="myCheck"></label>
                    </div>
                    <p style="color: #191919; margin: 0px;" id="text">Select the Checkbox above to agree to the Terms of use And the privacy Policy</p>
                </div>
                <input id="submit_button" type="submit">
            </form>
        </div>
    </div>

    <script>
        var phone_number_token = 0;
        var button = document.getElementById("submit_button");
        button.disabled = true;
        button.style.opacity = "0.5";

        document.getElementById("phonenumber_check").addEventListener("keyup", phonenumber);

        function phonenumber() {
            var inputtxt = document.getElementById("phonenumber_check").value;
            var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
            if (inputtxt.match(phoneno)) {
                phone_number_token = 1
                document.getElementById("phonenumber_check").style.color = "green";
            } else {
                phone_number_token = 0
                document.getElementById("phonenumber_check").style.color = "red";
            }
        }

        function myFunction() {
            // Get the checkbox
            var checkBox = document.getElementById("myCheck");
            checkBox.checked == false;
            // Get the signup button
            var submit_button = document.getElementById("submit_button");
            submit_button.disabled = true;
            // If the checkbox is checked, display the output text
            if (checkBox.checked == true && phone_number_token == 1) {
                submit_button.disabled = false;
                submit_button.style.opacity = "1";
            } else {
                if (checkBox.checked == false || phone_number_token == 0) {
                    submit_button.disabled = true;
                    submit_button.style.opacity = "0.5";
                }

            }
        }

    </script>



   <?php

    include 'footer.php';

?>

</body>

</html>
