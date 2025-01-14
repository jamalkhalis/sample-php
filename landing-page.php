<!doctype html>
<html lang="en" dir="ltr" data-bs-theme="auto">
<head>

    <!-- Include JavaScript for color modes -->
    <script src="./assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Update the 'content' attribute to reflect the actual content description -->
    <meta name="description" content="your_description_goes_here">

    <!-- Modify the 'content' attribute to include appropriate keywords -->
    <meta name="keywords" content="your_keywords_goes_here">

    <meta name="author" content="tigmatemplate">
    <meta name="generator" content="Bootstrap">

    <!-- Change the text within the <title> tag to match the webpage's content -->
    <title> your_title_goes_here </title>

    <!--
        Set the website's favicon and Apple touch icon using the files in the assets/logo folder. You can change these files to your own icons by replacing them with the same names and sizes.

        Be careful if you change the site.webmanifest file, as you need to update the src attribute of the icons array to match the new path of your icon files. Otherwise, your icons may not display correctly on some devices.
    -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/logo/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/logo/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/logo/favicon-16x16.png">
    <link rel="manifest" href="./assets/logo/site.webmanifest">

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="./assets/libraries/aos/aos.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/main.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">

    <!-- Open Graph Meta Tags for Social Sharing -->
    <!-- Update the 'title' and 'description' content below to enhance social sharing -->
    <meta property="og:title" content="your_title_goes_here">
    <meta property="og:description" content="your_description_goes_here">
    <!-- Update with actual absolute image URL like: https://example.com/main.jpg -->
    <meta property="og:image" content="your_absolute_image_url_goes_here">
    <!-- Update with the absolute URL of the content like: https://example.com/index.html -->
    <meta property="og:url" content="your_absolute_content_url_goes_here">
    <!-- Update with the type of object you’re sharing. (e.g., article, website, etc.) -->
    <meta property="og:type" content="website">
    <!-- Defines the content language -->
    <meta property="og:locale" content="en_US">


    <!-- X/Twitter Card Meta Tags for Social Sharing -->
    <meta name="twitter:card" content="summary_large_image">
    <!-- Update with your X/Twitter handle -->
    <meta name="twitter:site" content="@yourtwitterhandle">
    <!-- Update the 'title' and 'description' content below to enhance social sharing -->
    <meta name="twitter:title" content="your_title_goes_here">
    <meta name="twitter:description" content="your_description_goes_here">
    <!-- Update with actual absolute image URL like: https://example.com/main.jpg -->
    <meta name="twitter:image" content="your_absolute_image_url_goes_here">

    <!--
        The following line specifies the canonical URL for this page.
        Replace your_canonical_url_goes_here with the actual canonical URL if needed like: https://example.com/index.html
        Or just remove it!!!!
    -->
    <link rel="canonical" href="your_canonical_url_goes_here">

