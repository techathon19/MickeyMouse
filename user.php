<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
        .center{
            margin-left: 50px;
        }
        .left{
            margin-left: 150px;
        }

        .demo{
            height: 100%;
            width:100%;
        }
        .full{
            height: 100%;
            width:100%;
        }
        .fit-image{
            width: 100%;
            object-fit: cover;
            /* only if you want fixed height */
        }
        .login-details{
            padding-left: 20px;
            font-family: 'Ubuntu',sans-serif;
            color: darkslategray;

        }

        .login-details-pass{
            margin-top: 20px;
            padding-left: 20px;
            font-family: 'Ubuntu',sans-serif;
            color: darkslategray;

        }

        .pad{
            padding-top: 70px;
            margin-left: 50px;

        }
        .pad-1{
            padding-top: 30px;
            margin-left: 50px;

        }


        .btn-outline-dark:hover, .btn-outline-dark:focus, .open>.dropdown-toggle.btn-primary {
            color: #fff;
            background-color: #6c63ff;

        }
        .color{
            background-color: #6c63ff;
            color: #fff;
        }
        .color-1{
            background-color: #D3D3D3;
            color: #fff;
        }

    </style>
    <title>Hello, world!</title>
</head>
<body>
<div class="container-fluid">
    <nav class="navbar navbar-expand-md color fixed-top">
        <a class="navbar-brand" href="#"><img class="float-left" src="img.jpg" width="100px" height="100px"></a>
        <ul class="navbar-nav ">

            <li class="nav-item center left ">
                <a class="nav-link text-white" href="#" >Home</a>
            </li>
            <li class="nav-item center">
                <a class="nav-link text-white" href="#about">About</a>
            </li>
            <li class="nav-item center">
                <a class="nav-link text-white" href="#login">Login</a>
            </li>
            <li class="nav-item center">
                <a class="nav-link text-white" href="#signup">SignUp</a>
            </li>
            <li class="nav-item center">
                <a class="nav-link text-white" href="#contact">ContactUs</a>
            </li>

        </ul>
    </nav>
</div>

<div class="container-fluid">
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="event-1.jpg" alt="event" width="100%" height="650px" >
            </div>
            <div class="carousel-item">
                <img src="event-2.jpg" alt="event" width="100%" height="650px">
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>
<br><br>

<div class="container-fluid" id="about">
    <h2 class="text-center" >About</h2>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nibh cras pulvinar mattis nunc sed blandit libero volutpat sed. Diam volutpat commodo sed egestas egestas fringilla phasellus faucibus scelerisque. Magna sit amet purus gravida. Est ullamcorper eget nulla facilisi etiam dignissim diam. Ultricies mi quis hendrerit dolor magna eget. Neque laoreet suspendisse interdum consectetur libero id faucibus. Eleifend mi in nulla posuere sollicitudin aliquam ultrices. Egestas diam in arcu cursus euismod quis. Amet consectetur adipiscing elit duis tristique sollicitudin nibh. Arcu bibendum at varius vel pharetra vel turpis. Posuere sollicitudin aliquam ultrices sagittis orci a scelerisque purus. Leo integer malesuada nunc vel risus commodo viverra maecenas. Id leo in vitae turpis massa sed elementum tempus.

        Ipsum dolor sit amet consectetur adipiscing. Non blandit massa enim nec dui. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus accumsan. Arcu dictum varius duis at consectetur lorem donec massa. Lobortis feugiat vivamus at augue eget arcu dictum varius duis. Fringilla ut morbi tincidunt augue interdum velit euismod in. Non odio euismod lacinia at quis risus sed vulputate. Aliquet nibh praesent tristique magna sit amet purus. Quis imperdiet massa tincidunt nunc pulvinar sapien. Ipsum dolor sit amet consectetur adipiscing elit duis.

    </p>

</div>
<div class="container-fluid bg-light">
    <h2 class="text-center text-dark" id="login">Login</h2><br><br>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <img src="authentication.svg" class="img-responsive w-3 fit-image">

        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <h3 class="text-secondary text-center">Welcome back Member!</h3>

            <form class="form-inline" name="login" method="post" action="login_check.php">
                <div class="pad">

                    <p class="login-details">USERNAME</p>

                    <input type="text" placeholder="example@.com" name="uname" class="border border-dark form-control">
                    <p class="login-details-pass">PASSWORD</p>
                    <input type="password" name="pass" class="border border-dark form-control" placeholder="Enter password"> <br><br>
                    <input type="submit" value="SIGN IN" class="btn btn-outline-dark ">
                </div>

            </form>
        </div>
    </div>
</div>
<br><br>
<div class="container-fluid bg-light" >
    <h2 class="text-center text-dark" id="signup">SignUp</h2><br><br>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <img src="login.svg" class="img-responsive fit-image">

        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <h3 class="text-secondary text-center">Welcome to BookMyHall!</h3>
            <form class="form-inline" action="new_user.php" method="post">
                <div class="pad-1">
                    <p class="float-left">FIRST NAME</p> <br><br>

                    <input type="text" placeholder="john" name="fname" class="border border-dark form-control"> <br><br>
                    <p class="float-left">LAST NAME</p> <br><br>

                    <input type="text" placeholder="Mendis" name="lname" class="border border-dark form-control"> <br><br>

                    <p class="float-left">CONTACT NUMBER</p> <br><br>

                    <input type="number" placeholder="+91-xxxxxxxxxx" name="contact" class="border border-dark form-control"> <br><br>
                    <p class="float-left">EMAIL</p> <br><br>

                    <input type="email" placeholder="example@gmail.com" name="email" class="border border-dark form-control"> <br><br>

                    <p class="float-left">PASSWORD</p> <br><br>

                    <input type="password" placeholder="Password" name="pass" class="border border-dark form-control"> <br><br>


                    <input type="submit" value="REGISTER" class="btn btn-outline-dark ">
                </div>

            </form>
        </div>

    </div>

</div>
<br><br>
<div class="container-fluid color-1" id="contact">
    <p>Ac tincidunt vitae semper quis. Ultrices vitae auctor eu augue ut lectus arcu bibendum at. Accumsan sit amet nulla facilisi morbi tempus iaculis. Tortor id aliquet lectus proin nibh nisl. Amet commodo nulla facilisi nullam vehicula ipsum a. Urna molestie at elementum eu facilisis sed odio. Diam vel quam elementum pulvinar etiam non quam. Vulputate enim nulla aliquet porttitor lacus luctus accumsan. Mi eget mauris pharetra et ultrices neque. Egestas sed sed risus pretium quam vulputate dignissim. Venenatis tellus in metus vulputate eu scelerisque felis imperdiet. Tellus integer feugiat scelerisque varius morbi enim nunc. Quis ipsum suspendisse ultrices gravida dictum. Faucibus ornare suspendisse sed nisi. Luctus venenatis lectus magna fringilla urna porttitor rhoncus dolor. Pulvinar pellentesque habitant morbi tristique. Pulvinar etiam non quam lacus suspendisse faucibus interdum posuere lorem.</p>

</div>

</body>
</html>
