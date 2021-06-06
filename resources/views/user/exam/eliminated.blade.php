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
                           If you have submitted your task successfully, then please wait for
                       </p>

                       <div class="flex items-center justify-center px-5 py-5" id="clock">
                           <div class="text-yellow-100">
                               <div class="text-6xl text-center flex w-full items-center justify-center">
                                   <div class="w-24 mx-1 pr-1 p-2 bg-chemhunt-logo text-chemhunt-light rounded-lg">
                                       <span id="minutes" class="font-mono leading-none" >00</span>
                                       <div class="font-mono uppercase text-sm leading-none">Minutes</div>
                                   </div>
                                   <div class="text-2xl mx-1 font-extralight">&</div>
                                   <div class="w-24 pl-1 mx-1 p-2 bg-chemhunt-logo text-chemhunt-light rounded-lg">
                                       <span id="seconds" class="font-mono leading-none">00</span>
                                       <div class="font-mono uppercase text-sm leading-none">Seconds</div>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <p class="text-xl md:text-3xl my-4 text-center text-chemhunt-logo leading-relaxed md:leading-snug">
                           and refresh the page.
                       </p>
                       <p class="text-xl md:text-3xl my-4 text-center text-chemhunt-logo leading-relaxed md:leading-snug">
                           If the screen still shows you're eliminated, that means you have either not submitted your task or we have not received it.
                       </p>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function getTimeRemaining(endtime) {
            var t = Date.parse(endtime) - Date.parse(new Date());
            if (t<0) { return false; }
            var seconds = Math.floor((t / 1000) % 60);
            var minutes = Math.floor((t / 1000 / 60) % 60);
            var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
            var days = Math.floor(t / (1000 * 60 * 60 * 24));
            return {
                'total': t,
                'days': days,
                'hours': hours,
                'minutes': minutes,
                'seconds': seconds
            };
        }
        function initializeClock(endtime) {
            var minutesSpan = document.getElementById('minutes');
            var secondsSpan = document.getElementById('seconds');
            function updateClock() {
                var t = getTimeRemaining(endtime);
                if (t) {
                    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
                    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
                } else {
                    clearInterval(timeinterval);
                }
            }

            updateClock();
            var timeinterval = setInterval(updateClock, 1000);
        }
        var deadline = new Date();
        deadline.setTime(deadline.getTime() + 120000)
        initializeClock(deadline);
    </script>
</x-guest-layout>

