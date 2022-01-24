<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}}</title>
    <link rel="icon" href="{{asset("images/tailwind_mark.svg")}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .main {
            padding: 30px;
        }
    </style>
</head>
<body class="antialiased scroll-smooth snap-both">
{{--Navbar--}}
<nav class="w-full flex justify-between snap-always">
    <div class="flex py-3 px-5">
        <a href="#">
            <img src="{{asset('images/tailwind_mark.svg')}}" alt="" class="w-10 h-10">
            <h1 class="text-3xl py-1 px-1 font-bold bg-clip-text text-transparent bg-gradient-to-r from-red-500 to-red-600">
                <a href="#">{{config('app.name')}}</a></h1>
        </a>
    </div>
    <div class="hidden md:flex px-5">
        <ul class="hidden md:flex">
            <li class="active px-5 py-4 underline underline-offset-8 decoration-red-500 font-semibold"><a
                    href="#">Home</a></li>
            <li class="px-5 py-4 hover:underline underline-offset-8 decoration-red-500 transition duration-300"><a
                    href="#">Contact Us</a>
            </li>
            <li class="px-5 py-4 hover:underline underline-offset-8 decoration-red-500 transition duration-300"><a
                    href="#">About Us</a>
            </li>
        </ul>
    </div>
    <div class="md:hidden flex items-center py-3 px-5">
        <button class="outline-none mobile-menu-button">
            <svg
                class="w-6 h-6 text-black-500"
                x-show="!showMenu"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>
</nav>
<div class="hidden mobile-menu duration-300 px-5 py-3 md:hidden">
    <ul class="">
        <li class="active"><a href="#"
                              class="block text-sm px-2 py-4 text-white bg-red-500 font-semibold">Home</a></li>
        <li><a href="#" class="block text-sm px-2 py-4 hover:bg-red-500 hover:text-white transition duration-300">Contact
                Us</a></li>
        <li><a href="#" class="block text-sm px-2 py-4 hover:bg-red-500 hover:text-white transition duration-300">About
                Us</a>
        </li>
    </ul>
</div>
{{--Navbar--}}

{{--Main--}}

