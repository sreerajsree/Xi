<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <title>Profile</title>
</head>

<body class="bg-white flex flex-col">
    <!-- nav white signed in -->
    <nav id="regisWhite" class="flex py-8 px-24 justify-between sticky top-0 text-gray-700 bg-white">
        <a href="{{ route('home') }}">
          <img class="w-11persen" src="../assets/logo-black.png" alt="" />
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
        <h1 class="text-4xl font-semibold text-gray-700 border-b-2 border-gray-100 py-4">
            Profile
        </h1>
        <div class="py-10 px-8 flex">
            <div id="kiri" class="flex mr-36">
                <div>
                    <img class="mr-32 custom-profile object-cover" src="{{ asset('storage/pp/' . Auth::user()->image) }}"
                        alt="" />
                </div>
                <div id="changePP">
                    <h1 class="font-semibold">{{ Auth::user()->fullname }}</h1>
                    <div class="text-blue-icon pt-2">
                        <div class="flex flex-col font-semibold">
                            <p class="text-left">Change Profile Picture</p>
                           <form action="{{ route('imageUpdate', Auth::user()->id) }}"  method="POST" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <input type="file" name="image" />
                            <button type="submit">Update</button>
                           </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="kanan">
                <form action="{{ route('profileUpdate', Auth::user()->id) }}" method="POST" class="text-gray-500">
                    @csrf
                    @method('PATCH')
                    <p>Full Name</p>
                    <input type="text" name="fullname" id="fullname" placeholder="Full Name"
                        class="border-2 border-gray-300 p-2 rounded-md w-96 mb-4"
                        value="{{ Auth::user()->fullname }}" />
                    <p>Email</p>
                    <input type="email" name="email" id="email" placeholder="Email"
                        class="border-2 border-gray-300 p-2 rounded-md w-96 mb-4" value="{{ Auth::user()->email }}" />
                    <p>Date of Birth</p>
                    <input type="date" name="dob" id="dob" placeholder="XX/XX/XXXX" 
                        class="border-2 border-gray-300 p-2 rounded-md w-96 mb-4" value="{{ Auth::user()->dob }}" />
                    <p>Address</p>
                    <textarea name="address" id="address" cols="30" rows="2" placeholder="Address" required
                        class="border-2 border-gray-300 p-2 rounded-md w-96 mb-4">{{ Auth::user()->address }}</textarea>
                    <button id="btnModal" type="submit"
                        class="block biru-button text-white font-semibold p-4 px-10 rounded-md hover:shadow-lg">
                        Save Changes
                    </button>
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
  <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
</body>

</html>
