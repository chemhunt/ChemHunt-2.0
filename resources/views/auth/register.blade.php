<x-guest-layout>
    <div>
        @include('layouts.chemhunt-logo')
        <div class="flex flex-col w-full mt-8">
            <p class="text-3xl md:text-5xl my-4 text-center text-chemhunt-logo leading-relaxed md:leading-snug">Register Yourself!</p>
            <p class="text-sm md:text-base leading-snug text-chemhunt-logo text-center text-opacity-100">
                Please register yourself for this amazing event ...
            </p>
        </div>
        <div class="text-chemhunt-logo py-5">
            <form id="register" name="register" method="post" action="{{ route('register') }}">
                @csrf
                <div class="container mx-auto flex flex-col md:flex-row my-6 md:my-20">
                    <div class="flex flex-col w-full lg:w-1/3 p-8">
                        <p class="text-3xl md:text-5xl my-4 leading-relaxed md:leading-snug">Personal Info</p>
                        <p class="text-sm md:text-base leading-snug text-chemhunt-logo text-opacity-100">
                            Please provide your personal information ...
                        </p>
                    </div>
                    <div class="flex flex-col w-full lg:w-2/3 justify-center">
                        <div class="container w-full px-4">
                            <div class="flex flex-wrap justify-center">
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-chemhunt-light">
                                        <div class="flex-auto p-5 lg:p-10">
                                            <div class="relative w-full mb-3">
                                                <label class="block text-chemhunt-logo text-xl font-bold mb-2" for="first_name">First Name(Your Name)</label>
                                                <input type="name" name="first_name" id="first_name" value="{{ old('first_name') }}" class="font-sans border-0 px-3 py-3 rounded text-xl shadow w-full bg-chemhunt-logo placeholder-black text-white outline-none focus:bg-chemhunt-dark" placeholder=" " style="transition: all 0.15s ease 0s;" required />
                                            </div>
                                            <div class="relative w-full mb-3">
                                                <label class="block text-chemhunt-logo text-xl font-bold mb-2" for="middle_name">Middle Name</label>
                                                <input type="name" name="middle_name" id="middle_name" value="{{ old('middle_name') }}" class="font-sans border-0 px-3 py-3 rounded text-xl shadow w-full bg-chemhunt-logo placeholder-black text-white outline-none focus:bg-chemhunt-dark" placeholder=" " style="transition: all 0.15s ease 0s;" required />
                                            </div>
                                            <div class="relative w-full mb-3">
                                                <label class="block text-chemhunt-logo text-xl font-bold mb-2" for="last_name">Last  Name(Surname)</label>
                                                <input type="name" name="last_name" id="last_name" value="{{ old('last_name')}}" class="font-sans border-0 px-3 py-3 rounded text-xl shadow w-full bg-chemhunt-logo placeholder-black text-white outline-none focus:bg-chemhunt-dark" placeholder=" " style="transition: all 0.15s ease 0s;" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mx-auto flex flex-col md:flex-row my-6 md:my-24">
                    <div class="flex flex-col w-full lg:w-1/3 p-8">
                        <p class="text-3xl md:text-5xl my-4 leading-relaxed md:leading-snug">College Info</p>
                        <p class="text-sm md:text-base leading-snug text-chemhunt-logo text-opacity-100">
                            Please provide your college , state and year of teaching ...
                        </p>
                    </div>
                    <div class="flex flex-col w-full lg:w-2/3 justify-center">
                        <div class="container w-full px-4">
                            <div class="flex flex-wrap justify-center">
                                <div class="w-full lg:w-6/12 px-4">
                                    <div
                                        class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-chemhunt-light">
                                        <div class="flex-auto p-5 lg:p-10">
                                            <div class="relative w-full mb-7">
                                                <label class="block text-chemhunt-logo text-xl font-bold mb-2" for="college-name">College Name</label>
                                                <input type="name" name="college" id="college" value="{{ old('college') }}" class="font-sans border-0 px-3 py-3 rounded text-xl shadow w-full bg-chemhunt-logo placeholder-black text-white outline-none focus:bg-chemhunt-dark" placeholder=" " style="transition: all 0.15s ease 0s;" required />
                                            </div>
                                            <div class="relative w-full mb-5">
                                                <label class="block text-chemhunt-logo text-xl font-bold mb-2" for="college-name">Year Of Study</label>
                                                <select id="year" name="year" class="font-sans border-0 px-3 py-3 rounded text-xl shadow w-full bg-chemhunt-logo placeholder-black text-white outline-none focus:bg-chemhunt-dark" required>
                                                    <option selected disabled>Select Year</option>
                                                    <option id="second-year" value="2">Second Year</option>
                                                    <option id="third-year" value="3">Third Year</option>
                                                </select>
                                            </div>
                                            <div class="relative w-full mb-3">
                                                <label class="block text-chemhunt-logo text-xl font-bold mb-2" for="state">State</label>
                                                <select id="state" name="state" class="font-sans border-0 px-3 py-3 rounded text-xl shadow w-full bg-chemhunt-logo placeholder-black text-white outline-none focus:bg-chemhunt-dark" required>
                                                    <option selected disabled>Select State</option>
                                                    <option id="1" value="andhra-pradesh">Andhra Pradesh</option>
                                                    <option id="2" value="arunachal-pradesh">Arunachal Pradesh</option>
                                                    <option id="3" value="assam">Assam</option>
                                                    <option id="4" value="bihar">Bihar</option>
                                                    <option id="5" value="chhattisgarh">Chhattisgarh</option>
                                                    <option id="6" value="goa">Goa</option>
                                                    <option id="7" value="gujarat">Gujarat</option>
                                                    <option id="8" value="haryana">Haryana</option>
                                                    <option id="9" value="himachal-pradesh">Himachal Pradesh</option>
                                                    <option id="10" value="jharkhand">Jharkhand</option>
                                                    <option id="11" value="karnataka">Karnataka</option>
                                                    <option id="12" value="kerala">Kerala</option>
                                                    <option id="13" value="madhya-pradesh">Madhya Pradesh</option>
                                                    <option id="14" value="maharashtra">Maharashtra</option>
                                                    <option id="15" value="manipur">Manipur</option>
                                                    <option id="16" value="meghalaya">Meghalaya</option>
                                                    <option id="17" value="mizoram">Mizoram</option>
                                                    <option id="18" value="nagaland">Nagaland</option>
                                                    <option id="19" value="odisha">Odisha</option>
                                                    <option id="20" value="punjab">Punjab</option>
                                                    <option id="21" value="rajasthan">Rajasthan</option>
                                                    <option id="22" value="sikkim">Sikkim</option>
                                                    <option id="23" value="tamilnadu">Tamilnadu</option>
                                                    <option id="24" value="telengana">Telengana</option>
                                                    <option id="25" value="tripura">Tripura</option>
                                                    <option id="26" value="uttar-pradesh">Uttar Pradesh</option>
                                                    <option id="27" value="uttarakhand">Uttarakhand</option>
                                                    <option id="28" value="west Bengal">West Bengal</option>
                                                    <option id="29" value="andaman-and-nicobar-island">Andaman and Nicobar Island</option>
                                                    <option id="30" value="chandigarh">Chandigarh</option>
                                                    <option id="31" value="dadra-and-nagar-haveli-and-daman-and-diu">Dadra and Nagar Haveli and Daman and Diu</option>
                                                    <option id="32" value="delhi">Delhi</option>
                                                    <option id="33" value="ladakh">Ladakh</option>
                                                    <option id="34" value="lakshadweep">Lakshadweep</option>
                                                    <option id="35" value="jammu-and-kashmir">Jammu and Kashmir</option>
                                                    <option id="36" value="pondicherry">Pondicherry</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mx-auto flex flex-col md:flex-row my-6 md:my-20">
                    <div class="flex flex-col w-full lg:w-1/3 p-8">
                        <p class="text-3xl md:text-5xl my-4 leading-relaxed md:leading-snug">Contact Info</p>
                        <p class="text-sm md:text-base leading-snug text-chemhunt-logo text-opacity-100">
                            Please provide your contact info Email,Phone No...
                        </p>
                    </div>
                    <div class="flex flex-col w-full lg:w-2/3 justify-center">
                        <div class="container w-full px-4">
                            <div class="flex flex-wrap justify-center">
                                <div class="w-full lg:w-6/12 px-4">
                                    <div
                                        class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-chemhunt-light">
                                        <div class="flex-auto p-5 lg:p-10">
                                            <div class="relative w-full mb-3">
                                                <label class="block text-chemhunt-logo text-xl font-bold mb-2" for="phone_number">Phone Number</label>
                                                <input type="name" name="phone_number" id="phone_number" value="{{ old('phone_number') }}" class="font-sans border-0 px-3 py-3 rounded text-xl shadow w-full bg-chemhunt-logo placeholder-black text-white outline-none focus:bg-chemhunt-dark" placeholder=" " style="transition: all 0.15s ease 0s;" required />
                                            </div>
                                            <div class="relative w-full mb-3">
                                                <label class="block text-chemhunt-logo text-xl font-bold mb-2" for="phone_number_wapp">Phone Number(WhatsApp)</label>
                                                <input type="name" name="phone_number_wapp" id="phone_number_wapp" value="{{ old('phone_number_wapp') }}" class="font-sans border-0 px-3 py-3 rounded text-xl shadow w-full bg-chemhunt-logo placeholder-black text-white outline-none focus:bg-chemhunt-dark" placeholder=" " style="transition: all 0.15s ease 0s;" required />
                                            </div>
                                            <div class="relative w-full mb-3">
                                                <label class="block text-chemhunt-logo text-xl font-bold mb-2" for="user_email">Email(personal)</label>
                                                <input type="email" name="user_email" id="user_email" value="{{ old('user_email') }}" class="font-sans border-0 px-3 py-3 rounded text-xl shadow w-full bg-chemhunt-logo placeholder-black text-white outline-none focus:bg-chemhunt-dark" placeholder=" " style="transition: all 0.15s ease 0s;" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-6">
                    <button id="registerBtn" name="submit" value="submit" type="submit" class="bg-chemhunt-logo w-50 text-chemhunt-light text-center text-2xl mx-auto active:bg-yellow-400 text-sm font-bold px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1">
                        Submit
                    </button>
                </div>
            </form>
            <div class="flex flex-col text-chemhunt-logo items-center w-full p-8">
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
