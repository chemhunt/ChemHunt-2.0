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
                <div x-data="timer(new Date().setHours({{config('chemhunt.exam_start_hours')}},{{config('chemhunt.exam_start_minutes')}},00))" x-init="init();"  class="text-chemhunt-logo">

                    <template id="timer" x-if="time().total>0">
                        <div class="sticky top-0 py-5 px-5" id="clock">
                            <div class="xl:text-chemhunt-light">
                                <div id="ch-20" class="text-2xl text-chemhunt-logo mx-1 font-extralight text-center">Starts In</div>
                                <div class="text-6xl text-center flex w-full items-center justify-center">
                                    <template x-if="time().hours!=00">
                                        <div class="w-22 mx-1 pr-1 p-2 bg-chemhunt-logo text-chemhunt-light rounded-lg">
                                            <span id="minutes" class="font-mono leading-none" x-text="time().hours">00</span>
                                            <div id="ch-23" class="font-mono uppercase text-sm leading-none">Hours</div>
                                        </div>
                                    </template>
                                    <template x-if="time().minutes!=00||time().hours!=00">
                                        <div class="w-22 mx-1 pr-1 p-2 bg-chemhunt-logo text-chemhunt-light rounded-lg">
                                            <span id="minutes" class="font-mono leading-none" x-text="time().minutes">00</span>
                                            <div id="ch-23" class="font-mono uppercase text-sm leading-none">Minutes</div>
                                        </div>
                                    </template>
                                    <div class="w-22 pl-1 mx-1 p-2 bg-chemhunt-logo text-chemhunt-light rounded-lg">
                                        <span id="seconds" class="font-mono leading-none" x-text="time().seconds">00</span>
                                        <div id="ch-25" class="font-mono uppercase text-sm leading-none">Seconds</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                    <template x-if="time().total<0">
                        <div class="text-center mt-6">
                            <a href="{{ route('exam.index') }}">
                                <button id="huntBtn" name="submit" value="submit" type="submit" class="bg-chemhunt-logo w-50 text-chemhunt-light text-center text-2xl mx-auto active:bg-yellow-400 text-sm font-bold px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1">
                                    Start Hunt
                                </button>
                            </a>
                        </div>
                    </template>
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
