@extends('layouts.global')

@section('title')
Tambah Data Lapangan - Admin
@endsection

@section('content')
    <div class="h-screen flex w-full justify-center items-center">
        <img src="https://i.pinimg.com/originals/98/c5/90/98c5906a9b6b687fafa507a511d75ef4.png" alt="" class="absolute -z-10 h-screen w-screen">
        <div class="h-fit w-1/3 flex flex-col rounded-xl bg-gradient-to-br from-gray-400 via-gray-700 to-gray-900 text-white items-center border-[10px] border-indigo-950">
            <h1 class="font-bold text-[30px] py-5">Tambah Data Lapangan</h1>
            <form action="{{route('admin.storeorder')}}" method="POST" class="text-black w-3/4">
                @csrf
                <div class="w-full relative flex">
                    <div class="mr-1 w-1/2 text-white font-medium">
                        <p>Main Jam</p>
                    </div>
                    <select type="number" name="jam" id="jam" class="w-full rounded-md">
                        @for ($i = 10; $i <24; $i++)
                        <option value="{{$i}}">Jam {{$i}}</option>
                        @endfor
                    </select>
                </div>
                <div class="w-full relative flex mt-3">
                    <div class="mr-1 w-1/2 text-white font-medium">
                        <p>Durasi</p>
                    </div>
                    <select type="number" name="durasi" id="durasi" class="w-full rounded-md">
                        @for ($i = 1; $i <4; $i++)
                        <option value="{{$i}}">{{$i}} Jam</option>
                        @endfor
                    </select>
                </div>
                <div class="w-full relative flex mt-3">
                    <div class="mr-1 w-1/2 text-white font-medium">
                        <p>Lapangan</p>
                    </div>
                    <select type="number" name="lapangan_id" id="lapangan_id" class="w-full rounded-md">
                        @foreach ($lapangans as $l)
                        <option value="{{$l->no_lap}}">Lapangan {{$l->no_lap}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="w-full relative flex mt-3">
                    <div class="mr-1 w-1/2 text-white font-medium">
                        <p>Pemesan</p>
                    </div>
                    <input type="text" name="pengguna_id" value="{{$penggunas->nama}}">
                </div>
                <button type="submit" class="w-full h-auto py-4 my-6 text-white font-medium bg-green-800 rounded-md flex justify-center items-center hover:bg-green-700">
                    Tambah Data
                </button>
            </form>
        </div>

    </div>
@endsection
