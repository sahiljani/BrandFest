<x-app-layout>

    <!-- Navbar -->
    <x-Header name='Add Poster' />

    <!-- end Navbar -->

    <!-- cards -->


    <div
        class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border mx-10">
        <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">

        </div>
        <div class="flex justify-around w-full p-6">

            <div class="w-full">
                <section class="formone">



                    <form id="poster-form" method="post" action="{{ route('poster.store') }}"
                        enctype="multipart/form-data" class="mt-6 space-y-6">
                        @csrf

                        <div class="py-3 px-3">
                            <label
                                class="block text-gray-700 dark:text-gray-300  mb-2 ml-1 font-bold text-xs  dark:text-white/80"
                                for="poster_image">
                                Poster Image:
                            </label>
                            <input type="file" name="image" id="image"
                                class="w-full border-2 border-black rounded-lg" required="required"
                                autofocus="autofocus" autocomplete="name">
                            <input type="hidden" name="previous_image" id="previous_image" value="">
                        </div>


                        <div class="py-3 px-3">
                            <label
                                class="block text-gray-700 dark:text-gray-300  mb-2 ml-1 font-bold text-xs  dark:text-white/80"
                                for="name">
                                Name
                            </label>
                            <input type="text" name="name" id="name"
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"
                                required="required" autofocus="autofocus" autocomplete="name">
                        </div>


                        <div class="py-3 px-3">
                            <label
                                class="block text-gray-700 dark:text-gray-300  mb-2 ml-1 font-bold text-xs  dark:text-white/80"
                                for="description">
                                Description
                            </label>
                            <input type="text" name="description" id="description"
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"
                                required="required" autofocus="autofocus" autocomplete="description">
                        </div>

                        <div class="py-3 px-3">
                            <label
                                class="block text-gray-700 dark:text-gray-300  mb-2 ml-1 font-bold text-xs  dark:text-white/80"
                                for="date">
                                Date
                            </label>
                            <input type="date" name="date" id="date"
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none"
                                required="required" autofocus="autofocus" autocomplete="date">
                        </div>


                        <div class="py-3 px-3">
                            <label
                                class="block text-gray-700 dark:text-gray-300  mb-2 ml-1 font-bold text-xs  dark:text-white/80"
                                for="logo">
                                Select Logo
                            </label>
                            <select name="logo_type"
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                <option value="logo" class="w-full">Simple Logo</option>
                                <option value="dark_logo" class="w-full">Dark Logo</option>
                                <option value="light_logo" class="w-full">Light Logo</option>
                            </select>
                        </div>

                        <div class="py-3 px-3">
                            <label
                                class="block text-gray-700 dark:text-gray-300  mb-2 ml-1 font-bold text-xs  dark:text-white/80"
                                for="logoPosition">
                                Logo Position
                            </label>
                            <label for="logo_x_pos">X Position Range:</label>
                            <input type="range" class="w-[60%]" id="logo_x_pos" name="logo_x_pos">
                            <label for="logo_y_pos">Y Position Range:</label>
                            <input type="range" class="w-[60%]" id="logo_y_pos" name="logo_y_pos"><br>
                            <label for="logo_width">Width:</label>
                            <input type="range" class="w-[60%]" id="logo_width" name="logo_width">
                        </div>

                        <div class="py-3 px-3">
                            <label
                                class="block text-gray-700 dark:text-gray-300  mb-2 ml-1 font-bold text-xs  dark:text-white/80"
                                for="Name">
                                Name Position
                            </label>
                            <label for="name_x_pos">X Position Range:</label>
                            <input type="range" class="w-[60%]" id="name_x_pos" name="name_x_pos">
                            <label for="name_y_pos">Y Position Range:</label>
                            <input type="range" class="w-[60%]" id="name_y_pos" name="name_y_pos">
                            <label for="name_font_size">Font Size:</label>
                            <input type="range" class="w-[60%]" id="name_font_size" name="name_font_size">
                            <label for="name_font_color">Font Color:</label>
                            <input type="color" class="" id="name_font_color" name="name_font_color">

                        </div>

                        <div class="py-3 px-3">
                            <label
                                class="block text-gray-700 dark:text-gray-300  mb-2 ml-1 font-bold text-xs  dark:text-white/80"
                                for="name">
                                Name Font Family
                            </label>
                            <?php
                                $fonts = scandir(public_path('fonts'));
                                $ttf = array_filter($fonts, function($font) {
                                    return pathinfo($font, PATHINFO_EXTENSION) == 'ttf';
                                });
                            ?> 
                            <select name="name_font_family" id="name_font_family"
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                @foreach ($ttf as $font)
                                    <option value="{{ $font }}">{{ $font }}</option>
                                @endforeach</select>
                            </select>
                        </div>

                        <div class="py-3 px-3">
                            <label
                                class="block text-gray-700 dark:text-gray-300  mb-2 ml-1 font-bold text-xs  dark:text-white/80"
                                for="PhoneNumber">
                                Phone Number
                            </label>
                            <label for="phone_x_pos">X Position Range:</label>
                            <input type="range" id="phone_x_pos" name="phone_x_pos">
                            <label for="phone_y_pos">Y Position Range:</label>
                            <input type="range" id="phone_y_pos" name="phone_y_pos"><br>
                            <label for="phone_font_size">Font Size:</label>
                            <input type="range" id="phone_font_size" name="phone_font_size">
                            <label for="phone_font_color">Font Color:</label>
                            <input type="color" id="phone_font_color" name="phone_font_color">

                        </div>

                        <div class="py-3 px-3">
                            <label
                                class="block text-gray-700 dark:text-gray-300  mb-2 ml-1 font-bold text-xs  dark:text-white/80"
                                for="phone_font_family">
                                Phone Font Family
                            </label>
                            
                             <?php
                                    $fonts = scandir(public_path('fonts'));
                                    $ttf = array_filter($fonts, function($font) {
                                        return pathinfo($font, PATHINFO_EXTENSION) == 'ttf';
                                    });
                                ?> 
                            <select name="phone_font_family" id="phone_font_family"
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                    @foreach ($ttf as $font)
                                        <option value="{{ $font }}">{{ $font }}</option>
                                    @endforeach
                            </select>
                        </div>


                        <div class="py-3 px-3">
                            <label
                                class="block text-gray-700 dark:text-gray-300  mb-2 ml-1 font-bold text-xs  dark:text-white/80"
                                for="Email">
                                Email
                            </label>
                            <label for="email_x_pos">X Position Range:</label>
                            <input type="range" id="email_x_pos" name="email_x_pos">
                            <label for="email_y_pos">Y Position Range:</label>
                            <input type="range" id="email_y_pos" name="email_y_pos"><br>
                            <label for="email_font_size">Font Size:</label>
                            <input type="range" id="email_font_size" name="email_font_size">
                            <label for="email_font_color">Font Color:</label>
                            <input type="color" id="email_font_color" name="email_font_color">

                        </div>

                        <div class="py-3 px-3">
                            <label
                                class="block text-gray-700 dark:text-gray-300  mb-2 ml-1 font-bold text-xs  dark:text-white/80"
                                for="email_font_family">
                                Email Font Family
                            </label>
                            <?php
                                    $fonts = scandir(public_path('fonts'));
                                    $ttf = array_filter($fonts, function($font) {
                                        return pathinfo($font, PATHINFO_EXTENSION) == 'ttf';
                                    });
                                ?> 
                            <select name="email_font_family" id="email_font_family"
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                @foreach ($ttf as $font)
                                    <option value="{{ $font }}">{{ $font }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="py-3 px-3">
                            <label
                                class="block text-gray-700 dark:text-gray-300  mb-2 ml-1 font-bold text-xs  dark:text-white/80"
                                for="Address">
                                Address
                            </label>
                            <label for="address_x_pos">X Position Range:</label>
                            <input type="range" id="address_x_pos" name="address_x_pos">
                            <label for="address_y_pos">Y Position Range:</label>
                            <input type="range" id="address_y_pos" name="address_y_pos"><br>
                            <label for="address_font_size">Font Size:</label>
                            <input type="range" id="address_font_size" name="address_font_size">
                            <label for="address_font_color">Font Color:</label>
                            <input type="color" id="address_font_color" name="address_font_color">

                        </div>

                        <div class="py-3 px-3">
                            <label
                                class="block text-gray-700 dark:text-gray-300  mb-2 ml-1 font-bold text-xs  dark:text-white/80"
                                for="address_font_family">
                                Address Font Family
                            </label>
                            <?php
                                    $fonts = scandir(public_path('fonts'));
                                    $ttf = array_filter($fonts, function($font) {
                                        return pathinfo($font, PATHINFO_EXTENSION) == 'ttf';
                                    });
                                ?>
                            <select name="address_font_family" id="address_font_family"
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                @foreach ($ttf as $font)
                                    <option value="{{ $font }}">{{ $font }}</option>
                                @endforeach
                            </select>
                        </div>




                        <div class="gap-4 py-3 px-3">

                            {{-- <button
                                class="sm:p-4 p-3 pt-4 grow rounded-lg flex items-center justify-center bg-red-1000 bg-green-500 shadow-lg text-xs sm:text-base"
                                type="submit" value="Generate Image">Preview</button>

                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">
                                Save
                            </button> --}}

                            <div
                                class="flex gap-7 text-white text-sm font-bold font-mono leading-6 bg-stripes-indigo rounded-lg">
                                <button
                                    class="mx-3 sm:p-4 p-3 pt-4 grow rounded-xl flex items-center justify-center bg-red-1000 bg-black shadow-lg text-xs sm:text-base"
                                    type="submit" value="Generate Image">Preview</button>

                                <button
                                    class="mx-3 sm:p-4 p-3 pt-4 grow rounded-xl flex items-center justify-center bg-red-1000 bg-blue-500 shadow-lg text-xs sm:text-base"
                                    type="submit" value="Generate Image" id="saveposter">Save</button>
                            </div>

                        </div>
                    </form>



                </section>
            </div>

            <div class="w-full">
                <div class="previewblock w-[55%] p-4 flex justify-center">
                    <div class="relative">
                        <img src="{{ asset('preview-icon.jpg') }}" alt="preview" id="preview"
                            class="w-full h-[850px]">
                    </div>
                    <div id="result"></div>
                </div>
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

    <script>
      var stopsubmit = true;
                const saveposter = document.getElementById("saveposter");
                const form = document.getElementById("poster-form");
                saveposter.addEventListener("click", function(e) {
                    stopsubmit = false;
                    form.submit();
                
                });
                document.addEventListener("DOMContentLoaded", function() {
                
                // preview
                const preview = document.getElementById("preview");
                form.addEventListener("submit", function(e) {
                if(stopsubmit){
    
                    e.preventDefault();
                }
                // add csrf token
                const csrf = document.createElement("input");
             
              
                const formData = new FormData(this);          
                const xhr = new XMLHttpRequest();
                xhr.open("POST", <?php echo json_encode(route('poster.store.ajax')); ?>, true);
                xhr.onreadystatechange = function() {
                    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                    const result = xhr.responseText;
                    

                    var newSrc = "<?php echo asset('" + result + "'); ?>";
                    preview.src = newSrc;
                    document.getElementById('previous_image').value = result;
                    } else if (this.status !== 200) {
                    console.log("Error:", xhr.statusText);
                    }
                };
                xhr.send(formData);
                });
                });
        
    </script>

</x-app-layout>
