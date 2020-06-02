<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hirezebra | Hundreds of pre-interviewed candidates</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />

</head>

<body>
<header class="header">
    <div class="container">
        <div class="header__content flex text-centered wrapped">
            <div class="header__logo">
                <div class="logo">
                    <a href="/" class="logo__link">Hirezebra</a>
                </div>
            </div>

            <nav class="header__nav">
                <ul class="header__nav-list flex text-centered">
                    <li class="header__list-item">
                        <a href="/" class="header__nav-link text-sm">Home</a>
                    </li>
                    <li class="header__list-item">
                        <a href="/aboutUs" class="header__nav-link text-sm">About Us</a>
                    </li>
                    <li class="header__list-item">
                        <a href="/" class="header__nav-link text-sm">Contact Us</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<main>
    @yield('content')
</main>


<footer class="footer">
    <div class="container">
        <div class="footer__content flex wrapped">
            <div class="footer__item">
                <div class="footer__logo">
                    <div class="logo">
                        <a href="/" class="logo__link">Hireme</a>
                    </div>
                </div>


                <div class="footer__contact text-xs">
                    <p class="footer__contact-type">
                        <img src="{{ asset('icons/phone-icon.svg') }}" alt="Phone Icon" />
                        <span>
                Phone:
                <a href="tel:1-400-123-1234">1-400-123-1234</a>
              </span>
                    </p>
                    <p class="footer__contact-type">
                        <img src="{{ asset('icons/envelope-icon.svg') }}" alt="Envelope Icon" />
                        <span>
                Email:
                <a href="mailto:hireme001@gmail.com">hireme001@gmail.com</a>
              </span>
                    </p>
                </div>
            </div>

            <div class="footer__item">
                <h3 class="footer_title">For Job Seekers</h3>
                <ul class="footer__list text-xs">
                    <li class="footer__list-item">
                        <a href="#" class="footer__link">Register For Interview</a>
                    </li>
                </ul>
            </div>

            <div class="footer__item">
                <h3 class="footer_title">For Employers</h3>
                <ul class="footer__list text-xs">
                    <li class="footer__list-item">
                        <a href="#" class="footer__link">Search Talent</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

</body>
</html>
