@extends('layouts.global')

@section('title')
    Sign Up - Green Point
@endsection

@section('content')
    <section>
        <div class="flex">
            <img src="{{ asset('assets/image/ronaldo-sporting.jpeg') }}" alt="" class="w-3/4 h-screen object-cover">
            <div class="flex flex-col w-full h-screen bg-gradient-to-br from-green-950 via-zinc-900 to-zinc-800 justify-center items-center">
                <div class="font-bold text-2xl text-white items-center pb-5">
                    <h1>Sign-Up</h1>
                </div>
                <form action="{{route('register.action')}}" method="POST" class="flex flex-col justify-center">
                    @csrf
                    @if(session('error'))
                        <div class="w-full relative mb-6">
                            <div class="p-2 rounded-sm bg-red-100 ring-1 ring-red-500">
                                <p class="text-red-500">
                                    {{ session('error') }}
                                </p>
                            </div>
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="w-full relative mb-6">
                            <div class="p-2 rounded-sm bg-green-100 ring-1 ring-green-500">
                                <p class="text-green-500">
                                    {{ session('success') }}
                                </p>
                            </div>
                        </div>
                    @endif
                    <div class="relative">
                        <input type="text" value="user" name="role" hidden>
                        <div class="absolute py-2 ps-1">
                            <svg class="h-6 fill-slate-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                <path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-240v-32q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v32q0 33-23.5 56.5T720-160H240q-33 0-56.5-23.5T160-240Zm80 0h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"/>
                            </svg>
                        </div>
                        <input type="text" name="nama" placeholder="Masukkan Username..." class="w-full ps-8 rounded-lg bg-green-800 text-white py-2">
                    </div>
                    <div class="relative mt-8">
                        <div class="absolute py-2 ps-1">
                            <svg class="h-6 text-slate-400" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
                              </svg>
                        </div>
                        <input type="text" name="email" placeholder="Masukkan Email..." class="w-full ps-8 rounded-lg bg-green-800 text-white py-2">
                    </div>
                    <div class="relative mt-8">
                        <div class="absolute py-2 ps-1">
                            <svg class="h-6 fill-slate-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                <path d="M240-80q-33 0-56.5-23.5T160-160v-400q0-33 23.5-56.5T240-640h40v-80q0-83 58.5-141.5T480-920q83 0 141.5 58.5T680-720v80h40q33 0 56.5 23.5T800-560v400q0 33-23.5 56.5T720-80H240Zm0-80h480v-400H240v400Zm240-120q33 0 56.5-23.5T560-360q0-33-23.5-56.5T480-440q-33 0-56.5 23.5T400-360q0 33 23.5 56.5T480-280ZM360-640h240v-80q0-50-35-85t-85-35q-50 0-85 35t-35 85v80ZM240-160v-400 400Z"/>
                            </svg>
                        </div>
                        <input type="password" name="password" placeholder="Masukkan Password..." class="w-full ps-8 rounded-lg bg-green-800 text-white py-2">
                    </div>
                    <div class="relative mt-8">
                        <div class="absolute py-2 ps-1">
                            <svg class="h-6 fill-slate-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                <path d="M240-80q-33 0-56.5-23.5T160-160v-400q0-33 23.5-56.5T240-640h40v-80q0-83 58.5-141.5T480-920q83 0 141.5 58.5T680-720v80h40q33 0 56.5 23.5T800-560v400q0 33-23.5 56.5T720-80H240Zm0-80h480v-400H240v400Zm240-120q33 0 56.5-23.5T560-360q0-33-23.5-56.5T480-440q-33 0-56.5 23.5T400-360q0 33 23.5 56.5T480-280ZM360-640h240v-80q0-50-35-85t-85-35q-50 0-85 35t-35 85v80ZM240-160v-400 400Z"/>
                            </svg>
                        </div>
                        <input type="password" name="confirm_password" placeholder="Confirm Password..." class="w-full ps-8 rounded-lg bg-green-800 text-white py-2">
                    </div>
                    <a href="{{route('login')}}" class="my-2 text-blue-600">Sudah punya akun?</a>
                    <button type="submit" class="mt-5 bg-green-900 hover:bg-green-950 py-2 px-7 rounded-lg text-white font-semibold">Register</button>
                </form>



            </div>
        </div>
    </section>
@endsection
