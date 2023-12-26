<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <title>Login Page</title>
</head>

<body class="bg-pesawat flex justify-center content-center">
    <div class="bg-white flex-col justify-center w-92 md:w-2/5 p-2 py-10 text-center my-16 rounded-lg">
        <a href="{{ route('welcome') }}">
            <img class="w-1/4 mx-auto" src="{{ asset('assets/logo-black.png') }}" alt="" />
        </a>
        <h1 class="text-4xl font-bold pt-6 text-gray-800">Welcome Back!</h1>
        <p class="text-gray-500 pt-2 w-3/4 mx-auto">
            Let’s discover your future trip destination
        </p>

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <input class="border-2 border-gray-300 rounded-sm mx-half w-3/4 mt-10 mb-6 p-2 rounded-md" type="email"
                placeholder="Email" name="email" />
            <input class="border-2 border-gray-300 rounded-sm mx-half w-3/4 p-2 rounded-md" type="password"
                placeholder="Password" name="password" />

            <div class="w-3/4 mx-auto flex justify-between mt-5">
                <div>
                    <input type="checkbox" id="remember" />
                    <label for="remember" class="text-blue-green text-sm pl-1">
                        Remember Me</label>
                </div>
                <div>
                    <a href="{{ route('password.request') }}" class="text-blue-400 text-sm">Forgot Password?</a>
                </div>
            </div>

            <div>
                <button class="biru-button text-white font-semibold py-4 w-3/4 text-md rounded-md mt-10 hover:shadow-lg"
                    type="submit">
                    Log in
                </button>

                <p class="pt-4 text-gray-400 text-sm">
                    Don't have an account?
                    <a href="{{ route('register') }}"><span class="text-blue-400">Sign up</span></a>
                </p>
            </div>
        </form>
    </div>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
</body>

</html>
