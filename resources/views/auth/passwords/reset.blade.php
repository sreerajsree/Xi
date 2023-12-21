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
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <title>Change Password</title>
  </head>
  <body class="bg-pesawat flex justify-center content-center">
    <div
      class="bg-white flex-col justify-center w-2/5 p-2 py-10 text-center my-16 rounded-lg"
    >
      <img class="w-1/4 mx-auto" src="../assets/logo-black.png" alt="" />
      <h1 class="text-4xl font-bold pt-6 text-gray-800">
        Change Your Password
      </h1>
      <form method="POST" action="{{ route('password.update') }}">
            @csrf
        {{-- <input type="hidden" name="token" value="{{ $token }}"> --}}
        <input
          class="border-2 border-gray-300 rounded-sm mx-half w-3/4 my-10 p-2 rounded-md"
          type="password"
          placeholder="New Password"
          name="password"
          id="password"
        />

        <input
          class="border-2 border-gray-300 rounded-sm mx-half w-3/4 p-2 rounded-md"
          type="password"
          placeholder="Confirm Password"
          name="password_confirmation"
          id="password-confirm"
        />
        <p class="text-gray-400 text-xs text-left pl-16 w-4/5 pt-2">
          Make sure that your password contains at least 8 characters including
          a number, lowercase, uppercase, and a symbol.
        </p>
        <p id="err-confirm" class="text-red-300 hidden">
          Password and confirmation password doesn't match
        </p>

        <div>
          <button
            class="biru-button text-white font-semibold py-4 w-3/4 text-md rounded-md mt-10 hover:shadow-lg"
            type="submit"
            id="submitConfirmPass"
          >
            Change Password
          </button>
        </div>
      </form>
    </div>
    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
    <script>
      // confirm password
      var confirmPass = document.getElementById("confirmNewPassword");
      confirmPass.onkeyup = function () {
        if (confirmPass.value != newPassword.value) {
          document.getElementById("err-confirm").style.display = "block";
        } else {
          document.getElementById("err-confirm").style.display = "none";
        }
      };
    </script>
  </body>
</html>