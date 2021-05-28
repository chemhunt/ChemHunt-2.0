<x-guest-layout>
    <div class="">
        @include('layouts.chemhunt-logo')
        <div class="text-chemhunt-logo">
            <div class="container mx-auto flex flex-col md:flex-row my-4 md:my-8">
                <div class="flex flex-col w-full mt-5">
                    <p class="text-3xl md:text-5xl my-4 text-center text-chemhunt-logo leading-relaxed md:leading-snug">{{ 'Day '.config('chemhunt.day') }}</p>
                    <p class="text-3xl md:text-5xl my-4 text-center text-chemhunt-logo leading-relaxed md:leading-snug">Welcome!</p>
                    <p class="text-3xl md:text-5xl my-4 text-center text-chemhunt-logo leading-relaxed md:leading-snug">{{ auth()->user()->first_name .' '.auth()->user()->last_name }}</p>
                </div>
            </div>
            @if(config('chemhunt.exam_status')===true)
            <div class="text-center mt-6">
                <a href="{{ route('exam.index') }}">
                    <button id="huntBtn" name="submit" value="submit" type="submit" class="bg-chemhunt-logo w-50 text-chemhunt-light text-center text-2xl mx-auto active:bg-yellow-400 text-sm font-bold px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1">
                        Start Hunt
                    </button>
                </a>
            </div>
            @else
                <div class="container mx-auto flex flex-col md:flex-row my-4 md:my-8">
                    <div class="flex flex-col w-full mt-5">
                        <p class="text-3xl md:text-5xl my-4 text-center text-chemhunt-logo leading-relaxed md:leading-snug">The Hunt not launched yet !</p>
                    </div>
                </div>
            @endif
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
