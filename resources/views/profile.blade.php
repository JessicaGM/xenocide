@extends('layouts.app')

@section('content')
<main id="main-profile" class="sm:container sm:mx-auto mt-8 mb-2">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Profile
            </header>

            <div class="w-full p-6">
                <div class="text-gray-700">
                   <p> Username: {{ Auth::user()->username }} </p>
                   <p> Email: {{ Auth::user()->email }} </p>
                   <p> Rank: {{ Auth::user()->rank }} </p>
                   <p> Experience: {{ Auth::user()->experience }} </p>
               </div>
            </div>
        </section>
    </div>
</main>
@endsection
