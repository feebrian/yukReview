@extends('auth.main')

@section('container')
    <section id="login">
        <div class="row grid place-items-center h-screen">
            <div class="w-96 mx-auto bg-[#1c222e] p-4 rounded-md">
                <h2 class="font-bold italic text-center text-4xl mb-4">YukLogin!</h2>

                @if (session()->has('success'))
                    <div class="alert bg-green-500 mb-4 rounded-md px-4 py-4">
                        <p class="font-bold">{{ session('success') }}</p>
                    </div>
                @endif

                <form action="" class="text-black justify-center">
                    <label class="block mb-2">
                        <input type="text" name="username" class="form-input p-3 h-7 w-full text-sm rounded-md mx-auto"
                            placeholder="Username">
                    </label>
                    <label class="mb-1">
                        <input type="password" name="password" class="form-input p-3 h-7 w-full text-sm rounded-md mx-auto"
                            placeholder="Password">
                    </label>
                    <p class="text-xs block mb-2 text-white">gak punya akun? <a href="/register"
                            class="underline">daftar</a> sekarang.</p>

                    <button type="submit" class="rounded-sm text-white px-1 py-1 hover:bg-[#ab363e] bg-soft-red w-20">Log
                        In</button>
                </form>
            </div>
        </div>
    </section>
@endsection
