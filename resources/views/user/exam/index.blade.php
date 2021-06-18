<x-guest-layout>
    <div id="hunt" class="bg-blue-300">
        @include('layouts.chemhunt-logo')
        <div x-data="timer(new Date().setHours({{ config('chemhunt.exam_end_hours') }},{{ config('chemhunt.exam_end_minutes') }},0))" x-init="init();"  class="text-chemhunt-logo">
            <div class="container mx-auto flex flex-col md:flex-row my-4 md:my-8">
                <div class="flex flex-col w-full mt-5">
                    <p class="text-3xl md:text-5xl my-4 text-center text-chemhunt-logo leading-relaxed md:leading-snug">{{ 'Day '.config('chemhunt.day') }}</p>
                    <p class="text-3xl md:text-5xl my-4 text-center text-chemhunt-logo leading-relaxed md:leading-snug">{{ auth()->user()->first_name .' '.auth()->user()->last_name }}</p>
                </div>
            </div>

            <template id="timer" x-if="time().total>0">
                <div class="sticky top-0 py-5 px-5" id="clock">
                    <div class="xl:text-chemhunt-light">
                        <div class="text-6xl text-center flex w-full items-center justify-center">
                            <div
                                :class="{ 'bg-chemhunt-logo ': time().total>120000,'bg-red-600 animate-pulse ': time().total<120000 }"
                                class="w-22 mx-1 pr-1 p-2 text-chemhunt-light rounded-lg">
                                <span id="minutes" class="font-mono leading-none" x-text="time().minutes">00</span>
                                <div id="ch-23" class="font-mono uppercase text-sm leading-none">Minutes</div>
                            </div>
                            <div id="ch-20" class="text-2xl text-chemhunt-logo mx-1 font-extralight">&</div>
                            <div
                                :class="{ 'bg-chemhunt-logo ': time().total>120000,'bg-red-600 animate-pulse ': time().total<120000 }"
                                class="w-22 pl-1 mx-1 p-2 text-chemhunt-light rounded-lg">
                                <span id="seconds" class="font-mono leading-none" x-text="time().seconds">00</span>
                                <div id="ch-25" class="font-mono uppercase text-sm leading-none">Seconds</div>
                            </div>
                        </div>
                    </div>
                </div>
            </template>

            <template x-if="time().total<=0">
                <div class="sticky top-6 py-5 px-5" id="timeUp" >
                    <div class="xl:text-chemhunt-light">
                        <div class="text-6xl text-center flex w-full items-center justify-center">
                            <div class="mx-1 pr-1 p-2 bg-chemhunt-logo text-chemhunt-light rounded-lg">
                                <span id="minutes" class="font-mono leading-none" >Time Up !</span>
                            </div>
                        </div>
                    </div>
                </div>
            </template>

            <template x-if="time().total>0">
                <form id="huntForm" method="post" action="{{ route('exam.index') }}">
                    @csrf
                    @foreach($riddles as $riddle)
                        <div class="mx-auto flex flex-col md:flex-row my-4 md:my-8">
                            <div class="font-sans flex flex-col w-full mx-3 mt-5">
                                <div class="flex flex-col w-full justify-center">
                                    <div class="w-full px-4">
                                        <div class="flex flex-wrap justify-center">
                                            <div class="w-full lg:w-6/12 px-4">
                                                <div class="flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-chemhunt-light">
                                                    <div class="flex-auto p-5 lg:p-10">
                                                        <div class="w-full mb-3">
                                                            <label class="block text-chemhunt-logo text-xl font-bold mb-2" for="{{ $riddle->id }}">{{ $riddle->question }}</label>
                                                            <input type="text" name="{{'day_'.config('chemhunt.day').'_q_'.$riddle->sr_no }}" id="{{ $riddle->id }}" value="" class="font-sans border-0 px-3 py-3 rounded text-xl shadow w-full bg-chemhunt-logo placeholder-white text-white outline-none focus:bg-chemhunt-dark" placeholder="Your answer here!" style="transition: all 0.15s ease 0s;" />
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
                    <template x-if="time().total>0">
                        <div id="timeUpBtn" class="text-center mt-6 mb-3" style="visibility: visible">
                            <button id="huntBtn" name="submit" value="submit" type="submit" class="bg-chemhunt-logo w-50 text-chemhunt-light text-center text-2xl mx-auto active:bg-yellow-400 text-sm font-bold px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1">
                                Submit
                            </button>
                        </div>
                    </template>
                </form>
            </template>

        </div>
    </div>
    <script>

        function timer(expiry) {
            return {
                expiry: expiry,
                remaining:null,
                CountDown:null,
                total:null,
                init() {
                    this.setRemaining();
                   this.CountDown = setInterval(() => {
                        this.setRemaining();
                    }, 1000);
                },
                setRemaining() {
                    const diff = this.expiry - new Date().getTime();
                    this.total = diff;
                    if (diff<0){
                        clearInterval(this.CountDown);
                        return false;
                    }
                    this.remaining =  parseInt(diff / 1000);
                },
                t() {
                    return {
                        value: this.total
                    }
                },
                days() {
                    return {
                        value:this.remaining / 86400,
                        remaining:this.remaining % 86400
                    };
                },
                hours() {
                    return {
                        value:this.days().remaining / 3600,
                        remaining:this.days().remaining % 3600
                    };
                },
                minutes() {
                    return {
                        value:this.hours().remaining / 60,
                        remaining:this.hours().remaining % 60
                    };
                },
                seconds() {
                    return {
                        value:this.minutes().remaining,
                    };
                },
                format(value) {
                    return ("0" + parseInt(value)).slice(-2)
                },
                time(){
                    return {
                        total:this.t().value,
                        days:this.format(this.days().value),
                        hours:this.format(this.hours().value),
                        minutes:this.format(this.minutes().value),
                        seconds:this.format(this.seconds().value),
                    }
                },
            }
        }

    </script>
</x-guest-layout>
