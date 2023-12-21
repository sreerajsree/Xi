<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <title>Profile</title>
  </head>
  <body class="bg-white flex flex-col">
    <!-- nav white signed in -->
    <nav
      id="regisWhite"
      class="flex py-8 px-24 justify-between sticky top-0 text-gray-700 bg-white"
    >
      <a href="{{ route('home') }}">
        <img class="w-30 h-10" src="../assets/logo-black.png" alt="" />
      </a>
      <div class="flex flex-col">
        <div class="flex space-x-6">
          <button class="w-36 pr-8" type="button">
            <a href="{{ route('order') }}">Check Order</a>
          </button>
          <img
            class="cursor-pointer custom"
            src="{{ asset('storage/pp/'.Auth::user()->profile_picture) }}"
            alt=""
            onclick="popUpWhite()"
          />
        </div>
        <div
          id="profilePopUpWhite"
          class="bg-white text-gray-700 rounded-lg px-4 py-6 w-9/12 mt-3 ml-4"
          style="display: none"
        >
          <div class="flex border-b-2 border-gray-100 mb-5 pb-5">
            <img class="custom" src="{{ asset('storage/pp/'.Auth::user()->profile_picture) }}" alt="" />
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
    <div id="container" class="mx-24 my-8">
      <h1
        class="text-4xl font-semibold text-gray-700 border-b-2 border-gray-100 py-4"
      >
        Profile
      </h1>
      <div class="py-10 px-8 flex">
        
        <div id="modalnya" class="modal px-96">
          <div class="bg-white rounded-md">
            <button id="tutup" class="w-min float-right p-4">X</button>
            <div class="p-14">
              <img
                class="w-1/4 mx-auto pb-4"
                src="../assets/check.svg"
                alt=""
              />
              <h1 class="text-center text-2xl text-gray-800">
                Profile Update Success
              </h1>
            </div>
          </div>
        </div>
        <div id="kiri" class="flex mr-36">
          <div>
            <img class="w-24 mr-32 custom" src="{{ asset('storage/pp/'.Auth::user()->profile_picture) }}" alt="" />
          </div>
          <div id="changePP">
            <h1 class="font-semibold">{{ Auth::user()->fullname }}</h1>
            <div class="text-blue-icon pt-2">
              <button class="flex flex-col font-semibold">
                <p class="text-left">Change Profile Picture</p>
                <input type="file" />
              </button>
            </div>
          </div>
        </div>
        <div id="kanan">
          <form action="{{route('profileUpdate', Auth::user()->id)}}" method="POST" class="text-gray-500">
            @csrf
            @method('PATCH')
            <p>Full Name</p>
            <input
              type="text"
              name="fullname"
              id="fullname"
              placeholder="Full Name"
              class="border-2 border-gray-300 p-2 rounded-md w-96 mb-4"
              value="{{ Auth::user()->fullname }}"
            />
            <p>Email</p>
            <input
              type="email"
              name="email"
              id="email"
              placeholder="Email"
              class="border-2 border-gray-300 p-2 rounded-md w-96 mb-4"
              value="{{ Auth::user()->email }}"
            />
            <p>Date of Birth</p>
            <input
              type="date"
              name="dob"
              id="dob"
              placeholder="XX/XX/XXXX"
              class="border-2 border-gray-300 p-2 rounded-md w-96 mb-4"
              value="{{ Auth::user()->dob }}"
            />
            <p>Address</p>
            <textarea
              name="address"
              id="address"
              cols="30"
              rows="2"
              placeholder="Address"
              class="border-2 border-gray-300 p-2 rounded-md w-96 mb-4"
            ></textarea>
            <button
              id="btnModal"
              type="submit"
              class="biru-button text-white font-semibold p-4 px-10 rounded-md mt-6 hover:shadow-lg"
            >
              Save Changes
            </button>
          </form>
        </div>
      </div>
    </div>
    <footer class="flex border-t-2 mx-24 py-8">
      <!-- satu -->
      <div class="w-1/3">
        <img class="w-1/4" src="../assets/logo-black.png" alt="" />
        <h1 class="font-semibold py-4 text-gray-800">Download JoFlights App</h1>
        <div class="flex">
          <a href="https://play.google.com/store"
            ><img src="../assets/googlePlay.svg" alt=""
          /></a>
          <a href="https://www.apple.com/app-store/"
            ><img class="pl-2" src="../assets/appstore.svg" alt=""
          /></a>
        </div>
      </div>
      <!-- dua -->
      <div class="px-2">
        <h1 class="text-gray-800 font-semibold text-lg">JoFlights</h1>
        <p class="py-2 text-sm text-gray-500">About JoFlights</p>
        <p class="py-2 text-sm text-gray-500">Blogs</p>
        <p class="py-2 text-sm text-gray-500">Careers</p>
        <p class="py-2 text-sm text-gray-500">Partners</p>
        <p class="py-2 text-sm text-gray-500">Contact Us</p>
        <p class="py-2 text-sm text-gray-500">Help Center</p>
      </div>
      <!-- tiga -->
      <div class="px-12">
        <h1 class="text-gray-800 font-semibold text-lg">Products</h1>
        <p class="py-2 text-sm text-gray-500">One Way Flights</p>
        <p class="py-2 text-sm text-gray-500">Round trip Flights</p>
        <p class="py-2 text-sm text-gray-500">Domestic Flights</p>
        <p class="py-2 text-sm text-gray-500">International Flights</p>
      </div>
      <!-- empat -->
      <div class="px-2">
        <h1 class="text-gray-800 font-semibold text-lg">Customer Care</h1>
        <p class="py-2 text-sm text-gray-500">Help Center</p>
        <p class="py-2 text-sm text-gray-500">FAQ</p>
        <p class="py-2 text-sm text-gray-500">Terms and Condition</p>
        <p class="py-2 text-sm text-gray-500">Privacy</p>
      </div>
      <!-- lima -->
      <div class="pl-12">
        <h1 class="text-gray-800 font-semibold text-lg">Follow Us</h1>
        <div class="flex py-2">
          <a href="https://www.facebook.com/"
            ><img class="pr-2" src="../assets/facebook.svg" alt=""
          /></a>
          <a href="https://twitter.com/"
            ><img class="px-2" src="../assets/twitter.svg" alt=""
          /></a>
          <a href="https://instagram.com/"
            ><img class="px-2" src="../assets/instagram.svg" alt=""
          /></a>
          <a href="https://linkedin.com/"
            ><img class="px-2" src="../assets/linkedin.svg" alt=""
          /></a>
        </div>
      </div>
    </footer>
    <!-- copyrgith -->
    <div class="border-t-2 mx-24 py-8">
      <h1 class="text-center text-gray-500">
        ©2021 JoFlights, Inc. All Rights Reserved.
      </h1>
    </div>
    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>  
    <script>
      var modal = document.getElementById("modalnya");
      var btnModal = document.getElementById("btnModal");
      var tutup = document.getElementById("tutup");

      if (modal.style.display == "block") {
        modal.style.display = "none";
      } else if (modal.style.display == "none") {
        modal.style.display = "block";
      }

      // muncul
      btnModal.onclick = function () {
        modal.style.display = "block";
      };
      // ilang di X
      tutup.onclick = function () {
        modal.style.display = "none";
      };
      // ilang dimana aja
      window.onclick = function (event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      };
    </script>
  </body>
</html>