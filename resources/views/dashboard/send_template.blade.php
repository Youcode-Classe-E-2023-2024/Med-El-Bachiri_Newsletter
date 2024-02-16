@extends('layouts.app')
@section('content')

<!-- component -->
<div class="w-full h-auto overflow-scroll block h-screen bg-gradient-to-r from-blue-100 via-purple-100 to-pink-100 p-4 flex items-center justify-center" >
    <form action="{{ route('sendMailToSubs') }}" method="post">
        @csrf
        <div class="bg-white py-6 px-10 sm:max-w-md w-full ">
            <div class="sm:text-3xl text-xl font-semibold text-center text-sky-600  mb-2">
                Send template
            </div>
            <div class="">
                {{-- // --}}

                {{-- media --}}
                <div>

                    <div class="max-w-xl mx-auto">
                        <h3 class="mb-4 font-semibold text-gray-900 ">Select Media to send with the template</h3>
                        <div class="overflow-y-auto w-full max-h-48"> <!-- Added container div with max height and scrolling -->
                            <ul class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                <!-- Loop through each media -->
                                @foreach($all_media as $media)
                                    <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                                        <div class="flex items-center justify-between ps-3">
                                            <div class="flex items-center">
                                                <input id="{{$media['id']}}" value="{{ $media['id'] }}" type="radio" name="selected_media">
                                                <label for="{{$media['id']}}" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{$media['name']}}</label>
                                                <!-- You can add more information about the media here -->
                                            </div>
                                            <div class="relative">
                                                <img src="{{ asset($media['url']) }}" alt="" class="rounded-sm shadow-sm shadow-white  w-28">
                                                <button type="button" onclick="showImage('{{ asset($media['url']) }}')" class="absolute bottom-2 right-2 px-3 py-1 text-xs font-semibold text-white bg-blue-500 rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-600">View</button>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Popup modal for viewing the image -->
                    <div id="imageModal" class="fixed top-0 left-0 flex items-center justify-center w-full h-full bg-black bg-opacity-50 hidden">
                        <div class="bg-white p-8 max-w-4xl rounded-lg shadow-lg">
                            <img id="modalImage" src="" alt="" class="w-full">
                            <button type="button" onclick="closeImageModal()" class="absolute top-0 right-0 mt-4 mr-4 px-3 py-1 text-xs font-semibold text-white bg-blue-500 rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Close</button>
                        </div>
                    </div>



                </div>

                {{-- templates --}}
                <h1 class="my-2">Select Template</h1>
                <div class="max-w-xl overflow-y-auto max-h-48">

                    @foreach($templates as $tmp)
                        <div id="" class="max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-4">
                            <div class="flex justify-between">
                                <svg class="w-3 h-3 text-gray-500 dark:text-gray-400 mb-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M18 5h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C8.4.842 6.949 0 5.5 0A3.5 3.5 0 0 0 2 3.5c.003.52.123 1.033.351 1.5H2a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2ZM8.058 5H5.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM11 13H9v7h2v-7Zm-4 0H2v5a2 2 0 0 0 2 2h3v-7Zm6 0v7h3a2 2 0 0 0 2-2v-5h-5Z"/>
                                </svg>
                                <input id="bordered-radio-1" type="radio" value="{{ $tmp['id'] }}" name="template_selected" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-900 dark:text-white">{{ $tmp['title'] }}</h5>
                            <p class="text-white text-sm">created by: <span class="text-green-500">{{ $tmp['creator_name'] }}</span></p>

                            <div class="flex justify-between">
                            <button type="button" onclick="showTemplate({{ json_encode($tmp['content']) }})" class="inline-flex mt-2 text-sm font-medium text-blue-600 hover:underline view-template-btn">
                                View
                            </button>
                                <p style="font-size: 10px; padding: 5px 7px" class="text-white border border-white rounded-sm">Used Times : <span class="text-purple-300 text-sm"> {{ $tmp->used_times }}</span></p>
                            </div>
                        </div>
                    @endforeach



                    <!-- Popup modal for viewing the template -->
                    <div id="templateModal" class="fixed top-0 left-0 flex items-center justify-center w-full h-full bg-black bg-opacity-50 hidden">
                        <div class="bg-white p-8 max-w-4xl rounded-lg shadow-lg">
                            <div id="templateContent"></div>
                            <button type="button" onclick="closeTemplateModal()" class="absolute top-0 right-0 mt-4 mr-4 px-3 py-1 text-xs font-semibold text-white bg-blue-500 rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Close</button>
                        </div>
                    </div>

                </div>

                {{-- btn --}}
                <div class="flex justify-center my-6 ">
                    <button type="submit" class=" rounded-full  p-3 w-full sm:w-56  bg-gradient-to-r from-sky-600  to-teal-300 text-white text-sm font-semibold " >
                        Send Mail to All subscribers
                    </button>
                </div>
                {{-- // --}}

            </div>
        </div>
    </form>
</div>


<script>
    function showImage(imageUrl) {
        let modal = document.getElementById("imageModal");
        let modalImage = document.getElementById("modalImage");
        modalImage.src = imageUrl;
        modal.classList.remove("hidden");
    }

    function closeImageModal() {
        let modal = document.getElementById("imageModal");
        modal.classList.add("hidden");
    }

    function showTemplate(content) {
        let modal = document.getElementById("templateModal");
        let templateContent = document.getElementById("templateContent");
        templateContent.innerHTML = content;
        modal.classList.remove("hidden");
    }

    function closeTemplateModal() {
        let modal = document.getElementById("templateModal");
        modal.classList.add("hidden");
    }

    function selectTemplate(templateId) {
        // Remove the selected class from all template containers
        const templateContainers = document.querySelectorAll('.max-w-sm');
        templateContainers.forEach(container => {
            container.classList.remove('border-2', 'border-red-500');
        });

        // Add the selected class to the container of the selected template
        const selectedContainerId = 'template' + templateId + 'Container';
        const selectedContainer = document.getElementById(selectedContainerId);
        selectedContainer.classList.add('border-2', 'border-red-500');
    }

</script>
@endsection
