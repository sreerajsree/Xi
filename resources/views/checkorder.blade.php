<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>Check Order</title>
</head>

<body class="bg-white flex flex-col">
    <!-- nav white signed in -->
    <nav id="regisWhite" class="flex py-8 container justify-between sticky top-0 text-gray-700 bg-white">
        <a href="{{ route('home') }}">
            <img class="w-30 h-10" src="../assets/logo-black.png" alt="" />
        </a>
        <div class="flex flex-col">
            <div class="flex space-x-6">
                <button class="w-36 pr-8" type="button">
                    <a href="{{ route('order') }}">Check Order</a>
                </button>
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
    <div id="container" class="container my-8">
        <h1 class="text-4xl font-semibold text-gray-700 py-4">My Order</h1>
        <div class="py-10">
            <div id="tabelnya">
                <div class="table w-full text-center text-gray-800 font-semibold">
                    <div class="table-header-group">
                        <div class="table-row">
                            <div class="table-cell border-b-2 border-t-2">
                                Order ID
                            </div>
                            <div class="table-cell border-b-2 border-t-2">From</div>
                            <div class="table-cell border-b-2 border-t-2">To</div>
                            <div class="table-cell border-b-2 border-t-2">
                                Departure Date
                            </div>
                            <div class="table-cell px-6 border-b-2 border-t-2">
                                Passengers
                            </div>
                            {{-- <div class="table-cell border-b-2 border-t-2">Total Order</div> --}}
                            <div class="table-cell border-b-2 border-t-2"></div>
                            <div class="table-cell border-b-2 border-t-2"></div>
                        </div>
                        @foreach ($user->orders as $order)
                            <div class="table-row">
                                <div class="table-cell inline-block align-middle border-b-2">
                                    A00{{ $order->id }}
                                </div>
                                <div class="table-cell inline-block align-middle border-b-2">
                                    {{ $order->from }}
                                </div>
                                <div class="table-cell inline-block align-middle border-b-2">
                                    {{ $order->to }}
                                </div>
                                <div class="table-cell inline-block align-middle border-b-2">
                                    {{ $order->departure }}
                                </div>
                                <div class="table-cell inline-block align-middle border-b-2">
                                    <div>
                                        <p>{{ $order->adult }} Adult</p>
                                        <p>{{ $order->child }} Pets</p>
                                    </div>
                                </div>
                                {{-- <div class="table-cell inline-block align-middle border-b-2">
                                    USD.000.000
                                </div> --}}
                                <div class="table-cell px-6 py-6 border-b-2 cursor-pointer" onclick="editBtn()">
                                    <div class="hidden md:block">
                                        <img class="hover:shadow-lg" src="../assets/icon/ant-design_edit-filled.svg"
                                        alt="" />
                                    </div>
                                    <div class="block md:hidden">
                                        <div class="bg-blue-600 text-white px-4 py-2">Edit</div>
                                    </div>
                                    <!-- editModal -->
                                    <form action="{{ route('update', $order->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <div id="editModal" class="modal">
                                            <div
                                                class="border-2 shadow-lg bg-white mx-4 md:mx-56 text-gray-400 rounded-lg p-12 flex flex-col rounded-2xl">
                                                <h1 class="text-black text-3xl font-semibold">Your Ticket</h1>
                                                <!-- menu milih mesen -->
                                                <div class="flex flex-col my-4">
                                                    <!-- atas -->
                                                    <div class="block md:flex flex-row">
                                                        <!-- from -->
                                                        <div class="flex flex-col">
                                                            <p>From</p>
                                                            <div class="flex flex-row border-b-2 border-gray-100 mt-1">
                                                                <img src="../assets/icon/departure.svg"
                                                                    alt="" />
                                                                <!-- dari sini -->
                                                                <div id="fromModal" class="mx-4">
                                                                    <!-- ini yg munculin valuenya, jadi kalo mau modif disini paling -->
                                                                    <p id="valueFromModal">Recent :{{ $order->from }}
                                                                    </p>
                                                                    <!-- dropdownnya -->
                                                                    <select name="from" v-model="selected"
                                                                        class="w-150" value="@{{ option.value }}"
                                                                        required>
                                                                        <option v-for="option in options"
                                                                            v-bind:value="option.value">
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
                                                            <div class="flex flex-row border-b-2 border-gray-100 mt-1">
                                                                <img src="../assets/icon/landing.svg"
                                                                    alt="" />
                                                                <!-- dari sini -->
                                                                <div id="toModal" class="mx-4">
                                                                    <!-- ini yg munculin valuenya, jadi kalo mau modif disini paling -->
                                                                    <p id="valueToModal">Recent :{{ $order->to }}
                                                                    </p>
                                                                    <!-- dropdownnya -->
                                                                    <select name="to" v-model="selected"
                                                                        class="w-150" value="@{{ option.value }}"
                                                                        required>
                                                                        <option v-for="option in options"
                                                                            v-bind:value="option.value">
                                                                            @{{ option.text }}
                                                                        </option>
                                                                    </select>
                                                                    <!-- dropdownnya -->
                                                                </div>
                                                                <!-- sampe sini -->
                                                            </div>
                                                        </div>
                                                        <!-- passenger -->
                                                        <div class="flex flex-col ml-0 md:ml-10 w-full md:w-1/2">
                                                            <p>Passengers</p>
                                                            <div class="flex flex-row border-b-2 border-gray-100 mt-4">
                                                                <img src="../assets/icon/passenger.svg"
                                                                    alt="" />
                                                                <input class="pl-2 w-1/2" type="number"
                                                                    name="adult" id="" placeholder="Adult"
                                                                    value="{{ $order->adult }}" />
                                                                <img src="../assets/icon/pets.svg" alt="" />
                                                                <input class="pl-2 w-1/2" type="number"
                                                                    name="child" id="" placeholder="Pets"
                                                                    value="{{ $order->child }}" />
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
                                                                <img src="../assets/icon/calendar.svg"
                                                                    alt="" />
                                                                <input class="pl-2" type="date" name="departure"
                                                                    value="{{ $order->departure }}" id="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- button -->
                                                <div class="flex flex-row-reverse">
                                                    <button id="bookNow" type="submit"
                                                        class="biru-button text-white p-2 rounded-md font-semibold w-1/3 md:w-1/6 hover:bg-blue-700 hover:shadow-lg ml-3">
                                                        Save Changes
                                                    </button>
                                                    <a href="{{ route('addPassenger', $order->id) }}"
                                                        class="biru-button text-white p-2 rounded-md font-semibold w-1/3 md:w-1/6 hover:bg-blue-700 hover:shadow-lg ml-3">
                                                        Add Passengers
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="table-cell px-6 py-6 border-b-2 cursor-pointer" onclick="deleteBtn()">
                                    <div class="hidden md:block">
                                        <img class="hover:shadow-lg" src="../assets/icon/ion_trash-bin.svg"
                                        alt="" />
                                    </div>
                                    <div class="block md:hidden">
                                        <div class="bg-red-600 text-white px-4 py-2">Delete</div>
                                    </div>
                                    <!-- deleteModal -->
                                    <form action="{{ route('delete', $order->id) }}" method="POST">
                                        @csrf @method('DELETE')
                                        <div id="deleteModal" class="modal px-96 font-semibold">
                                            <div class="bg-white rounded-lg -mx-8">
                                                <button id="tutup" class="w-min float-right p-4"
                                                    onclick="closeDelete()" type="button">
                                                    X
                                                </button>
                                                <div class="p-14">
                                                    <img class="w-1/4 mx-auto pb-4"
                                                        src="../assets/icon/ion_trash-bin-big.svg" alt="" />
                                                    <h1 class="text-center text-2xl text-gray-800">
                                                        Are you sure you want to cancel your order?
                                                    </h1>
                                                    <div class="text-center space-x-2 mt-6">
                                                        <button
                                                            class="bg-red-600 text-white py-1 px-6 rounded-lg hover:shadow-lg hover:bg-red-800"
                                                            type="submit">
                                                            Cancel Order
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
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
    <script>
        // ilang dimana aja
        let editnya = document.getElementById("editModal");
        let deletenya = document.getElementById("deleteModal");
        // editBtn show
        function editBtn() {
            editnya.style.display = "block";
        }
        // deleteBtn show
        function deleteBtn() {
            deletenya.style.display = "block";
        }
        // pas pencet window ngeclose
        window.onclick = function(event) {
            if (event.target == editnya) {
                editnya.style.display = "none";
            }
            if (event.target == deletenya) {
                deletenya.style.display = "none";
            }
        };
    </script>
</body>

</html>
