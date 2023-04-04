@extends('auth.dashboard.layouts.main')

@section('container')
    <div class="row">
        <h1 class="h2">Genre</h1>
        <hr>
    </div>
    <h2>All Genre</h2>

    <a href="/dashboard/genres/create" class="btn btn-success"><span data-feather="plus" class="align-text-bottom"></span> New
        Genre</a>

    <div class="row">
        <div class="col-md-6">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($genres as $genre)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $genre->name }}</td>
                            <td>
                                <a href="/dashboard/genres/{{ $genre->id }}/edit" class="badge bg-success">
                                    <span data-feather="edit" class="align-text-bottom"></span>
                                </a>
                                <form action="/dashboard/genres/{{ $genre->id }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')

                                    <button class="badge bg-danger border-0">
                                        <span data-feather="trash-2" class="align-text-bottom"
                                            onclick="confirm('yakin ingin menghapus genre ini?')"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
