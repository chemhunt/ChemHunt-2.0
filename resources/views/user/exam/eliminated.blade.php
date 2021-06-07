<x-guest-layout>
    <div class="">
        @include('layouts.chemhunt-logo')
        <div class="text-chemhunt-logo">
            <div class="container mx-auto flex flex-col md:flex-row my-4 md:my-8">
                <div class="flex flex-col w-full mt-5">
                    <p class="text-3xl md:text-5xl my-4 text-center text-chemhunt-logo leading-relaxed md:leading-snug">{{ 'Day '.config('chemhunt.day') }}</p>
                    <p class="text-3xl md:text-5xl my-4 text-center text-chemhunt-logo leading-relaxed md:leading-snug">Welcome!</p>
                    <p class="text-3xl md:text-5xl my-4 text-center text-chemhunt-logo leading-relaxed md:leading-snug">{{ auth()->user()->first_name .' '.auth()->user()->last_name }}</p>
                   <div class="font-sans font-bold">
                       <p class="text-xl md:text-3xl my-4 text-center text-chemhunt-logo leading-relaxed md:leading-snug">
                           It seems like you haven't finished task of day {{ $eliminated_day }}
                       </p>
                       <p class="text-xl md:text-3xl my-4 text-center text-chemhunt-logo leading-relaxed md:leading-snug">
                           If you have submitted your task successfully then contact your coordinator
                       </p>
                       <p class="text-xl md:text-3xl my-4 text-center text-chemhunt-logo leading-relaxed md:leading-snug">
                         <code class="bg-chemhunt-light rounded border-b-2"><strong>{{ auth()->user()->admin->name }}</strong></code>
                       </p>
                       <p class="text-xl md:text-3xl my-4 text-center text-chemhunt-logo leading-relaxed md:leading-snug">

                       </p>
                   </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>

