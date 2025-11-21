<!DOCTYPE html>
<html lang="en">

<head>
    <title>PORTO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="icon" href="{{ asset('icon/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Scripts -->

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="#home-section">Porto</a>
            <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
                data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav nav ml-auto">
                    <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
                    <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
                    <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Resume</span></a></li>
                    <li class="nav-item"><a href="#skills-section" class="nav-link"><span>Tools</span></a></li>
                    <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
                    <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Home --}}
    <section id="home-section" class="hero">
        <div class="home-slider  owl-carousel">
            <div class="slider-item ">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end"
                        data-scrollax-parent="true">
                        <div class="one-third js-fullheight order-md-last img"
                            style="background-image: url('{{ asset('storage/' . optional($profile)->photo) }}');">
                            <div class="overlay"></div>
                        </div>
                        <div class="one-forth d-flex  align-items-center ftco-animate"
                            data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">Hello!</span>
                                <h1 class="mb-4 mt-3">I'm <span>{{ optional($profile)->name }}</span></h1>
                                <h2 class="mb-4">{{ optional($profile)->bio }}</h2>
                                <p><a href="#contact-section" class="btn btn-primary py-3 px-4">Contact me</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- About --}}
    <section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 col-lg-5 d-flex">
                    <div class="img-about img d-flex align-items-stretch">
                        <div class="overlay"></div>
                        <div class="img d-flex align-self-stretch align-items-center"
                            style="background-image:url({{ asset('storage/' . optional($profile)->galery) }});">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h1 class="big">About</h1>
                            <h2 class="mb-4">About Me</h2>
                            <p class="text-justify">{{ optional($profile)->about }}</p>
                            <ul class="about-info mt-4 px-md-0 px-2">
                                <li class="d-flex"><span>Nama:</span> <span>{{ optional($profile)->name }}</span></li>
                                <li class="d-flex"><span>Email:</span> <span>{{ optional($profile)->email }}</span>
                                </li>
                                <li class="d-flex"><span>Nomor Telpon: </span>
                                    <span>{{ optional($profile)->phone }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Resume --}}
    <section class="ftco-section ftco-no-pb" id="resume-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Resume</h1>
                    <h2 class="mb-4">Resume</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($resumes as $resume)
                    <div class="col-md-6">
                        <div class="resume-wrap ftco-animate">
                            <span class="date">{{ $resume->year }}</span>
                            <h2>{{ $resume->job_title }}</h2>
                            <span class="position">{{ $resume->company }}</span>
                            <p class="mt-4 text-justify">{{ $resume->job_desc }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Tools --}}
    <section class="ftco-section" id="skills-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Tools</h1>
                    <h2 class="mb-4">My Tools</h2>
                </div>
            </div>

            <div class="row d-flex justify-content-center gap-4 mb-5">
                @foreach ($tools as $tool)
                    <div class="col-auto d-flex ftco-animate">
                        <div class="box text-center">
                            <div class="icon d-flex align-items-center justify-content-center p-5">
                                <img src="{{ asset('storage/' . $tool->icon_path) }}" alt="{{ $tool->name }}"
                                    style="width: 65px; height: 65px; object-fit: contain;">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    {{-- Projects --}}
    <section class="ftco-section ftco-project" id="projects-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Projects</h1>
                    <h2 class="mb-4">Our Projects</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-md-6">
                        <div class="resume-wrap ftco-animate position-relative">
                            <div class="d-flex justify-content-between align-items-start">
                                <!-- Judul dan GitHub -->
                                <div class="d-flex align-items-center">
                                    <h2 class="mr-2">{{ $project->title }}</h2>
                                    <a class="mb-2" href="{{ $project->link }}">
                                        <img src="storage/tools/github.png" alt="github"
                                            style="width: 30px; height: 30px; object-fit: contain;">
                                    </a>
                                </div>

                                <!-- Tools di kanan atas -->
                                <div class="d-flex position-absolute" style="top: 20px; right: 10px;">
                                    @foreach ($project->tools as $tool)
                                        <img src="{{ asset('storage/' . $tool->icon_path) }}"
                                            alt="{{ $tool->name }}"
                                            style="width: 25px; height: 25px; object-fit: contain; margin-left: 8px;">
                                    @endforeach
                                </div>
                            </div>

                            <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                                style="background-image: url('{{ asset('storage/' . $project->image) }}');">
                                <div class="overlay"></div>
                                <div class="text text-center p-1"></div>
                            </div>
                            <p class="mt-4 text-justify">{{ $project->description }}</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    {{-- Contact --}}
    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Contact</h1>
                    <h2 class="mb-4">Contact Me</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center contact-info mb-5">
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-phone2"></span>
                        </div>
                        <h3 class="mb-4">Contact Number</h3>
                        <p>{{ optional($profile)->phone }}</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-paper-plane"></span>
                        </div>
                        <h3 class="mb-4">Email Address</h3>
                        <p>{{ optional($profile)->email }}</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <a href="{{ optional($profile)->linkedin }}"> <span class="icon-globe"></span></a>
                        </div>
                        <h3 class="mb-4">LinkedIn</h3>
                        <p>{{ optional($profile)->name }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | <i class=" color-danger"
                            aria-hidden="true"></i> by <a href="{{ optional($profile)->github }}"
                            target="_blank">{{ optional($profile)->name }}</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/scrollax.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>



</body>

</html>
