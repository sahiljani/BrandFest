<x-app-layout>

    <!-- Navbar -->
    <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start"
        navbar-main navbar-scroll="false">
        <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
            <nav>
                <!-- breadcrumb -->
                <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                    <li class="text-sm leading-normal">
                        <a class="text-white opacity-50" href="javascript:;">Pages</a>
                    </li>
                    <li class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']"
                        aria-current="page">Dashboard</li>
                </ol>
                <h6 class="mb-0 font-bold text-white capitalize">Add Poster</h6>
            </nav>

            <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
                <div class="flex items-center md:ml-auto md:pr-4">
                    <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease">
                        <span
                            class="text-sm ease leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                            <i class="fas fa-search"></i>
                        </span>
                        <input type="text"
                            class="pl-9 text-sm focus:shadow-primary-outline ease w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 dark:bg-slate-850 dark:text-white bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none focus:transition-shadow"
                            placeholder="Type here..." />
                    </div>
                </div>
                <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                    <!-- online builder btn  -->
                    <!-- <li class="flex items-center">
              <a class="inline-block px-8 py-2 mb-0 mr-4 text-xs font-bold text-center text-blue-500 uppercase align-middle transition-all ease-in bg-transparent border border-blue-500 border-solid rounded-lg shadow-none cursor-pointer leading-pro hover:-translate-y-px active:shadow-xs hover:border-blue-500 active:bg-blue-500 active:hover:text-blue-500 hover:text-blue-500 tracking-tight-rem hover:bg-transparent hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent" target="_blank" href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard&amp;_ga=2.76518741.1192788655.1647724933-1242940210.1644448053">Online Builder</a>
            </li> -->
                    <li class="flex items-center">
                        <a href="../pages/sign-in.html"
                            class="block px-0 py-2 text-sm font-semibold text-white transition-all ease-nav-brand">
                            <i class="fa fa-user sm:mr-1"></i>
                            <span class="hidden sm:inline">Sign In</span>
                        </a>
                    </li>
                    <li class="flex items-center pl-4 xl:hidden">
                        <a href="javascript:;" class="block p-0 text-sm text-white transition-all ease-nav-brand"
                            sidenav-trigger>
                            <div class="w-4.5 overflow-hidden">
                                <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                                <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                                <i class="ease relative block h-0.5 rounded-sm bg-white transition-all"></i>
                            </div>
                        </a>
                    </li>
                    <li class="flex items-center px-4">
                        <a href="javascript:;" class="p-0 text-sm text-white transition-all ease-nav-brand">
                            <i fixed-plugin-button-nav class="cursor-pointer fa fa-cog"></i>
                            <!-- fixed-plugin-button-nav  -->
                        </a>
                    </li>

                    <!-- notifications -->

                    <li class="relative flex items-center pr-2">
                        <p class="hidden transform-dropdown-show"></p>
                        <a href="javascript:;" class="block p-0 text-sm text-white transition-all ease-nav-brand"
                            dropdown-trigger aria-expanded="false">
                            <i class="cursor-pointer fa fa-bell"></i>
                        </a>

                        <ul dropdown-menu
                            class="text-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease lg:shadow-3xl duration-250 min-w-44 before:sm:right-8 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent dark:shadow-dark-xl dark:bg-slate-850 bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer">
                            <!-- add show class on dropdown open js -->
                            <li class="relative mb-2">
                                <a class="dark:hover:bg-slate-900 ease py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors"
                                    href="javascript:;">
                                    <div class="flex py-1">
                                        <div class="my-auto">
                                            <img src="../assets/img/team-2.jpg"
                                                class="inline-flex items-center justify-center mr-4 text-sm text-white h-9 w-9 max-w-none rounded-xl" />
                                        </div>
                                        <div class="flex flex-col justify-center">
                                            <h6 class="mb-1 text-sm font-normal leading-normal dark:text-white"><span
                                                    class="font-semibold">New message</span> from Laur</h6>
                                            <p class="mb-0 text-xs leading-tight text-slate-400 dark:text-white/80">
                                                <i class="mr-1 fa fa-clock"></i>
                                                13 minutes ago
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="relative mb-2">
                                <a class="dark:hover:bg-slate-900 ease py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700"
                                    href="javascript:;">
                                    <div class="flex py-1">
                                        <div class="my-auto">
                                            <img src="../assets/img/small-logos/logo-spotify.svg"
                                                class="inline-flex items-center justify-center mr-4 text-sm text-white bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 h-9 w-9 max-w-none rounded-xl" />
                                        </div>
                                        <div class="flex flex-col justify-center">
                                            <h6 class="mb-1 text-sm font-normal leading-normal dark:text-white"><span
                                                    class="font-semibold">New album</span> by Travis Scott</h6>
                                            <p class="mb-0 text-xs leading-tight text-slate-400 dark:text-white/80">
                                                <i class="mr-1 fa fa-clock"></i>
                                                1 day
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="relative">
                                <a class="dark:hover:bg-slate-900 ease py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700"
                                    href="javascript:;">
                                    <div class="flex py-1">
                                        <div
                                            class="inline-flex items-center justify-center my-auto mr-4 text-sm text-white transition-all duration-200 ease-nav-brand bg-gradient-to-tl from-slate-600 to-slate-300 h-9 w-9 rounded-xl">
                                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>credit-card</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                                        fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(453.000000, 454.000000)">
                                                                <path class="color-background"
                                                                    d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                    opacity="0.593633743"></path>
                                                                <path class="color-background"
                                                                    d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="flex flex-col justify-center">
                                            <h6 class="mb-1 text-sm font-normal leading-normal dark:text-white">Payment
                                                successfully completed</h6>
                                            <p class="mb-0 text-xs leading-tight text-slate-400 dark:text-white/80">
                                                <i class="mr-1 fa fa-clock"></i>
                                                2 days
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- end Navbar -->

    <!-- cards -->


    <div
        class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border mx-10">
        <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">

        </div>
        <div class="flex justify-around w-full p-6">

            <div class="w-full">
                <section class="formone">



                    <form method="post" action="http://127.0.0.1:8000/profile" class="mt-6 space-y-6"
                        enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="62ZbTHg9aJSiWpM3O8cQ7r6GbYxAshl8Sri6akLt"> <input
                            type="hidden" name="_method" value="patch">

                        <div class="py-3 px-3">
                            <label
                                class="block text-gray-700 dark:text-gray-300  mb-2 ml-1 font-bold text-xs  dark:text-white/80"
                                for="poster_image">
                                Poster Image:
                            </label>
                            <input type="file" name="poster_image" id="poster_image"
                                class="w-full border-2 border-black rounded-lg" required="required"
                                autofocus="autofocus" autocomplete="name">
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
                            <select name="name_font_family" id="name_font_family"
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                <option value="1" class="w-full">1</option>
                                <option value="2" class="w-full">2</option>
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
                            <select name="phone_font_family" id="phone_font_family"
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                <option value="1" class="w-full">1</option>
                                <option value="2" class="w-full">2</option>
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
                            <select name="email_font_family" id="email_font_family"
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                <option value="1" class="w-full">1</option>
                                <option value="2" class="w-full">2</option>
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
                            <select name="address_font_family" id="address_font_family"
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                <option value="1" class="w-full">1</option>
                                <option value="2" class="w-full">2</option>
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

                            <div class="flex gap-7 text-white text-sm font-bold font-mono leading-6 bg-stripes-indigo rounded-lg">
                                <button class="mx-3 sm:p-4 p-3 pt-4 grow rounded-xl flex items-center justify-center bg-red-1000 bg-black shadow-lg text-xs sm:text-base" type="submit" value="Generate Image">Preview</button>
            
                                <button class="mx-3 sm:p-4 p-3 pt-4 grow rounded-xl flex items-center justify-center bg-red-1000 bg-blue-500 shadow-lg text-xs sm:text-base" type="submit" value="Generate Image" id="saveposter">Save</button>
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
 
</x-app-layout>
