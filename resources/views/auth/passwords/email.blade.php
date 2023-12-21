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
    <title>Forgot Password</title>
  </head>
  <body class="bg-pesawat flex justify-center content-center">
    <div
      class="bg-white flex-col justify-center w-2/5 p-2 py-10 text-center my-16 rounded-lg"
    >
      <img class="w-1/4 mx-auto" src="{{asset('assets/logo-black.png')}}" alt="" />
      <h1 class="text-4xl font-bold pt-6 text-gray-800">Forgot Password?</h1>
      <p class="text-gray-500 pt-2 w-3/4 mx-auto">
        Enter the email associated with your account and we will send an email
        with instructions to reset your password.
      </p>
      @if (session('status'))
        <div class="alert alert-success" role="alert">
           {{ session('status') }}
        </div>
       @endif

      <form method="POST" action="{{route('password.email')}}">
        @csrf
        <input
          class="border-2 border-gray-300 rounded-sm mx-half my-8 w-3/4 p-2 rounded-md"
          type="email"
          placeholder="Email"
          name="email"
        />

        <div>
          <button
            class="biru-button text-white font-semibold py-4 w-3/4 text-md rounded-md mt-10 hover:shadow-lg"
            type="submit"
          >
            Send Instructions
          </button>
          <p class="pt-4 text-gray-400">
            Already know your password?
            <a href="{{route('login')}}"><span class="text-blue-400">Log in</span></a>
          </p>
        </div>
      </form>
    </div>
  </body>
</html