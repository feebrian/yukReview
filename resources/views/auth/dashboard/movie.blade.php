@extends('auth.dashboard.layouts.main')
@section('container')
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
            <form class="mb-5" action="/dashboard/movies" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="title" class="form-label">Movie Title</label>
                    <input type="text" name="title"
                        class="form-control @error('title')
                            is-invalid
                        @enderror"
                        id="title">
                    @error('title')
                        {{ $message }}
                    @enderror
                </div>

                <div class="row">
                    <div class="col mb-2">
                        <label for="genre" class="form-label">Genre</label>
                        <select name="genre"
                            class="form-select @error('genre')
                            is-invalid
                             @enderror"
                            id="genre">
                            <option value="1">Comedy</option>
                            <option value="2">Action</option>
                        </select>
                        @error('genre')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="col mb-2">
                        <label for="duration" class="form-label">Duration</label>
                        <input type="range" value="24" min="1" max="300" step="0.5"
                            oninput="this.nextElementSibling.value = this.value" name="duration"
                            class="form-range @error('duration')
                            is-invalid
                        @enderror"
                            id="duration">
                        <output>24</output>
                        <p class="d-inline">menit</p>
                        @error('duration')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="mb-2">
                    <label class="form-label">Actors</label>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" name="actors" type="checkbox" value="adam"
                                    id="actors">
                                <label class="form-check-label" for="actors">
                                    adam febrian
                                </label>
                            </div>
                        </div>
                    </div>

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
                <div class="mb-2">
                    <label for="poster" class="form-label mb-1">Poster</label>
                    <input type="file" name="poster"
                        class="form-control form-control-sm @error('poster')
                        is-invalid
                    @enderror"
                        id="poster">
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
    @endsection
