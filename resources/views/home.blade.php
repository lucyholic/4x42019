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
                        Using advances in modern web/mobile app design, our application promotes youth literacy by taking the idea of a library towards a modern approach that pushes families to meet new people in the process.
                    </div>
                </section>

                <section class="col-12 col-md-4 about-card">
                    <img src="./images/about-img2.jpg" class="img-fluid" width="50%" height="50%">
                    <h4 class="about-card-title">Community</h4>
                    <div class="card-info">
                        The core of our idea centers around the ability to put up books for exchange on the app, as well as searching for books in the community to pick up. Children’s books can be expensive to continually purchase, and this gives a variety to parents in the community. It is also a great outlet for parents to cycle out books that are below their child’s reading comprehension level for a title that is just the right level of challenging.
                    </div>
                </section>

                <section class="col-12 col-md-4 about-card">
                    <img src="{{ asset('images/goal-image.png') }}" class="img-fluid" width="50%" height="48%">
                    <h4 class="about-card-title">Goals</h4>
                    <div class="card-info">
                        BetterBookShare will be a leader in our youth reading initiative. We are confident of this for many reasons such as its user/family friendly design, goal oriented approach to encouraging youth to read more often, use of in-app tips/tricks supporting literacy and its importance to thinking processes.
                    </div>
                </section>

                </div>
            </div>
        </div>

    </body>
</html>
