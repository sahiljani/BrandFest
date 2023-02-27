<x-app-layout>
 
    <x-Header name='Add Company' />


    <div
        class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border ml-10">
        
        <div class="flex justify-around w-full p-6 ">

            <div class="w-70%">
                <section class="formone">
                    <form method="POST" action="{{ route('company.store') }}" enctype="multipart/form-data">  
                        @csrf                      
                        
                        <div class="py-3 px-3">
                            <label
                                class="block text-gray-700 dark:text-gray-300  mb-2 ml-1 font-bold text-xs  dark:text-white/80"
                                for="Company Name">
                                Company Name
                            </label>
                            <input type="text" name="name" id="company_name"
                            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" required="required"
                                autofocus="autofocus" autocomplete="name">
                        </div>

                        <div class="py-3 px-3">
                            <label
                                class="block text-gray-700 dark:text-gray-300  mb-2 ml-1 font-bold text-xs  dark:text-white/80"
                                for="email">
                                Email
                            </label>
                            <input type="text" name="email" id="email"
                            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" required="required"
                                autofocus="autofocus" autocomplete="email">
                        </div>

                        <div class="py-3 px-3">
                            <label
                                class="block text-gray-700 dark:text-gray-300  mb-2 ml-1 font-bold text-xs  dark:text-white/80"
                                for="phonenumber">
                                Phone number
                            </label>
                            <input type="text" name="phonenumber" id="phonenumber"
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"
                                required="required" autofocus="autofocus" autocomplete="phonenumber">
                        </div>

                        <div class="py-3 px-3">
                            <label
                                class="block text-gray-700 dark:text-gray-300  mb-2 ml-1 font-bold text-xs  dark:text-white/80"
                                for="address">
                                Address
                            </label>
                            <input type="text" name="address" id="address"
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"
                                required="required" autofocus="autofocus" autocomplete="address">
                        </div>

                        <div class="flex ">
                            <div class="py-3 px-3">
                                <label
                                    class="block text-gray-700 dark:text-gray-300  mb-2 ml-1 font-bold text-xs  dark:text-white/80"
                                    for="Logo">
                                    Logo
                                </label>
                                <input type="file" name="logo" id="Logo"
                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"
                                    required="required" autofocus="autofocus" autocomplete="logo">
                            </div>

                            <div class="py-3 px-3">
                                <label
                                    class="block text-gray-700 dark:text-gray-300  mb-2 ml-1 font-bold text-xs  dark:text-white/80"
                                    for="Darklogo">
                                    Darklogo
                                </label>
                                <input type="file" name="dark_logo" id="dark_logo"
                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"
                                    required="required" autofocus="autofocus" autocomplete="Darklogo">
                            </div>

                            <div class="py-3 px-3">
                                <label
                                    class="block text-gray-700 dark:text-gray-300  mb-2 ml-1 font-bold text-xs  dark:text-white/80"
                                    for="light_logo">
                                    Light Logo
                                </label>
                                <input type="file" name="light_logo" id="light_logo"
                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"
                                    required="required" autofocus="autofocus" autocomplete="light logo">
                            </div>
                        </div>                     

                        <div class="gap-4 py-3 px-3">                       
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">
                                Add
                            </button> 
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>


    <!-- end cards -->
    <!-- plugin for charts  -->
    <script src="../assets/js/plugins/chartjs.min.js" async></script>
    <!-- plugin for scrollbar  -->
    <script src="../assets/js/plugins/perfect-scrollbar.min.js" async></script>
    <!-- main script file  -->
    <script src="../assets/js/argon-dashboard-tailwind.js?v=1.0.1" async></script>
 
</x-app-layout>
