<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Портфолио-сайт</title>
    @section('styles')
        @vite(['resources/sass/app.scss'])
    @show
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body>
<header>
    <div class="container">
        <a href="index.php">logo</a>
        <div class="header-btns">
            <button>Изменить тему</button>
            <button>Вход для администратора</button>
        </div>
    </div>
</header>
<main>
    <section class="prime">
        <div class="container">
            <div class="prime-img">
                {{-- <img class="avatar" src="img/avatar.jpg" alt="avatar">--}}
                <img class="avatar" src="{{ asset('assets/img/avatar.jpg')}}" alt="avatar">
            </div>
            <div class="greeting">
                <h1>Имя Фамилия</h1>
                <h2 class="greeting-title">Профессия</h2>
                <p class="greeting-text">
                    Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Дороге, ipsum
                    использовало. Агентство которое грустный все предупредила! Пустился правилами страна заглавных, пор
                    маленький имеет возвращайся то журчит несколько путь.
                </p>
            </div>
        </div>
    </section>
    <div class="main-box">
        <div class="container">
            <section class="certificates">
                <h2 class="certificates-title">Сертификаты</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente maxime, reiciendis quibusdam
                    ipsum, exercitationem natus earum magnam soluta officiis aut commodi ipsa illo temporibus ad dicta
                    tempore itaque qui similique!
                </p>
            </section>
            <section class="portfolio">
                <h2 class="portfolio-title">Выполненные проекты</h2>
            </section>
            <section class="competence">
                @section('competencies')
                    <x-blocks.competencies></x-blocks.competencies>
                @show
            </section>
            <section class="calculator">
                <h2 class="portfolio-title">Калькулятор</h2>
            </section>
        </div>
    </div>
    <section class="feedback">
        @section('feedback')
            <x-feedback.feedback></x-feedback.feedback>
        @show
    </section>
</main>
<footer>
    <div class="container">
        <p class="footer-text">Все права защищены</p>
        <button>Наверх</button>
    </div>
</footer>

</body>

</html>
