<?php
session_start();

if (isset($_SESSION['username'])) {
    echo '<div class="login">' . $_SESSION['username'] . '</div>';
} else {
    echo '<div class="login" id="login">请登录</div>';
}

?>

<html>

<head>
    <title>NoteRoom</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://alphardex.github.io/static/aqua.min.css" />

    <link rel="shortcut icon" href="mall.ico" />

    <link href="school.css?v=0004" rel="stylesheet" type="text/css" />
    <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="b0">
        <ul class="nav justify-content-end">
            <li class="nav-item"><a class="nav-link" href="../login/">登录</a></li>
            <li class="nav-item"><a class="nav-link" href="../signup/">注册</a></li>
            <li class="nav-item"><a class="nav-link" href="../user/">账户</a></li>
            <li class="nav-item"><a class="nav-link" href="../help/">教程</a></li>
        </ul>
    </div>
    <div class="b10">
        选择一个Room
    </div>
    <div class="b20 row">
        <div class="col-md-2">
            <div class="room">
                Room1

            </div><br>
            <div class="room">
                Room1

            </div>
        </div>
        <div class="col-md-2">
            <div class="room">
                Room1

            </div><br>
            <div class="room">
                Room1

            </div>
        </div>
        <div class="col-md-2">
            <div class="room">
                Room1

            </div><br>
            <div class="room">
                Room1

            </div>
        </div>
        <div class="col-md-2">
            <div class="room">
                Room1

            </div><br>
            <div class="room">
                Room1

            </div>
        </div>
        <div class="col-md-2">
            <div class="room">
                Room1

            </div><br>
            <div class="room">
                Room1

            </div>
        </div>
        <div class="col-md-2">
            <div class="room">
                Room1

            </div>
            <br>
            <div class="room">
                Room1

            </div>
        </div>
        
        
    </div>
    <script type="text/javascript" src="school.js"></script>
</body>

</html>