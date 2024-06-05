<x-app-layout>
<div class="w-full h-[200vh] mainbackground bg-yellow-500">
    <div class="w-full flex justify-center py-6"><img src={{"images/logolions.png"}} alt="" class="h-[12vh] bg-white rounded-full"></div>
    <div class="mainn w-full flex flex-col justify-center items-center">
        {{-- leaderboard Div --}}
        <div class="containerr  w-[80vw] rounded-xl px-4 py-4">
        {{-- layer 1 --}}
        <div class="flex w-[55vw] justify-between ">
            <p class="text-2xl font-serif py-1 px-1 ">Rank</p>
            <p class="text-2xl font-serif py-1 px-1">User</p>
            <p class="text-2xl font-serif py-1 px-1">Points</p>

        </div>
            <div class="relative layercardd mb-2 rounded-t-xl h-[10vh] flex items-center px-4">
                <span class="relative z-10 text-2xl">1</span>
                <div class="relative z-10 pic_name w-[35vw] flex px-4 justify-end items-center">
                    <span class="bg-gray-200 w-10 h-10 rounded-full"> <img src={{"images/logolions.png"}} alt=""> </span>
                    <span class="text-xl px-4">AmineBakrim</span>
                </div>
                <span class="relative z-10 text-2xl w-[30vw] text-center font-serif">1211</span>
            </div>
        {{-- layer 2 --}}
            <div class="relative layercardd mb-2 rounded-t-xl h-[10vh] flex items-center px-4">
                <span class="relative z-10 text-2xl">2</span>
                <div class="relative z-10 pic_name w-[35vw] flex px-4 justify-end items-center">
                    <span class="bg-gray-200 w-10 h-10 rounded-full"> <img src={{"images/logolions.png"}} alt=""> </span>
                    <span class="text-xl px-4">AmineBakrim</span>
                </div>
                <span class="relative z-10 text-2xl w-[30vw] text-center font-serif">1211</span>
            </div>
        {{-- layer3 --}}
            <div class="relative layercardd mb-2 rounded-t-xl h-[10vh] flex items-center px-4">
                <span class="relative z-10 text-2xl">3</span>
                <div class="relative z-10 pic_name w-[35vw] flex px-4 justify-end items-center">
                    <span class="bg-gray-200 w-10 h-10 rounded-full"> <img src={{"images/logolions.png"}} alt=""> </span>
                    <span class="text-xl px-4">AmineBakrim</span>
                </div>
                <span class="relative z-10 text-2xl w-[30vw] text-center font-serif">1211</span>
            </div>
        {{-- layer4 --}}
            <div class="relative layercardd mb-2 rounded-t-xl h-[10vh] flex items-center px-4">
                <span class="relative z-10 text-2xl">4</span>
                <div class="relative z-10 pic_name w-[35vw] flex px-4 justify-end items-center">
                    <span class="bg-gray-200 w-10 h-10 rounded-full"> <img src={{"images/logolions.png"}} alt=""> </span>
                    <span class="text-xl px-4">AmineBakrim</span>
                </div>
                <span class="relative z-10 text-2xl w-[30vw] text-center font-serif">1211</span>
            </div>
        {{-- layer5 --}}
            <div class="relative layercardd mb-2 rounded-t-xl h-[10vh] flex items-center px-4">
                <span class="relative z-10 text-2xl">5</span>
                <div class="relative z-10 pic_name w-[35vw] flex px-4 justify-end items-center">
                    <span class="bg-gray-200 w-10 h-10 rounded-full"> <img src={{"images/logolions.png"}} alt=""> </span>
                    <span class="text-xl px-4">AmineBakrim</span>
                </div>
                <span class="relative z-10 text-2xl w-[30vw] text-center font-serif">1211</span>
            </div>
        {{-- layer6 --}}
            <div class="relative layercardd mb-2 rounded-t-xl h-[10vh] flex items-center px-4">
                <span class="relative z-10 text-2xl">6</span>
                <div class="relative z-10 pic_name w-[35vw] flex px-4 justify-end items-center">
                    <span class="bg-gray-200 w-10 h-10 rounded-full"> <img src={{"images/logolions.png"}} alt=""> </span>
                    <span class="text-xl px-4">AmineBakrim</span>
                </div>
                <span class="relative z-10 text-2xl w-[30vw] text-center font-serif">1211</span>
            </div>
        </div>
    </div>
</div>    

<style>
    .layercardd::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(254, 254, 254, 0.829); /* Gray-50 background with 50% opacity */
        z-index: 0; /* Make sure the pseudo-element is below the text */
        border-radius: 0.75rem; /* Matching the rounded corners */
    }

</style>
</x-app-layout>
