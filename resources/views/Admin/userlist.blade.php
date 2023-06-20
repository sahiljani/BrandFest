<x-app-layout>

    <!-- Navbar -->
    <x-Header name='User List' />

    <!-- end Navbar -->

    <!-- cards -->


    <div class="">

        <div class="flex flex-wrap mx-6">
            <div class="flex-none w-full max-w-full px-3">
                <div
                    class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6 class="dark:text-white">Users List</h6>
                    </div>
                    <div class="flex-auto px-0 pt-0 pb-2">
                        <div class="p-0 overflow-x-auto ps">
                            <table
                                class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                                <thead class="align-bottom">
                                    <tr>
                                        <th
                                            class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Name</th>
                                        <th
                                            class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Email</th>
                                        <th
                                            class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            View</th>                                        
                                        <th
                                            class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <div class="flex px-2 py-1">
                                                    <div class="flex flex-col justify-center">
                                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                                            {{ $user->name }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80">
                                                    {{ $user->email }}
                                                </p>
                                            </td>
                                            <td
                                                class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <a href="{{ route('usercompanies.list', $user->id) }}" type="button" c
                                                    lass="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">View</button>
                                            </td>
                                            {{-- <td
                                                class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <span
                                                    class="bg-gradient-to-tl from-emerald-500 to-teal-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white"
                                                    id="open-modal">Edit</span>
                                            </td> --}}
                                            <td
                                                class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <form method="POST" id="deletealert" 
                                                action='{{ route('user.delete', $user->id) }}' class="my-2">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="bg-gradient-to-tl from-emerald-500 to-teal-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- plugin for charts  -->
    <script src="../assets/js/plugins/chartjs.min.js" async></script>
    <!-- plugin for scrollbar  -->
    <script src="../assets/js/plugins/perfect-scrollbar.min.js" async></script>
    <!-- main script file  -->
    <script src="../assets/js/argon-dashboard-tailwind.js?v=1.0.1" async></script>
    <script>
        const deleteAlert = document.querySelector('#deletealert');
        deleteAlert.addEventListener('submit', (e) => {
            e.preventDefault();
            const confirmDelete = confirm('Are you sure you want to delete this company?');
            if (confirmDelete) {
                deleteAlert.submit();
            }
        });
    </script>
</x-app-layout>
