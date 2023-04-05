@extends('auth.dashboard.layouts.main')

@section('container')
    <div class="row">
        <h1 class="h2">Genre</h1>
        <hr>
    </div>
    <h2>Update Genre</h2>
    <a href="/dashboard/genres" class="btn btn-success"><span data-feather="arrow-left" class="align-text-bottom"></span>
        Kembali</a>
    <div class="row">
        <div class="col-md-4">
            <form action="/dashboard/genres/{{ $genre->id }}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="name" class="form-label">Genre</label>
                    <input type="text" name="name"
                        class="form-control form-control-sm @error('name')
                            is-invalid
                        @enderror"
                        id="name" value="{{ $genre->name }}" autofocus>
                    @error('name')
                        {{ $message }}
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
