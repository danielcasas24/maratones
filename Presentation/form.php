<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Inscripci&oacute;n Marat&oacute;n de programaci&oacute;n</title>
        <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
        <script src="css/bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/fontawesome/css/fontawesome-all.min.css">
    </head>
    <body>
        <?php
            include('HTML_Object.php');
        
            $html = new HTML_Object();
            //echo $html->h1("Hola mundo");
            echo "<div class=\"container\">";
                echo "Hola mundo";
            echo "</div>";
            
        ?>
        <!-- Material form subscription -->
        <div class="container"><form>
            <p class="h4 text-center mb-4">Subscribe</p>

            <!-- Material input text -->
            <div class="md-form">
                <i class="fa fa-user prefix grey-text"></i>
                <input type="text" id="materialFormSubscriptionNameEx" class="form-control">
                <label for="materialFormSubscriptionNameEx">Your name</label>
            </div>

            <!-- Material input email -->
            <div class="md-form">
                <i class="fa fa-envelope prefix grey-text"></i>
                <input type="email" id="materialFormSubscriptionEmailEx" class="form-control">
                <label for="materialFormSubscriptionEmailEx">Your email</label>
            </div>

            <div class="text-center mt-4">
                <button class="btn btn-outline-info" type="submit">Send<i class="fa fa-paper-plane-o ml-2"></i></button>
            </div>
        </form></div>
        <!-- Material form subscription -->
    </body>
</html>
