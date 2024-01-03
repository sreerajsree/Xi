<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <script src="https://unpkg.com/vue@next"></script>
    <title>About | Xi Aviation</title>
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
            <h2 class="font-bold text-white text-4xl md:text-5xl">About</h2>
        </div>
    </div>
    <div class="container py-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <div class="mt-2 md:mt-20">
                <h3 class="font-bold text-3xl md:text-4xl">The Story Behind
                    K9 JETS</h3>
                <p class="text-2xl mt-5">In early 2022 our sister company, G6 AVIATION, received an unusual quote
                    request
                    for a flight from
                    London to New Jersey for 10 passengers and ten dogs! TEN DOGS!</p>
            </div>
            <div>
                <img class="rounded-full w-1/2 md:mx-auto"
                    src="https://www.k9jets.com/wp-content/uploads/elementor/thumbs/K9Jets-Pomeranian-q1v9ex0bosg7f0elc5sgju1sj6s00kze96sw4glt8g.jpg"
                    alt="">
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-5">
            <div>
                <p class="text-2xl mt-5">We were quickly introduced to a grassroots Facebook group, its mission was to
                    link up people interested in sharing charter planes, so their pets didn’t have to fly as cargo/
                    excess baggage. Katy originally started the group so she could fly with her four dogs and two cats
                    by her side, and she has continued to manage it after her successful flight in August 2021. Members,
                    now around 30,000, seek to share the cost of a jet charter with all administration currently being
                    covered by volunteers within the group.</p>
            </div>
            <div>
                <p class="text-2xl mt-5">Quickly recovering from our surprise of over ten dogs, in the last 12 months,
                    G6
                    AVIATION has flown over 100 pets and their owners across the Atlantic, all enjoying the comfort of a
                    private jet cabin.</p>
                <p class="text-2xl mt-3 font-bold">In view of this demand, K9 JETS™ was created in July 2022 to make it
                    even easier
                    for you and your pets to travel.</p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-5">
            <div>
                <img class="rounded-full w-1/2 md:mx-auto"
                    src="https://www.k9jets.com/wp-content/uploads/elementor/thumbs/K9Jets-Founders-q1v9eqfdx8mbxqcokr7qc80uat9676tu4p25gpx4ds.jpg"
                    alt="">
            </div>
            <div class="mt-2 md:mt-20">
                <h3 class="font-bold text-3xl md:text-4xl">Who is behind
                    K9 JETS</h3>
                <p class="text-2xl mt-5">K9 JETS was founded by a Birmingham-based couple, executive assistant Kirsty
                    Golder and private pilot Adam Golder.</p>
                <p class="text-2xl mt-5">The expertise gained within their boutique private jet brokerage G6 AVIATION
                    (catering for high-net-worth families, music moguls, footballers, and royals), has been the
                    springboard, enabling a new service dedicated to pet owners to be tailored within the charter
                    market, delivering the same high level of customer service already committed to the G6 client base.
                </p>
            </div>
        </div>
        <div class="mt-10">
            <h3 class="font-bold text-2xl md:text-5xl">Why K9 JETS?</h3>
            <p class="text-2xl mt-5">If you are relocating or travelling for leisure with your pet you can book a seat
                on one of the charters. We are operating under an approval provided by the US Department of
                Transportation. Your funds are protected in escrow.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-10">
            <div>
                <img class="w-full" src="https://www.k9jets.com/wp-content/uploads/2023/02/Earth-Hub.png" alt="">
                <p class="text-blue-600 text-xl">Carbon Offsetting​</p>
                <p class="text-2xl mt-5">At K9 JETS it is our mission to offset the cost of carbon that is produced on
                    every flight, and this is automatically included in your seat price. We are working with our friends
                    at <a href="http://www.earth-hub.co.uk/" class="text-red-500">EarthHub</a> who are trusted experts in carbon compliance and carbon reduction. All of our carbon
                    offsets are backed by either Verra (VCS) or the Gold Standard, meaning you can be rest assured that
                    your flight is offset by globally recognised offsetting schemes</p>
            </div>
            <div>
                <img class="w-full" src="https://www.k9jets.com/wp-content/uploads/2023/04/animal-sos-2.jpg" alt="">
                <p class="text-blue-600 text-xl">Volunteer Support</p>
                <p class="text-2xl mt-5 mb-3">K9 JETS is a proud supporter of Animal SOS Sri Lanka, a UK-registered charity
                    that is dedicated to improving the lives of stray animals in Sri Lanka.
                    <br>
                    Animal SOS Sri Lanka’s mission is to alleviate the suffering of stray animals by providing them with
                    a free-roaming sanctuary where they can receive life-saving veterinary care, rehabilitation, and
                    refuge.
                </p>
                <a href="www.animalsos-sl.com" class="text-2xl text-red-500">www.animalsos-sl.com</a>
                <p class="text-2xl mt-3">
                    UK Registered Charity Number 1119902
                </p>
            </div>
        </div>
    </div>
    <footer class="grid grid-cols-1 md:grid-cols-4 gap-10 border-t-2 container py-8">
        <!-- satu -->
        <div>
            <img style="width: 150px" src="../assets/logo-black.png" alt="" />
        </div>
        <!-- dua -->
        <div>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="{{ route('about') }}">About</a></p>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="{{ route('howitworks') }}">How it Works</a></p>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="">Aircraft</a></p>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="">Where We Fly</a></p>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="">Contact</a></p>
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
