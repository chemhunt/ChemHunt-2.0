<x-guest-layout>
    <div class="">
        @include('layouts.chemhunt-logo')
        <div class="flex flex-col w-full mt-8">
            <p class="text-sm mt-8 md:text-base leading-snug text-chemhunt-logo text-center text-opacity-100">
                Sorry....
            </p>
            <p class="text-sm mt-4 md:text-base leading-snug text-chemhunt-logo text-center text-opacity-100">
                Currently you can't login ...
            </p>
        </div>
        <div class="text-chemhunt-logo py-5">
            <div class="flex flex-col items-center w-full p-8">
                <div class="text-chemhunt-logo">

                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                        </svg>
                    </div>

                </div>
                <p class="text-3xl md:text-5xl my-4 text-center text-chemhunt-logo leading-relaxed md:leading-snug">
                    <span>Today's hunt is finished or not started yet !</span>
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>
