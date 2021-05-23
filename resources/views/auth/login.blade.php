<x-guest-layout>
    <div class="">
        @include('layouts.chemhunt-logo')
        <div class="flex flex-col w-full mt-8">
            <p class="text-3xl md:text-5xl my-4 text-center text-chemhunt-logo leading-relaxed md:leading-snug">Welcome!</p>
            <p class="text-sm md:text-base leading-snug text-chemhunt-logo text-center text-opacity-100">
                Enter ChemHunt Id and password provided by email to login ...
            </p>
        </div>
        <div class="text-chemhunt-logo py-5">
            <form id="register" name="register" method="post" action="{{ route('login') }}">
                @csrf
                <div class="container mx-auto flex flex-col md:flex-row my-6 md:my-20">
                    <div class="flex flex-col w-full lg:w-1/3 p-8">
                        <p class="text-3xl md:text-5xl my-4 leading-relaxed md:leading-snug">Login</p>
                        <p class="text-sm md:text-base leading-snug text-chemhunt-logo text-opacity-100">
                            Enter ChemHunt Id password...
                        </p>
                    </div>
                    <div class="flex flex-col w-full lg:w-2/3 justify-center">
                        <div class="container w-full px-4">
                            <div class="flex flex-wrap justify-center">
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-chemhunt-light">
                                        <div class="flex-auto p-5 lg:p-10">
                                            <div class="relative w-full mb-3">
                                                <label class="block text-chemhunt-logo text-xl font-bold mb-2" for="email">ChemHunt Id</label>
                                                <input type="email" name="email" id="email" class="font-sans border-0 px-3 py-3 rounded text-xl shadow w-full bg-chemhunt-logo placeholder-black text-white outline-none focus:bg-chemhunt-dark" placeholder=" " style="transition: all 0.15s ease 0s;" required />
                                            </div>
                                            <div class="relative w-full mb-3">
                                                <label class="block text-chemhunt-logo text-xl font-bold mb-2" for="password">Password</label>
                                                <input type="password" name="password" id="password" class="font-sans border-0 px-3 py-3 rounded text-xl shadow w-full bg-chemhunt-logo placeholder-black text-white outline-none focus:bg-chemhunt-dark" placeholder=" " style="transition: all 0.15s ease 0s;" required />
                                            </div>
                                            <div class="relative w-full mb-3">
                                                <label class="block text-chemhunt-logo text-xl font-bold mb-2" for="remember_me">
                                                    <input id="remember_me" type="checkbox" class="rounded border-chemhunt-logo text-chemhunt-logo shadow-sm focus:border-chemhunt-dark focus:ring focus:ring-chemhunt-light focus:ring-opacity-50" name="remember">
                                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                                </label>
                                            </div>
                                            <div class="relative w-full mb-3">
                                                @if (Route::has('password.request'))
                                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                        {{ __('Forgot your password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-6 mb-8">
                    <button id="loginBtn" name="submit" value="submit" type="submit" class="bg-chemhunt-logo w-50 text-chemhunt-light text-center text-2xl mx-auto active:bg-yellow-400 text-sm font-bold px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
