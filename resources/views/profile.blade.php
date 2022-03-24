@extends('layouts.app')

@section('content')
<div class="text-white overflow-x-auto" id="main-leaderboard">
    <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pt-4">

        @if (session('status'))
        <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <div>
            <h1 class="text-2xl font-semibold">Profile <i class="fa-solid fa-id-card"></i></h1>
        </div>
        <div class="mt-4 mb-10">
            <div class="bg-gray-800 text-gray-400 relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-base text-left text-gray-400">
                    <tr>
                        <th class="px-8 py-4">Username:</th>
                        <td class="px-8 py-4">{{ Auth::user()->username }}</td>
                    </tr>
                    <tr>
                        <th class="px-8 py-4">Email:</th>
                        <td class="px-8 py-4">{{ Auth::user()->email }}</td>
                    </tr>
                    <tr>
                        <th class="px-8 py-4">Level:</th>
                        <td class="px-8 py-4">{{ Auth::user()->rank }}</td>
                    </tr>
                    <tr>
                        <th class="px-8 py-4">Experience:</th>
                        <td class="px-8 py-4">{{ Auth::user()->experience }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</div>
@endsection