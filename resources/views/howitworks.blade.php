<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <script src="https://unpkg.com/vue@next"></script>
    <title>How it Works | Xi Aviation</title>
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
            <h2 class="font-bold text-white text-4xl md:text-5xl">How it works</h2>
        </div>
    </div>
    <div class="container py-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <div class="mt-2 md:mt-20">
                <h3 class="font-bold text-3xl md:text-4xl">Shared Private Jet flights with Pets</h3>
                <p class="text-2xl mt-5">K9 JETS allows your pets to be by your side in the cabin of a luxury private
                    jet rather than being restricted to the hold of a commercial aircraft. The service provides a
                    relaxed, stress-free environment for you and your four-legged companions.</p>
                <p class="text-2xl mt-5">No crates are required for dogs, regardless of size; however, our feline
                    friends must always be in their carriers</p>
                <p class="text-2xl mt-5 font-bold">Book a seat for yourself and your
                    four-legged friend at a fixed cost.</p>
            </div>
            <div>
                <img class="rounded-full w-1/2 md:mx-auto"
                    src="https://www.k9jets.com/wp-content/uploads/2022/09/round_image_1.png" alt="">
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-10">
            <div>
                <h3 class="text-2xl font-bold">Private Terminals</h3>
                <p class="text-2xl mt-5">All our flights depart from luxurious private terminals, and you are required
                    to arrive just 60 minutes before the time of departure. There are no queues for security or customs,
                    just super friendly staff catering to your every need.</p>
            </div>
            <div>
                <h3 class="text-2xl font-bold">Payments</h3>
                <p class="text-2xl mt-5">Pay by wire or with a debit/credit card and your funds will be kept secure in
                    our escrow account in line with the regulations of the US Department of Transport.</p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-10 md:mt-20">
            <div>
                <h3 class="font-bold text-2xl">Crowd Sourced Flights</h3>
                <p class="text-2xl mt-5">K9 JETS offers shared private jet flights with pets. <br><br>
                    All K9 JETS routes are made up of an outward-bound flight and a return flight. <br><br>
                    Your flight will be confirmed once the 75% passenger and pet threshold is reached for the full
                    route. We will keep you updated on the status of your flight(s) on a regular basis. <br><br>
                    If your flight (and the linked flight) do not reach the minimum threshold, we may cancel the
                    flight(s). This would be (at the very latest) 28 days in advance of your flight and we would then
                    offer you a 100% refund or re-accommodate you on a future flight. However, we do not anticipate the
                    cancellation of flights as we have received an outstanding amount of interest in K9 JETS. <br><br>
                    K9 JETS is a public charter operator. It is not a direct air carrier and does not own or operate any
                    aircraft. All flights will be operated by licensed pet friendly U.S. air carriers. <br><br>
                    We are offsetting the carbon emissions on all our flights, plus supporting volunteer projects for
                    stray dogs and cats.
                </p>
            </div>
            <div class="bg-blue-300 rounded-2xl">
                <ul class="list-disc p-10">
                    <li class="py-3 text-2xl">No cages required for dogs</li>
                    <li class="py-3 text-2xl">Dogs can sit on your lap or by your side in the cabin</li>
                    <li class="py-3 text-2xl">Cats must be in their carriers</li>
                    <li class="py-3 text-2xl">No queues for customs or security</li>
                    <li class="py-3 text-2xl">Complimentary bar and refreshments</li>
                    <li class="py-3 text-2xl">Secure site to upload passport and pet documentation</li>
                    <li class="py-3 text-2xl">We offset carbon emissions on all K9 JETS flights</li>
                    <li class="py-3 text-2xl">Supporting voluntary community projects for
                        stray dogs and cats</li>
                    <li class="py-3 text-2xl">20 kg luggage & carry-on per passenger</li>
                    <li class="py-3 text-2xl">One seat purchased entitles you to bring a maximum of two pets that weigh
                        under 50lbs each, OR one pet that weighs over 51lbs. If you have two pets, that each weigh over
                        51lbs, you will need to purchase two seats. This is to ensure the comfort and safety of your pet
                        onboard.</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bg-blue-100">
        <div class="container py-10">
            <p class="mb-10 text-2xl">What to expect once you have booked…</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div class="text-2xl">
                    <h4 class="text-blue-600 mb-4">On Booking</h4>
                    <p>Once your booking has been processed and your flight has been confirmed, we will arrange a group
                        video call with the passengers who will joining you on the journey. This is not by any means a
                        fully
                        automated service – we are very much hands-on.</p>
                </div>
                <div class="text-2xl">
                    <h4 class="text-blue-600 mb-4">Flight Brief</h4>
                    <p>A detailed Flight Brief will be emailed to you in advance and we will talk you through this. It
                        will
                        detail all the information required for your flight, including the seating plan, which is
                        bespoke
                        for your trip. Plus, this is an opportunity to answer any questions you may have.</p>
                </div>
                <div class="text-2xl">
                    <h4 class="text-blue-600 mb-4">Pet Documentation</h4>
                    <p>A few days before the flight we will be requesting your pet’s documentation, which in most cases
                        will
                        have been precleared by the relevant authorities at your destination. We are on hand to answer
                        any
                        questions you may have and can connect you to the authorities who will provide assistance and
                        guide
                        you through. We will notify you once your pet has been cleared to travel.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 py-10">
            <div>
                <img class="rounded-full w-1/2 md:mx-auto"
                    src="https://www.k9jets.com/wp-content/uploads/2022/09/round_image_1.png" alt="">
            </div>
            <div>
                <h3 class="font-bold text-3xl md:text-4xl">On the day of your flight</h3>
                <p class="text-2xl text-blue-800 my-5">Arrival</p>
                <p class="text-2xl">On the day of your flight, you will be departing from a deluxe private terminal
                    where there are absolutely no queues, providing a stress-free environment for you and your pets.
                    <br><br>
                    We ask you to arrive 60 minutes before the time of departure. <br><br>
                    Upon arrival you will be met by a welcoming team who will request your flight details and may ask to
                    see your passport.
                </p>
            </div>
        </div>
        <div class="py-5">
            <p class="text-2xl text-blue-800 my-5">Flight Lounge</p>
            <p class="text-2xl">The staff will take your luggage to be screened, while you relax and, more importantly,
                meet the other passengers and their pets who will be flying with you. There are available grassy areas
                adjacent to all the private terminals which your dog can utilise before the flight.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 py-10">
            <div>
                <p class="text-2xl text-blue-800 my-5">Boarding</p>
                <p class="text-2xl">
                    Approximately 15 minutes before departure, the Captain or First Officer for your flight will
                    introduce themselves to you, and escort you to the aircraft, which is normally a short walk away.
                    Your bags will already be loaded, and, if you are travelling alone you will receive support with any
                    hand luggage.
                    <br><br>
                    When you arrive at the aircraft steps your dogs can make their own way up, or can be carried,
                    however, they must always be on their leash. Support and encouragement will be provided if needed –
                    the crew are all pet friendly!
                    <br><br>
                    Passengers seated at the back of the aircraft board first, to avoid any unnecessary crossover.
                    <br><br>
                    Unpack your dog blankets, get yourself comfortable and enjoy a glass of champagne once you are
                    settled. The Flight Attendant will look after your every need during the flight.
                </p>
            </div>
            <div>
                <img class="rounded-full w-1/2 md:mx-auto"
                    src="https://www.k9jets.com/wp-content/uploads/elementor/thumbs/K9Jets-Boarding-q1v9enlvcqigywgs17zumqqginn2k3in4b3p0w1awg.jpg"
                    alt="">
            </div>
        </div>
        <div class="py-5">
            <p class="text-2xl text-blue-800 my-5">Landing</p>
            <p class="text-2xl">When you arrive at your destination your aircraft will be met by the private Ground
                Handling Team, and, in London, the Pet Team, who will board your aircraft to scan the microchips of your
                pets and cross reference the paperwork that has been precleared. In other destinations, you will exit
                the aircraft and then clear customs. Your pet paperwork will be checked at this point.
                <br><br>
                Your luggage will be off loaded and will join you in customs, and within minutes you will be on your
                way.
                <br><br>
                <b>Our teams can be of assistance to arrange onward travel to your final destination, whether a
                    pet-friendly private jet charter, pet taxi, or car hire.</b>
            </p>
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
