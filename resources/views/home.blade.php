@extends('layouts.global')

@section('title')
    Beranda - Green Point
@endsection


@section('content')
    @include('components.navbar')

    {{-- Image Promotion --}}
    <section>
        <div>
            <img src="{{ asset('assets/image/img-landing-page.jpg') }}" alt="" class="w-fit">
        </div>
    </section>


    {{-- Tentang --}}
    <section>
        <div class="flex flex-row">
            <img src="{{ asset('assets/image/bola-futsal.jpg') }}" alt=""
                class="w-[500px] h-auto rounded-tr-[100px]">
            <div class="flex flex-col justify-center px-32">
                <h1 class="pb-5 text-5xl font-bold">About Us</h1>
                <p class="pb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente sit optio beatae maiores
                    exercitationem iure molestiae! Dignissimos, voluptas consequatur? Nobis ratione voluptatum deserunt
                    aliquid doloremque soluta consectetur hic modi quibusdam.</p>
                <div class="flex flex-row w-[150px] h-auto justify-center items-center rounded-full bg-gradient-to-r from-green-700 via-cyan-700 to-yellow-500 hover:from-yellow-600 hover:via-red-700 hover:to-purple-950">
                    <a href="#"><h1 class="text-white font-bold text-center px-2 py-[10px]">Read More</h1></a>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>

        </div>
    </section>


    @include('components.footer')
@endsection
