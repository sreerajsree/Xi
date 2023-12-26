<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <title>Register</title>
</head>

<body class="bg-pesawat flex justify-center content-center">
    <div class="bg-white flex-col justify-center w-92 md:w-2/5 p-2 py-10 text-center my-16 rounded-lg">
        <a href="{{ route('welcome') }}">
            <img class="w-1/4 mx-auto" src="{{ asset('assets/logo-black.png') }}" alt="" />
        </a>
        <h1 class="text-4xl font-bold pt-6 text-gray-800">Get Started</h1>
        <p class="text-gray-500 pt-2 w-3/4 mx-auto">
            Your journey starts here! Create your account now!
        </p>

        <!-- form -->

        <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div id="personalInfo">
                <!-- moving parts -->
                <div class="flex justify-center my-4 text-sm">
                    <div class="flex border-b-2 border-blue-icon p-1.5 mr-10">
                        <img class="w-1/6" src="{{ asset('assets/user.svg') }}" alt="" />
                        <h1 class="text-blue-icon pl-2">Personal Info</h1>
                    </div>

                    <div id="pictureButton" class="flex p-1.5" onclick="switchDisplay()">
                        <img class="w-1/6" src="{{ asset('assets/cameraUnactive.svg') }}" alt="" />
                        <h1 class="text-gray-400 pl-2">Profile Picture</h1>
                    </div>
                </div>
                <!-- yang bukan profile picture -->
                <input class="border-2 border-gray-300 rounded-sm mx-half w-3/4 mt-8 p-2 rounded-md" type="text"
                    placeholder="Full Name" name="fullname" />
                <input class="border-2 border-gray-300 rounded-sm mx-half w-3/4 mt-8 p-2 rounded-md" type="email"
                    placeholder="Email" name="email" />
                <input class="border-2 border-gray-300 rounded-sm mx-half w-3/4 mt-8 p-2 rounded-md" type="password"
                    placeholder="Password" name="password" id="password" />
                <p id="err-capital" class="w-3/4 mx-auto text-red-300 text-left" style="display: none">
                    Password needs to have a Capital letter
                </p>
                <p id="err-nonCapt" class="w-3/4 mx-auto text-red-300 text-left" style="display: none">
                    Password needs to have a non capital letter
                </p>
                <p id="err-len" class="w-3/4 mx-auto text-red-300 text-left" style="display: none">
                    Password must be at least 8 characters
                </p>

                <input class="border-2 border-gray-300 rounded-sm mx-half w-3/4 mt-8 p-2 rounded-md" type="password"
                    placeholder="Confirm Password" name="password_confirmation" id="confirmPassword" />
                <p id="err-confirm" class="text-red-300 hidden">
                    Password and confirmation password doesn't match
                </p>
                <input class="border-2 border-gray-300 rounded-sm mx-half w-3/4 mt-8 p-2 rounded-md" type="date"
                    placeholder="Date of Birth" name="dob" />

                <textarea name="address" id="address" cols="30" rows="2"
                    class="border-2 border-gray-300 rounded-sm mx-half w-3/4 mt-8 p-2 rounded-md" type="date" placeholder="Address"></textarea>

                <div>
                    <button class="biru-button text-white font-semibold py-4 w-3/4 text-md rounded-md mt-10"
                        type="button" onclick="switchDisplay()">
                        Next
                    </button>
                    <p class="pt-4 text-gray-400 text-sm">
                        Already have an account?
                        <a href="{{ route('login') }}"><span class="text-blue-400">Log in</span></a>
                    </p>
                </div>
            </div>

            <!-- profile picture -->

            <div id="submitProfilePicture" style="display: none">
                <!-- moving parts -->
                <div class="flex justify-center my-4 text-sm">
                    <div class="flex p-1.5 mr-10" onclick="switchDisplay()">
                        <img class="w-1/6" src="{{ asset('assets/userUnactive.svg') }}" alt="" />
                        <h1 class="text-gray-400 pl-2">Personal Info</h1>
                    </div>

                    <div class="flex border-b-2 border-blue-icon mr-10 p-1.5">
                        <img class="w-1/6" src="{{ asset('assets/camera.svg') }}" alt="" />
                        <h1 class="text-blue-icon pl-2">Profile Picture</h1>
                    </div>
                </div>

                <!-- lanjutan formnya -->
                <div id="profilePicture" class="text-left px-10">
                    <div id="insertPPText">
                        <h1 class="text-lg font-bold">Profile Picture</h1>
                        <p class="text-sm text-gray-400">
                            Please upload your profile picture here.
                        </p>
                        <div class="insertPP pt-4 pb-8 flex">
                            <img src="{{ asset('assets/insertPP.svg') }}" alt="" />
                            <input class="pl-10 py-8" type="file" name="image"
                                id="profilePictureBeneran" />
                        </div>
                    </div>
                    <div id="insertKTP">
                        <h1 class="text-lg font-bold">Identity Card</h1>
                        <p class="text-sm text-gray-400">
                            Please upload a selfie with your ID card. Both your face and
                            your ID card should be shown clearly in the photo.
                        </p>
                        <p class="text-sm text-gray-400 pt-2">Sample photo</p>
                        <img src="{{ asset('assets/sample-photo-id.svg') }}" alt="" />
                        <input class="mt-2 border-2 border-gray-500 rounded-md p-4 w-2/3" type="file"
                            name="id_card" id="KTP" />
                    </div>
                    <div id="button2" class="flex flex-col">
                        <button class="biru-button text-white font-semibold py-3 text-md rounded-md mt-10"
                            type="submit">
                            Sign up
                        </button>
                        <button
                            class="btn bg-white font-semibold py-3 rounded-md border-2 border-gray-400 text-gray-500 mt-4"
                            type="button" onclick="switchDisplay()">
                            Back
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <script>
        // validate password
        var x = document.getElementById("password");
        x.onkeyup = function() {
            var capital = document.getElementById("err-capital");
            var nonCapital = document.getElementById("err-nonCapt");
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
        };

        // confirm password
        var confirmPass = document.getElementById("confirmPassword");
        confirmPass.onkeyup = function() {
            if (confirmPass.value != password.value) {
                document.getElementById("err-confirm").style.display = "block";
            } else {
                document.getElementById("err-confirm").style.display = "none";
            }
        };
    </script>
</body>

</html>
