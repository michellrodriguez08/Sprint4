<html>
<head>
    <title>Administration Login - Walnut Ridge Wedding Styles</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="reserve_styles.css">
    <meta name="robots" content="noindex, nofollow">
</head>

<body>
<header>
    <br>
    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Administration Login</h1><br>
            </div>
        </div>
</header>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">


            <form class="center" id="form_login" action="admin.php"  method="post" onsubmit="return validateForm()">
                <label for="username"><b>Username</b></label><br>
                <input type="text" id="uname" name="uname"  required placeholder="Enter Username"><br>
                <label for="password"><b>Password</b></label><br>
                <input type="password" id="password" name="password"  required placeholder="Enter Password"><br>

                <br>
                <input type="submit" id="button">
                <div hidden="hidden"  id="error" class="error"></div><br>

            </form>
        </div>
    </div>

    <script src="admin_login_js.js"></script>

</body>
</html>


