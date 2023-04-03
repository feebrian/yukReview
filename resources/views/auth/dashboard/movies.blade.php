@extends('auth.dashboard.layouts.main')

@section('container')
    <div class="row">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ $title }}</h1>
        </div>

        <h2>All Movies</h2>

        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <a href="/dashboard/movies/create" class="btn btn-success col-md-2"><i class="bi bi-plus"></i> New Movies</a>
        <div class="table-responsive">
            <div class="col-md-6">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Poster</th>
                            <th scope="col">Title</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($movies as $movie)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="/storage/{{ $movie->poster }}" width="75">
                                </td>
                                <td>{{ $movie->title }}</td>
                                <td>
                                    <a href="" class="btn btn-success p-2 py-1"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                            <path
                                                d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                        </svg></a>

                                    <a href="/dashboard/movies/{{ $movie->id }}/edit" class="btn btn-primary p-2 py-1"><i
                                            class="bi bi-pencil-square"></i></a>

                                    <form action="/dashboard/movies/{{ $movie->id }}" method="POST" class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger p-2 py-1 border-0"
                                            onclick="confirm('yakin ingin menghapus movie ini?')"><i
                                                class="bi bi-trash3-fill"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
