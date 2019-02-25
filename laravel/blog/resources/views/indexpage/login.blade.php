<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="indexpage/css/form.css" rel="stylesheet" type="text/css">
    <style>
        #logo {
            margin-left: auto;
            margin-right: auto;
            display: block;
            padding-top: 100px;
        }
    </style>
</head>
<body>

<div class="container">
    <a href="/"><img id="logo" src="indexpage/img/logo.png" alt=""></a>
    <div class="row">
        <form id="login">
            <h1>Log In</h1>
            <fieldset id="inputs">
                <input id="username" type="text" placeholder="Username" autofocus required>
                <input id="password" type="password" placeholder="Password" required>
            </fieldset>
            <fieldset id="actions">
                <input type="submit" id="submit" value="Log in">
                <a href="">Forgot your password?</a><a href="/register_page">Register</a>
            </fieldset>
        </form>
    </div>
</div>
</body>
</html>
