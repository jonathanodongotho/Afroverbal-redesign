<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afroverbal | {{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('Assets/Bootstrap/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/Custom/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/fontawesome/webfonts/fa-brands-400.ttf') }}">
    <link rel="stylesheet" href="{{ asset('Assets/fontawesome/webfonts/fa-solid-900.ttf') }}">
</head>

<body>
    <head>
        <nav class="navbar navbar-expand-lg position-fixed w-100 py-3">
            <div class="container-fluid px-4">
                <div class="row d-flex justify-content-center w-100 mx-auto">
                    <div class="icon col-6 col-lg-4 text-white">
                        <a href="{{ url('/') }}" class="nav-link text-warning">AFROVERBAL</a>
                    </div>
                    <div class="menu-bar  d-lg-none col-6">
                        <div class="bar-item barmain">
                            <div class="bar bar-one"></div>
                            <div class="bar bar-two"></div>
                            <div class="bar bar-three"></div>
                        </div>
                    </div>
                    <div class="menu-wrapper large-view col-lg-8 d-none d-lg-flex justify-content-between flex-row">
                        <div class="menu d-flex flex-row justify-content-between">
                            
                        </div>
                        <div class="sub-menu d-flex flex-row justify-content-between">
                            <form class="d-flex bg-white border" role="search">
                                <button type="submit" class=" px-2 border-0 outline-0"><i class="fa-solid fa-search"></i></button>
                                <input class="form-control search border-0" type="search" placeholder="Search items...." aria-label="Search">
                            </form>
                        </div>
                    </div>

                    <div class="menu-wrapper small-view col-12 d-flex d-lg-none justify-content-between flex-column mt-3 py-5">
                        <div class="inner-menu-wrapper py-3">
                            <div>
                                <form class="d-flex bg-white border" role="search">
                                <button type="submit" class=" px-2 border-0 outline-0"><i class="fa-solid fa-search"></i></button>
                                <input class="form-control search border-0" type="search" placeholder="Search items...." aria-label="Search">
                            </form>
                            </div>
                            
                        </div>
                    </div>
                
                </div>
            </div>
        </nav>
        
    </head>

    <main class="main">
        {{ $slot }}
    </main>
    <footer class="bg-secondary-subtle pt-2 px-0 container-fluid">
        <div class="py-2">
            <div>
                <h6 class="text-center">Connect with us</h6>
            </div>
            <div class="d-flex flex-wrap justify-content-around col-8 col-sm-6 col-lg-4 col-lg-2 mx-auto">
                <a href="" class="btn">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a href="" class="btn">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
                <a href="" class="btn">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="" class="btn">
                    <i class="fa-solid fa-envelope"></i>
                </a>
            </div>
        </div>
        <div class="bg-dark">
            <h6 class="text-center text-sm-center m-0 p-3 text-light">COPYRIGHT INFO</h6>
        </div>
    </footer>


    <script src="{{ asset('Assets/Bootstrap/script.js') }}"></script>
    <script src="{{ asset('Assets/Custom/script.js') }}"></script>
</body>

</html>