<div class="main">
    <div id="carouselExampleSlidesOnly" class="carousel slide relative snap-always" data-bs-ride="carousel">
        <div class="carousel-inner relative w-full overflow-hidden">
            <div class="carousel-item active relative float-left w-full">
                <img
                    src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp"
                    class="block w-full"
                    alt="Wild Landscape"
                />
            </div>
            <div class="carousel-item relative float-left w-full">
                <img
                    src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp"
                    class="block w-full"
                    alt="Camera"
                />
            </div>
            <div class="carousel-item relative float-left w-full">
                <img
                    src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp"
                    class="block w-full"
                    alt="Exotic Fruits"
                />
            </div>
        </div>
    </div>

    <div class="flex space-x-2 justify-center mt-10 mb-2 snap-always">
        <h2 class="text-4xl font-medium leading-tight text-gray-800">
            Belajar
            <span
                class="inline-block py-1.5 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-gradient-to-r from-amber-300 to-amber-500 text-black rounded"><p></p>LaraTail</span>
        </h2>
    </div>
    <p class="flex justify-center text-center antialiased mb-10">
        LaraTail adalah project yang menggunakan Laravel untuk framework back-end dan Tailwind CSS untuk framework
        front-end
    </p>

    <div class="grid grid-cols-none snap-always mb-10 text-center gap-x-2 gap-y-5 md:gap-y-0 md:grid-cols-2">
        <div class="">
            <img src="{{asset('images/laravel_logo.jpg')}}" alt="">
        </div>
        <div>
            <h1 class="text-2xl mb-5 font-bold textcenter bg-gradient-to-r from-amber-300 to-amber-500 text-black inline-block rounded p-2 justify-center">
                Kenapa Menggunakan Laravel</h1>

            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div
                    class="accordion-item border-t-0 border-l-0 border-r-0 rounded-none bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0" id="flush-headingOne">
                        <button class="accordion-button
      relative
      flex
      items-center
      w-full
      py-4
      px-5
      text-base text-gray-800 text-left
      bg-white
      border-0
      rounded-none
      transition
      focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                aria-expanded="false" aria-controls="flush-collapseOne">
                            Accordion Item #1
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse border-0 collapse show"
                         aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body py-4 px-5">Placeholder content for this accordion, which is intended
                            to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion
                            body.
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-l-0 border-r-0 rounded-none bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0" id="flush-headingTwo">
                        <button class="accordion-button
      collapsed
      relative
      flex
      items-center
      w-full
      py-4
      px-5
      text-base text-gray-800 text-left
      bg-white
      border-0
      rounded-none
      transition
      focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                aria-expanded="false" aria-controls="flush-collapseTwo">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse border-0 collapse"
                         aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body py-4 px-5">Placeholder content for this accordion, which is intended
                            to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion
                            body. Let's imagine this being filled with some actual content.
                        </div>
                    </div>
                </div>
                <div
                    class="accordion-item border-l-0 border-r-0 border-b-0 rounded-none bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0" id="flush-headingThree">
                        <button class="accordion-button
      collapsed
      relative
      flex
      items-center
      w-full
      py-4
      px-5
      text-base text-gray-800 text-left
      bg-white
      border-0
      rounded-none
      transition
      focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                aria-expanded="false" aria-controls="flush-collapseThree">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                         aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body py-4 px-5">Placeholder content for this accordion, which is intended
                            to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion
                            body. Nothing more exciting happening here in terms of content, but just filling up the
                            space to make it look, at least at first glance, a bit more representative of how this would
                            look in a real-world application.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid snap-always grid-cols-none text-center gap-x-2 gap-y-5 md:gap-y-0 md:grid-cols-2">
        <div class="">
            <img class="bg-auto w-96 h-96" src="{{asset('images/logo.svg')}}" alt="">
        </div>
        <div>
            <h1 class="text-2xl mb-5 font-bold textcenter bg-gradient-to-r from-amber-300 to-amber-500 text-black inline-block rounded p-2 justify-center">
                Kenapa Menggunakan Tailwind CSS</h1>

            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div
                    class="accordion-item border-t-0 border-l-0 border-r-0 rounded-none bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0" id="flush-headingOne">
                        <button class="accordion-button
      relative
      flex
      items-center
      w-full
      py-4
      px-5
      text-base text-gray-800 text-left
      bg-white
      border-0
      rounded-none
      transition
      focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                aria-expanded="false" aria-controls="flush-collapseOne">
                            Accordion Item #1
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse border-0 collapse show"
                         aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body py-4 px-5">Placeholder content for this accordion, which is intended
                            to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion
                            body.
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-l-0 border-r-0 rounded-none bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0" id="flush-headingTwo">
                        <button class="accordion-button
      collapsed
      relative
      flex
      items-center
      w-full
      py-4
      px-5
      text-base text-gray-800 text-left
      bg-white
      border-0
      rounded-none
      transition
      focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                aria-expanded="false" aria-controls="flush-collapseTwo">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse border-0 collapse"
                         aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body py-4 px-5">Placeholder content for this accordion, which is intended
                            to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion
                            body. Let's imagine this being filled with some actual content.
                        </div>
                    </div>
                </div>
                <div
                    class="accordion-item border-l-0 border-r-0 border-b-0 rounded-none bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0" id="flush-headingThree">
                        <button class="accordion-button
      collapsed
      relative
      flex
      items-center
      w-full
      py-4
      px-5
      text-base text-gray-800 text-left
      bg-white
      border-0
      rounded-none
      transition
      focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                aria-expanded="false" aria-controls="flush-collapseThree">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                         aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body py-4 px-5">Placeholder content for this accordion, which is intended
                            to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion
                            body. Nothing more exciting happening here in terms of content, but just filling up the
                            space to make it look, at least at first glance, a bit more representative of how this would
                            look in a real-world application.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

