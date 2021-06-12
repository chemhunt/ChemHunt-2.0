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
                           You are eliminated from event!
                       </p>
                       <p class="text-xl md:text-3xl my-4 text-center text-chemhunt-logo leading-relaxed md:leading-snug">
                           If you have submitted your task successfully then contact your coordinator
                       </p>
                       <p class="text-xl md:text-3xl my-4 text-center text-chemhunt-logo leading-relaxed md:leading-snug">
                         <code class="bg-chemhunt-light rounded border-b-2 p-2"><strong>{{ auth()->user()->admin->name }}</strong></code>
                       </p>
                       <p class="text-xl md:text-3xl my-4 text-center text-chemhunt-logo leading-relaxed md:leading-snug">
                       <div class="flex flex-col items-center w-full pt-3">
                           <div class="text-chemhunt-logo">
                               <div>
                                   <a href="https://www.instagram.com/{{ auth()->user()->admin->ig }}" target="_blank" >
                                       <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 25 25" fill="currentColor">
                                           <path d="M15.233 5.488c-.843-.038-1.097-.046-3.233-.046s-2.389.008-3.232.046c-2.17.099-3.181 1.127-3.279 3.279-.039.844-.048 1.097-.048 3.233s.009 2.389.047 3.233c.099 2.148 1.106 3.18 3.279 3.279.843.038 1.097.047 3.233.047 2.137 0 2.39-.008 3.233-.046 2.17-.099 3.18-1.129 3.279-3.279.038-.844.046-1.097.046-3.233s-.008-2.389-.046-3.232c-.099-2.153-1.111-3.182-3.279-3.281zm-3.233 10.62c-2.269 0-4.108-1.839-4.108-4.108 0-2.269 1.84-4.108 4.108-4.108s4.108 1.839 4.108 4.108c0 2.269-1.839 4.108-4.108 4.108zm4.271-7.418c-.53 0-.96-.43-.96-.96s.43-.96.96-.96.96.43.96.96-.43.96-.96.96zm-1.604 3.31c0 1.473-1.194 2.667-2.667 2.667s-2.667-1.194-2.667-2.667c0-1.473 1.194-2.667 2.667-2.667s2.667 1.194 2.667 2.667zm4.333-12h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm.952 15.298c-.132 2.909-1.751 4.521-4.653 4.654-.854.039-1.126.048-3.299.048s-2.444-.009-3.298-.048c-2.908-.133-4.52-1.748-4.654-4.654-.039-.853-.048-1.125-.048-3.298 0-2.172.009-2.445.048-3.298.134-2.908 1.748-4.521 4.654-4.653.854-.04 1.125-.049 3.298-.049s2.445.009 3.299.048c2.908.133 4.523 1.751 4.653 4.653.039.854.048 1.127.048 3.299 0 2.173-.009 2.445-.048 3.298z"/></svg>
                                       </svg>
                                   </a>
                               </div>
                           </div>
                       </div>
                       </p>
                   </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>

