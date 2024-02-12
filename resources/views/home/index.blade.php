@extends('layouts.app')
@section('content')
    <div class="2xl:mx-auto 2xl:container mx-4 py-16">
        <div class="w-full relative flex items-center justify-center">
            <img src="https://i.ibb.co/4sYZ8gC/img-2.png" alt="dining" class="w-full h-full absolute z-0 hidden xl:block" />
            <img src="https://i.ibb.co/bbS3J9C/pexels-max-vakhtbovych-6301182-1.png" alt="dining" class="w-full h-full absolute z-0 hidden sm:block xl:hidden" />
            <img src="https://i.ibb.co/JKkzGDs/pexels-max-vakhtbovych-6301182-1.png" alt="dining" class="w-full h-full absolute z-0 sm:hidden" />
            <div class="bg-gray-800 bg-opacity-80 md:my-16 lg:py-16 py-10 w-full md:mx-24 md:px-12 px-4 flex flex-col items-center justify-center relative z-40">
                <h1 class="text-4xl font-semibold leading-9 text-white text-center">Don’t miss out!</h1>
                <p class="text-base leading-normal text-center text-white mt-6">
                    Subscribe to your newsletter to stay in the loop. Our newsletter is sent once in <br />
                    a week on every friday so subscribe to get latest news and updates.
                </p>
                <label for="email">
                </label>
                <form action="{{ route('subscribe') }}" method="post" class="sm:border border-white flex-col sm:flex-row flex items-center lg:w-5/12 w-full mt-12 space-y-4 sm:space-y-0">
                    @csrf
                        <input id="email" name="email" class="border border-white sm:border-transparent text-base w-full font-medium leading-none text-white p-4 focus:outline-none bg-transparent placeholder-white" placeholder="Email Address" />
                    <button type="submit" class="focus:outline-none focus:ring-offset-2 focus:ring border border-white sm:border-transparent w-full sm:w-auto bg-white py-4 px-6 hover:bg-opacity-75">Subscribe</button>
                </form>
                @error('email')
                <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror

                @if(session('success'))
                <p class="text-green-600 text-sm">{{ session('success') }}</p>
                @endif
            </div>
        </div>
    </div>

    <div class="py-16 bg-white">
        <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
            <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
                <div class="md:5/12 lg:w-5/12">
                    <img src="https://tailus.io/sources/blocks/left-image/preview/images/startup.png" alt="image" loading="lazy" width="" height="">
                </div>
                <div class="md:7/12 lg:w-6/12">
                    <h2 class="text-2xl text-gray-900 font-bold md:text-4xl">Nuxt development is carried out by passionate developers</h2>
                    <p class="mt-6 text-gray-600">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum omnis voluptatem accusantium nemo perspiciatis delectus atque autem! Voluptatum tenetur beatae unde aperiam, repellat expedita consequatur! Officiis id consequatur atque doloremque!</p>
                    <p class="mt-4 text-gray-600"> Nobis minus voluptatibus pariatur dignissimos libero quaerat iure expedita at? Asperiores nemo possimus nesciunt dicta veniam aspernatur quam mollitia.</p>
                </div>
            </div>
        </div>
    </div>

@endsection
