<div class="absolute w-full">
    <div class="flex flex-row">
        <div class="flex w-96">
            <div>
                <img src="{{asset('assets/image/logo-green-point.png')}}" alt="" class="w-fit h-12">
            </div>
        </div>
        <div class="flex items-center w-full">
            <div class="flex justify-center w-full">
                <a href="#" class="block px-4 py-2 text-white hover:font-bold">Home</a>
                <a href="#" class="block px-4 py-2 text-white hover:font-bold">About</a>
                <a href="#" class="block px-4 py-2 text-white hover:font-bold">Order</a>
                <a href="#" class="block px-4 py-2 text-white hover:font-bold">Contact</a>
            </div>
            <div class="flex justify-end w-96 ">
                <a href="{{route('login')}}" class="block px-6 py-2 text-white hover:font-bold">Sign In</a>
                <a href="{{route('register')}}" class="block px-6 py-2 text-white hover:font-bold">Sign Up</a>
            </div>
        </div>
    </div>
</div>
