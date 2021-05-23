<x-guest-layout>
    @include('layouts.chemhunt-logo')
    <div class="flex items-center">
        <div class="flex flex-col w-full m-2">
            <p class="text-3xl md:text-5xl my-4 text-center text-chemhunt-logo leading-relaxed md:leading-snug">Welcome!</p>
        </div>
    </div>
    @if(config('chemhunt.login_status')===true)
    <div class="text-center mt-6 mb-8">
        <a href="{{ route('login') }}" class="bg-chemhunt-logo w-50 text-chemhunt-light text-center text-2xl mx-auto active:bg-yellow-400 text-sm font-bold px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1">
            Login
        </a>
    </div>
    @endif
    @if(config('chemhunt.registration_status')===true)
    <div class="text-center mt-6 mb-8">
        <a href="{{ route('register') }}" class="bg-chemhunt-logo w-50 text-chemhunt-light text-center text-2xl mx-auto active:bg-yellow-400 text-sm font-bold px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1">
            Register
        </a>
    </div>
    @endif
</x-guest-layout>
