<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
   
    </style>
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>
<body>

<div id="includeHeader"></div>

    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>Contact Us for any query. Stay Connected</p>
        </div>
    <div class="container">
    <div class="contactInfo">
            <div class="box">
                <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                <div class="text">
                    <h3>Address</h3>
                    <p>2-11/A 5th floor Rachana Towers<br>opposite to Ocean-Pearl Hampankatta Managlore ,<br> Karnataka</p>
                </div>
                </div>
            <div class="box">
                <div class="icon"><i class="fa-solid fa-phone-volume"></i></div>
                <div class="text">
                    <h3>Phone</h3>
                    <p>8317302475</p>
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa-regular fa-envelope"></i></div>
                <div class="text">
                    <h3>Email</h3>
                    <p>homeservices@gmail.com</p>
                </div>
            </div>
    </div>
   
    <div class="ContactForm">
        <form>
            <h2>Send Message</h2>
            <div class="inputBox">
                 <input type="text" name="" required="required">
                <span>Full Name</span>
            </div>

            <div class="inputBox">
                <input type="text" name="" required="required">
                <span>Email</span>
            </div>

            <div class="inputBox">
                <textarea required="required" id="txtarea"></textarea><br>
                <span>Type your Message....</span>
            </div>

            <div class="inputBox">
                <input type="submit" name="" value="send">
            </div>
        </form>
    </div>
    </div>
</section>
<script>
  
        $(function()
        {
            $("#includeHeader").load("../html/header.html");
        }
    );
    </script>
    <div id="includefooter"><?php include("footer.php"); ?></div>
</body>
</html>