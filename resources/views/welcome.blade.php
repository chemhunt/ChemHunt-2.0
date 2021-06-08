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

        <div class="flex flex-col items-center w-full pt-8">
            <div class="text-chemhunt-logo">
                <div>
                    <a href="http://bit.ly/ChemHunt-Brochure" target="_blank" >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M2 9.5A3.5 3.5 0 005.5 13H9v2.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 15.586V13h2.5a4.5 4.5 0 10-.616-8.958 4.002 4.002 0 10-7.753 1.977A3.5 3.5 0 002 9.5zm9 3.5H9V8a1 1 0 012 0v5z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center w-full">
            <div class="text-chemhunt-logo">
                <div>
                    <a href="http://bit.ly/ChemHunt-Brochure" target="_blank" >
                        <div class="bg-chemhunt-logo w-50 text-chemhunt-light text-center text-2xl mx-auto active:bg-yellow-400 text-sm font-bold px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1">
                            Brochure
                        </div>
                    </a>
                </div>
            </div>
        </div>
    @endif
</x-guest-layout>
