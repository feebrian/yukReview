@extends('layouts.main')
@section('container')
    {{-- <style>
        * {
            border: 1px solid red;
        }
    </style> --}}
    {{-- <h1 class="text-center mb-2 font-bold">Top Movies</h1> --}}
    <table class="table-fixed mx-auto border border-slate-700 p-4">
        <thead>
            <tr>
                <th class="border border-slate-700 px-1 py-2">Poster</th>
                <th class="border border-slate-700 px-1 py-2">Title</th>
                <th class="border border-slate-700 px-1 py-2">Year</th>
                <th class="border border-slate-700 px-1 py-2">Rating</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 0; ?>
            @foreach ($movieList as $movie[0])
                <tr>
                    <td class="border border-slate-700 justify-center flex"><img src="{{ $movie[0]['poster'] }}"
                            alt="{{ $movie[0]['title'] }}" width="55"></td>
                    <td class="border border-slate-700 px-2">{{ $movie[0]['title'] }}</td>
                    <td class="border border-slate-700 text-center px-2">{{ $movie[0]['year'] }}</td>
                    <td class="border border-slate-700 text-center">{{ $movie[0]['rating'] }}</td>
                </tr>
                <?php $i++; ?>
            @endforeach
        </tbody>
    </table>
@endsection
