@extends('layouts.app')

@section('content')
<div class="text-white overflow-x-auto" id="main-leaderboard">
    <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pt-4">
        <div>
            <h1 class="text-2xl font-semibold">Leaderboard <i class="fa-solid fa-trophy"></i></h1>
        </div>
        <div class="mt-4 mb-10">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-base text-left text-gray-400">
                    <thead class="text-sm uppercase bg-gray-700 text-gray-400">
                        <tr>
                            <th class="px-8 py-4">Pos.</th>
                            <th class="px-8 py-4">Username</th>
                            <th class="px-8 py-4">Level</th>
                            <th class="px-8 py-4">Experience</th>
                            <th class="px-8 py-4">Joined</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $index => $user)
                        <tr class="bg-white border-b bg-gray-800 border-gray-700">
                            <td class="px-8 py-4 font-medium text-white whitespace-nowrap">{{ $index +1 }}</td>
                            <td class="px-8 py-4">{{ $user->username }}</td>
                            <td class="px-8 py-4">{{ $user->rank }}</td>
                            <td class="px-8 py-4">{{ $user->experience }}</td>
                            <td class="px-8 py-4">{{ date('d/m/Y', strtotime($user->created_at)) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot class="text-sm uppercase bg-gray-700 text-gray-400">
                        <tr>
                            <th class="px-8 py-4">Pos.</th>
                            <th class="px-8 py-4">Username</th>
                            <th class="px-8 py-4">Level</th>
                            <th class="px-8 py-4">Experience</th>
                            <th class="px-8 py-4">Joined</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </main>
</div>
@endsection