{{--Main--}}


{{--Footer--}}
<footer class="bg-red-500 text-center lg:text-left snap-always">

    <div class="container px-6 pt-6">
        <div class="flex justify-center mb-6">
            <a href="#!" type="button"
               class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
                <svg aria-hidden="true"
                     focusable="false"
                     data-prefix="fab"
                     data-icon="facebook-f"
                     class="w-2 h-full mx-auto"
                     role="img"
                     xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 320 512"
                >
                    <path
                        fill="currentColor"
                        d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
                    ></path>
                </svg>
            </a>

            <a href="#!" type="button"
               class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
                <svg aria-hidden="true"
                     focusable="false"
                     data-prefix="fab"
                     data-icon="twitter"
                     class="w-3 h-full mx-auto"
                     role="img"
                     xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 512 512"
                >
                    <path
                        fill="currentColor"
                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
                    ></path>
                </svg>
            </a>

            <a href="#!" type="button"
               class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
                <svg aria-hidden="true"
                     focusable="false"
                     data-prefix="fab"
                     data-icon="google"
                     class="w-3 h-full mx-auto"
                     role="img"
                     xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 488 512"
                >
                    <path
                        fill="currentColor"
                        d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"
                    ></path>
                </svg>
            </a>

            <a href="#!" type="button"
               class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
                <svg aria-hidden="true"
                     focusable="false"
                     data-prefix="fab"
                     data-icon="instagram"
                     class="w-3 h-full mx-auto"
                     role="img"
                     xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 448 512"
                >
                    <path
                        fill="currentColor"
                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                    ></path>
                </svg>
            </a>

            <a href="#!" type="button"
               class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
                <svg aria-hidden="true"
                     focusable="false"
                     data-prefix="fab"
                     data-icon="linkedin-in"
                     class="w-3 h-full mx-auto"
                     role="img"
                     xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 448 512"
                >
                    <path
                        fill="currentColor"
                        d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"
                    ></path>
                </svg>
            </a>

            <a href="#!" type="button"
               class="rounded-full border-2 border-white text-white leading-normal uppercase hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out w-9 h-9 m-1">
                <svg aria-hidden="true"
                     focusable="false"
                     data-prefix="fab"
                     data-icon="github"
                     class="w-3 h-full mx-auto"
                     role="img"
                     xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 496 512"
                >
                    <path
                        fill="currentColor"
                        d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"
                    ></path>
                </svg>
            </a>
        </div>
    </div>

    <hr>

    <div class="container align-middle p-6 text-white">
        <div class="grid lg:grid-cols-2 gap-4">
            <div class="mb-6 md:mb-0">
                <h5 class="font-medium mb-2 uppercase">Laravel</h5>

                <p class="mb-4">
                    Laravel adalah salah satu Framework PHP yang paling populer dan paling banyak digunakan di seluruh
                    dunia dalam membangun aplikasi web mulai dari proyek kecil hingga besar. Framework ini banyak
                    digunakan oleh Web Developer karena kinerja, fitur, dan skalabilitas nya.
                </p>
            </div>

            <div class="mb-6 md:mb-0">
                <h5 class="font-medium mb-2 uppercase">Tailwind CSS</h5>

                <p class="mb-4">
                    Tailwind css adalah css framework yang menawarkan konsep baru dengan konsep utility first di mana
                    kamu tidak perlu lagi memikirkan panjang nama kelas untuk komponen HTMLnya. Tailwind terdiri dari
                    nama kelas yang cukup intuitif untuk digunakan
                </p>
            </div>
        </div>
    </div>

    <div class="text-center text-white p-4" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright:
        <a class="text-white" href="https://tailwind-elements.com/">LaraTail Projects</a>
    </div>
</footer>
{{--Footer--}}

{{--Script--}}
<script>
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");

    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    })
</script>
{{--Script--}}
</body>
</html>