</head>
<body>

    <!-- loader-wrapper -->
    <div class="loader-wrapper">
        <div class="spinner-grow text-primary p-5" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    

    <!-- Gradients -->
    <img src="./assets/img/gradients/1.png" class="object-fit-cover position-absolute top-0 w-100 z-n1 mt-15 mt-sm-10 mt-lg-0" alt="Gradinets">
    <!-- Pattern: polka -->
    <div class="polka py-15 position-absolute top-0 w-100 z-n1 vh-100"></div>


    <!-- header top -->
    <div class="navigation position-absolute w-100">
        <nav class="navbar navbar-expand-xl px-2" aria-label="Offcanvas navbar large">
            <div class="container px-3 py-2 mt-3 bg-body-tertiary rounded-pill shadow" style="border: 1px solid rgba(var(--bs-emphasis-color-rgb), 0.05);">
                <a class="navbar-brand p-1" href="./index.html">
                    <img src="./assets/logo/logo.png" height="32" alt="logo">
                </a>

                <div class="dropdown order-xl-last ms-auto ms-xl-2 me-2 me-xl-0">
                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <symbol id="check2" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </symbol>
                        <symbol id="circle-half" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
                        </symbol>
                        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
                            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
                            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
                        </symbol>
                        <symbol id="sun-fill" viewBox="0 0 16 16">
                            <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
                        </symbol>
                    </svg>

                    <button class="btn btn-primary btn-sm rounded-4 dropdown-toggle d-flex align-items-center"
                        id="bd-theme"
                        type="button"
                        aria-expanded="false"
                        data-bs-toggle="dropdown"
                        aria-label="Toggle theme (auto)">
                        <svg fill="currentColor" class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
                        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
                    </button>

                    <ul class="p-1 dropdown-menu dropdown-menu-end dropdown-menu-hover end-0 rounded-3 text-body-emphasis bg-body-tertiary shadow-sm"
                        style="--bs-dropdown-min-width: 9rem;" 
                        aria-labelledby="bd-theme-text"
                        >

                        <li style="color: var(--bs-tertiary-bg);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="d-inline-block position-absolute top-0 end-0 translate-middle mt-n1" 
                                viewBox="0 0 16 16">
                                <path class="carret-dropdown-path" d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
                            </svg>
                        </li>

                        <li>
                            <button type="button" class="dropdown-item d-flex align-items-center rounded-1" data-bs-theme-value="light" aria-pressed="false">
                                <svg fill="currentColor" class="bi me-2 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
                                Light
                                <svg fill="currentColor" class="bi ms-auto d-none active-check" width="1em" height="1em"><use href="#check2"></use></svg>
                            </button>
                        </li>

                        <li>
                            <button type="button" class="dropdown-item d-flex align-items-center rounded-1 my-1" data-bs-theme-value="dark" aria-pressed="false">
                                <svg fill="currentColor" class="bi me-2 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
                                Dark
                                <svg fill="currentColor" class="bi ms-auto d-none active-check" width="1em" height="1em"><use href="#check2"></use></svg>
                            </button>
                        </li>

                        <li>
                            <button type="button" class="dropdown-item d-flex align-items-center rounded-1 active" data-bs-theme-value="auto" aria-pressed="true">
                                <svg fill="currentColor" class="bi me-2 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
                                Auto
                                <svg fill="currentColor" class="bi ms-auto d-none active-check" width="1em" height="1em"><use href="#check2"></use></svg>
                            </button>
                        </li>
                    </ul>
                </div>

                <button class="navbar-toggler collapsed" 
                        type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2"
                        aria-controls="offcanvasNavbar2" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon top-bar"></span>
                    <span class="toggler-icon middle-bar"></span>
                    <span class="toggler-icon bottom-bar"></span>
                </button>

                <div class="offcanvas offcanvas-end border-0 rounded-start-0 rounded-start-sm-5" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
                    <div class="offcanvas-header px-4 pt-4 pb-0">
                        <h5 class="offcanvas-title m-0" id="offcanvasNavbar2Label">
                            <a class="navbar-brand px-2 py-1" href="javascript:;">
                                <img src="./assets/logo/logo.png" height="32" alt="logo">
                            </a>
                        </h5>
                        <button type="button" class="btn-close text-body-emphasis" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body">
                        <ul class="navbar-nav align-items-xl-center justify-content-center flex-grow-1 column-gap-2 row-gap-2">
                            <li class="nav-item ms-xl-auto" data-bs-dismiss="offcanvas">
                                <a href="javascript:;" onclick="scrollToSection('#home')"
                                    class="nav-link rounded-5 px-3 text-base fw-semibold leading-6 text-body-emphasis bg-body-secondary-hover">
                                    Home
                                </a>
                            </li>

                            <li class="nav-item" data-bs-dismiss="offcanvas">
                                <a href="javascript:;" onclick="scrollToSection('#features')"
                                    class="nav-link rounded-5 px-3 text-base fw-semibold leading-6 text-body-emphasis bg-body-secondary-hover">
                                    Features
                                </a>
                            </li>

                            <li class="nav-item" data-bs-dismiss="offcanvas">
                                <a href="javascript:;" onclick="scrollToSection('#pricing')"
                                    class="nav-link rounded-5 px-3 text-base fw-semibold leading-6 text-body-emphasis bg-body-secondary-hover">
                                    Pricing
                                </a>
                            </li>

                            <li class="nav-item" data-bs-dismiss="offcanvas">
                                <a href="javascript:;" onclick="scrollToSection('#cta')"
                                    class="nav-link rounded-5 px-3 text-base fw-semibold leading-6 text-body-emphasis bg-body-secondary-hover">
                                    Get started
                                </a>
                            </li>

                            <li class="nav-item ms-xl-auto" data-bs-dismiss="offcanvas">
                                <a href="javascript:;" onclick="scrollToSection('#contact-us')"
                                    class="nav-link rounded-5 border px-3 text-center text-base fw-semibold leading-6 text-body-emphasis bg-body-secondary-hover">
                                    Contact us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>


    <!-- Hero -->
    <div id="home" class="overflow-hidden pb-5 pb-sm-7 pt-9">
        <div class="container">
            <div class="max-w-2xl mx-auto">
                <div class="mt-4 pt-2">
                    <div class="text-center">
                        <h1 class="m-0 text-body-emphasis fw-bold tracking-tight text-6xl" data-aos-delay="0" data-aos="fade" data-aos-duration="3000">
                            Elevate Your Content with AI-Powered Writing
                        </h1>
                        <p class="m-0 mt-4 text-lg leading-8 text-body-emphasis" data-aos-delay="200" data-aos="fade" data-aos-duration="3000">
                            Experience the power of our AI Writer Service. Generate high-quality content effortlessly and improve your writing skills.
                        </p>
                        <div class="mt-4 pt-3 d-flex align-items-center justify-content-center column-gap-3" data-aos-delay="400" data-aos="fade" data-aos-duration="3000">
                            <a href="javascript:;" class="btn btn-lg btn-primary text-sm fw-semibold">
                                Get started
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Video presentation -->
    <div class="overflow-hidden pb-6">
        <div class="container" data-aos-delay="600" data-aos="flip-down" data-aos-duration="3000">
            <div class="max-w-6xl mx-auto box position-relative">
                <div class="p-2 p-sm-3 border rounded-4 rounded-sm-5 bg-body-secondary">
                    <div class="ratio ratio-16x9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/iMLq9g_e2no?si=NAukxaQJlHlKyfDo" class="border rounded-3 rounded-sm-4" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Key features -->
    <div id="features" class="overflow-hidden py-7 py-sm-8 py-xl-9">
        <div class="container">
            <div class="position-relative">
                <div data-aos-delay="0" data-aos="fade" data-aos-duration="3000">
                    <div class="max-w-lg">
                        <p class="m-0 text-base fw-semibold leading-7 text-primary-emphasis">
                            Key features
                        </p>
                        <h1 class="m-0 mt-2 fw-bold tracking-tight text-body-emphasis text-4xl">
                            Revolutionize
                        </h1>
                        <p class="m-0 mt-4 text-xl leading-8 text-body-secondary">
                            Our AI Writer Service offers a range of powerful features to enhance your writing experience. With automatic content generation, grammar checking and correction, and style suggestions and improvements, you'll be able to create high-quality content in no time.
                        </p>
                    </div>
                </div>

                <div class="pt-5" data-aos-delay="200" data-aos="fade" data-aos-duration="3000">
                    <div class="max-w-lg text-base leading-7 text-body-secondary">
                        <ul class="p-0 m-0 text-body-secondary">
                            <li class="m-0 d-flex column-gap-3">
                                <svg class="m-0 mt-1 text-primary-emphasis flex-shrink-0" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="40" height="40" viewBox="0 0 24 24"><path fill="currentColor" d="M10.5 20h-6c-.827 0-1.5-.673-1.5-1.5v-9C3 8.673 3.673 8 4.5 8h6c.827 0 1.5.673 1.5 1.5v9c0 .827-.673 1.5-1.5 1.5z"/><path fill="var(--bs-tertiary-color)" d="M21.5 23h-19A2.503 2.503 0 0 1 0 20.5v-17C0 2.122 1.122 1 2.5 1h19C22.878 1 24 2.122 24 3.5v17c0 1.378-1.122 2.5-2.5 2.5zM2.5 2C1.673 2 1 2.673 1 3.5v17c0 .827.673 1.5 1.5 1.5h19c.827 0 1.5-.673 1.5-1.5v-17c0-.827-.673-1.5-1.5-1.5h-19z"/><path fill="var(--bs-tertiary-color)" d="M23.5 6H.5a.5.5 0 0 1 0-1h23a.5.5 0 0 1 0 1zM20.5 10h-6a.5.5 0 0 1 0-1h6a.5.5 0 0 1 0 1zM20.5 13h-6a.5.5 0 0 1 0-1h6a.5.5 0 0 1 0 1zM20.5 16h-6a.5.5 0 0 1 0-1h6a.5.5 0 0 1 0 1zM20.5 19h-6a.5.5 0 0 1 0-1h6a.5.5 0 0 1 0 1zM3.5 17.899a.5.5 0 0 1-.354-.853l1.793-1.793a1.501 1.501 0 0 1 2.121 0 .505.505 0 0 0 .384.148.49.49 0 0 0 .362-.187l.522-.652c.572-.715 1.769-.715 2.342 0l1.219 1.524a.501.501 0 0 1-.781.625L9.89 15.188a.514.514 0 0 0-.78 0l-.522.651A1.5 1.5 0 0 1 7.5 16.4a1.528 1.528 0 0 1-1.144-.437.501.501 0 0 0-.71-.003l-1.793 1.793a.494.494 0 0 1-.353.146z"/></svg>
                                <span>
                                    <strong class="fw-semibold text-body-emphasis">
                                        Automatic Content Generation.
                                    </strong> 
                                    Effortlessly generate engaging and original content with our AI-powered writing technology.
                                </span>
                            </li>

                            <li class="m-0 mt-4 d-flex column-gap-3">
                                <svg class="m-0 mt-1 text-info-emphasis flex-shrink-0" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="40" height="40" viewBox="0 0 24 24"><path fill="currentColor" d="M11.894 24a.5.5 0 0 1-.491-.597l.707-3.535a.49.49 0 0 1 .137-.256l7.778-7.778a1.503 1.503 0 0 1 2.121 0l1.414 1.414a1.501 1.501 0 0 1 0 2.121l-7.778 7.778a.497.497 0 0 1-.256.137l-3.535.707a.53.53 0 0 1-.097.009z"/><path fill="var(--bs-tertiary-color)" d="M9.5 21h-7A2.502 2.502 0 0 1 0 18.5v-13C0 4.121 1.121 3 2.5 3h2a.5.5 0 0 1 0 1h-2C1.673 4 1 4.673 1 5.5v13c0 .827.673 1.5 1.5 1.5h7a.5.5 0 0 1 0 1zM16.5 12a.5.5 0 0 1-.5-.5v-6c0-.827-.673-1.5-1.5-1.5h-2a.5.5 0 0 1 0-1h2C15.879 3 17 4.121 17 5.5v6a.5.5 0 0 1-.5.5z"/><path fill="var(--bs-tertiary-color)" d="M11.5 6h-6C4.673 6 4 5.327 4 4.5v-2a.5.5 0 0 1 .5-.5h1.55C6.282.86 7.293 0 8.5 0s2.218.86 2.45 2h1.55a.5.5 0 0 1 .5.5v2c0 .827-.673 1.5-1.5 1.5zM5 3v1.5c0 .275.225.5.5.5h6c.275 0 .5-.225.5-.5V3h-1.5a.5.5 0 0 1-.5-.5C10 1.673 9.327 1 8.5 1S7 1.673 7 2.5a.5.5 0 0 1-.5.5H5zM13.5 9h-10a.5.5 0 0 1 0-1h10a.5.5 0 0 1 0 1zM13.5 12h-10a.5.5 0 0 1 0-1h10a.5.5 0 0 1 0 1zM13.5 15h-10a.5.5 0 0 1 0-1h10a.5.5 0 0 1 0 1z"/></svg>
                                <span>
                                    <strong class="fw-semibold text-body-emphasis">
                                        Grammar Checking and Correction.
                                    </strong> 
                                    Ensure your writing is error-free and polished with our advanced grammar checking and correction capabilities.
                                </span>
                            </li>

                            <li class="m-0 mt-4 d-flex column-gap-3">
                                <svg class="m-0 mt-1 text-success-emphasis flex-shrink-0" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="40" height="40" viewBox="0 0 24 24"><path fill="currentColor" d="M12 18c-3.309 0-6-2.691-6-6s2.691-6 6-6 6 2.691 6 6-2.691 6-6 6z"/><path fill="var(--bs-tertiary-color)" d="M.77 15a.498.498 0 0 1-.487-.39A11.862 11.862 0 0 1 0 12C0 5.383 5.383 0 12 0c3.754 0 7.22 1.711 9.507 4.696a.5.5 0 0 1-.794.608A10.9 10.9 0 0 0 12 1C5.935 1 1 5.935 1 12c0 .827.087 1.631.258 2.39A.5.5 0 0 1 .77 15zM12 24c-3.754 0-7.22-1.712-9.507-4.696a.499.499 0 1 1 .794-.607A10.9 10.9 0 0 0 12 23c6.065 0 11-4.935 11-11 0-.838-.089-1.641-.266-2.384a.5.5 0 1 1 .973-.231c.194.819.293 1.699.293 2.615 0 6.617-5.383 12-12 12z"/><path fill="white" d="M2.55 24a.5.5 0 0 1-.5-.495l-.05-5A.5.5 0 0 1 2.5 18h5a.5.5 0 0 1 0 1H3.005l.045 4.495a.5.5 0 0 1-.495.505H2.55zM21.5 6h-5a.5.5 0 0 1 0-1H21V.5a.5.5 0 0 1 1 0v5a.5.5 0 0 1-.5.5zM11 14.5a.505.505 0 0 1-.354-.146l-1.75-1.75a.5.5 0 0 1 .707-.707l1.37 1.37 2.898-3.344a.501.501 0 0 1 .756.656l-3.25 3.75a.5.5 0 0 1-.36.173c-.005-.002-.011-.002-.017-.002z"/></svg>
                                <span>
                                    <strong class="fw-semibold text-body-emphasis">
                                        Style Suggestions and Improvements.
                                    </strong> 
                                    Elevate your writing style with personalized suggestions and improvements tailored to your unique voice.
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="position-xl-absolute top-0 start-50" data-aos-delay="300" data-aos="flip-left" data-aos-duration="3000">
                    <div class="py-5">
                        <img class="rounded-4" width="912" src="./assets/img/bg/bg1.jpg" alt="Dashbord" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </div>  


    <!-- Benefits and Value Proposition -->
    <div class="overflow-hidden py-7 py-sm-8 py-xl-9 bg-body-tertiary">
        <div class="container">
            <div>
                <div class="mx-xl-auto max-w-3xl text-start text-xl-center">
                    <h2 class="text-primary-emphasis fw-semibold text-base leading-7 m-0 text-center">
                        Benefits and Value Proposition
                    </h2>
                    <p class="text-4xl text-body-emphasis tracking-tight fw-bold m-0 mt-2 text-center">
                        Save Time and Improve Writing Skills with Our AI Writer Service
                    </p>
                </div>
                <p class="m-0 mt-4 text-lg leading-8 text-body-secondary mx-xl-auto max-w-3xl text-center">
                    Our AI Writer Service is designed to help you save time and enhance your writing skills. With automatic content generation, grammar checking and correction, and style suggestions, you can create high-quality content with ease.
                </p>
            </div>

            <div class="mt-7">
                <div>
                    <div class="row gy-5 gx-lg-5 row-cols-1 row-cols-xl-3">
                        <div class="col d-flex align-items-start" data-aos-delay="0" data-aos="fade" data-aos-duration="3000">
                            <div class="rounded-3 bg-primary d-inline-flex align-items-center justify-content-center flex-shrink-0 me-4"
                                style="width: 2.5rem; height: 2.5rem;">
                                <svg class="text-white" width="1.5rem" height="1.5rem" fill="currentColor" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 24 24"><path d="M12 24C5.383 24 0 18.617 0 12S5.383 0 12 0s12 5.383 12 12-5.383 12-12 12zm0-23C5.935 1 1 5.935 1 12s4.935 11 11 11 11-4.935 11-11S18.065 1 12 1z"/><path d="M19.5 13h-8a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 1 0V12h7.5a.5.5 0 0 1 0 1z"/></svg>
                            </div>

                            <div>
                                <h3 class="m-0 text-body-emphasis text-base fw-semibold leading-7">
                                    Time-Saving
                                </h3>
                                <p class="m-0 mt-2 text-base text-body-secondary leading-7 max-w-lg">
                                    Generate content faster and more efficiently, freeing up time for other important tasks.
                                </p>
                            </div>
                        </div>

                        <div class="col d-flex align-items-start" data-aos-delay="200" data-aos="fade" data-aos-duration="3000">
                            <div class="rounded-3 bg-primary d-inline-flex align-items-center justify-content-center flex-shrink-0 me-4"
                                style="width: 2.5rem; height: 2.5rem;">
                                <svg class="text-white" width="1.5rem" height="1.5rem" fill="currentColor" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 24 24"><path d="M.5 7a.5.5 0 0 1-.5-.5v-2C0 3.121 1.122 2 2.5 2h2a.5.5 0 0 1 0 1h-2C1.673 3 1 3.673 1 4.5v2a.5.5 0 0 1-.5.5zM23.5 7a.5.5 0 0 1-.5-.5v-2c0-.827-.673-1.5-1.5-1.5h-2a.5.5 0 0 1 0-1h2C22.878 2 24 3.121 24 4.5v2a.5.5 0 0 1-.5.5zM4.5 22h-2A2.503 2.503 0 0 1 0 19.5v-2a.5.5 0 0 1 1 0v2c0 .827.673 1.5 1.5 1.5h2a.5.5 0 0 1 0 1zM21.5 22h-2a.5.5 0 0 1 0-1h2c.827 0 1.5-.673 1.5-1.5v-2a.5.5 0 0 1 1 0v2c0 1.379-1.122 2.5-2.5 2.5zM12 19c-3.86 0-7-3.141-7-7 0-1.475.453-2.885 1.31-4.079a.5.5 0 0 1 .813.584A5.95 5.95 0 0 0 6 12c0 3.309 2.691 6 6 6a5.986 5.986 0 0 0 5.324-3.23.501.501 0 0 1 .887.463A6.984 6.984 0 0 1 12 19z"/><path d="M11.5 11a.5.5 0 0 1-.474-.342l-.921-2.763-2.763-.92a.502.502 0 0 1 0-.95l2.763-.921.921-2.763c.136-.408.812-.408.948 0l.921 2.763 2.763.921a.502.502 0 0 1 0 .95l-2.763.921-.921 2.763A.5.5 0 0 1 11.5 11zM9.081 6.5l1.577.525a.5.5 0 0 1 .316.316l.526 1.578.526-1.577a.497.497 0 0 1 .316-.316l1.577-.526-1.577-.525a.5.5 0 0 1-.316-.316L11.5 4.081l-.526 1.577a.497.497 0 0 1-.316.316L9.081 6.5zM18.5 14a.5.5 0 0 1-.474-.342l-.671-2.013-2.013-.671a.5.5 0 0 1 0-.949l2.013-.671.671-2.013c.136-.408.812-.408.948 0l.671 2.013 2.013.671a.502.502 0 0 1 0 .95l-2.013.671-.671 2.013A.5.5 0 0 1 18.5 14zm-1.419-3.5.827.275a.5.5 0 0 1 .316.316l.276.827.276-.827a.497.497 0 0 1 .316-.316l.827-.275-.827-.275a.5.5 0 0 1-.316-.316l-.276-.828-.276.827a.497.497 0 0 1-.316.316l-.827.276z"/></svg>
                            </div>

                            <div>
                                <h3 class="m-0 text-body-emphasis text-base fw-semibold leading-7">
                                    Improved Skills
                                </h3>
                                <p class="m-0 mt-2 text-base text-body-secondary leading-7 max-w-lg">
                                    Enhance your writing skills with grammar checking, correction, and style suggestions.
                                </p>
                            </div>
                        </div>

                        <div class="col d-flex align-items-start" data-aos-delay="400" data-aos="fade" data-aos-duration="3000">
                            <div class="rounded-3 bg-primary d-inline-flex align-items-center justify-content-center flex-shrink-0 me-4"
                                style="width: 2.5rem; height: 2.5rem;">
                                <svg class="text-white" width="1.5rem" height="1.5rem" fill="currentColor" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 24 24"><path d="M20.5 24h-17C1.57 24 0 22.43 0 20.5v-18C0 1.122 1.122 0 2.5 0h13C16.878 0 18 1.122 18 2.5V3h3.5C22.878 3 24 4.122 24 5.5v15c0 1.93-1.57 3.5-3.5 3.5zM18 4v16.5c0 1.378 1.122 2.5 2.5 2.5s2.5-1.122 2.5-2.5v-15c0-.827-.673-1.5-1.5-1.5H18zM2.5 1C1.673 1 1 1.673 1 2.5v18C1 21.878 2.122 23 3.5 23h14.553A3.487 3.487 0 0 1 17 20.5v-18c0-.827-.673-1.5-1.5-1.5h-13z"/><path d="M8.5 9h-5a.5.5 0 0 1-.5-.5v-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5zM4 8h4V4H4v4zM14.5 5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 1 0 1zM14.5 8h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 1 0 1zM14.5 12h-11a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1zM14.5 16h-11a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1zM14.5 20h-11a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1z"/></svg>
                            </div>

                            <div>
                                <h3 class="m-0 text-body-emphasis text-base fw-semibold leading-7">
                                    Enhanced Content Quality
                                </h3>
                                <p class="m-0 mt-2 text-base text-body-secondary leading-7 max-w-lg">
                                    Enhance your writing skills with grammar checking, correction, and style suggestions.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Pricing Plans -->
    <div id="pricing" class="overflow-hidden py-7 py-sm-8 py-xl-9">
        <div class="container">
            <div>
                <div class="mx-auto max-w-4xl text-center">
                    <h2 class="text-primary-emphasis fw-semibold text-base leading-7 m-0">
                        Pricing
                    </h2>
                    <p class="text-5xl text-body-emphasis tracking-tight fw-bold m-0 mt-2">
                        Affordable pricing plans
                    </p>
                </div>
                <p class="m-0 mt-4 text-lg leading-8 text-body-secondary mx-auto max-w-2xl text-center">
                    Choose the plan that suits your needs
                </p>
            </div>

            <div class="mt-6 mt-lg-8">
                <div class="row row-cols-1 row-cols-lg-3 gy-5 g-lg-0">
                    <div class="max-w-md mx-auto" data-aos-delay="0" data-aos="fade-left" data-aos-duration="3000">
                        <div class="p-5 h-100 rounded-5 rounded-lg-0 rounded-start-lg-5 border d-flex flex-column justify-content-between">
                            <div>
                                <h3 class="fw-semibold text-lg leading-8 text-body-emphasis m-0">
                                    Basic
                                </h3>
                                <p class="m-0 mt-3 leading-6 text-sm text-body-secondary">
                                    The essentials to provide your best work for clients.
                                </p>
                                <p class="m-0 mt-4 d-flex column-gap-1 align-items-baseline">
                                    <span class="tracking-tight fw-bold text-4xl text-body-emphasis">$0</span>
                                    <!-- <span class="fw-semibold leading-6 text-sm text-body-secondary">/month</span> -->
                                </p>

                                <ul class="p-0 m-0 mt-4 row row-cols-1 text-sm leading-6 text-body-secondary gy-3">
                                    <li class="p-0 d-flex column-gap-3">
                                        <svg class="text-primary-emphasis" width="20" height="24" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                        </svg>
                                        Automatic content generation
                                    </li>
                                    <li class="p-0 d-flex column-gap-3">
                                        <svg class="text-primary-emphasis" width="20" height="24" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                        </svg>
                                        Grammar checking and correction
                                    </li>
                                    <li class="p-0 d-flex column-gap-3">
                                        <svg class="text-primary-emphasis" width="20" height="24" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                        </svg>
                                        Style suggestions and improvements
                                    </li>
                                    <li class="p-0 d-flex column-gap-3">
                                        <svg class="text-primary-emphasis" width="20" height="24" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                        </svg>
                                        Time-saving features
                                    </li>
                                </ul>
                            </div>

                            <div class="mt-5">
                                <a href="javascript:;" class="btn btn-secondary w-100 fw-semibold text-sm leading-6">
                                    Get started
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="max-w-md mx-auto mt-lg-n5 position-relative overflow-hidden" data-aos-delay="0" data-aos="flip-up" data-aos-duration="3000">
                        <div class="polka position-absolute h-100 w-100 z-n1 rounded-5 rounded-lg-0 rounded-top-lg-5 box" style="transform: translate3d(-10px, -20px, 0) scale(0.95);"></div>
                        <div class="p-5 h-100 rounded-5 rounded-lg-0 rounded-top-lg-5 border d-flex flex-column justify-content-between">
                            <div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="fw-semibold text-lg leading-8 text-primary-emphasis m-0">
                                        Startup
                                    </h3>
                                    <span class="badge px-2 py-2 bg-primary bg-opacity-10 text-primary-emphasis rounded-pill">
                                        Most popular
                                    </span>
                                </div>
                                <p class="m-0 mt-3 leading-6 text-sm text-body-secondary">
                                    A plan that scales with your rapidly growing business.
                                </p>
                                <p class="m-0 mt-4 d-flex column-gap-1 align-items-baseline">
                                    <span class="tracking-tight fw-bold text-4xl text-body-emphasis">$32</span>
                                    <span class="fw-semibold leading-6 text-sm text-body-secondary">/month</span>
                                </p>

                                <ul class="p-0 m-0 mt-4 row row-cols-1 text-sm leading-6 text-body-secondary gy-3">
                                    <li class="p-0 d-flex column-gap-3">
                                        <svg class="text-primary-emphasis" width="20" height="24" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                        </svg>
                                        Include all the basic plan
                                    </li>
                                    <li class="p-0 d-flex column-gap-3">
                                        <svg class="text-primary-emphasis" width="20" height="24" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                        </svg>
                                        Improved writing skills
                                    </li>
                                    <li class="p-0 d-flex column-gap-3">
                                        <svg class="text-primary-emphasis" width="20" height="24" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                        </svg>
                                        Enhanced content quality
                                    </li>
                                    <li class="p-0 d-flex column-gap-3">
                                        <svg class="text-primary-emphasis" width="20" height="24" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                        </svg>
                                        24-hour support response time
                                    </li>
                                    <li class="p-0 d-flex column-gap-3">
                                        <svg class="text-primary-emphasis" width="20" height="24" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                        </svg>
                                        Marketing automations
                                    </li>
                                </ul>
                            </div>

                            <div class="mt-5">
                                <a href="javascript:;" class="btn btn-primary w-100 fw-semibold text-sm leading-6">
                                    Buy plan
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="max-w-md mx-auto" data-aos-delay="0" data-aos="fade-right" data-aos-duration="3000">
                        <div class="p-5 h-100 rounded-5 rounded-lg-0 rounded-end-lg-5 border d-flex flex-column justify-content-between">
                            <div>
                                <h3 class="fw-semibold text-lg leading-8 text-body-emphasis m-0">
                                    Enterprise
                                </h3>
                                <p class="m-0 mt-3 leading-6 text-sm text-body-secondary">
                                    Ideal for larger projects.
                                </p>
                                <p class="m-0 mt-4 d-flex column-gap-1 align-items-baseline">
                                    <span class="tracking-tight fw-bold text-4xl text-body-emphasis">$48</span>
                                    <span class="fw-semibold leading-6 text-sm text-body-secondary">/month</span>
                                </p>

                                <ul class="p-0 m-0 mt-4 row row-cols-1 text-sm leading-6 text-body-secondary gy-3">
                                    <li class="p-0 d-flex column-gap-3">
                                        <svg class="text-primary-emphasis" width="20" height="24" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                        </svg>
                                        Unlimited products
                                    </li>
                                    <li class="p-0 d-flex column-gap-3">
                                        <svg class="text-primary-emphasis" width="20" height="24" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                        </svg>
                                        Unlimited subscribers
                                    </li>
                                    <li class="p-0 d-flex column-gap-3">
                                        <svg class="text-primary-emphasis" width="20" height="24" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                        </svg>
                                        Advanced analytics
                                    </li>
                                    <li class="p-0 d-flex column-gap-3">
                                        <svg class="text-primary-emphasis" width="20" height="24" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                        </svg>
                                        1-hour, dedicated support response time
                                    </li>
                                    <li class="p-0 d-flex column-gap-3">
                                        <svg class="text-primary-emphasis" width="20" height="24" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                        </svg>
                                        Marketing automations
                                    </li>
                                </ul>
                            </div>

                            <div class="mt-5">
                                <a href="javascript:;" class="btn btn-secondary w-100 fw-semibold text-sm leading-6">
                                    Buy plan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Testimonials -->
    <div class="overflow-hidden py-7 py-sm-8 py-xl-9 bg-body-tertiary">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide pb-5">
                <div class="carousel-indicators mb-0">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="mx-auto max-w-4xl text-center">
                            <img class="mx-auto" src="./assets/img/clients/client1.png" height="48" alt="Client Company" loading="lazy">
                            <figure class="m-0 mt-5">
                                <blockquote class="text-center fw-semibold text-body-emphasis text-2xl leading-9">
                                    <p class="m-0">
                                        “AI Writer Service has greatly improved the quality of my writing. It's like having a professional editor by my side, thank you so much for creating this product!”
                                    </p>
                                </blockquote>

                                <figcaption class="m-0 mt-5">
                                    <img class="mx-auto rounded-circle" width="40" height="40" src="./assets/img/small-team/st1.jpg" alt="Clinet Name" loading="lazy">
                                    <div class="mt-3 d-flex align-items-center justify-content-center text-base">
                                        <div class="fw-semibold text-body-emphasis">John Bond</div>
                                        <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="mx-3 text-body-emphasis" fill="currentColor">
                                            <circle cx="1" cy="1" r="1" />
                                        </svg>
                                        <div class="text-body-secondary">CEO of Aven</div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="mx-auto max-w-4xl text-center">
                            <img class="mx-auto" src="./assets/img/clients/client2.png" height="48" alt="Client Company" loading="lazy">
                            <figure class="m-0 mt-5">
                                <blockquote class="text-center fw-semibold text-body-emphasis text-2xl leading-9">
                                    <p class="m-0">
                                        “AI Writer Service has greatly improved the quality of my writing. It's like having a professional editor by my side, thank you so much for creating this product!”
                                    </p>
                                </blockquote>

                                <figcaption class="m-0 mt-5">
                                    <img class="mx-auto rounded-circle" width="40" height="40" src="./assets/img/small-team/st2.jpg" alt="Client name" loading="lazy">
                                    <div class="mt-3 d-flex align-items-center justify-content-center text-base">
                                        <div class="fw-semibold text-body-emphasis">Judith Bond</div>
                                        <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="mx-3 text-body-emphasis" fill="currentColor">
                                            <circle cx="1" cy="1" r="1" />
                                        </svg>
                                        <div class="text-body-secondary">CEO of Circle</div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="mx-auto max-w-4xl text-center">
                            <img class="mx-auto" src="./assets/img/clients/client3.png" height="48" alt="Client Company" loading="lazy">
                            <figure class="m-0 mt-5">
                                <blockquote class="text-center fw-semibold text-body-emphasis text-2xl leading-9">
                                    <p class="m-0">
                                        “AI Writer Service has greatly improved the quality of my writing. It's like having a professional editor by my side, thank you so much for creating this product!”
                                    </p>
                                </blockquote>

                                <figcaption class="m-0 mt-5">
                                    <img class="mx-auto rounded-circle" width="40" height="40" src="./assets/img/small-team/st3.jpg" alt="Client name" loading="lazy">
                                    <div class="mt-3 d-flex align-items-center justify-content-center text-base">
                                        <div class="fw-semibold text-body-emphasis">Alex Bond</div>
                                        <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="mx-3 text-body-emphasis" fill="currentColor">
                                            <circle cx="1" cy="1" r="1" />
                                        </svg>
                                        <div class="text-body-secondary">CEO of Amara</div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev d-none d-xl-inline" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon rtl-flip" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next d-none d-xl-inline" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon rtl-flip" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>


    <!-- FAQs -->
    <div class="overflow-hidden py-7 py-sm-8 py-xl-9">
        <div class="container">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-body-emphasis tracking-tight leading-10 fw-bold text-2xl m-0 mb-4">
                    Frequently asked questions
                </h2>

                <p class="text-body-secondary leading-7 text-base m-0">
                    Have a different question and can’t find the answer you’re looking for? Reach out to our support team by 
                    <a href="javascript:;" class="fw-semibold text-decoration-none">
                        sending us an email
                    </a>
                     and we’ll get back to you as soon as we can.
                </p>
            </div>

            <div class="row gx-sm-5 gy-5 mt-4">
                <div class="col-12 col-md-6 col-xl-4" data-aos-delay="0" data-aos="fade" data-aos-duration="3000">
                    <div>
                        <div class="text-body-emphasis leading-7 fw-semibold text-base">
                            What is an AI writer service?
                        </div>
                        <div class="text-body-secondary leading-7 text-base m-0 mt-2">
                            You boil the hell out of it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-4" data-aos-delay="100" data-aos="fade" data-aos-duration="3000">
                    <div>
                        <div class="text-body-emphasis leading-7 fw-semibold text-base">
                            How does AI writing work?
                        </div>
                        <div class="text-body-secondary leading-7 text-base m-0 mt-2">
                            You boil the hell out of it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-4" data-aos-delay="200" data-aos="fade" data-aos-duration="3000">
                    <div>
                        <div class="text-body-emphasis leading-7 fw-semibold text-base">
                            Can AI writers improve my website's SEO?
                        </div>
                        <div class="text-body-secondary leading-7 text-base m-0 mt-2">
                            You boil the hell out of it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-4" data-aos-delay="300" data-aos="fade" data-aos-duration="3000">
                    <div>
                        <div class="text-body-emphasis leading-7 fw-semibold text-base">
                            Is AI content plagiarism-free?
                        </div>
                        <div class="text-body-secondary leading-7 text-base m-0 mt-2">
                            You boil the hell out of it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-4" data-aos-delay="400" data-aos="fade" data-aos-duration="3000">
                    <div>
                        <div class="text-body-emphasis leading-7 fw-semibold text-base">
                            Can AI writers replace human writers entirely?
                        </div>
                        <div class="text-body-secondary leading-7 text-base m-0 mt-2">
                            You boil the hell out of it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-4" data-aos-delay="500" data-aos="fade" data-aos-duration="3000">
                    <div>
                        <div class="text-body-emphasis leading-7 fw-semibold text-base">
                            What is an AI writer service?
                        </div>
                        <div class="text-body-secondary leading-7 text-base m-0 mt-2">
                            You boil the hell out of it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- CTA -->
    <div id="cta" class="overflow-hidden py-7 py-sm-8 py-xl-9">
        <div class="container" data-aos-delay="0" data-aos="flip-down" data-aos-duration="3000">
            <div class="pt-xl-4 rounded-4 rounded-md-5 border overflow-hidden  position-relative">
                <img src="./assets/img/gradients/1.png" class="object-fit-cover position-absolute top-0 bottom-0 w-100 z-n2 mt-12 mt-sm-7 mt-xl-n5" alt="Gradinets" loading="lazy">
                <div class="polka position-absolute top-0 bottom-0 w-100 z-n1"></div>
                <div class="max-w-2xl mx-auto py-6 px-2">
                    <h2 class="m-0 fw-bold tracking-tight text-body-emphasis text-4xl text-center">
                        Transform Your Writing Skills Today.
                    </h2>
                    <p class="m-0 mt-4 text-lg leading-8 text-body-secondary text-center">
                        Experience the power of our AI Writer Service and create compelling content effortlessly.
                    </p>
                    <div class="mt-4 pt-3 d-flex align-items-center justify-content-center column-gap-4">
                        <a href="javascript:;" class="btn btn-lg btn-primary text-sm fw-semibold">
                            Get started
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Contact us -->
    <div id="contact-us" class="overflow-hidden py-7 py-sm-8 py-xl-9">
        <div class="container">
            <div class="row gy-5 gx-sm-5">
                <div class="col-12 col-lg-5" data-aos-delay="0" data-aos="fade" data-aos-duration="3000">
                    <div>
                        <h2 class="m-0 fw-bold tracking-tight text-3xl text-body-emphasis">
                            Get in touch
                        </h2>
                        <p class="m-0 mt-3 leading-7 ">
                            Have any questions or need assistance? Contact us today!
                        </p>
                    </div>

                    <div class="max-w-2xl mt-5">
                        <form class="row g-4 needs-validation" id="myForm" novalidate>
                            <div class="col-md-6">
                                <label for="nameForm" class="form-label text-sm">
                                    Full name
                                    <span class="text-danger-emphasis">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" name="nameForm" id="nameForm" required>
                                <div class="invalid-feedback text-xs">
                                    Please enter your full name.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="emailForm" class="form-label text-sm">
                                    Email address
                                    <span class="text-danger-emphasis">*</span>
                                </label>
                                <input type="email" class="form-control form-control-sm" name="emailForm" id="emailForm" required>
                                <div class="invalid-feedback text-xs">
                                    Please enter your email address.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="phoneForm" class="form-label text-sm">
                                    Phone number
                                    <span class="text-danger-emphasis">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" name="phoneForm" id="phoneForm" required>
                                <div class="invalid-feedback text-xs">
                                    Please enter your phone number.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="subjectForm" class="form-label text-sm">
                                    Subject
                                    <span class="text-danger-emphasis">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" name="subjectForm" id="subjectForm" required>
                                <div class="invalid-feedback text-xs">
                                    Please enter a subject for your message.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="messageForm" class="form-label text-sm">
                                    Your message
                                    <span class="text-danger-emphasis">*</span>
                                </label>
                                <textarea class="form-control form-control-sm" name="messageForm" id="messageForm" rows="3" required></textarea>
                                <div class="invalid-feedback text-xs">
                                    Please enter a message.
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                    <label class="form-check-label text-sm" for="gridCheck">
                                        I agree to the terms &amp; conditions and privacy policy
                                        <span class="text-danger-emphasis">*</span>
                                    </label>
                                    <div class="invalid-feedback text-xs">
                                        Please agree to the terms &amp; conditions and privacy policy.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-sm btn-primary w-100" id="sendMessage">
                                    Send Message
                                </button>
                            </div>

                            <!-- Alert message  -->
                            <div class="col-12" id="yourMessageIsSent"></div>
                        </form>
                    </div>
                </div>

                <div class="d-none d-lg-block col-12 col-lg-7" data-aos-delay="200" data-aos="flip-left" data-aos-duration="3000">
                    <div class="h-100 position-relative">
                        <div class="position-absolute top-0 end-0 bottom-0 start-0 z-n3 rounded-5">
                            <img src="./assets/img/bg/bg2.jpg" style="filter: grayscale(100%);" class="w-100 h-100 rounded-5 object-fit-cover" loading="lazy" alt="Image description">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer class="container py-4">
        <hr class="my-2 text-body-emphasis opacity-10">
        <div class="d-flex flex-column flex-md-row gap-4 justify-content-md-between align-items-md-center">
            <p class="text-body-tertiary text-xs leading-5 mb-0">
                © 
                <span class="current-year"></span> 
                Your Company, Inc. All rights reserved.
            </p>

            <div class="order-first order-md-last">
                <!-- intagram icon -->
                <a href="javascript:;"
                    class="btn bg-body-secondary text-body social my-2 p-2 me-3 rounded-circle"
                    >
                    <span class="d-flex justify-content-center align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                          </svg>
                    </span>
                </a>

                <!-- linkedIn icon -->
                <a href="javascript:;"
                    class="btn bg-body-secondary text-body social my-2 p-2 me-3 rounded-circle"
                    >
                    <span class="d-flex justify-content-center align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 448 512">
                            <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/>
                        </svg>
                    </span>
                </a>

                <!-- github icon -->
                <a href="javascript:;"
                    class="btn bg-body-secondary text-body social my-2 p-2 me-3 rounded-circle"
                    >
                    <span class="d-flex justify-content-center align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 496 512">
                            <path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/>
                        </svg>
                    </span>
                </a>

                <!-- youtube icon -->
                <a href="javascript:;"
                    class="btn bg-body-secondary text-body social my-2 p-2 rounded-circle"
                    >
                    <span class="d-flex justify-content-center align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </footer>



    <!-- Back to top button -->
    <button type="button" class="btn btn-primary btn-back-to-top rounded-circle justify-content-center align-items-center p-2">
        <svg class="rtl-flip" width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 9l6-6m0 0l6 6m-6-6v12a6 6 0 01-12 0v-3" />
        </svg>
    </button>


    
    <!-- Bootstrap JavaScript: Bundle with Popper -->
    <script src="./assets/libraries/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/libraries/aos/aos.js"></script>
    <script src="./assets/js/scripts.js"></script>
    <script src="./assets/php/contact/script.js"></script>


</body>
</html>