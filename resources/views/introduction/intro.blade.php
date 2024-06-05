<x-app-layout>
    <div
        class="overflow-hidden bg-gradient-to-bl pt-6 from-yellow-400 to-yellow-500 w-full min-h-screen flex flex-col gap-3 justify-center items-center">
        <img class="w-[20%] z-40 absolute -top-9 drop-shadow-2xl " src={{ asset('images/Stress-cuat.png') }}
            alt="">
        <div
            class="justify-center text-white text-2xl text-center font-bold px-6 mt-5 relative shadow-lg bg-gradient-to-t from-[#80b918] to-[#007f5f] z-10 rounded w-[70%] h-[50vh] py-8 flex items-center flex-col gap-2">
            {{-- <img class="absolute -z-10 top-0 right-50 opacity-10 w-[100%] " src={{ asset('images/3215422.png') }}
                alt=""> --}}
            <p >
                Ahmed wants a website, but he needs your help. This quiz will show you how to help him avoid mistakes.
                Answer the questions correctly, and you'll help Ahmed become a web superstar. But mess up, and his
                website might look terrible.
            </p>
            <p>
                Ready to help Ahmed build a great website? 
            </p>
        </div>
        <a href="/question"><button class="bg-[#007f5f] px-3 py-2 rounded text-white">Let's do this! </button></a>
    </div>
</x-app-layout>
