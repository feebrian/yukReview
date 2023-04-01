@extends('auth.main')

@section('container')
    <section id="login">
        <div class="row grid place-items-center h-screen">
            <div class="w-96 mx-auto bg-[#1c222e] p-4 rounded-md">
                <h2 class="font-bold italic text-center text-4xl mb-4">YukDaftar!</h2>

                {{-- error handling --}}




                <form action="/register" method="post" class="text-black justify-center">
                    @csrf
                    <label class="block mb-2">
                        <input type="text" name="name"
                            class="form-input p-3 h-7 w-full text-sm rounded-md mx-auto @error('name')
                        border border-red-500
                        @enderror"
                            value="{{ old('name') }}" placeholder="name" autofocus>
                        @error('name')
                            <p class="text-xs text-red-400 my-1">{{ $message }}</p>
                        @enderror
                    </label>
                    <label class="block mb-2">
                        <input type="text" name="username"
                            class="form-input p-3 h-7 w-full text-sm rounded-md mx-auto @error('username')
                        border border-red-500
                        @enderror"
                            value="{{ old('username') }}" placeholder="username">
                        @error('username')
                            <p class="text-xs text-red-400 my-1">{{ $message }}</p>
                        @enderror
                    </label>
                    <label class="block mb-2">
                        <input type="email" name="email"
                            class="form-input p-3 h-7 w-full text-sm rounded-md mx-auto @error('email')
                        border border-red-500
                        @enderror"
                            value="{{ old('email') }}" placeholder="email@example.com">
                        @error('email')
                            <p class="text-xs text-red-400 my-1">{{ $message }}</p>
                        @enderror
                    </label>
                    <label class="block mb-2">
                        <input type="password" name="password"
                            class="form-input p-3 h-7 w-full text-sm rounded-md mx-auto @error('email')
                        border border-red-500
                        @enderror"
                            placeholder="Password">
                        @error('password')
                            <p class="text-xs text-red-400 my-1">{{ $message }}</p>
                        @enderror
                    </label>
                    <p class="text-xs block mb-2 text-white">udah punya akun? <a href="/register"
                            class="underline">login</a> sekarang</p>

                    <button type="submit" name="btn-submit"
                        class="rounded-sm text-white px-1 py-1 hover:bg-[#ab363e] bg-soft-red w-20">Daftar</button>
                </form>
            </div>
        </div>
    </section>
@endsection
