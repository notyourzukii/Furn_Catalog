<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('css/styleApp.css') }}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite('resources/css/app.css')
    <title>Reset Password</title>
</head>
    <body>
        <main>
            <div class="container-w-screen h-screen">
                <div class="min-h-screen m-0 flex">
                    <img src="{{ asset ('image/BackgroundLogin.jpg') }}" class="w-fit h-screen  object-cover ">
                <div class="w-screen h-screen">
                        <div class="ml-40 mt-10 mr-18 h-fit">
                            <div class="text-h2lr mb-0 h-16">{{ __('Reset Password') }}</div>

                            <div class="flex-col">
                                @if (session('status'))
                                    <div class="font-light" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                            </div>
                                <form class="w-[400px] h-[380px] mt-20 " method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                    <div class="flex-col text-uspas mb-6">
                                        <label for="email" class="">{{ __('Email Address') }}</label>

                                        <div class="flex-col mt-2">
                                            <input id="email" type="email" class=" bg-[#D9D9D9] rounded-md w-[472px] h-[34px] p-4" name="email" value="{{ @old('email') }}" required autocomplete="off" autofocus>
                                        </div>
                                        <div class="flex-col mt-2">
                                            @error('email')
                                                <span class="text-[#ff5e5e] font-light" role="alert">
                                                    <strong class="text-[16px]">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                        <div class="flex-col text-butlog ">
                                            <button type="submit" class="butlog bg-[#FFC93E] rounded-[12px] w-[250px] h-[36px]">
                                                {{ __('Send Password Reset Link') }}
                                            </button>
                                        </div>
                                </form>
                                <div class="flex-col h-fit w-fit mr-52 ml-52">
                                    <span class="">© Copyright 2024 <span>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>





