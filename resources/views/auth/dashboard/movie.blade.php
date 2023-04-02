@extends('auth.dashboard.layouts.main')
@section('container')
    <div class="container">
        <div class="row">

        </div>
    </div>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Movie</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                {{-- <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">
                    Share
                </button>
                <button type="button" class="btn btn-sm btn-outline-secondary">
                    Export
                </button>
            </div> --}}
                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                    <span data-feather="calendar" class="align-text-bottom"></span>
                    This week
                </button>
            </div>
        </div>

        <h2>Tambah Movie</h2>
        <a href="/dashboard/movies" class="btn btn-success mb-3">Kembali</a>

        <div class="row">
            <div class="col-md-6">
                <form class="mb-5" action="/movies" method="post">
                    @csrf
                    <div class="mb-2 form-floating">
                        <input type="text" name="title"
                            class="form-control @error('title')
                            is-invalid
                        @enderror"
                            id="title">
                        <label for="title" class="form-label">Movie Title</label>
                        @error('title')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="mb-2 form-floating">
                        <select name="genre"
                            class="form-select @error('genre')
                        is-invalid
                         @enderror"
                            id="genre">
                            <option value="1">Comedy</option>
                            <option value="2">Action</option>
                        </select>
                        <label for="genre" class="form-label">Genre</label>
                        @error('genre')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="mb-2 form-floating">
                        <input type="text" name="duration"
                            class="form-control @error('duration')
                        is-invalid
                    @enderror"
                            id="duration">
                        <label for="duration" class="form-label">Duration</label>
                        @error('duration')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="mb-2 form-floating">
                        <input type="text" name="actors"
                            class="form-control @error('actors')
                            is-invalid
                            @enderror"
                            id="actors">
                        <label class="form-label">Actors</label>
                        @error('actors')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="mb-2 form-floating">
                        <textarea name="synopsis" name="synopsis" id="synopsis"
                            class="form-control @error('synopsis')
                        is-invalid
                    @enderror"
                            cols="30" rows="10"></textarea>
                        <label for="synopsis" class="form-label">Synopsis</label>
                        @error('synopsis')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="mb-2 form-floating">
                        <input type="text" name="poster"
                            class="form-control @error('poster')
                        is-invalid
                    @enderror"
                            id="poster">
                        <label for="poster" class="form-label">Poster</label>
                        @error('poster')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="mb-2 form-floating">
                        <input type="text" name="rating"
                            class="form-control @error('rating')
                        is-invalid
                    @enderror"
                            id="rating">
                        <label for="rating" class="form-label">Rating</label>
                        @error('rating')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="mb-2 form-floating">
                        <input type="text" name="review"
                            class="form-control @error('review')
                        is-invalid
                    @enderror"
                            id="review">
                        <label for="review" class="form-label">Review</label>
                        @error('review')
                            {{ $message }}
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </main>
@endsection
