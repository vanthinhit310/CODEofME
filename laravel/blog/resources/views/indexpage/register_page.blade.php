<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng kí</title>
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
        <form id="reg">
            <h1>Sign Up</h1>
            <fieldset id="inputs">
                <input id="name" type="text" placeholder="Your name" autofocus required>
                <input id="username" type="text" placeholder="Username" autofocus required>
                <input id="email" type="text" placeholder="Your email" autofocus required>
                <input id="password" type="password" placeholder="Password" required>
            </fieldset>
            <fieldset id="actions">
                <input type="submit" id="submit" value="Register">
                <a href="/login_page">Login</a>
            </fieldset>
        </form>
    </div>
</div>
</body>
</html>
