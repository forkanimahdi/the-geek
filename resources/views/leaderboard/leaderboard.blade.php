<x-app-layout>
    <div class="overflow-hidden bg-gradient-to-bl w-full h-screen flex justify-center items-center text-white">
        <img class="w-[3%] absolute left-50 top-6" src={{ asset('images/logo1.png') }} alt="">
        <div class="relative shadow-lg bg-gradient-to-t from-[#80b918] to-[#007f5f] z-10 rounded w-[70%] py-8">
            <img class="absolute -z-10 top-0 right-50 opacity-10 w-[100%]" src={{ asset('images/3215422.png') }}
                alt="">

            <table class="w-full text-center mt-4">
                <thead class="w-full text-lg">
                    <tr class="w-full flex py-2">
                        {{-- <th class="flex-1">Rank</th> --}}
                        <th class="flex-1">User</th>
                        <th class="flex-1">Score</th>
                    </tr>
                </thead>

                <tbody class="w-fulltext-lg">
                    @foreach ($users as $index => $user)
                        @if ($user->score)
                            <tr class="w-full py-3 flex justify-around border-t border-gray-200">
                                {{-- <td class="flex-1">{{ $index + 1  }}</td> --}}
                                <td class="flex-1">{{ $user->name }}</td>
                                <td class="flex-1">{{ $user->score->score }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
