<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Contact Us </title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <div class="container">
        <?php
            include_once("../header.php");
        ?>
            <div class="container-content">
            <h1> Cotact Us </h1>
                <div class="cantent">
                    <div class="col-6">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.013834999078!2d104.88089491429264!3d11.55086504758067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951add5e2cd81%3A0x171e0b69c7c6f7ba!2sPasserelles%20Num%C3%A9riques%20Cambodia%20(PNC)!5e0!3m2!1sen!2skh!4v1567489491490!5m2!1sen!2skh"
                                width="500" height="225" frameborder = "0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                    <div class="col-6">
                        <form action = "#">
                            <label for = ""> Email </label>
                            <input type = "text" name = "email" id = "email"><br>
                            <br>
                            <label for = ""> Message </label>
                            <textarea name = "message" cols = "28" rows = "7"></textarea>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container-footer">
                <?php
                    include_once("../footer.php")
                ?>
            </div>
        </div>
    </div>
    </div>
</body>
</html>