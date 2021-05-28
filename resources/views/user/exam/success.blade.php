<x-guest-layout>
    <div class="">
        @include('layouts.chemhunt-logo')
        <div class="text-chemhunt-logo">
            <div class="container mx-auto flex flex-col md:flex-row my-4 md:my-8">
                <div class="flex flex-col w-full mt-5">
                    <p class="text-3xl md:text-5xl my-4 text-center text-chemhunt-logo leading-relaxed md:leading-snug">{{ 'Day '.config('chemhunt.day') }}</p>
                    <p class="text-3xl md:text-5xl my-4 text-center text-chemhunt-logo leading-relaxed md:leading-snug">Welcome!</p>
                    <p class="text-3xl md:text-5xl my-4 text-center text-chemhunt-logo leading-relaxed md:leading-snug">{{ auth()->user()->first_name .' '.auth()->user()->last_name }}</p>
                    <p class="text-3xl md:text-5xl my-4 text-center text-chemhunt-logo leading-relaxed md:leading-snug">
                        Your response has been submitted successfully</p>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
