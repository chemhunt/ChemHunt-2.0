<x-guest-layout>
    <div class="">
        @include('layouts.chemhunt-logo')
        <div class="text-chemhunt-logo py-5">
            <div class="container mx-auto flex flex-col md:flex-row my-6 md:my-10">
                <div class="flex flex-col w-full mt-2">
                    <p class="text-xl md:text-2xl my-4 text-center text-chemhunt-logo leading-relaxed md:leading-snug">Thank You For Registration!</p>
                    <p class="text-3xl md:text-5xl my-4 text-center text-chemhunt-logo leading-relaxed md:leading-snug">{{ session()->get('registration_name') }}</p>
                </div>
            </div>
            <div class="flex flex-col text-chemhunt-logo items-center w-full">
                <a href="https://api.whatsapp.com/send?text=ChemHunt%202.0%20https%3A%2F%2Fchemhunt.herokuapp.com%2Fregister" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                    </svg>
                </a>

                <p class="text-3xl md:text-5xl my-4 text-center leading-relaxed md:leading-snug">
                    <span>Share With Your Friends!</span>
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>
