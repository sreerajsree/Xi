<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>Contact | Xi Aviation</title>
</head>

<body class="bg-white flex flex-col">
    <!-- nav white signed in -->
    @auth
    <nav id="regisWhite" class="flex py-8 container justify-between sticky top-0 text-gray-700 bg-white">
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
            <h2 class="font-bold text-white text-4xl md:text-5xl">Contact</h2>
        </div>
    </div>
    <div class="container py-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <div class="mt-2 md:mt-20">
                <p class="text-2xl mt-3">If you have questions regarding your travel arrangements or would like to know
                    more about K9 JETS, please do not hesitate to reach out to us.</p>
                <p class="text-2xl mt-3 font-bold">Speak to one of the team</p>
                <p class="text-2xl mt-3 font-bold">Call us 24/7 <a href="tel:+44 121 546 0400" class="text-red-700">+44
                        121 546 0400</a></p>
                <p class="text-2xl mt-3 font-bold">or <a href="tel:+001 201 426 6268" class="text-red-700">+001 201 426
                        6268</a></p>
                <p class="text-2xl font-thin mt-10">(Calls to our US number will be charged at your local tariff rate.)
                </p>
            </div>
            <div>
                <img class="rounded-full w-1/2 md:mx-auto"
                    src="https://www.k9jets.com/wp-content/uploads/elementor/thumbs/K9Jets-Boarding-q1v9enlvcqigywgs17zumqqginn2k3in4b3p0w1awg.jpg"
                    alt="">
            </div>
        </div>
        <div class="py-20 text-center">
            <p class="text-2xl font-bold">We look forward to hearing from you. </p>
        </div>
        <div class="max-w-2xl mx-auto bg-white p-0 md:p-12">
            <form>
                <div class="grid gap-6 mb-6 lg:grid-cols-2">
                    <div>
                        <label for="first_name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">First name</label>
                        <input type="text" id="first_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>
                    <div>
                        <label for="last_name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Last name</label>
                        <input type="text" id="last_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>
                    <div>
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email
                            address</label>
                        <input type="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>
                    <div>
                        <label for="phone"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Phone
                            number</label>
                        <input type="tel" id="phone"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                    </div>
                </div>

                <div class="mb-6">
                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Message</label>
                    <textarea type="message" id="message"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required></textarea>
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 py-10">
            <div class="text-2xl">
                <h3 class="font-bold text-4xl">Media</h3>
                <p class="my-5">For all press and public relations enquiries contact</p>
                <p><a href="mailto:fly@k9jets.com" class="text-red-700">fly@k9jets.com</a></p>
                <p class="my-5"><a href="tel:+44 (0) 121 546 0400" class="text-red-700">+44 (0) 121 546 0400</a></p>
            </div>
            <div class="text-2xl">
                <h3 class="font-bold text-4xl">Private Jet Charter</h3>
                <p class="my-5">If you would like to discuss a private jet charter for you and your family, please contact our sister company G6 AVIATION who will be pleased to assist you.</p>
                <p><a href="www.g6aviation.com" class="text-red-700">www.g6aviation.com</a></p>
                <p class="my-5"><a href="mailto:fly@g6aviation.com" class="text-red-700">fly@g6aviation.com</a></p>
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
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="{{ route('aircraft') }}">Aircraft</a>
            </p>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="{{ route('wtf') }}">Where We Fly</a>
            </p>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="{{ route('contact') }}">Contact</a></p>
        </div>
        <!-- tiga -->
        <!-- empat -->
        <div>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="{{ route('agreement') }}">Participant
                    Agreement</a></p>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="{{ route('terms') }}">Cookie Policy</a>
            </p>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="{{ route('terms') }}">Terms and
                    Condition</a></p>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="{{ route('privacy') }}">Privacy
                    Policy</a></p>
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
