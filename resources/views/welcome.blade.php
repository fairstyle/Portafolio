@extends('layouts.app')

@section('title', 'Welcome')

@section('style')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="w-full bg-indigo-100">

        <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">

            <div class="text-center pb-12">
                <h2 class="text-base font-bold text-gray-500">
                    Challenge
                </h2>
                <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-gray-900">
                    100 Projects on Laravel
                </h1>
            </div>

            @foreach($apps as $app)
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div
                        class="w-full bg-gray-50 rounded-lg shadow-lg shadow-gray-400 overflow-hidden flex flex-col md:flex-row">
                        <div class="w-full md:w-2/5 h-80">
                            <img class="object-center object-cover w-full h-full"
                                 src="https://images.unsplash.com/photo-1640092593999-560167439d60?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=10"
                                 alt="photo">
                        </div>
                        <div class="w-full md:w-3/5 text-left p-6 md:p-4 space-y-2">
                            <p class="text-xl text-gray-900 font-bold">Project N°{{ $app->id }}</p>
                            <p class="text-base text-gray-900 font-normal">{{$app->app_name}}</p>
                            <p class="text-base leading-relaxed text-gray-500 font-normal">{{$app->app_desc}}</p>
                            <div class="align-bottom space-x-2">
                                <a href="#" class="text-gray-600 hover:text-gray-700">
                                    <svg class="w-10 h-10" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                              d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="flex w-full">
                                <button
                                    class="flex mt-2 items-center justify-center focus:outline-none text-white text-sm sm:text-base bg-blue-500 hover:bg-blue-600 rounded-2xl py-2 w-full transition duration-150 ease-in">
                                    <span class="mr-2 uppercase">Ir!</span>
                                    <span>
                                      <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                           stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                      </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </section>

        @include('layouts.footer')
    </div>
@endsection
