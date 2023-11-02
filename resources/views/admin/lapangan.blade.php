@extends('layouts.global')

@section('title')
    Lapangan - Green Point
@endsection

@section('content')
    <div class="w-full h-full flex">
        @include('components.sidebar')
        <div class="w-full flex flex-col bg-slate-100">
            <div class="h-full m-6 p-8 bg-gradient-to-br from-gray-400 via-gray-700 to-gray-900 rounded-lg drop-shadow-md">
                <p class="text-4xl font-bold mb-4">Data Lapangan</p>
                <hr><br>
                <div class="w-full h-auto flex justify-end">
                    <a href="{{ route('admin.create') }}">
                        <button class="flex px-4 py-2 bg-green-600 rounded-md text text-white"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Tambah</button>
                    </a>
                </div><br>
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr class="border-2">
                                <th scope="col" class="px-6 py-3">
                                    No.
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nomor Lapangan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Harga
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-white">
                            @foreach ($lapangan as $l)
                                <tr class="bg-gray-800 border-2">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-green-500 whitespace-nowrap">
                                        {{$loop->iteration}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $l->no_lap }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $l->harga }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class=" flex w-full h-auto">
                                            <a href="{{ route('admin.edit', $l->id) }}">
                                                <button class="px-4 py-2 bg-yellow-300 rounded-md text"><svg
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                    </svg></button>
                                            </a>
                                            <form action="{{ route('admin.deletelapangan', $l->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" onclick="return confirm('Yakin Ingin Hapus Lapangan {{$l->no_lap}} ?')"
                                                    class="px-4 py-2 bg-red-600 rounded-md text text-white"><svg
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                    </svg></button>
                                            </form>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
