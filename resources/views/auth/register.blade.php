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
    <title>Register</title>
</head>
    <body>
        <main>
            <div class="container-w-screen h-screen">
                <div class="min-h-screen m-0 flex">
                        <img src="{{ asset ('image/BackgroundLogin.jpg') }}" class="w-fit h-screen  object-cover ">
                    <div class="w-screen h-screen">
                        <div class="ml-40 mt-4  mr-18 h-fit">
                                <span class="text-twell">Hi there! Wellcome to Furn</span>
                                <h2 class="text-h2lr mb-0 h-16">{{ __('Create New Account') }}</h2>

                                <form class="w-[450px] h-[460px]" method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="flex-col text-uspas">
                                            <label for="name">{{ __('Name') }}</label>

                                            <div class="flex-col">
                                                <input id="name" type="text" class="bg-[#D9D9D9] rounded-md w-[400px] h-[28px] p-4" name="name" value="{{ @old('name') }}" required autocomplete="off" >
                                            </div>
                                            <div class="flex-col">
                                                @error('name')
                                                    <span class="text-[#ff5e5e] font-light" role="alert">
                                                        <strong class="text-[16px]">{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="flex-col text-uspas">
                                            <label for="email">{{ __('Email Address') }}</label>

                                            <div class="flex-col">
                                                <input id="email" type="email" class="bg-[#D9D9D9] rounded-md w-[400px] h-[28px] p-4" name="email" value="{{ @old('email') }}" required autocomplete="off">
                                            </div>
                                            <div class="flex-col">
                                                @error('email')
                                                    <span class="text-[#ff5e5e] font-light" role="alert">
                                                        <strong class="text-[16px]">{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="flex-col text-uspas">
                                            <label for="password" class="">{{ __('Password') }}</label>

                                            <div class="flex-col">
                                                <input id="password" type="password" class="bg-[#D9D9D9] rounded-md w-[400px] h-[28px] p-4" name="password" required autocomplete="off">
                                            </div>
                                            <div class="flex-col">
                                                @error('password')
                                                    <span class="text-[#ff5e5e] font-light" role="alert">
                                                        <strong class="text-[16px]">{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="flex-col text-uspas">
                                            <label for="password-confirm" class=" ">{{ __('Confirm Password') }}</label>

                                            <div class="flex-col">
                                                <input id="password-confirm" type="password" class="bg-[#D9D9D9] rounded-md w-[400px] h-[28px] p-4" name="password_confirmation" required autocomplete="off">
                                            </div>
                                        </div>

                                    <div class="flex justify-stretch gap-5 w-[380px]">
                                        <div class="flex-col text-uspas">
                                            <label for="no_telp" class="">{{ __('Phone Number') }}</label>

                                            <div class="flex-1">
                                                <input id="no_telp" type="text" class="bg-[#D9D9D9] rounded-md w-[190px] h-[28px] p-4" name="no_telp" value="{{ @old('no_telp') }}" required autocomplete="off">
                                            </div>
                                            <div class="flex-col">
                                                @error('no_telp')
                                                    <span class="text-[#ff5e5e] font-light" role="alert">
                                                        <strong class="text-[16px]">{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="flex-1 text-uspas">
                                            <label for="jenis_kelamin" >{{ __('Gender') }}</label>
                                            <div class="flex-1">
                                                <select class="bg-[#D9D9D9] rounded-md w-[190px] h-[32px]" id="jenis_kelamin" name="jenis_kelamin" required>
                                                    <option value="" disbaled selected hidden>Select Gender</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                            <div class="flex-col">
                                                @error('jenis_kelamin')
                                                    <span class="text-[#ff5e5e] font-light" role="alert">
                                                        <strong class="text-[16px]">{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                        <div class="flex-col mt-2 text-acc">
                                                <span class="">Have an Account ? <a class="no-underline text-[#FFC93E] " href="login">Login here</a></span>
                                            </div>
                                        <div class="flex-col text-butlog">
                                                <button type="submit" class="butlog bg-[#FFC93E] rounded-[12px] w-[120px] h-[36px]">
                                                    {{ __('Register') }}
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





