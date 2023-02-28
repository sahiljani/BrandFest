<x-app-layout>

    <!-- Navbar -->
    <x-Header name='Poster List' />

    <!-- end Navbar -->

    <!-- cards -->


    <div class="">

        <div class="flex flex-wrap mx-6">
            <div class="flex-none w-full max-w-full px-3">
                <div
                    class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    {{-- <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6 class="dark:text-white">Poster List</h6>
                    </div> --}}
                    <div class="flex flex-wrap mx-3 py-3">
                        <div class="flex items-center flex-none w-1/2 max-w-full px-3">
                          <h6 class="mb-0 dark:text-white">Poster List</h6>
                        </div>
                        <div class="flex-none w-1/2 max-w-full px-3 text-right">
                          <a href="{{ route('poster.add') }}" class="inline-block px-5 py-2.5 font-bold leading-normal text-center text-white align-middle transition-all bg-transparent rounded-lg cursor-pointer text-sm ease-in shadow-md bg-150 bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 hover:shadow-xs active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25" href="javascript:;"> <i class="fas fa-plus" aria-hidden="true"> </i>&nbsp;&nbsp;Add New Poster</a>
                        </div>
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
                                            Date</th>
                                        <th
                                            class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Image</th>
                                        <th
                                            class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Description</th>
                                        <th
                                            class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Edit</th>
                                        <th
                                            class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posters as $poster)
                                        <tr>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <div class="flex px-2 py-1">
                                                    <div class="flex flex-col justify-center">
                                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                                            {{ $poster->name }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <p
                                                    class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80">
                                                    {{ $poster->date }}</p>

                                            </td>
                                            <td
                                                class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <div>
                                                    <img src="{{ asset('storage/' . $poster->image) }}" width="100px"
                                                        height="100px"
                                                        class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-30 w-30 rounded-xl"
                                                        alt="user1">
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <span
                                                    class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{ $poster->description }}</span>
                                            </td>


                                            <td
                                            class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">                                               
                                                    <a 
                                                    data-id="{{ $poster->id }}" 
                                                    data-name="{{ $poster->name }}"
                                                    data-date="{{ $poster->date }}"
                                                    data-image="{{ asset('storage/' . $poster->image) }}"
                                                    data-description="{{ asset('storage/' . $poster->description) }}"
                                                    
                                                    class="inline-block dark:text-white px-4 py-2.5 mb-0 font-bold text-center align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-normal text-sm ease-in bg-150 hover:-translate-y-px active:opacity-85 bg-x-25 text-slate-700" id="open-modal" href="javascript:;">
                                                    <i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a>

                                        </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">                                               

                                                <form method="POST" id="deletealert" action='{{ route("poster.delete",$poster->id) }}' class="m-4">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="relative z-10 inline-block px-4 py-2.5 mb-0 font-bold text-center text-transparent align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-normal text-sm ease-in bg-150 bg-gradient-to-tl from-red-600 to-orange-600 hover:-translate-y-px active:opacity-85 bg-x-25 bg-clip-text">                                           
                                                            <i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-orange-600 bg-x-25 bg-clip-text" aria-hidden="true">
                                                                </i>Delete
                                                            </button>                                                      
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

    {{-- <div class="fixed z-10 inset-0 overflow-y-auto hidden" id="modal">
                <div class="flex items-center justify-center min-h-screen">
                  <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                  </div>
              
                  <div class="bg-white rounded-lg p-8 w-full max-w-md mx-auto z-10">
                   
                   <form method="POST" enctype="multipart/form-data">
                    @csrf  
                    
                    
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="name">
                          Name
                        </label>
                        <input  class="w-full border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" name="name" placeholder="Enter name">
                      </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="date">                                    
                            Date
                            </label>                            
                            <input class="w-full border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="date" id="date" type="date" placeholder="Select Date">
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="image">
                            Poster Image
                            </label>
                            <img src="" alt="logo" id="poster-image-preview" width="100px" height="100px"> 
                            <input class="w-full border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="image" name="image" type="file" placeholder="Enter dark logo">
                        </div>   
                        
                        <div class="mb-4">                        
                            <label class="block text-gray-700 font-bold mb-2" for="description">
                            Description
                          </label>
                          <input name="description" class="w-full border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" type="text" placeholder="Enter description">
                        </div>
              
                       
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-2" type="button" id="close-modal">
                            Close
                        </button>
                        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" type="submit">
                            Save
                        </button>
                         
                    </form>
                  </div>
                </div>
            </div> --}}


    <!-- end cards -->
    <!-- plugin for charts  -->
    <script src="../assets/js/plugins/chartjs.min.js" async></script>
    <!-- plugin for scrollbar  -->
    <script src="../assets/js/plugins/perfect-scrollbar.min.js" async></script>
    <!-- main script file  -->
    <script src="../assets/js/argon-dashboard-tailwind.js?v=1.0.1" async></script>
    <script>
        // const openModalButton = document.querySelector('#open-modal');
        // const closeModalButton = document.querySelector('#close-modal');
        // const modal = document.querySelector('#modal');     


        // closeModalButton.addEventListener('click', () => {
        //   modal.classList.add('hidden');
        // });

        // // make the edit button work to populate the modal with the data

        // const model_id = document.querySelector('#modal #id');
        // const model_name = document.querySelector('#modal #name');
        // const model_date = document.querySelector('#modal #date');
        // const model_poster = document.querySelector('#modal #poster');        
        // const model_description = document.querySelector('#modal #description');


        // openModalButton.addEventListener('click', () => {
        //     const name = openModalButton.getAttribute('data-name');
        //     const date = openModalButton.getAttribute('data-date');
        //     const image = openModalButton.getAttribute('data-image');
        //     const description = openModalButton.getAttribute('data-description');
        //     const id = openModalButton.getAttribute('data-id');

        //     const posterImagePreview = document.querySelector('#poster-image-preview');
        //     const nameInput = document.querySelector('#name');
        //     const dateInput = document.querySelector('#date');
        //     const imageInput = document.querySelector('#image');
        //     const descriptionInput = document.querySelector('#description');

        //     nameInput.value = name;
        //     dateInput.value = date;
        //     posterImagePreview.src = image;
        //     descriptionInput.value = description;
        //     modal.classList.remove('hidden');
        // });


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
