<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>Add Passenger</title>
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
    <div id="container" class="container py-20">
        <div class="table-cell px-6 py-6 border-b-2 cursor-pointer bg-blue-600 text-white" onclick="addPassenger()">
            Add Passenger
            <!-- deleteModal -->
            <div id="addPassenger" class="modal px-4 md:px-96 font-semibold">
                <div class="max-w-2xl mx-auto bg-white p-0 md:p-8">
                    <p class="text-black text-2xl font-bold text-center my-5">Add Passenger</p>
                    <form action="{{ route('add.passengers') }}" method="POST">
                        @csrf
                        <input type="hidden" name="order_id" value="{{ $order_id }}">
                        <input type="hidden" name="category" value="passenger">
                        <div class="grid gap-6 mb-6 lg:grid-cols-2">
                            <div>
                                <label for="first_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">First
                                    name</label>
                                <input type="text" id="first_name" name="first_name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                            </div>
                            <div>
                                <label for="last_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Last
                                    name</label>
                                <input type="text" id="last_name" name="last_name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                            </div>
                            <div>
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email
                                    address</label>
                                <input type="email" id="email" name="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                            </div>
                            <div>
                                <label for="phone"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Phone
                                    number</label>
                                <input type="tel" id="phone" name="phone"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                     required>
                            </div>
                        </div>
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="table-cell px-6 py-6 border-b-2 cursor-pointer bg-red-600 text-white" onclick="addPets()">
            Add Pets
            <!-- deleteModal -->
            <div id="addPets" class="modal px-4 md:px-96 font-semibold">
                <div class="max-w-2xl mx-auto bg-white p-0 md:p-8">
                    <p class="text-black text-2xl font-bold text-center my-5">Add Pets</p>
                    <form action="{{ route('add.passengers') }}" method="POST">
                        @csrf
                        <input type="hidden" name="order_id" value="{{ $order_id }}">
                        <input type="hidden" name="category" value="pets">
                        <div class="grid gap-6 mb-6 lg:grid-cols-2">
                            <div>
                                <label for="pet_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pet Name</label>
                                <input type="text" id="pet_name" name="pet_name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                            </div>
                            <div>
                                <label for="breed"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Breed</label>
                                <input type="text" id="breed" name="breed"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                            </div>
                            <div>
                                <label for="health"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">General Health</label>
                                <select name="health"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    >
                                    <option value="fit">Fit</option>
                                    <option value="normal">Normal</option>
                                    <option value="poor">Poor</option>
                                </select>
                            </div>
                            <div>
                                <label for="temperament"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Temperament</label>
                                <select name="temperament"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    >
                                    <option value="neutral">Neutral</option>
                                    <option value="passive">Passive</option>
                                    <option value="aggressive">Aggressive</option>
                                </select>
                            </div>
                            <div>
                                <label for="weight"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Weight</label>
                                <select name="weight"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    >
                                    <option value="20lb">Under 20 lb</option>
                                    <option value="21lb">21-50lb</option>
                                    <option value="51lb">51 lb+</option>
                                </select>
                            </div>
                            <div>
                                <label for="ex_weight"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Exact Weight</label>
                                <input type="text" id="ex_weight" name="ex_weight"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                            </div>
                        </div>
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>
                </div>
            </div>
        </div>











        <h2 class="text-4xl font-semibold text-gray-700 py-8">Passenger Details</h2>
        <div class="py-5">
            <div id="tabelnya">
                <div class="table w-full text-center text-gray-800">
                    <div class="table-header-group">
                        <div class="table-row font-bold">
                            <div class="table-cell border-b-2 border-t-2">
                                No
                            </div>
                            <div class="table-cell border-b-2 border-t-2">
                                First Name
                            </div>
                            <div class="table-cell  border-b-2 border-t-2">Last Name</div>
                            <div class="table-cell  border-b-2 border-t-2">Email</div>
                            <div class="table-cell  border-b-2 border-t-2">
                                Phone
                            </div>
                        </div>
                        @foreach ($passengers as $item)
                            <div class="table-row">
                                <div class="table-cell inline-block align-middle border-b-2">
                                    {{ $loop->index + 1 }}
                                </div>
                                <div class="table-cell inline-block align-middle border-b-2">
                                    {{ $item->first_name }}
                                </div>
                                <div class="table-cell inline-block align-middle border-b-2">
                                    {{ $item->last_name }}
                                </div>
                                <div class="table-cell inline-block align-middle border-b-2">
                                    {{ $item->email }}
                                </div>
                                <div class="table-cell inline-block align-middle border-b-2">
                                    {{ $item->phone }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <h2 class="text-4xl font-semibold text-gray-700 py-8">Pet Details</h2>
        <div class="py-5">
            <div id="tabelnya">
                <div class="table w-full text-center text-gray-800">
                    <div class="table-header-group">
                        <div class="table-row font-bold">
                            <div class="table-cell border-b-2 border-t-2">
                                No
                            </div>
                            <div class="table-cell border-b-2 border-t-2">
                                Pet Name
                            </div>
                            <div class="table-cell border-b-2 border-t-2">Breed</div>
                            <div class="table-cell border-b-2 border-t-2">Health</div>
                            <div class="table-cell border-b-2 border-t-2">
                                Temperament
                            </div>
                            <div class="table-cell border-b-2 border-t-2">
                               Weight
                            </div>
                            <div class="table-cell border-b-2 border-t-2">
                                Exact Weight (lbs)
                             </div>
                        </div>
                        @foreach ($pets as $item)
                            <div class="table-row">
                                <div class="table-cell inline-block align-middle border-b-2">
                                    {{ $loop->index + 1 }}
                                </div>
                                <div class="table-cell inline-block align-middle border-b-2">
                                    {{ $item->pet_name }}
                                </div>
                                <div class="table-cell inline-block align-middle border-b-2">
                                    {{ $item->breed }}
                                </div>
                                <div class="table-cell inline-block align-middle border-b-2">
                                    {{ $item->health }}
                                </div>
                                <div class="table-cell inline-block align-middle border-b-2">
                                    {{ $item->temperament }}
                                </div>
                                <div class="table-cell inline-block align-middle border-b-2">
                                    {{ $item->weight }}
                                </div>
                                <div class="table-cell inline-block align-middle border-b-2">
                                    {{ $item->ex_weight }}
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
        let deletenya = document.getElementById("addPassenger");
        let deletenya1 = document.getElementById("addPets");
        // deleteBtn show
        function addPassenger() {
            deletenya.style.display = "block";
        }

        function addPets() {
            deletenya1.style.display = "block";
        }
        // pas pencet window ngeclose
        window.onclick = function(event) {
            if (event.target == deletenya) {
                deletenya.style.display = "none";
            }
            if (event.target == deletenya1) {
                deletenya1.style.display = "none";
            }
        };

    </script>
</body>

</html>
