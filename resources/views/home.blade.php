<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <script src="https://unpkg.com/vue@next"></script>
    <title>Xi Aviation</title>
</head>

<body class="bg-white flex flex-col">
    <div class="header bg-pesawat text-white">
        <!-- start nav -->
        <!-- nav blue signed in -->
        <nav id="regisBlue" class="flex py-8 container md:px-24 justify-between sticky top-0">
            <a href="{{ route('home') }}">
                <img class="w-11persen" src="../assets/logo.png" alt="" />
            </a>
            <div class="flex flex-col">
                <div class="flex space-x-6">
                    <button class="w-36 pr-8" type="button">
                        <a href="{{ route('order') }}">Check Order</a>
                    </button>
                    <img class="cursor-pointer custom object-cover"
                        src="{{ asset('storage/pp/' . Auth::user()->image) }}" alt="" onclick="popUpBlue()" />
                </div>
                <div id="profilePopUpBlue" class="bg-white text-gray-700 rounded-lg px-4 py-6 w-9/12 mt-3 ml-4"
                    style="display: none">
                    <div class="flex border-b-2 border-gray-100 mb-5 pb-5">
                        <img class="custom" src="{{ asset('storage/pp/' . Auth::user()->image) }}" alt="" />
                        <h1 class="text-2xl w-1/2 text-center pl-2">{{ Auth::user()->fullname }}</h1>
                    </div>
                    <div class="flex flex-col space-y-5">
                        <a href="{{ route('profile') }}">
                            <div class="flex">
                                <img src="../assets/userUnactive.svg" class="" alt="" />
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
        <!-- stop nav -->
        <div class="flex flex-col text-center my-6">
            <h1 class="text-4xl font-semibold tracking-widest">
                Book your flight right from seat
            </h1>
            <!-- carousel -->
            {{-- <div class="one-time mx-auto my-6">
                <div>
                    <img src="../assets/carousel/300k.svg" />
                </div>
                <div>
                    <img src="../assets/carousel/500k.svg" />
                </div>
                <img src="../assets/carousel/20persen.svg" alt="" />
                <div>
                    <img src="../assets/carousel/30persen.svg" alt="" />
                </div>
            </div> --}}
        </div>
    </div>
    <!-- nav white signed in -->
    <nav id="regisWhite" class="flex py-8 container md:px-24 justify-between sticky top-0 text-gray-700 bg-white">
        <img class="w-30 h-10" src="../assets/logo-black.png" alt="" />
        <div class="flex flex-col">
            <div class="flex space-x-6">
                <button class="w-36 pr-8" type="button">
                    <a href="{{ route('order') }}">Check Order</a>
                </button>
                <img class="cursor-pointer custom  object-cover" src="{{ asset('storage/pp/' . Auth::user()->image) }}"
                    alt="" onclick="popUpWhite()" />
            </div>
            <div id="profilePopUpWhite" class="bg-white text-gray-700 rounded-lg px-4 py-6 w-9/12 mt-3 ml-4"
                style="display: none">
                <div class="flex border-b-2 border-gray-100 mb-5 pb-5">
                    <img class="custom" src="{{ asset('storage/pp/' . Auth::user()->image) }}" alt="" />
                    <h1 class="text-2xl w-1/2 text-center pl-2">{{ Auth::user()->fullname }}</h1>
                </div>
                <div class="flex flex-col space-y-5">
                    <div class="flex">
                        <img src="../assets/userUnactive.svg" alt="" />
                        <a href="{{ route('profile') }}">
                            <p class="pl-4">Profile</p>
                        </a>
                    </div>
                    <div class="flex">
                        <img src="../assets/icon/lock.svg" alt="" />
                        <a href="{{ route('profilePass') }}">
                            <p class="pl-4">Change Password</p>
                        </a>
                    </div>
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
    <!-- ini yang ituannya tiket.com -->
    <form action="">

        <div id="btnModal"
            class="border-2 shadow-lg bg-white container text-gray-400 rounded-lg p-12 flex flex-col rounded-2xl">
            <h1 class="text-black text-3xl font-semibold">
                Where would you like to go?
            </h1>
            <!-- menu milih mesen -->
            <div class="flex flex-col my-4">
                <!-- atas -->
                <div class="flex flex-row">
                    <!-- from -->
                    <div class="flex flex-col">
                        <p>From</p>
                        <div class="flex flex-row border-b-2 border-gray-100 mt-1">
                            <img src="../assets/icon/departure.svg" alt="" />
                            <!-- dari sini -->
                            <div id="fromWhite" class="mx-4">
                                <!-- ini yg munculin valuenya -->
                                <p id="valueFromWhite">@{{ selected }}</p>
                                <!-- dropdownnya -->
                                <select v-model="selected" class="w-150">
                                    <option v-for="option in options" v-bind:value="option.value">
                                        @{{ option.text }}
                                    </option>
                                </select>
                                <!-- dropdownnya -->
                            </div>
                            <!-- sampe sini -->
                        </div>
                    </div>
                    <!-- to -->
                    <div class="flex flex-col">
                        <p>To</p>
                        <!-- cari cara dropdown semua bandaranya -->
                        <div class="flex flex-row border-b-2 border-gray-100 mt-1">
                            <img src="../assets/icon/landing.svg" alt="" />
                            <!-- dari sini -->
                            <div id="toWhite" class="mx-4">
                                <!-- ini yg munculin valuenya -->
                                <p id="valueToWhite">@{{ selected }}</p>
                                <!-- dropdownnya -->
                                <select v-model="selected" class="w-150">
                                    <option v-for="option in options" v-bind:value="option.value">
                                        @{{ option.text }}
                                    </option>
                                </select>
                                <!-- dropdownnya -->
                            </div>
                            <!-- sampe sini -->
                        </div>
                    </div>
                    <!-- passenger -->
                    <div class="flex flex-col ml-10 w-1/2">
                        <p>Passengers</p>
                        <div class="flex flex-row border-b-2 border-gray-100 mt-4">
                            <img src="../assets/icon/passenger.svg" alt="" />
                            <input class="pl-2 w-1/2" type="number" name="adults" id=""
                                placeholder="Adult" />
                            <img src="../assets/icon/pets.svg" alt="" />
                            <input class="pl-2 w-1/2" type="number" name="children" id=""
                                placeholder="Pets" />
                        </div>
                    </div>
                </div>
                <!-- bawah -->
                <div class="flex flex-row my-4">
                    <!-- departure date-->
                    <div class="flex flex-col">
                        <p>Departure Date</p>
                        <!-- cari cara dropdown semua bandaranya -->
                        <div class="flex flex-row border-b-2 border-gray-100 mt-4">
                            <img src="../assets/icon/calendar.svg" alt="" />
                            <input class="pl-2" type="date" name="date" id="" />
                        </div>
                    </div>
                    <!-- seat class -->
                    <div class="flex flex-col mx-40">
                        <p>Seat Class</p>
                        <!-- cari cara dropdown semua bandaranya -->
                        <div class="flex flex-row border-b-2 border-gray-100 mt-2">
                            <img src="../assets/icon/seat.svg" alt="" />
                            <!-- dari sini -->
                            <div id="seatWhite" class="mx-4">
                                <!-- ini yg munculin valuenya -->
                                <p id="valueSeatWhite">@{{ selected }}</p>
                                <!-- dropdownnya -->
                                <select v-model="selected" class="w-150">
                                    <option v-for="option in options" v-bind:value="option.value">
                                        @{{ option.text }}
                                    </option>
                                </select>
                                <!-- dropdownnya -->
                            </div>
                            <!-- sampe sini -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- button -->
            <div class="flex flex-row-reverse">
                <button type="submit"
                    class="biru-button text-white p-3 rounded-md font-semibold w-1/6 hover:bg-blue-700 hover:shadow-lg">
                    Book Now
                </button>
            </div>
        </div>
    </form>
    <!-- modalnya -->
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div id="modalnya" class="modal">
            <div class="border-2 shadow-lg bg-white mx-56 text-gray-400 rounded-lg p-12 flex flex-col rounded-2xl">
                <h1 class="text-black text-3xl font-semibold">
                    Where would you like to go?
                </h1>
                <!-- menu milih mesen -->
                <div class="flex flex-col my-4">
                    <!-- atas -->
                    <div class="flex flex-row">
                        <!-- from -->
                        <div class="flex flex-col">
                            <p>From</p>
                            <div class="flex flex-row border-b-2 border-gray-100 mt-1">
                                <img src="../assets/icon/departure.svg" alt="" />
                                <!-- dari sini -->
                                <div id="fromModal" class="mx-4">
                                    <!-- ini yg munculin valuenya -->
                                    <p id="valueFromModal">@{{ selected }}</p>
                                    <!-- dropdownnya -->
                                    <select name="from" v-model="selected" class="w-150"
                                        value="@{{ option.value }}">
                                        <option v-for="option in options" v-bind:value="option.value">
                                            @{{ option.text }}
                                        </option>
                                    </select>
                                    <!-- dropdownnya -->
                                </div>
                                <!-- sampe sini -->
                            </div>
                        </div>
                        <!-- to -->
                        <div class="flex flex-col">
                            <p>To</p>
                            <!-- cari cara dropdown semua bandaranya -->
                            <div class="flex flex-row border-b-2 border-gray-100 mt-1">
                                <img src="../assets/icon/landing.svg" alt="" />
                                <!-- dari sini -->
                                <div id="toModal" class="mx-4">
                                    <!-- ini yg munculin valuenya -->
                                    <p id="valueToModal">@{{ selected }}</p>
                                    <!-- dropdownnya -->
                                    <select name="to" v-model="selected" class="w-150"
                                        value="@{{ option.value }}">
                                        <option v-for="option in options" v-bind:value="option.value">
                                            @{{ option.text }}
                                        </option>
                                    </select>
                                    <!-- dropdownnya -->
                                </div>
                                <!-- sampe sini -->
                            </div>
                        </div>
                        <!-- passenger -->
                        <div class="flex flex-col ml-10 w-1/2">
                            <p>Passengers</p>
                            <div class="flex flex-row border-b-2 border-gray-100 mt-4">
                                <img src="../assets/icon/passenger.svg" alt="" />
                                <input class="pl-2 w-1/2" type="number" name="adult" id=""
                                    placeholder="Adult" />
                                <img src="../assets/icon/pets.svg" alt="" />
                                <input class="pl-2 w-1/2" type="number" name="child" id=""
                                    placeholder="Pets" />
                            </div>
                        </div>
                    </div>
                    <!-- bawah -->
                    <div class="flex flex-row my-4">
                        <!-- departure date-->
                        <div class="flex flex-col">
                            <p>Departure Date</p>
                            <!-- cari cara dropdown semua bandaranya -->
                            <div class="flex flex-row border-b-2 border-gray-100 mt-4">
                                <img src="../assets/icon/calendar.svg" alt="" />
                                <input class="pl-2" type="date" name="departure" id="" />
                            </div>
                        </div>
                        <!-- seat class -->
                        <div class="flex flex-col mx-40">
                            <p>Seat Class</p>
                            <!-- cari cara dropdown semua bandaranya -->
                            <div class="flex flex-row border-b-2 border-gray-100 mt-2">
                                <img src="../assets/icon/seat.svg" alt="" />
                                <!-- dari sini -->
                                <div id="seatModal" class="mx-4">
                                    <!-- ini yg munculin valuenya -->
                                    <p id="valueSeatModal">@{{ selected }}</p>
                                    <!-- dropdownnya -->
                                    <select name="seatclass" v-model="selected" class="w-150"
                                        value="@{{ option.value }}">
                                        <option v-for="option in options" v-bind:value="option.value">
                                            @{{ option.text }}
                                        </option>
                                    </select>
                                    <!-- dropdownnya -->
                                </div>
                                <!-- sampe sini -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- button -->
                <div class="flex flex-row-reverse">
                    <button id="bookNow" type="submit"
                        class="biru-button text-white p-3 rounded-md font-semibold w-1/6 hover:bg-blue-700 hover:shadow-lg">
                        Book Now
                    </button>
                </div>
            </div>
        </div>
    </form>
    <!-- order details modal -->
    <div id="modalnya2" class="modal" style="display: none">
        <div class="border-2 shadow-lg bg-white mx-56 text-gray-400 rounded-md p-12 flex flex-col rounded-2xl">
            <h1 class="text-black text-3xl font-semibold">Order Details</h1>
            <!-- atas -->
            <div class="flex mt-4 border-b-2 border-gray-100 px-4 pb-4">
                <!-- kiri foto maskapai -->
                <div class="mr-8">
                    <h1>Nama Maskapai</h1>
                    <img class="mx-auto my-4 w-10/12" src="../assets/airline/garuda.png" alt="" />
                </div>
                <!--  perintilan -->
                <div class="grid grid-flow-col grid-cols-3 grid-rows-2 gap-x-14 gap-y-6">
                    <!-- pake grid -->
                    <div>
                        <div>
                            <p>From</p>
                            <p class="text-black text-lg font-semibold">Jakarta (JKTC)</p>
                        </div>
                    </div>
                    <div>
                        <div>
                            <p>To</p>
                            <p class="text-black text-lg font-semibold">Surabaya (SBYC)</p>
                        </div>
                    </div>
                    <div>
                        <div>
                            <p>Passenger</p>
                            <p class="text-black text-lg font-semibold">1 Adult</p>
                        </div>
                    </div>
                    <div>
                        <div>
                            <p>Departure Date</p>
                            <p class="text-black text-lg font-semibold">Mon, 5 Apr 2021</p>
                        </div>
                    </div>
                    <div>
                        <div>
                            <p>Seat Class</p>
                            <p class="text-black text-lg font-semibold">First Class</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- bawah -->
            <div class="mt-4">
                <!-- total order -->
                {{-- <div class="flex">
                    <h1 class="text-gray-600 mr-kick">Total Order</h1>
                    <h1 class="text-black font-semibold">IDR1.000.000</h1>
                </div> --}}
                <!-- button -->
                <div class="flex flex-row-reverse mt-6">
                    <button id="btnSubmit" type="submit"
                        class="biru-button text-white p-3 rounded-md font-semibold w-1/6 hover:bg-blue-700 hover:shadow-lg">
                        Book Now
                    </button>
                    <button type="button"
                        class="mr-5 text-gray-400 border-gray-300 border-2 p-3 rounded-md font-semibold w-1/6"
                        id="btnCancel">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div id="modalnya3" class="modal px-96" style="display: none">
        <div class="bg-white rounded-md">
            <button id="tutup" class="w-min float-right p-4" onclick="closeDelete()">
                X
            </button>
            <div class="p-14">
                <img class="w-1/4 mx-auto pb-4" src="../assets/check.svg" alt="" />
                <h1 class="text-center text-2xl text-gray-800">
                    Book Success!
                </h1>
            </div>
        </div>
    </div>
    <div id="container" class="container">
        <!-- yang going anywhere -->
        <div class="flex items-center mt-20">
            <img class="w-56 mx-auto md:w-auto" src="../assets/airplane-about.png" alt="" />
            <div class="ml-0 md:ml-20">
                <div class="text-gray-800 font-semibold tracking-wider">
                    <h2 class="text-2xl">Going anywhere?</h2>
                    <h1 class="text-3xl">Xi Aviation is the answer!</h1>
                </div>
                <p class="mt-4 text-gray-500 text-lg">
                    Xi Aviation provides an enjoyable experience of booking flights. With
                    a single-click from your couch, you are ready to fly to your
                    destination! We provide various flights from various trusted flights
                    companies to provide you a safe and enjoyable flights.
                </p>
            </div>
        </div>
        <!-- yang ada 3 itu -->
        <div class="flex flex-col text-center font-semibold text-gray-800 mt-40">
            <h1 class="text-3xl tracking-wider mb-16">
                Why Booking Flights at Xi Aviation?
            </h1>
            <!-- 3 iconnya -->
            <div class="grid grid-cols-3 gap-3">
                <!-- hp -->
                <div>
                    <img class="mx-auto" src="../assets/icon/book-flights.svg" alt="" />
                    <h1 class="text-xl my-3">Book Your Flights Fast & Easily</h1>
                    <p class="text-gray-500 font-medium">
                        Now, you can book your flights right from your seat!
                    </p>
                </div>
                <!-- tiket -->
                <div>
                    <img class="mx-auto" src="../assets/icon/ticket-flight.svg" alt="" />
                    <h1 class="text-xl my-3">Get Your Ticket at The Best Price</h1>
                    <p class="text-gray-500 font-medium">
                        We provide various flights with the best price you could get!
                    </p>
                </div>
                <!-- tangan -->
                <div>
                    <img class="mx-auto" src="../assets/icon/trusted-partner.svg" alt="" />
                    <h1 class="text-xl my-3">Trusted Flights Partners</h1>
                    <p class="text-gray-500 font-medium">
                        Our partners have years of experience in serving best flights
                        service.
                    </p>
                </div>
            </div>
        </div>
        <!-- airline partners -->
        <div class="text-center text-2xl text-gray-800 font-semibold my-40 tracking-wider">
            <h1 class="mb-16">Our Airline Partners</h1>
            <!-- logo2nya -->
            <div class="grid grid-flow-col grid-cols-8 grid-rows-2 gap-3">
                <div><img src="../assets/airline/garuda.png" alt="" /></div>
                <div><img src="../assets/airline/airasia.png" alt="" /></div>
                <div><img src="../assets/airline/citilink.png" alt="" /></div>
                <div><img src="../assets/airline/pegasus.png" alt="" /></div>
                <div><img src="../assets/airline/lionair.png" alt="" /></div>
                <div><img src="../assets/airline/koreair.png" alt="" /></div>
                <div><img src="../assets/airline/swiss.png" alt="" /></div>
                <div><img src="../assets/airline/jejuAir.png" alt="" /></div>
                <div><img src="../assets/airline/unitedAirlines.png" alt="" /></div>
                <div><img src="../assets/airline/etihad.png" alt="" /></div>
                <div><img src="../assets/airline/shenzhen.png" alt="" /></div>
                <div><img src="../assets/airline/sriwijaya.png" alt="" /></div>
                <div><img src="../assets/airline/batikAir.png" alt="" /></div>
                <div><img src="../assets/airline/scoot.png" alt="" /></div>
                <div><img src="../assets/airline/thaiLion.png" alt="" /></div>
                <div><img src="../assets/airline/ana.png" alt="" /></div>
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
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="">About</a></p>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="">How it Works</a></p>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/tiketScript.js') }}"></script>
    <script>
        var modal = document.getElementById("modalnya");
        var modal2 = document.getElementById("modalnya2");
        var modal3 = document.getElementById("modalnya3");
        var btnModal = document.getElementById("btnModal");
        var bookNow = document.getElementById("bookNow");
        var btnSubmit = document.getElementById("btnSubmit");
        var btnCancel = document.getElementById("btnCancel");

        if (modal.style.display == "block") {
            modal.style.display = "none";
        } else if (modal.style.display == "none") {
            modal.style.display = "block";
        }
        // muncul
        btnModal.onclick = function() {
            modal.style.display = "block";
        };
        // muncul
        bookNow.onclick = function() {
            modal2.style.display = "block";
            modal.style.display = "none";
        };
        // muncul
        btnSubmit.onclick = function() {
            modal3.style.display = "block";
            modal2.style.display = "none";
        };
        // goback
        btnCancel.onclick = function() {
            modal.style.display = "block";
            modal2.style.display = "none";
        };

        // ilang dimana aja
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
            if (event.target == modal3) {
                modal3.style.display = "none";
            }
        };
        // deleteBtn close
        function closeDelete() {
            modal3.style.display = "none";
        }
    </script>
</body>

</html>
