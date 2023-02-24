<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <section>
        <div class="relative flex items-center min-h-screen p-0 overflow-hidden bg-center bg-cover">
            <div class="container z-1">
                <div class="flex flex-wrap -mx-3">
                    <div
                        class="flex flex-col w-full max-w-full px-3 mx-auto lg:mx-0 shrink-0 md:flex-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none lg:py4 dark:bg-gray-950 rounded-2xl bg-clip-border">
                            <div class="p-6 pb-0 mb-0">
                                <h4 class="font-bold">Register</h4>
                                <p class="mb-0">Enter your email and password to sign in</p>
                            </div>
                            <div class="flex-auto p-6">
                                <form method="POST" action="{{ route('register') }}">                                  
                                    @csrf 

                                    <div class="mb-4">
                                        <x-input-label for="name" :value="__('Name')" />
                                        <x-text-input id="name" class="mt-1 focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>

                                    <div class="mb-4">
                                        
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-text-input id="email" class="mt-1 focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        
                                    </div>


                                    <div class="mt-4">
                                        <x-input-label for="password" :value="__('Password')" />
                            
                                        <x-text-input id="password" class="focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                                                        type="password"
                                                        name="password"
                                                        required autocomplete="new-password" />
                            
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>

                                    <div class="mt-4">
                                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                            
                                        <x-text-input id="password_confirmation" class="focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                                                        type="password"
                                                        name="password_confirmation" required autocomplete="new-password" />
                            
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>


                                    <div class="text-center">
                                        <button type="submit"
                                            class="inline-block w-full px-16 py-3.5 mt-6 mb-0 font-bold leading-normal text-center text-white align-middle transition-all bg-blue-500 border-0 rounded-lg cursor-pointer hover:-translate-y-px active:opacity-85 hover:shadow-xs text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25">Register</button>
                                    </div>
                                </form>
                            </div>
                            
                            <div
                                class="border-black/12.5 rounded-b-2xl border-t-0 border-solid p-6 text-center pt-0 px-1 sm:px-6">
                                <p class="mx-auto mb-6 leading-normal text-sm">Don't have an account? <a
                                        href="{{ route('login') }}"
                                        class="font-semibold text-transparent bg-clip-text bg-gradient-to-tl from-blue-500 to-violet-500">Sign
                                        up</a></p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="absolute top-0 right-0 flex-col justify-center hidden w-6/12 h-full max-w-full px-3 pr-0 my-auto text-center flex-0 lg:flex">
                        <div
                            class="relative flex flex-col justify-center h-full bg-cover px-24 m-4 overflow-hidden bg-[url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg')] rounded-xl ">
                            <span
                                class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-blue-500 to-violet-500 opacity-60"></span>
                            <h4 class="z-20 mt-12 font-bold text-white">"Attention is the new currency"</h4>
                            <p class="z-20 text-white ">The more effortless the writing looks, the more effort the
                                writer actually put into the process.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-guest-layout>
