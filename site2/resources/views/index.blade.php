<!doctype html>
<html lang="en" style="box-sizing: border-box; padding: 0; margin: 0">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body style="box-sizing: border-box; padding: 0; margin: 0;">
    <div class="consultation" style="font-family: 'Source Sans Pro', serif; font-size: 20px; color: white; position: fixed;
                padding-top: 20px; background-color: #1E1E20; width: 250px; height: 330px; left: 0; top: 40%; z-index: 8; text-align: center;">
    @yield('form_consultation')
    </div>

    <div style="box-sizing: border-box; width: 100%; height: 350px; background-color: #4a5568; font-family: Lato, serif; color: white; text-align: center; line-height: 200px; font-size: 46px;" >
        Framework Laravel<br>
        <a style="padding-right: 80px" href="/">Home</a>
        <a style="padding-right: 80px" href="/users">Users</a>
        <a style="padding-right: 80px" href="/about">About Laravel</a>
        @yield('header')
    </div>

    <div style="display: flex; justify-content: center; align-items: center; margin-top: 40px">
            @yield('main_content')
    </div>

</body>
<footer style="position: fixed; bottom: 0; width: 100%; height: 100px; background-color: #cbd5e0; font-family: 'Fira Code', serif; color: darkslategray; line-height: 60px;">
    © All rights are reserved
</footer>
</html>
