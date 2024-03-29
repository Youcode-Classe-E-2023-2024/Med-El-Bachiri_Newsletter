@extends('layouts.app')
@section('content')
    <div class="min-h-screen bg-gray-50/50">
        <aside class="bg-gradient-to-br from-gray-800 to-gray-900 -translate-x-80 fixed inset-0 z-50 my-4 ml-4 h-[calc(100vh-32px)] w-72 rounded-xl transition-transform duration-300 xl:translate-x-0">
            <div class="relative border-b border-white/20">
                <div class="flex items-center gap-4 py-6 px-8">
                    <h6 class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-white">{{ auth()->user()->name }}</h6>
                </div>
                <div class="flex items-center gap-4  px-8">
                    <h6 class="block antialiased tracking-normal font-sans text-sm font-semibold leading-relaxed text-green-400">{{ auth()->user()->getRoleNames('name')[0] }}</h6>
                </div>
                <div class="flex items-center gap-4 py-2 px-8">
                    <p class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-gray-400 text-sm">{{ auth()->user()->email }}</p>
                </div>

                <button class="middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-white hover:bg-white/10 active:bg-white/30 absolute right-0 top-0 grid rounded-br-none rounded-tl-none xl:hidden" type="button">
                    <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" aria-hidden="true" class="h-5 w-5 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                      </svg>
                    </span>
                </button>
            </div>
            <div class="m-4">
                <ul class="mb-4 flex flex-col gap-1">
                    <li>
                        <div aria-current="page" class="active">
                            <button onclick="showDiv('div1')" class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-md shadow-blue-500/20 hover:shadow-lg hover:shadow-blue-500/40 active:opacity-[0.85] w-full flex items-center gap-4 px-4 capitalize" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                    <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z"></path>
                                    <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z"></path>
                                </svg>
                                <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">dashboard</p>
                            </button>
                        </div>
                    </li>
                    <li>
                        <div class="">
                            <button onclick="showDiv('div2')" class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                    <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">Subscribers</p>
                            </button>
                        </div>
                    </li>
                    <li>
                        <div class="">
                            <button onclick="showDiv('div3')" class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                    <path fill-rule="evenodd" d="M1.5 5.625c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v12.75c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 18.375V5.625zM21 9.375A.375.375 0 0020.625 9h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zM10.875 18.75a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5zM3.375 15h7.5a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375zm0-3.75h7.5a.375.375 0 00.375-.375v-1.5A.375.375 0 0010.875 9h-7.5A.375.375 0 003 9.375v1.5c0 .207.168.375.375.375z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">Upload</p>
                            </button>
                        </div>
                    </li>
                    <li>
                        <div class="">
                            <button onclick="showDiv('div4')" class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                    <path fill-rule="evenodd" d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">Media</p>
                            </button>
                        </div>
                    </li>
                    <li>
                        <div class="">
                            <button onclick="showDiv('div5')" class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                    <path fill-rule="evenodd" d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">create template</p>
                            </button>
                        </div>
                    </li>
                </ul>
                <ul class="mb-4 flex flex-col gap-1">
                    <li class="mx-3.5 mt-4 mb-2">
                        <p class="block antialiased font-sans text-sm leading-normal text-white font-black uppercase opacity-75">auth pages</p>
                    </li>
{{--                    @if(auth()->user()->hasRole('admin'))--}}
                        <li>
                            <div onclick="showDiv('div6')" class="">
                                <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                        <path fill-rule="evenodd" d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">Roles</p>
                                </button>
                            </div>
                        </li>
                    <li>
                        <div onclick="showDiv('div7')" class="">
                            <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                    <path fill-rule="evenodd" d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">See Templates</p>
                            </button>
                        </div>
                    </li>
{{--                    @endif--}}
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-red-400 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize bg-red-600" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-inherit">
                                    <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm10.72 4.72a.75.75 0 011.06 0l3 3a.75.75 0 010 1.06l-3 3a.75.75 0 11-1.06-1.06l1.72-1.72H9a.75.75 0 010-1.5h10.94l-1.72-1.72a.75.75 0 010-1.06z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">log out</p>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </aside>
        @if(session('success'))
            <p class="text-green-900 border-2 p-2 border-green-800 rounded-lg bg-green-300 pl-96" >{{ session('success') }}</p>
        @endif

        <!-- DIV 1 -->
        <div id="div1" class="p-4 xl:ml-80">
            @if(Auth::user()->hasPermissionTo('view statistics'))
            <nav class="block w-full max-w-full bg-transparent text-white shadow-none rounded-xl transition-all px-0 py-1">
                <div class="flex flex-col-reverse justify-between gap-6 md:flex-row md:items-center">
                    <div class="capitalize">
                        <nav aria-label="breadcrumb" class="w-max">
                            <ol class="flex flex-wrap items-center w-full bg-opacity-60 rounded-md bg-transparent p-0 transition-all">
                                <li class="flex items-center text-blue-gray-900 antialiased font-sans text-sm font-normal leading-normal cursor-pointer transition-colors duration-300 hover:text-light-blue-500">
                                    <a href="#">
                                        <p class="block antialiased font-sans text-sm leading-normal text-blue-900 font-normal opacity-50 transition-all hover:text-blue-500 hover:opacity-100">dashboard</p>
                                    </a>
                                    <span class="text-gray-500 text-sm antialiased font-sans font-normal leading-normal mx-2 pointer-events-none select-none">/</span>
                                </li>
                                <li class="flex items-center text-blue-900 antialiased font-sans text-sm font-normal leading-normal cursor-pointer transition-colors duration-300 hover:text-blue-500">
                                    <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">home</p>
                                </li>
                            </ol>
                        </nav>
                        <h6 class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-gray-900">home</h6>
                    </div>
                    <div class="flex items-center">
                        <div class="mr-auto md:mr-4 md:w-56">
                            <div class="relative w-full min-w-[200px] h-10">
                                <input class="peer w-full h-full bg-transparent text-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-blue-500" placeholder=" ">
                                <label class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal peer-placeholder-shown:text-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-blue-gray-400 peer-focus:text-blue-500 before:border-blue-gray-200 peer-focus:before:border-blue-500 after:border-blue-gray-200 peer-focus:after:border-blue-500">Type here</label>
                            </div>
                        </div>
                        <button class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30 grid xl:hidden" type="button">
            <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" stroke-width="3" class="h-6 w-6 text-blue-gray-500">
                <path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd"></path>
              </svg>
            </span>
                        </button>
                        <a href="#">
                            <button class="middle none font-sans font-bold center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30 hidden items-center gap-1 px-4 xl:flex" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5 text-blue-gray-500">
                                    <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd"></path>
                                </svg>Sign In </button>
                            <button class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30 grid xl:hidden" type="button">
              <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5 text-blue-gray-500">
                  <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd"></path>
                </svg>
              </span>
                            </button>
                        </a>
                        <button class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30" type="button">
            <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5 text-blue-gray-500">
                <path fill-rule="evenodd" d="M11.078 2.25c-.917 0-1.699.663-1.85 1.567L9.05 4.889c-.02.12-.115.26-.297.348a7.493 7.493 0 00-.986.57c-.166.115-.334.126-.45.083L6.3 5.508a1.875 1.875 0 00-2.282.819l-.922 1.597a1.875 1.875 0 00.432 2.385l.84.692c.095.078.17.229.154.43a7.598 7.598 0 000 1.139c.015.2-.059.352-.153.43l-.841.692a1.875 1.875 0 00-.432 2.385l.922 1.597a1.875 1.875 0 002.282.818l1.019-.382c.115-.043.283-.031.45.082.312.214.641.405.985.57.182.088.277.228.297.35l.178 1.071c.151.904.933 1.567 1.85 1.567h1.844c.916 0 1.699-.663 1.85-1.567l.178-1.072c.02-.12.114-.26.297-.349.344-.165.673-.356.985-.57.167-.114.335-.125.45-.082l1.02.382a1.875 1.875 0 002.28-.819l.923-1.597a1.875 1.875 0 00-.432-2.385l-.84-.692c-.095-.078-.17-.229-.154-.43a7.614 7.614 0 000-1.139c-.016-.2.059-.352.153-.43l.84-.692c.708-.582.891-1.59.433-2.385l-.922-1.597a1.875 1.875 0 00-2.282-.818l-1.02.382c-.114.043-.282.031-.449-.083a7.49 7.49 0 00-.985-.57c-.183-.087-.277-.227-.297-.348l-.179-1.072a1.875 1.875 0 00-1.85-1.567h-1.843zM12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z" clip-rule="evenodd"></path>
              </svg>
            </span>
                        </button>
                        <button aria-expanded="false" aria-haspopup="menu" id=":r2:" class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30" type="button">
            <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5 text-blue-gray-500">
                <path fill-rule="evenodd" d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z" clip-rule="evenodd"></path>
              </svg>
            </span>
                        </button>
                    </div>
                </div>
            </nav>
            <div class="mt-12">
                <div class="mb-12 grid gap-y-10 gap-x-6 md:grid-cols-2 xl:grid-cols-4">
                    <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                        <div class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-blue-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-6 h-6 text-white">
                                <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z"></path>
                                <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd"></path>
                                <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z"></path>
                            </svg>
                        </div>
                        <div class="p-4 text-right">
                            <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">Total Templates</p>
                            <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">{{ count($templates) }}</h4>
                        </div>
                    </div>
                    <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                        <div class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-pink-600 to-pink-400 text-white shadow-pink-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-6 h-6 text-white">
                                <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="p-4 text-right">
                            <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">Total Subscribers</p>
                            <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">{{ count($members) }}</h4>
                        </div>

                    </div>
                    <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                        <div class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-green-600 to-green-400 text-white shadow-green-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-6 h-6 text-white">
                                <path d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z"></path>
                            </svg>
                        </div>
                        <div class="p-4 text-right">
                            <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">All Users</p>
                            <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">{{ count($all_users) }}</h4>
                        </div>

                    </div>
                    <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                        <div class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-orange-600 to-orange-400 text-white shadow-orange-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-6 h-6 text-white">
                                <path d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z"></path>
                            </svg>
                        </div>
                        <div class="p-4 text-right">
                            <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">Total Media Uploaded</p>
                            <h4 class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">{{ count($all_media) }}</h4>
                        </div>
                       
                    </div>
                </div>

                <div class="mb-4 grid grid-cols-1 gap-6 xl:grid-cols-3">
                    <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md overflow-hidden xl:col-span-2">
                        <div class="relative bg-clip-border rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none m-0 flex items-center justify-between p-6">
                            <div>
                                <h6 class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900 mb-1">Projects</h6>
                                <p class="antialiased font-sans text-sm leading-normal flex items-center gap-1 font-normal text-blue-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                                    </svg>
                                    <strong>30 done</strong> this month
                                </p>
                            </div>
                            <button aria-expanded="false" aria-haspopup="menu" id=":r5:" class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30" type="button">
              <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currenColor" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" aria-hidden="true" class="h-6 w-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z"></path>
                </svg>
              </span>
                            </button>
                        </div>
                        <div class="p-6 overflow-x-scroll px-0 pt-0 pb-2">
                            <table class="w-full min-w-[640px] table-auto">
                                <thead>
                                <tr>
                                    <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                        <p class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">companies</p>
                                    </th>
                                    <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                        <p class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">budget</p>
                                    </th>
                                    <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                        <p class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">completion</p>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                        <div class="flex items-center gap-4">
                                            <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">Material XD Version</p>
                                        </div>
                                    </td>

                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                        <p class="block antialiased font-sans text-xs font-medium text-blue-gray-600">$14,000</p>
                                    </td>
                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                        <div class="w-10/12">
                                            <p class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">60%</p>
                                            <div class="flex flex-start bg-blue-gray-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                                                <div class="flex justify-center items-center h-full bg-gradient-to-tr from-blue-600 to-blue-400 text-white" style="width: 60%;"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                        <div class="flex items-center gap-4">
                                            <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">Add Progress Track</p>
                                        </div>
                                    </td>
                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                        <p class="block antialiased font-sans text-xs font-medium text-blue-gray-600">$3,000</p>
                                    </td>
                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                        <div class="w-10/12">
                                            <p class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">10%</p>
                                            <div class="flex flex-start bg-blue-gray-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                                                <div class="flex justify-center items-center h-full bg-gradient-to-tr from-blue-600 to-blue-400 text-white" style="width: 10%;"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                        <div class="flex items-center gap-4">
                                            <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">Fix Platform Errors</p>
                                        </div>
                                    </td>
                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                        <p class="block antialiased font-sans text-xs font-medium text-blue-gray-600">Not set</p>
                                    </td>
                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                        <div class="w-10/12">
                                            <p class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">100%</p>
                                            <div class="flex flex-start bg-blue-gray-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                                                <div class="flex justify-center items-center h-full bg-gradient-to-tr from-green-600 to-green-400 text-white" style="width: 100%;"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                        <div class="flex items-center gap-4">
                                            <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">Launch our Mobile App</p>
                                        </div>
                                    </td>
                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                        <p class="block antialiased font-sans text-xs font-medium text-blue-gray-600">$20,500</p>
                                    </td>
                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                        <div class="w-10/12">
                                            <p class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">100%</p>
                                            <div class="flex flex-start bg-blue-gray-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                                                <div class="flex justify-center items-center h-full bg-gradient-to-tr from-green-600 to-green-400 text-white" style="width: 100%;"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                        <div class="flex items-center gap-4">
                                            <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">Add the New Pricing Page</p>
                                        </div>
                                    </td>
                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                        <p class="block antialiased font-sans text-xs font-medium text-blue-gray-600">$500</p>
                                    </td>
                                    <td class="py-3 px-5 border-b border-blue-gray-50">
                                        <div class="w-10/12">
                                            <p class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">25%</p>
                                            <div class="flex flex-start bg-blue-gray-50 overflow-hidden w-full rounded-sm font-sans text-xs font-medium h-1">
                                                <div class="flex justify-center items-center h-full bg-gradient-to-tr from-blue-600 to-blue-400 text-white" style="width: 25%;"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-blue-gray-600">
                <footer class="py-2">
                    <div class="flex w-full flex-wrap items-center justify-center gap-6 px-2 md:justify-between">
                        <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">© 2023, made with <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="-mt-0.5 inline-block h-3.5 w-3.5">
                                <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z"></path>
                            </svg> by <a href="https://www.creative-tim.com" target="_blank" class="transition-colors hover:text-blue-500">Creative Tim</a> for a better web. </p>
                        <ul class="flex items-center gap-4">
                            <li>
                                <a href="https://www.creative-tim.com" target="_blank" class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-blue-500">Creative Tim</a>
                            </li>
                            <li>
                                <a href="https://www.creative-tim.com/presentation" target="_blank" class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-blue-500">About Us</a>
                            </li>
                            <li>
                                <a href="https://www.creative-tim.com/blog" target="_blank" class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-blue-500">Blog</a>
                            </li>
                            <li>
                                <a href="https://www.creative-tim.com/license" target="_blank" class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-blue-500">License</a>
                            </li>
                        </ul>
                    </div>
                </footer>
            </div>
            @else
                <h1 class="text-red-600 text-xl border-2 border-red-800 p-6 rounded-lg mx-auto">Err 1 :you don't have this permission</h1>
            @endif
        </div>


        <!-- DIV 2 -->
        <div id="div2" class="p-4 xl:ml-80">
        @if(Auth::user()->hasPermissionTo('view subscribers'))
            <div class="w-full xl:w-8/12 px-4 mx-auto mt-24">
                <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white ">
                    <div class="rounded-t mb-0 px-4 py-3 border-0">
                        <div class="flex flex-wrap items-center">
                            <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                <h3 class="font-semibold text-base text-blueGray-700">
                                    Subscribers
                                </h3>
                            </div>
                            @if(Auth::user()->hasPermissionTo('send mail'))
                            <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                                <a href="{{ route('dashboard.send.mail') }}" class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
                                    Send Mail to Subscribers
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="block w-full overflow-x-auto">
                        <table class="items-center w-full border-collapse text-blueGray-700  ">
                            <thead class="thead-light ">
                            <tr>
                                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Email
                                </th>
                                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Status
                                </th>
                                <th class="px-6 bg-blueGray-50 text-blueGray-700 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($members as $member)
                                <tr>
                                    <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                        {{ $member->email }}
                                    </th>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                                        @if($member->subscribed === 'yes')
                                            Subscribed
                                        @else
                                            <span class="text-red-500">Unsubscribed</span>
                                        @endif
                                    </td>
                                    @if(Auth::user()->hasPermissionTo('unsubscribe user'))
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <form action="{{ route('unsubscribe', ['email' => $member->email]) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="bg-purple-200 p-2 rounded-xl shadow-sm border-purple-700 border-2 hover:shadow-xl hover:opacity-80">Unsubscribe User</button>
                                        </form>
                                    </td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @else
                <h1 class="text-red-600 text-xl border-2 border-red-800 p-6 rounded-lg mx-auto">Err 2 : you don't have this permission</h1>
            @endif
        </div>


        <!-- DIV 3 -->
        <div id="div3" class="p-4 xl:ml-80"><!-- component -->
        @if(Auth::user()->hasPermissionTo('upload media'))
            <div class="relative min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover relative items-center"

                 style="background-image: url(https://images.unsplash.com/photo-1621243804936-775306a8f2e3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80);">
                <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
                <div class="sm:max-w-lg w-full p-10 bg-white rounded-xl z-10">
                    <div class="text-center">
                        <h2 class="mt-5 text-3xl font-bold text-gray-900">
                            File Upload!
                        </h2>
                        <p class="mt-2 text-sm text-gray-400">Lorem ipsum is placeholder text.</p>
                    </div>
                    <form class="mt-8 space-y-3" action="{{ route('upload.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-1 space-y-2">
                            <label for="name" class="text-sm font-bold text-gray-500 tracking-wide">Title</label>
                            @error('name')
{{--                            <p class="text-red-500">{{ $message }}</p>--}}
                            @enderror
                            <input id="name" name="name" class="text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" type="text" placeholder="Enter Title">
                        </div>
                        <div class="grid grid-cols-1 space-y-2">
                            <label class="text-sm font-bold text-gray-500 tracking-wide">Attach Document</label>
                            <div class="flex items-center justify-center w-full">
                                <label class="flex flex-col rounded-lg border-4 border-dashed w-full h-60 p-10 group text-center" for="fileInput">
                                    <div class="h-full w-full text-center flex flex-col items-center justify-center items-center">
                                        <img id="preview" class="has-mask h-36 object-center" src="https://img.freepik.com/free-vector/image-upload-concept-landing-page_52683-27130.jpg?size=338&ext=jpg" alt="freepik image">
                                        <p id="fileLabel" class="pointer-none text-gray-500 "><span class="text-sm">Drag and drop</span> files here <br /> or <span id="fileText" class="text-blue-600 hover:underline">select a file</span> from your computer</p>
                                    </div>
                                    <input type="file" id="fileInput" name="file" class="hidden" onchange="previewFile()">
                                </label>
                            </div>
                        </div>
                        <p class="text-sm text-gray-300">
                            <span>File type: doc, pdf, types of images</span>
                        </p>
                        <div>
                            <button type="submit" class="my-5 w-full flex justify-center bg-blue-500 text-gray-100 p-4 rounded-full tracking-wide font-semibold focus:outline-none focus:shadow-outline hover:bg-blue-600 shadow-lg cursor-pointer transition ease-in duration-300">
                                Upload
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <style>
                .has-mask {
                    position: absolute;
                    clip: rect(10px, 150px, 130px, 10px);
                }
            </style>

            <script>
                function previewFile() {
                    const preview = document.getElementById('preview');
                    const file = document.getElementById('fileInput').files[0];
                    const reader = new FileReader();

                    reader.onloadend = function() {
                        preview.src = reader.result;
                    }

                    if (file) {
                        reader.readAsDataURL(file);
                        document.getElementById('fileText').textContent = file.name;
                    } else {
                        preview.src = "https://img.freepik.com/free-vector/image-upload-concept-landing-page_52683-27130.jpg?size=338&ext=jpg";
                        document.getElementById('fileText').textContent = "select a file";
                    }
                }
            </script>

        @else
            <h1 class="text-red-600 text-xl border-2 border-red-800 p-6 rounded-lg mx-auto">Err 3 : you don't have this permission</h1>
        @endif
        </div>


        <!-- DIV 4 -->
        <div id="div4" class="p-4 xl:ml-80">
        @if(Auth::user()->hasPermissionTo('see media'))
            @foreach($all_media as $item)
            <section class="pt-10 pb-10 bg-[#F3F4F6]">
                <div class="container">
                    <div class="flex flex-wrap -mx-4">
                        <div class="w-full md:w-1/2 xl:w-1/3 px-4">
                            <div class="bg-white rounded-lg overflow-hidden mb-10">
                                <img src="{{ asset($item['url']) }}" alt="image" class="w-full">
                                <div class="p-6 text-center">
                                    <h3>
                                        {{ $item['id'] }}
                                    </h3>
                                    <p class="text-base text-body-color leading-relaxed mb-4">
                                        {{ $item['name'] }}
                                    </p>
                                    @if(Auth::user()->hasPermissionTo('delete media') && $item['created_by'] === Auth::user()->id || Auth::user()->getRoleNames()->first() === 'admin')
                                    <form action="{{ route('upload.delete', ['media_id' => $item['id']]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-200 inline-block py-2 px-6 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-primary hover:bg-primary hover:text-white transition">
                                            Delete Media
                                        </button>
                                    </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @endforeach
        @else
            <h1 class="text-red-600 text-xl border-2 border-red-800 p-6 rounded-lg mx-auto">Err 4 : you don't have this permission</h1>
            @endif
        </div>


        <!-- DIV 5 -->
        <div id="div5" class="p-4 xl:ml-80">
        @if(Auth::user()->hasPermissionTo('create template'))
            <!-- component -->
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <form method="POST" action="{{ route('template.store') }}">
                                @csrf

                                <div class="mb-4">
                                    <label class="text-xl text-gray-600">Title <span class="text-red-500">*</span></label><br>
                                    <input type="text" class="border-2 border-gray-300 p-2 w-full" name="title" id="title" value="" required>
                                </div>
                                @error('title')
                                <p class="text-red-500">{{ $message }}</p>
                                @enderror

                                <div class="mb-8">
                                    <label class="text-xl text-gray-600">Content <span class="text-red-500">*</span></label><br>
                                    <textarea name="content" class="border-2 border-gray-500"></textarea>
                                </div>
                                @error('content')
                                <p class="text-red-500">{{ $message }}</p>
                                @enderror

                                <div class="flex p-1">
                                    <button type="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                CKEDITOR.replace('content');
            </script>
        @else
            <h1 class="text-red-600 text-xl border-2 border-red-800 p-6 rounded-lg mx-auto">Err 5 : you don't have this permission</h1>
        @endif
        </div>


        <!-- DIV 6 -->
        <div id="div6" class="p-4 xl:ml-80">
        @if(Auth::user()->hasPermissionTo('manage roles'))

                <div class="flex items-center justify-center min-h-screen bg-gray-900">
                    <div class="col-span-12">
                        <div class="overflow-auto lg:overflow-visible ">
                            <table class="table text-gray-400 border-separate space-y-6 text-sm">
                                <thead class="bg-gray-800 text-gray-500">
                                <tr>
                                    <th class="p-3">ID</th>
                                    <th class="p-3">Name</th>
                                    <th class="p-3">Email</th>
                                    <th class="p-3">Account Created At</th>
                                    <th class="p-3">Roles</th>
                                </tr>
                                </thead>
                                <tbody>
                                <!-- Your PHP logic to fetch and display users from the database here -->
                                <!-- Example row -->
                                @foreach($all_users as $single_user)
                                    <tr class="bg-gray-800">
                                        <td class="p-3">{{ $single_user->id }}</td>
                                        <td class="p-3">{{ $single_user->name }}</td>
                                        <td class="p-3">{{ $single_user->email }}</td>
                                        <td class="p-3">{{ $single_user->created_at }}</td>
                                        <td class="p-3">
                                            <form action="{{ route('update_user_role', ['user_id' => $single_user->id]) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <select name="role" class="bg-gray-800 border border-gray-600 text-white rounded-md px-2 py-1 focus:outline-none">
                                                    @foreach(['admin', 'Guest', 'Email Marketer', 'Content Manager'] as $role) <!-- Replace with your actual roles -->
                                                    <option value="{{ $role }}" {{ $single_user->getRoleNames()->first() === $role ? 'selected' : '' }}>{{ $role }}</option>
                                                    @endforeach
                                                </select>
                                                <button type="submit" class="text-gray-400 hover:text-gray-100 mr-2">
                                                    <i class="material-icons-outlined text-base text-green-400 px-2 hover:underline">save</i>
                                                </button>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            @else
            <h1 class="text-red-600 text-xl border-2 border-red-800 p-6 rounded-lg mx-auto">you don't have this permission</h1>
        @endif
        </div>


        <!-- DIV 7 -->
        <div id="div7" class="p-4 xl:ml-80">
            @if(Auth::user()->hasPermissionTo('see templates'))
            <div class="overflow-y-auto">
                @foreach($templates as $tmp)
                    <div class="border-red-500 border-2 rounded-lg p-2 my-2">
                        <p class="p-2 m-2 border border-black text-black">{{ $tmp->title }}</p>
                        {!! $tmp->content !!}

                        @if(Auth::user()->hasPermissionTo('delete template'))
                            <form action="{{ route('delete_template', ['tmp_id' => $tmp->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class=" p-2 bg-gray-100 rounded-lg shadow-lg border-2 border-black bg-red-500">Delete Template</button>
                            </form>
{{--                            <form action="{{ route('download_template') }}" method="post"></form>--}}
                        @endif
                            <a href="{{ route('download_template', ['tmp_id' => $tmp->id]) }}" type="button" class="bg-purple-400 border border-black p-2 shadow-lg">Download Template</a>
                    </div>
                @endforeach
            </div>

            @else
                <h1 class="text-red-600 text-xl border-2 border-red-800 p-6 rounded-lg mx-auto">you don't have this permission</h1>
            @endif
        </div>
    </div>
@endsection

<script>
    function showDiv(divId) {
        var divs = document.querySelectorAll('div[id^="div"]');
        divs.forEach(function(div) {
            if (div.id === divId) {
                div.style.display = 'block';
            } else {
                div.style.display = 'none';
            }
        });
    }
</script>
