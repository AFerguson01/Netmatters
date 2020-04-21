<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "all-pages/head.php" ?>
</head>
<body>
    
        <!-- Pushy Menu -->
        <nav class="pushy pushy-right" data-focus="#first-link">
            <?php include "all-pages/sidenav.php"; ?>
        </nav>

        <!-- Site Overlay -->
        <div class="site-overlay"></div>

        <!-- Content -->
        <div id="container">

            <header>
                <?php include "all-pages/mainnav.php";  ?>
            </header>

            <div class="contact-form">
                <h1>Contact Us</h1>
                <form action="contact-process.php" method="POST">

                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

                <label for="phone">Phone Number (optional)</label>
                <input type="text" id="phone" name="phone" placeholder="07123456789">

                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Write something.." style="height:200px" required></textarea>

                <input type="submit" value="Submit">

                </form>

                <?php 
                    $fullUrl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    if (strpos($fullUrl, "valid=firstError") == true){
                        echo "<h3 class='errormsg'>Invalid First Name. Only letter and white spaces are allowed!</h3>";
                    }
                    else if (strpos($fullUrl, "valid=lastError") == true){
                        echo "<h3 class='errormsg'>Invalid Last Name. Only letter and white spaces are allowed!</h3>";
                    }
                    else if (strpos($fullUrl, "valid=phoneError") == true){
                        echo "<h3 class='errormsg'>Invalid Phone Number. Please try again.</h3>";
                    }
                    else if (strpos($fullUrl, "valid=messageError") == true){
                        echo "<h3 class='errormsg'>Invalid Message. Only alpha-numeric characters are allowed!</h3>";
                    }
                    else if (strpos($fullUrl, "valid=success") == true){
                        echo "<h3 class='succmsg'>Submission Successful!</h3>";
                    }
                ?>
            </div>

        </div>

        <?php include "all-pages/scripts.php"?>

</body>
</html>