<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digipack-index</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <style>
        body {
            font-family: system-ui, -apple-system, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji';
        }

        #nav {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 40px;
            justify-content: space-between;
        }

        #nav-logo {
            width: 6.625rem;
            height: 3.75rem;
        }

        #carouselExampleIndicators>ol>li {
            width: 8px;
            height: 8px;
        }

        .lightblue {
            background-color: #E0E7FF;
        }

        #form-box {
            right: 9%;
            top: 50%;
            transform: translateY(-50%);
            min-width: 353px;
        }

        @media (max-width:768px) {
            #nav-logo {
                width: 45px;
                height: 30px;
            }

            #title-box>h2 {
                font-size: 24px;
            }
        }
    </style>
    @yield('css')
</head>

<body>
    <header class="pt-md-2 mb-1 bd-mb-3">
        <nav class="navbar navbar-expand-lg navbar-light bg-white" id="nav">
            <a class="navbar-brand" href="/"><img src="{{ asset('image/logo.svg') }}" alt="" id="nav-logo"></a>
            <button class="navbar-toggler border-0" type="button" data-toggle="collapse"
                data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span>
                    <img src="{{asset('image/svgexport-2.svg')}}" alt="">
                </span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link mr-2 text-center" href="/news">News<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-body ml-md-4 text-center" href="#">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-body mx-md-4 text-center" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-body ml-md-3 text-center" href="#">Contact</a>
                    </li>
                    <li class="nav-item dropdown mx-md-3 d-flex justify-content-center">
                        <div class="nav-item mr-3">
                            <a class="nav-link text-body ml-md-3" href="./Digipack-shoppingcart-1.html"><i
                                    class="fas fa-shopping-cart fa-2x"></i></a>
                        </div>
                        <a class="nav-link text-body" href="" id="navbarDropdownMenuLink"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user-circle fa-2x"></i>
                        </a>
                        <div id="dropdown" class="dropdown-menu dropdown-menu-right position-absolute"
                            style="width: 100%;" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="../login">Login</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        @yield('main')
    </main>
    <footer>
        <div class="row mr-0 py-md-5 mb-5 px-5 justify-content-between align-items-center d-flex">
            <div class="text-center text-md-left col col-md-3 col-lg-2 pb-4">
                <img src="{{ asset('image/svgexport-20.svg') }}" alt="">
                <span class="h5 pl-2">數位方塊</span>
                <p class="pt-2 text-muted"><small>Air plant banjo lyft occupy retro adaptogen indego</small></p>
            </div>
            <div class="d-md-flex col-sm-8 col-md-9 col-lg-10 justify-content-around">
                <div class="col-md-5 d-sm-flex text-center text-md-right">
                    <div class="col pb-4">
                        <h6>CATEGORIES</h6>
                        <div class="text-muted">First Link</div>
                        <div class="text-muted">Second Link</div>
                        <div class="text-muted">Third Link</div>
                        <div class="text-muted">Fourth Link</div>
                    </div>
                    <div class="col pb-4">
                        <h6>CATEGORIES</h6>
                        <div class="text-muted">First Link</div>
                        <div class="text-muted">Second Link</div>
                        <div class="text-muted">Third Link</div>
                        <div class="text-muted">Fourth Link</div>
                    </div>
                </div>
                <div class="col-md-5 d-sm-flex text-center text-md-left">
                    <div class="col pb-4">
                        <h6>CATEGORIES</h6>
                        <div class="text-muted">First Link</div>
                        <div class="text-muted">Second Link</div>
                        <div class="text-muted">Third Link</div>
                        <div class="text-muted">Fourth Link</div>
                    </div>
                    <div class="col pb-4">
                        <h6>CATEGORIES</h6>
                        <div class="text-muted">First Link</div>
                        <div class="text-muted">Second Link</div>
                        <div class="text-muted">Third Link</div>
                        <div class="text-muted">Fourth Link</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-light d-md-flex py-3 px-5 justify-content-between text-center align-items-center">
            <div><small>© 2020 Tailblocks — @knyttneve</small></div>
            <div class="d-flex align-items-center justify-content-center">
                <img src="./image/svgexport-21.svg" alt="" class="px-1">
                <img src="./image/svgexport-22.svg" alt="" class="px-1">
                <img src="./image/svgexport-23.svg" alt="" class="px-1">
                <div class="pt-1">
                    <i class="fab fa-linkedin-in px-2 text-secondary"
                        style="font-size: 24px;"></i></div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>

    @yield('js')

</body>

</html>
