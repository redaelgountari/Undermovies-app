<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UnderMovie - Home</title>

    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">


    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body id="top">

    <!--
    - #HEADER
  -->

    <header class="header" data-header>
        <div class="container">

            <div class="overlay" data-overlay></div>

            <a href="{{ route('home') }}" class="logo">
                <img width="100px" src="{{ asset('image/home/logo.png') }}" alt="Filmlane logo">
            </a>

            <div class="header-actions">

                <button class="search-btn">
                    <ion-icon name="search-outline"></ion-icon>
                </button>

                <div class="lang-wrapper">
                    <label for="language">
                        <ion-icon name="globe-outline"></ion-icon>
                    </label>

                    <select name="language" id="language">
                        <option value="en">EN</option>
                        <option value="au">AU</option>
                        <option value="ar">AR</option>
                        <option value="tu">TU</option>
                    </select>
                </div>


            </div>

            <button class="menu-open-btn" data-menu-open-btn>
                <ion-icon name="reorder-two"></ion-icon>
            </button>

            <nav class="navbar" data-navbar>

                <div class="navbar-top">

                    <a href="{{ route('home') }}" class="logo">
                        <img src="{{ asset('image/home/logo.png') }}" width="100px" alt="Filmlane logo">
                    </a>

                    <button class="menu-close-btn" data-menu-close-btn>
                        <ion-icon name="close-outline"></ion-icon>
                    </button>

                </div>

                <ul class="navbar-list">

                    <li>
                        <a href="{{ route('home') }}" class="navbar-link">Home</a>
                    </li>

                    <li>
                        <a href="{{ route('films') }}" class="navbar-link">Movie</a>
                    </li>

                    <li>
                        <a href="{{ route('anime') }}" class="navbar-link">Anime</a>
                    </li>

                    <li>
                        <a href="{{ route('series') }}" class="navbar-link">Web Series</a>
                    </li>

                    <li>
                        <a href="{{ route('pricing') }}" class="navbar-link">Pricing</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="navbar-link">About</a>
                    </li>

                    <li>

                        <a href="{{ route('authentification') }}"><button class="btn btn-primary">Sign in</button></a>
                    </li>

                </ul>

                <ul class="navbar-social-list">

                    <li>
                        <a href="#" class="navbar-social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="navbar-social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="navbar-social-link">
                            <ion-icon name="logo-pinterest"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="navbar-social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="navbar-social-link">
                            <ion-icon name="logo-youtube"></ion-icon>
                        </a>
                    </li>

                </ul>

            </nav>

        </div>
    </header>





    <main>
        <article>

            <!--
        - #HERO
      -->
            @php
                $list = ['Hero7.jpg', 'Hero1.jpg', 'Hero3.jpg', 'Hero2.jpg', 'Hero0.jpg', 'Hero4.jpg', 'Hero5.jpg', 'Hero6.jpg'];
            @endphp

            <section id="hero" class="hero" style="background-image: url({{ asset('image/home/' . $list[0]) }})">
                <div class="container">

                    <div class="hero-content">

                        <p class="hero-subtitle">UnderMovie</p>

                        <h1 class="h1 hero-title">
                            Unlimited <strong>Movie</strong> TVs Shows & More.
                        </h1>

                        <div class="meta-wrapper">

                            <div class="badge-wrapper">
                                <div class="badge badge-fill">PG 18</div>

                                <div class="badge badge-outline">HD</div>
                            </div>

                            <div class="ganre-wrapper">
                                <a href="#">Romance,</a>

                                <a href="#">Drama</a>
                            </div>

                            <div class="date-time">

                                <div>
                                    <ion-icon name="calendar-outline"></ion-icon>

                                    <time datetime="2022">2022</time>
                                </div>

                                <div>
                                    <ion-icon name="time-outline"></ion-icon>

                                    <time datetime="PT128M">128 min</time>
                                </div>

                            </div>

                        </div>

                        <button class="btn btn-primary">
                            <ion-icon name="play"></ion-icon>

                            <span>Watch now</span>
                        </button>

                    </div>

                </div>
            </section>





            <!--
        - #UPCOMING
      -->

            <section class="upcoming">
                <div class="container">

                    <div class="flex-wrapper">

                        <div class="title-wrapper">
                            <p class="section-subtitle">Online Streaming</p>

                            <h2 class="h2 section-title">Upcoming Movies</h2>
                        </div>

                        <ul class="filter-list">

                            <li>
                                <button class="filter-btn">Movies</button>
                            </li>

                            <li>
                                <button class="filter-btn">TV Shows</button>
                            </li>

                            <li>
                                <button class="filter-btn">Anime</button>
                            </li>

                        </ul>

                    </div>

                    @php
                        $shuffledfilms = $films['results'];
                        shuffle($shuffledfilms);

                    @endphp

                    <ul class="movies-list  has-scrollbar">
                        @foreach ($shuffledfilms as $film)
                            @if (is_array($film) && isset($film['poster_path']))
                                <li>
                                    <div class="movie-card">
                                        <a href="{{ route('detailmovieI', ['id' => $film['id']]) }}">
                                            <figure class="card-banner">
                                                <img src="{{ 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/' . $film['poster_path'] }}"
                                                    alt="Movie poster">
                                            </figure>
                                        </a>

                                        <div class="title-wrapper">
                                            <a href="#detail">
                                                <h3 class="card-title">{{ $film['title'] }}</h3>
                                            </a>

                                            <time
                                                datetime="{{ $film['release_date'] }}">{{ $film['release_date'] }}</time>
                                        </div>

                                        <div class="card-meta">
                                            <div class="badge badge-outline">HD</div>

                                            <div class="duration">
                                                <ion-icon name="time-outline"></ion-icon>

                                                <time datetime="PT137M">137 min</time>
                                            </div>

                                            <div class="rating">
                                                <ion-icon name="star"></ion-icon>

                                                <data>{{ $film['vote_average'] }}</data>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                            @endif
                        @endforeach

                    </ul>

                </div>
            </section>





            <!--
        - #SERVICE
      -->

            <section class="service">
                <div class="container">

                    <div class="service-banner">
                        <figure>
                            <img src="{{ asset('image/home/service-banner.jpeg') }}"
                                alt="HD 4k resolution! only $3.99">
                        </figure>

                        <a href="{{ asset('image/home/service-banner.jpeg') }}" download class="service-btn">
                            <span>Download</span>

                            <ion-icon name="download-outline"></ion-icon>
                        </a>
                    </div>

                    <div class="service-content">

                        <p class="service-subtitle">Our Services</p>

                        <h2 class="h2 service-title">Download Your Shows Watch Offline.</h2>

                        <p class="service-text">
                            Lorem ipsum dolor sit amet, consecetur adipiscing elseddo eiusmod tempor.There are many
                            variations of
                            passages of lorem
                            Ipsum available, but the majority have suffered alteration in some injected humour.
                        </p>

                        <ul class="service-list">

                            <li>
                                <div class="service-card">

                                    <div class="card-icon">
                                        <ion-icon name="tv"></ion-icon>
                                    </div>

                                    <div class="card-content">
                                        <h3 class="h3 card-title">Enjoy on Your TV.</h3>

                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod
                                            tempor.
                                        </p>
                                    </div>

                                </div>
                            </li>

                            <li>
                                <div class="service-card">

                                    <div class="card-icon">
                                        <ion-icon name="videocam"></ion-icon>
                                    </div>

                                    <div class="card-content">
                                        <h3 class="h3 card-title">Watch Everywhere.</h3>

                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod
                                            tempor.
                                        </p>
                                    </div>

                                </div>
                            </li>

                        </ul>

                    </div>

                </div>
            </section>





            <!--
        - #TOP RATED
      -->


            <section class="top-rated">

                <div class="container">

                    <p class="section-subtitle">Online Streaming</p>

                    <h2 class="h2 section-title">Top Rated Movies</h2>

                    <ul class="filter-list">

                        <li>
                            <button class="filter-btn">Movies</button>
                        </li>

                        <li>
                            <button class="filter-btn">TV Shows</button>
                        </li>

                        <li>
                            <button class="filter-btn">Documentary</button>
                        </li>

                        <li>
                            <button class="filter-btn">Sports</button>
                        </li>

                    </ul>

                    <ul class="movies-list">
                        @php
                            $shuffledTops = $tops['results'];
                            shuffle($shuffledTops);

                        @endphp


                        @foreach ($shuffledTops as $top)
                            @if (is_array($top) && isset($top['poster_path']))
                                <li>
                                    <div class="movie-card">
                                        <a href="{{ route('detailmovieI', ['id' => $top['id']]) }}">
                                            <figure class="card-banner">
                                                <img src="{{ 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/' . $top['poster_path'] }}"
                                                    alt="Movie poster">
                                            </figure>
                                        </a>

                                        <div class="title-wrapper">
                                            <a href="#detail">
                                                <h3 class="card-title">{{ $top['title'] }}</h3>
                                            </a>

                                            <time
                                                datetime="{{ $top['release_date'] }}">{{ $top['release_date'] }}</time>
                                        </div>

                                        <div class="card-meta">
                                            <div class="badge badge-outline">HD</div>

                                            <div class="duration">
                                                <ion-icon name="time-outline"></ion-icon>

                                                <time datetime="PT137M">137 min</time>
                                            </div>

                                            <div class="rating">
                                                <ion-icon name="star"></ion-icon>

                                                <data>{{ $top['vote_average'] }}</data>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                            @endif
                        @endforeach

                    </ul>

                </div>
            </section>





            <!--
        - #TV SERIES
      -->

            <section class="tv-series">
                <div class="container">

                    <p class="section-subtitle">Best TV Series</p>

                    <h2 class="h2 section-title">World Best TV Series</h2>

                    <ul class="movies-list">
                        @foreach ($tvs['results'] as $tv)
                            @if (is_array($tv) && isset($tv['poster_path']))
                                <li>
                                    <div class="movie-card">
                                        <a href="#detail">
                                            <figure class="card-banner">
                                                <img src="{{ 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/' . $tv['poster_path'] }}"
                                                    alt="Movie poster">
                                            </figure>
                                        </a>

                                        <div class="title-wrapper">
                                            <a href="#detail">
                                                <h3 class="card-title">{{ $tv['name'] }}</h3>
                                            </a>

                                            <time
                                                datetime="{{ $tv['first_air_date'] }}">{{ $tv['first_air_date'] }}</time>
                                        </div>

                                        <div class="card-meta">
                                            <div class="badge badge-outline">HD</div>

                                            <div class="duration">
                                                <ion-icon name="time-outline"></ion-icon>

                                                <time datetime="PT137M">137 min</time>
                                            </div>

                                            <div class="rating">
                                                <ion-icon name="star"></ion-icon>

                                                <data>{{ $tv['vote_average'] }}</data>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                            @endif
                        @endforeach

                    </ul>

                </div>
            </section>





            <!--
        - #CTA
      -->

            <section class="cta">
                <div class="container">

                    <div class="title-wrapper">
                        <h2 class="cta-title">Trial start first 30 days.</h2>

                        <p class="cta-text">
                            Enter your email to create or restart your membership.
                        </p>
                    </div>

                    <form action="" class="cta-form">
                        <input type="email" name="email" required placeholder="Enter your email"
                            class="email-field">

                        <button type="submit" class="cta-form-btn">Get started</button>
                    </form>

                </div>
            </section>

        </article>
    </main>





    <!--
    - #FOOTER
  -->

    <footer class="footer">

        <div class="footer-top">
            <div class="container">

                <div class="footer-brand-wrapper">

                    <a href="./index.html" class="logo">
                        <img width="100px" src="{{ asset('image/home/logo.png') }}" alt="Filmlane logo">
                    </a>

                    <ul class="footer-list">

                        <li>
                            <a href="./index.html" class="footer-link">Home</a>
                        </li>

                        <li>
                            <a href="#" class="footer-link">Movie</a>
                        </li>

                        <li>
                            <a href="#" class="footer-link">TV Show</a>
                        </li>

                        <li>
                            <a href="#" class="footer-link">Web Series</a>
                        </li>

                        <li>
                            <a href="#" class="footer-link">Pricing</a>
                        </li>

                    </ul>

                </div>

                <div class="divider"></div>

                <div class="quicklink-wrapper">

                    <ul class="quicklink-list">

                        <li>
                            <a href="#" class="quicklink-link">Faq</a>
                        </li>

                        <li>
                            <a href="#" class="quicklink-link">Help center</a>
                        </li>

                        <li>
                            <a href="#" class="quicklink-link">Terms of use</a>
                        </li>

                        <li>
                            <a href="#" class="quicklink-link">Privacy</a>
                        </li>

                    </ul>

                    <ul class="social-list">

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-pinterest"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-linkedin"></ion-icon>
                            </a>
                        </li>

                    </ul>

                </div>

            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">

                <p class="copyright">
                    &copy; 2024 <a href="#">NJ</a>. All Rights Reserved
                </p>



            </div>
        </div>

    </footer>





    <!--
    - #GO TO TOP
  -->

    <a href="#top" class="go-top" data-go-top>
        <ion-icon name="chevron-up"></ion-icon>
    </a>





    <!--
    - custom js link

  -->
    <script src="{{ asset('js/home.js') }}"></script>

    <script>
        // Set the list of background images
        var backgroundList = @json($list);

        // Get the hero section element
        var heroSection = document.getElementById('hero');

        // Function to change the background after 20 seconds
        function changeBackground() {
            // Get the current background image index
            var currentIndex = backgroundList.indexOf(heroSection.style.backgroundImage.split('/').pop().replace('")', ''));

            // Calculate the next index with wrap-around
            var nextIndex = (currentIndex + 1) % backgroundList.length;

            // Set the new background image
            heroSection.style.backgroundImage = 'url(' + "{{ asset('image/home/') }}/" + backgroundList[nextIndex] + ')';
        }

        // Change the background every 20 seconds
        setInterval(changeBackground, 20000);
    </script>
    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
