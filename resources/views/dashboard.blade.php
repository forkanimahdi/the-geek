{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('scores', 20) }}" method="POST">
                    @csrf
                    <button>qdfihbedfhj</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout> --}}
<x-app-layout>
    <div
        class="overflow-hidden bg-gradient-to-bl pt-6  w-full min-h-screen flex flex-col gap-3 justify-center items-center">
        <img class="w-[20%] z-40 absolute -top-9 drop-shadow-2xl " src={{ asset('images/Stress-cuat.png') }}
            alt="">
        <div
            class="justify-center px-6 mt-5 relative shadow-lg bg-gradient-to-t from-[#80b918] to-[#007f5f] z-10 rounded w-[70%] h-[50vh] py-8 flex items-center flex-col gap-2">
            <p class="text-3xl text-white text-balance text-center leading-relaxed">
                <span class="font-bold">La7ya</span> wants to build his <span class="font-bold">Dream Website</span> but
                has no coding experience. He needs your help to navigate
                through <span class="font-bold">HTML</span>, <span class="font-bold">CSS</span>, and <span
                    class="font-bold">JavaScript</span>. Answer the following questions correctly to guide la7ya in
                creating
                his website
            </p>
        </div>
        <a href="/question"><x-primary-button>Let's Start!</x-primary-button></a>
    </div>
</x-app-layout>
