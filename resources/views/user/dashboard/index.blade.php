<x-guest-layout>
    <div class="">
        <div class="flex flex-col w-full mt-8">
            <p class="text-2xl mb-5 md:text-3xl my-4 text-center text-chemhunt-logo leading-relaxed md:leading-snug">IICHE DDU SC</p>
            <p class="text-sm mb-5 md:text-base leading-snug text-chemhunt-logo text-center text-opacity-100">presents</p>
            <p class="ml-6 text-5xl md:text-7xl text-chemhunt-logo text-center tracking-loose">ChemHunt</p>
            <p class="ml-6 text-5xl md:text-7xl text-chemhunt-logo text-center tracking-loose">2.0</p>
        </div>
        <div class="text-chemhunt-logo py-5">
            <div class="container mx-auto flex flex-col md:flex-row my-6 md:my-20">
                <div class="flex flex-col w-full mt-5">
                    <p class="text-3xl md:text-5xl my-4 text-center text-chemhunt-logo leading-relaxed md:leading-snug">Welcome!</p>
                    <p class="text-3xl md:text-5xl my-4 text-center text-chemhunt-logo leading-relaxed md:leading-snug">{{ auth()->user()->first_name .' '.auth()->user()->last_name }}</p>
                </div>
            </div>
            <div class="text-center mt-6 mb-8">
                <form method="post" action="{{ route('logout') }}">
                    @csrf
                    <button id="loginBtn" name="submit" value="submit" type="submit" class="bg-chemhunt-logo w-50 text-chemhunt-light text-center text-2xl mx-auto active:bg-yellow-400 text-sm font-bold px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
