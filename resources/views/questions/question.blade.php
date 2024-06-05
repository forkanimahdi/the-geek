<x-app-layout>
    <div class="overflow-hidden bg-gradient-to-bl from-yellow-400 to-yellow-500 w-full h-screen flex justify-center items-center">
        <img class="w-[3%] absolute left-50 top-6" src={{ asset("images/logo1.png") }} alt="">
        <div class="relative shadow-lg bg-gradient-to-t from-[#80b918] to-[#007f5f] z-10 rounded w-[70%] py-8 flex items-center flex-col gap-2">
            <img class="absolute -z-10 top-0 right-50 opacity-10 w-[100%]" src={{ asset('images/3215422.png') }} alt="">
            <p class="text-white">Question 1/20 </p>
            <div class="w-[100%] min-h-[20vh] p-2 flex justify-center  text-3xl font-bold text-white">
                <h1 class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti neque, vel tempora animi exercitationem ex.</h1>
            </div>
            <div class="flex flex-col gap-2 text-white">
                <div class="group bg-white w-[40vw] h-[7vh] rounded flex gap-5 items-center px-3 hover:bg-[#003566] cursor-pointer">
                    <div class="bg-black w-10 h-10 rounded-full text-white flex justify-center items-center"><p>A</p></div>
                    <p class="group-hover:text-white text-black">Messi</p>
                </div>
                <div class="group bg-white w-[40vw] h-[7vh] rounded flex gap-5 items-center px-3 hover:bg-[#003566] cursor-pointer">
                    <div class="bg-black w-10 h-10 rounded-full text-white flex justify-center items-center"><p>B</p></div>
                    <p class="group-hover:text-white text-black">Messi</p>
                </div>
                <div class="group bg-white w-[40vw] h-[7vh] rounded flex gap-5 items-center px-3 hover:bg-[#003566] cursor-pointer">
                    <div class="bg-black w-10 h-10 rounded-full text-white flex justify-center items-center"><p>C</p></div>
                    <p class="group-hover:text-white text-black">Messi</p>
                </div>
                <div class="group bg-white w-[40vw] h-[7vh] rounded flex gap-5 items-center px-3 hover:bg-[#003566] cursor-pointer">
                    <div class="bg-black w-10 h-10 rounded-full text-white flex justify-center items-center"><p>D</p></div>
                    <p class="group-hover:text-white text-black">Messi</p>
                </div>
                {{-- <div class="p-2 w-[50vw]">
                    <input type="text" placeholder="Type your answer here" class="outline-none w-full border-none text-black font-mono font-bold rounded">
                </div> --}}
            </div>
        </div>
        
        {{-- <div class="w-full">
        </div> --}}
    </div>
</x-app-layout>