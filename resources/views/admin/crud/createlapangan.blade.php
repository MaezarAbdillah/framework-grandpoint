@extends('layouts.global')

@section('title')
Tambah Data Lapangan - Admin
@endsection

@section('content')
    <div class="h-screen flex w-full justify-center items-center">
        <img src="https://i.pinimg.com/originals/98/c5/90/98c5906a9b6b687fafa507a511d75ef4.png" alt="" class="absolute -z-10 h-screen w-screen">
        <div class="h-fit w-1/3 flex flex-col rounded-xl bg-gradient-to-br from-gray-400 via-gray-700 to-gray-900 text-white items-center border-[10px] border-indigo-950">
            <h1 class="font-bold text-[30px] py-5">Tambah Data Lapangan</h1>
            <form action="{{route('admin.storelapangan')}}" method="POST" class="text-black">
                @csrf
                <div class="w-full relative flex">
                    <div class="border-black border-2 bg-white rounded-md mr-1">
                        <svg class="h-6 fill-black" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                            <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h167q11-35 43-57.5t70-22.5q40 0 71.5 22.5T594-840h166q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560h-80v120H280v-120h-80v560Zm280-560q17 0 28.5-11.5T520-800q0-17-11.5-28.5T480-840q-17 0-28.5 11.5T440-800q0 17 11.5 28.5T480-760Z"/>
                        </svg>
                    </div>
                    <input type="number" name="no_lap" placeholder="Nomor Lapangan..." class="rounded-md px-2">
                </div>
                <div class="w-full relative flex mt-3">
                    <div class="border-black border-2 bg-white rounded-md mr-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" class="w-6 h-6">
                            <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
                            <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z" clip-rule="evenodd" />
                            <path d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z" />
                          </svg>
                    </div>
                    <input type="number" name="harga" placeholder="Harga Lapangan..." class="rounded-md px-2">
                </div>
                <button type="submit" class="w-full h-auto py-4 my-6 text-white font-medium bg-green-800 rounded-md flex justify-center items-center hover:bg-green-700">
                    Tambah Data
                </button>
            </form>
        </div>

    </div>
@endsection
