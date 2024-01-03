<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <script src="https://unpkg.com/vue@next"></script>
    <title>Aircraft | Xi Aviation</title>
</head>

<body class="bg-white flex flex-col">
    <!-- nav white signed in -->
    @auth
        <nav id="regisWhite" class="flex py-8 px-24 justify-between sticky top-0 text-gray-700 bg-white">
            <a href="{{ route('home') }}">
                <img class="w-30 h-10" src="../assets/logo-black.png" alt="" />
            </a>
            <div class="flex flex-col">
                <div class="flex space-x-6">
                    <img class="cursor-pointer custom object-cover" src="{{ asset('storage/pp/' . Auth::user()->image) }}"
                        alt="" onclick="popUpWhite()" />
                </div>
                <div id="profilePopUpWhite" class="bg-white text-gray-700 rounded-lg px-4 py-6 w-9/12 mt-3 ml-4"
                    style="display: none">
                    <div class="flex border-b-2 border-gray-100 mb-5 pb-5">
                        <img class="custom" src="{{ asset('storage/pp/' . Auth::user()->image) }}" alt="" />
                        <h1 class="text-2xl w-1/2 text-center pl-2">{{ Auth::user()->fullname }}</h1>
                    </div>
                    <div class="flex flex-col space-y-5">
                        <a href="{{ route('profile') }}">
                            <div class="flex">
                                <img src="../assets/userUnactive.svg" alt="" />
                                <p class="pl-4">Profile</p>
                            </div>
                        </a>
                        <a href="{{ route('profilePass') }}">
                            <div class="flex">
                                <img src="../assets/icon/lock.svg" alt="" />
                                <p class="pl-4">Change Password</p>
                            </div>
                        </a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <a href="">
                                <div class="flex">
                                    <img src="../assets/icon/door.svg" alt="" />
                                    <button type="submit" class="pl-4">Log Out</button>
                                </div>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    @endauth

    @guest
        <nav id="noregisWhite" class="flex py-8 px-4 md:px-24 justify-between sticky top-0 text-gray-700 bg-white">
            <img class="w-11persen" src="../assets/logo-black.png" alt="" />
            <div class="flex space-x-6">
                <button class="w-36 border-r-2 border-gray-700 pr-8" type="button">
                    <a href="{{ route('login') }}">Check Order</a>
                </button>
                <button class="w-20" type="button"><a href="{{ route('login') }}">Log in</a></button>
                <button class="w-32 border-2 border-gray-700 rounded-full hidden md:block" type="button">
                    <a href="{{ route('register') }}">Register</a>
                </button>
            </div>
        </nav>
    @endguest

    <div class="w-full bg-blue-500 p-5">
        <div class="container">
            <h2 class="font-bold text-white text-4xl md:text-5xl">Aircraft</h2>
        </div>
    </div>
    <div class="container py-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <div class="mt-2 md:mt-20">
                <h3 class="font-bold text-3xl md:text-4xl">K9 JETS uses a fleet of Gulfstream G-IVSP heavy jets operated
                    by Pegasus Elite Aviation or other US carriers. </h3>
                <p class="text-2xl mt-4">These jets provide a large, stand-up cabin (6’ 1”) that will accommodate up to
                    10 passengers plus pets in a luxurious setting, with a Flight Attendant who will provide assistance
                    throughout your journey. </p>
                <p class="text-2xl mt-4">The aircraft feature free domestic Gogo wireless internet, a worldwide
                    satellite phone, an aft full gourmet galley, an open bar, an entertainment system with CD and DVD
                    player, an iPod interface, Airshow, leather seats, 110-volt outlet, and two private enclosed
                    lavatories.</p>
                <p class="text-2xl mt-4 font-bold">Our operators are Argus Platinum Rated.</p>
            </div>
            <div>
                <img class="rounded-full w-1/2 md:mx-auto"
                    src="https://www.k9jets.com/wp-content/uploads/2022/09/round_image_1.png" alt="">
            </div>
        </div> 
        <div class="py-20">
            <img class="mx-auto" src="https://www.k9jets.com/wp-content/uploads/2023/02/GIV-SP-N489VR-12-Layout-1024x225.jpg" alt="">
        </div>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
            <div class="text-center">
                <h3 class="font-extrabold text-7xl text-red-700">550</h3>
                <p>Cruising Speed (mph)</p>
            </div>
            <div class="text-center">
                <h3 class="font-extrabold text-7xl text-red-700">4,987</h3>
                <p>Statute Miles</p>
            </div>
            <div class="text-center">
                <h3 class="font-extrabold text-7xl text-red-700">9</h3>
                <p>Flight Time (hrs)</p>
            </div>
            <div class="text-center">
                <h3 class="font-extrabold text-7xl text-red-700">45,000</h3>
                <p>Crusing Altitude (ft)</p>
            </div>
        </div>
    </div>
    
    <footer class="grid grid-cols-1 md:grid-cols-4 gap-4 border-t-2 container py-8">
        <!-- satu -->
        <div>
            <img style="width: 150px" src="../assets/logo-black.png" alt="" />
        </div>
        <!-- dua -->
        <div>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="{{ route('about') }}">About</a></p>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="{{ route('howitworks') }}">How it
                    Works</a></p>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="{{ route('aircraft') }}">Aircraft</a></p>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="">Where We Fly</a></p>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="{{ route('contact') }}">Contact</a></p>
        </div>
        <!-- tiga -->
        <!-- empat -->
        <div>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="">Participant Agreement</a></p>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="">Cookie Policy</a></p>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="">Terms and Condition</a></p>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="">Privacy Policy</a></p>
        </div>
        <!-- lima -->
        <div>
            <h1 class="text-gray-800 font-semibold text-lg">Follow Us</h1>
            <div class="flex py-2">
                <a href="https://www.facebook.com/"><img class="pr-2" src="../assets/facebook.svg"
                        alt="" /></a>
                <a href="https://twitter.com/"><img class="px-2" src="../assets/twitter.svg" alt="" /></a>
                <a href="https://instagram.com/"><img class="px-2" src="../assets/instagram.svg"
                        alt="" /></a>
                <a href="https://linkedin.com/"><img class="px-2" src="../assets/linkedin.svg"
                        alt="" /></a>
            </div>
        </div>
    </footer>
    <!-- copyrgith -->
    <div class="border-t-2 container py-8">
        <h1 class="text-center text-gray-500">
            ©{{ date('Y') }} Xi Aviation, Inc. All Rights Reserved.
        </h1>
    </div>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/tiketScript.js') }}"></script>

</body>

</html>
