<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>{{ config('app.name') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="collapse navbar-collapse">
            @include('layouts.rightnavbar')
        </div>
        </nav>

        <div class='container'>
            <div class="container-fluid" style="background-color: rgb(37, 229, 243)">
                <div class="welcome-container">
                <div class="text-center">
                    <h1 class="welcome-title">Better Book Share</h1>
                    <img src="{{ asset('images/welcomepage-photo.png') }}" alt="Cartoon girl reading a book" width="35%" height="35%">
                    <div class="photo-creds">
                    <a href="http://www.freepik.com">Photo designed by iconicbestiary / Freepik</a>
                    </div>
                    <div class="welcome-text">
                    Better Book Share is inspired by the local little libraries that families are taking part of.
                    </div>
                </div>
                </div>
            </div>  

            <div class="container-fluid" style="background-color: white">
                <div class="row about-section">

                <section class="col-12 col-md-4 about-card">
                    <img src="{{ asset('images/about-img1.jpg') }}" class="img-fluid" width="50%" height="55%">
                    <h4 class="about-card-title">Literacy</h4>
                    <div class="card-info">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime consequuntur quasi numquam eos quaerat, praesentium consequatur cumque enim aliquam debitis sed non! Nostrum illum officiis obcaecati quaerat aperiam praesentium distinctio molestiae quibusdam, fuga excepturi beatae quam ut alias, est necessitatibus?
                    </div>
                </section>

                <section class="col-12 col-md-4 about-card">
                    <img src="./images/about-img2.jpg" class="img-fluid" width="50%" height="50%">
                    <h4 class="about-card-title">Community</h4>
                    <div class="card-info">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi repellendus fugiat repudiandae consectetur incidunt voluptate, sed blanditiis id, officia architecto, natus dolorum nesciunt quae quod commodi doloremque eaque veritatis quam. Quas quae quod quaerat vitae distinctio tempore, quisquam numquam. Provident.
                    </div>
                </section>

                <section class="col-12 col-md-4 about-card">
                    <img src="#">
                    <h4 class="about-card-title">Goals</h4>
                    <div class="card-info">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae fugit neque aliquam veniam nemo fugiat suscipit ipsam, tempore doloremque? Aliquid ipsa iste perspiciatis veniam odio delectus hic nostrum, eveniet amet eum laudantium exercitationem placeat atque necessitatibus a nihil blanditiis quisquam.
                    </div>
                </section>

                </div>
            </div>
        </div>

    </body>
</html>
