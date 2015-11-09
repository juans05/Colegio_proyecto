<!DOCTYPE html>
<html>
    <head>
        <title>Sistema de Colegio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
        <div class="login-logo">
            <a href="index.html"><img src="#" alt=""/></a>
        </div>
        <h2 class="form-heading">login</h2>
        <div class="app-cam">
            <form>
                <input type="text" class="text" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}">
                <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
                <div class="submit"><input type="submit"  value="Login"></div>
            </form>
        </div>

    </body>
</html>
