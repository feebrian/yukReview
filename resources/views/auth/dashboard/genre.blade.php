@extends('auth.dashboard.layouts.main')

@section('container')
    <div class="row">
        <h1 class="h2">Genre</h1>
        <hr>
    </div>
    <h2>New Genre</h2>
    <a href="/dashboard/genres" class="btn btn-success"><span data-feather="arrow-left" class="align-text-bottom"></span>
        Kembali</a>
    <div class="row">
        <div class="col-md-4">
            @if (session()->has('success'))
                <div class="alert bg-green-500 mb-4 rounded-md px-4 py-4">
                    <p class="font-bold">{{ session('success') }}</p>
                </div>
            @endif
            <form action="/dashboard/genres" method="post">
                <form>
                    @csrf
                    <div class="mb-3">
                        <label for="genre" class="form-label">Genre</label>
                        <input type="text" name="genre"
                            class="form-control form-control-sm @error('genre')
                            is-invalid
                        @enderror"
                            id="genre" autofocus>
                        @error('genre')
                            {{ $message }}
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </form>
        </div>
    </div>
@endsection
