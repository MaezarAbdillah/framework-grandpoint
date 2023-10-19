@extends('layouts.global')

@section('title')
    Sign In - Green Point
@endsection

@section('content')
    <section>
        <div class="flex">
            <img src="{{ asset('assets/image/ronaldo-sporting.jpeg') }}" alt="" class="w-3/4 h-screen object-cover">
            <div class="flex flex-col w-full h-screen bg-gradient-to-br from-green-950 via-zinc-900 to-zinc-800 items-center">
                <div class="font-bold text-2xl text-white justify-around pt-[200px] pb-10">
                    <h1>Sign-In</h1>
                </div>
                <form action="#" class="flex flex-col justify-between">
                    <div class="relative">
                        <div class="absolute py-2 ps-1">
                            <svg class="h-6 fill-slate-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                <path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-240v-32q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v32q0 33-23.5 56.5T720-160H240q-33 0-56.5-23.5T160-240Zm80 0h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"/>
                            </svg>
                        </div>
                        <input type="username" name="username" placeholder="Username" class="w-full ps-8 rounded-lg bg-green-800 text-white py-2">
                    </div>
                    <div class="relative mt-8">
                        <div class="absolute py-2 ps-1">
                            <svg class="h-6 fill-slate-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                                <path d="M240-80q-33 0-56.5-23.5T160-160v-400q0-33 23.5-56.5T240-640h40v-80q0-83 58.5-141.5T480-920q83 0 141.5 58.5T680-720v80h40q33 0 56.5 23.5T800-560v400q0 33-23.5 56.5T720-80H240Zm0-80h480v-400H240v400Zm240-120q33 0 56.5-23.5T560-360q0-33-23.5-56.5T480-440q-33 0-56.5 23.5T400-360q0 33 23.5 56.5T480-280ZM360-640h240v-80q0-50-35-85t-85-35q-50 0-85 35t-35 85v80ZM240-160v-400 400Z"/>
                            </svg>
                        </div>
                        <input type="password" name="password" placeholder="Password" class="w-full ps-8 rounded-lg bg-green-800 text-white py-2">
                    </div>
                </form>
                <a href="{{route('admin.dashboard')}}" class="mt-8 bg-green-900 hover:bg-green-950 py-2 px-7 rounded-lg text-white font-semibold">
                    <button type="submit">Login</button>
                </a>
            </div>
        </div>
    </section>
@endsection
