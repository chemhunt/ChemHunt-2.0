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
            <form method="post" action="{{ route('exam.index') }}">
                @csrf
                @foreach($riddles as $riddle)
                    <div class="container mx-auto flex flex-col md:flex-row my-4 md:my-8">
                        <div class="font-sans flex flex-col w-full mx-3 mt-5">
                            <div class="flex flex-col w-full justify-center">
                                <div class="container w-full px-4">
                                    <div class="flex flex-wrap justify-center">
                                        <div class="w-full lg:w-6/12 px-4">
                                            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-chemhunt-light">
                                                <div class="flex-auto p-5 lg:p-10">
                                                    <div class="relative w-full mb-3">
                                                        <label class="block text-chemhunt-logo text-xl font-bold mb-2" for="{{ $riddle->id }}">{{ $riddle->question }}</label>
                                                        <input type="text" name="{{'day_'.config('chemhunt.day').'_q_'.$riddle->sr_no }}" id="{{ $riddle->id }}" value="" class="font-sans border-0 px-3 py-3 rounded text-xl shadow w-full bg-chemhunt-logo placeholder-white text-white outline-none focus:bg-chemhunt-dark" placeholder="Your answer here!" style="transition: all 0.15s ease 0s;" required />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="text-center mt-6 mb-3">
                    <button id="huntBtn" name="submit" value="submit" type="submit" class="bg-chemhunt-logo w-50 text-chemhunt-light text-center text-2xl mx-auto active:bg-yellow-400 text-sm font-bold px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
