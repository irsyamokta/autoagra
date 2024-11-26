<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('assets/icon/logo-vertical.png') }}">
    <title>Register - Autoagra</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <section class="h-[100vh] flex lg:flex-row">
        <div class="hidden w-full lg:w-1/2 lg:flex flex-col justify-center items-center px-16 py-16 bg-primary">
                <a class="flex justify-center" target="_blank">
                    <img class="sm:w-[60%] lg:w-[80%]" src="{{ asset('assets/img/img-about.png') }}" alt="Online illustrations by Storyset">
                </a>
        </div>
        <div class="w-full lg:w-1/2 flex flex-col justify-center items-center py-10 gap-10">
            <img src="{{ asset('assets/icon/logo.png') }}" alt="logo sipendekar" class="w-60 md:w-80">
            <form method="POST" action="{{ route('register') }}" class="flex flex-col justify-center items-center">
                @csrf
                <div class="mb-5">
                    <label for="name" class="text-sm">Name</label>
                    <br>
                    <input id="name" class="rounded-lg w-[250px] lg:w-[300px] placeholder:text-sm placeholder:text-[#C4C4C4]" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="Your Name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500 text-xs" />
                </div>
                <div class="mb-5">
                    <label for="email" class="text-sm">Email</label>
                    <br>
                    <input id="email" class="rounded-lg w-[250px] lg:w-[300px] placeholder:text-sm placeholder:text-[#C4C4C4]" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" placeholder="example@gmail.com" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-xs" />
                </div>
                <div class="mb-5">
                    <label for="password" class="text-sm">Password</label>
                    <br>
                    <input id="password" class="rounded-lg w-[250px] lg:w-[300px] placeholder:text-sm placeholder:text-[#C4C4C4]" type="password" name="password" required autocomplete="new-password" placeholder="Password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500 text-xs" />
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="text-sm">Confirm Password</label>
                    <br>
                    <input id="password_confirmation" class="rounded-lg w-[250px] lg:w-[300px] placeholder:text-sm placeholder:text-[#C4C4C4]" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500 text-xs" />
                </div>
                    <button class="w-40 h-10 mt-5 rounded-[30px] bg-primary text-white hover:bg-green-600">{{ __('Register') }}</button>
                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                </div>
            </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>
</html>
