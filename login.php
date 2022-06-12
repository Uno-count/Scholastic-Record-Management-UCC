<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UCC|SRM</title>
    <link rel="icon" href="./assets/image/csd.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.css">
</head>

<body class="login mt-5 pt-5">
    <!-- partial:index.partial.html -->
    <div class="box-form">
        <div class="left">
            <div class="overlay">
                <h1>Hello Yusisista.</h1>
                <p>A quality higher education institution imbued with relevant knowledge, skills, and values for the attainment of the community driven, industry
                    sensitive, environmentally concious, resilient and globally competitive, Acadmically focused citizens for the service of Caloocan City.
                </p>
                <!-- <span>
                    <p>login with social media</p>
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Login with Twitter</a>
                </span> -->
            </div>
        </div>


        <form class="form-horizontal" method="post" action="coor_function.php">
            <div class="right">
                <h3>Welcome</h3>
                <h3>Coordinator</h3>


                <div class="inputs">
                    <input type="text" name="uname" class="form-control" id="inputEmail3" placeholder="UserName" required>
                    <br>
                    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" required>
                </div>

                <br><br>
                <br>

                <button type="submit" name="login" class="btn btn-success btn-labeled pull-right">Sign in<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                <?php
                if (@$_GET['Empty'] == true) {
                ?>
                    <div class="alert-danger alert-custom text-center" style="margin-top:5px; margin-left: 10px; width: 95%;"><?php echo $_GET['Empty'] ?></div>
                <?php
                }
                ?>


                <?php
                if (@$_GET['Invalid'] == true) {
                ?>
                    <div class="alert-danger alert-custom text-center" style="margin-top:5px; margin-left: 10px; width: 95%;"><?php echo $_GET['Invalid'] ?></div>
                <?php
                }
                ?>
            </div>
        </form>

    </div>
    <!-- partial -->

</body>

</html>