<x-error-layout>
    <div class="flex items-center">
        <div class="flex flex-col w-full mt-8">
            <p class="ml-6 text-6xl md:text-7xl text-chemhunt-logo text-center tracking-loose">403</p>
            <p class="ml-6 text-5xl md:text-7xl text-chemhunt-logo text-center tracking-loose">Forbidden....</p>
            <div class="text-center mt-6 mb-3">
                <a href="{{ route('welcome') }}" class="bg-chemhunt-logo w-50 text-chemhunt-light text-center text-2xl mx-auto active:bg-yellow-400 text-sm font-bold px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1">
                    Go to Main Page....
                </a>
            </div>
        </div>
    </div>
</x-error-layout>
