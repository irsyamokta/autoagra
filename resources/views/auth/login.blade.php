<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('assets/icon/logo-vertical.png') }}">
    <title>Login Autoagra</title>
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
            <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col justify-center items-center">
                    <div class="mb-5">
                        <label for="email" class="text-sm">Email</label>
                        <br>
                        <input type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="email" placeholder="example@gmail.com" class="rounded-lg w-[250px] lg:w-[300px] placeholder:text-sm placeholder:text-[#C4C4C4]">
                    </div>
                    <div class="mb-5">
                        <label for="password" class="text-sm">Password</label>
                        <br>
                        <input type="password" name="password" required autocomplete="current-password" placeholder="Password" class="rounded-lg w-[250px] lg:w-[300px] placeholder:text-sm placeholder:text-[#C4C4C4]">
                        @if($errors->has('email'))
                            <p class="mt-3 text-red-500 text-xs">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <button class="w-40 h-10 mt-5 rounded-[30px] bg-primary text-white hover:bg-green-600">Masuk</button>
                </div>
            </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>

</html>