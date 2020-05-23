<!DOCTYPE html >
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content ="ie=edge">
    <title>Main</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="{{asset('/css/main.css?'.date("Y-m-d H:i:s"))}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/13b4fcb406.js" crossorigin="anonymous"></script>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom box-shadow" id="Loyatheader">
        <img src="https://sun9-30.userapi.com/c206816/v206816008/b0096/v0eVwBMqN7M.jpg" width="50" height="50" class="d-inline-block align-top" alt="">
        <h5 class="my-0 mr-md-auto font-weight-normal">Развивающий центр знаний</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="/">Главная</a>
            <a class="p-2 text-dark" href="Services">Услуги</a>
            <a class="p-2 text-dark" href="news-main">Статьи</a>
            <a class="p-2 text-dark" href="Personal">О нас</a>
            <a class="p-2 text-dark" href="login">Войти</a>
        </nav>
    </div>
</head>
<body>
@yield('section-main')
@yield('Serviceinfo')
@yield('Schoolinfo')
@yield('EGE')
@yield('PersonalInfo')
@yield('news-show')
@yield('news-main')
@yield('login')
@yield('register')
@yield('home')
<div class="container-fluid p-0 justify-content-center">
    <div class="container row">
        <div class="col-12">

        </div>
    </div>
</div>
</body>
<footer class="container-fluid " id="footer">
    <div class="row d-flex">
    <div class="col-lg-4 col-md-4 col-sm-12 footer-item-block">
            <h5>Адресс</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Ермака 103</a></li>
            </ul>
        </div>
    <div class="col-lg-4 col-md-4 col-sm-12 footer-item-block">
            <h5>Номер</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">777</a></li>
            </ul>
        </div>
        <div class="col-4-lg-4 col-md-4 col-sm-12 footer-item-block">
            <h5>Мы в соц.сетях</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" target="_blank" href="https://vk.com/club93492308"><i class="fab fa-vk"></i></a></li>
                <li><a class="text-muted" target="_blank" href="https://www.instagram.com/centrznanie/?igshid=118ahmvtsko7c"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>

</footer>
</html>

