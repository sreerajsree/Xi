<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <title>Change Password</title>
</head>

<body class="bg-white flex flex-col">
    <!-- nav white signed in -->
    <nav id="regisWhite" class="flex py-8 container  justify-between sticky top-0 text-gray-700 bg-white">
        <a href="{{ route('home') }}"><img class="w-30 h-10" src="../assets/logo-black.png" alt="" /></a>
        <div class="flex flex-col">
            <div class="flex space-x-6">
                <button class="w-36 pr-8" type="button"><a href="{{ route('order') }}">Check Order</a></button>
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
    <div id="container" class="container my-8">
        <h1 class="text-4xl font-semibold text-gray-700 border-b-2 border-gray-100 py-4">
            Change Password
        </h1>
        <div class="py-10 flex">
            <div id="modalnya" class="modal px-96">
                <div class="bg-white rounded-lg">
                    <button id="tutup" class="w-min float-right p-4">X</button>
                    <div class="p-14">
                        <img class="w-1/4 mx-auto pb-4" src="../assets/check.svg" alt="" />
                        <h1 class="text-center text-2xl text-gray-800">
                            Password Changed Successfully
                        </h1>
                    </div>
                </div>
            </div>
            <div id="kanan">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <p>Current Password</p>
                    <input type="password" name="currPass" id="currPass"
                        class="border-2 border-gray-300 p-2 rounded-md w-96 mb-4" />
                    <p>New Password</p>
                    <input type="password" name="newPass" id="newPassword"
                        class="border-2 border-gray-300 p-2 rounded-md w-96" />
                    <p class="text-sm w-96">
                        Make sure that your password contains at least 8 characters
                        including a number, lowercase, uppercase, and a symbol.
                    </p>
                    <p id="err-capital" class="text-red-300 text-left" style="display: none">
                        Password needs to have a Capital letter
                    </p>
                    <p id="err-nonCapt" class="text-red-300 text-left" style="display: none">
                        Password needs to have a non capital letter
                    </p>
                    <p id="err-num" class="text-red-300 text-left" style="display: block">
                        Password needs to have a number
                    </p>
                    <p id="err-len" class="text-red-300 text-left" style="display: none">
                        Password must be at least 8 characters
                    </p>
                    <p class="mt-4">Confirm Password</p>
                    <input type="password" name="confirmPass" id="confirmNewPassword"
                        class="border-2 border-gray-300 p-2 rounded-md w-96 mb-4" />
                    <p id="err-confirm" class="text-red-300 hidden">
                        Password and confirmation password doesn't match
                    </p>
                    <div>
                        <button id="btnModal" type="submit"
                            class="biru-button text-white font-semibold p-4 px-10 rounded-md mt-6 hover:shadow-lg">
                            Save Changes
                        </button>
                    </div>
                </form>
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
    <script>
        // confirm password
        var confirmPass = document.getElementById("confirmNewPassword");
        confirmPass.onkeyup = function() {
            if (confirmPass.value != newPassword.value) {
                document.getElementById("err-confirm").style.display = "block";
            } else {
                document.getElementById("err-confirm").style.display = "none";
            }
        };

        var x = document.getElementById("newPassword");
        x.onkeyup = function() {
            var capital = document.getElementById("err-capital");
            var nonCapital = document.getElementById("err-nonCapt");
            var num = document.getElementById("err-num");
            var len = document.getElementById("err-len");

            if (x.value.length < 8) {
                len.style.display = "none";
            } else if (x.length >= 8) {
                len.style.display = "block";
            }

            var lowerCase = /[a-z]/g;
            if (x.value.match(lowerCase)) {
                nonCapital.style.display = "none";
            } else if (!x.value.match(lowercase)) {
                nonCapital.style.display = "block";
            }

            var upperCase = /[A-Z]/g;
            if (!x.value.match(upperCase)) {
                capital.style.display = "block";
            } else if (x.value.match(upperCase)) {
                capital.style.display = "none";
            }

            var numbers = /[0-9]/g;
            if (!x.value.match(numbers)) {
                num.style.display = "block";
            } else if (x.value.match(numbers)) {
                num.style.display = "none";
            }
        };
    </script>
</body>

</html>
