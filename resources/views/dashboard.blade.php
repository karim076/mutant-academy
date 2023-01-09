<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-4 gap-2 items-start">
                        <div class="bg-blue-200 monitor-item shadow-md rounded-lg p-4 text-center">
                            <p class="font-bold"># SUPERHELDEN</p>
                            <p class="text-8xl">23</p>
                        </div>
                         <div class="bg-blue-200 monitor-item shadow-md rounded-lg p-4 text-center">
                            <p class="font-bold"># TEAMS</p>
                            <p class="text-8xl">12</p>
                        </div>
                         <div class="bg-blue-200 monitor-item shadow-md rounded-lg p-4 text-center">
                            <p class="font-bold"># MISSIES</p>
                            <p class="text-8xl">5</p>
                        </div>
                         <div class="bg-blue-200 monitor-item shadow-md rounded-lg p-4 text-center">
                            <p class="font-bold"># Laatst toegevoegde Superhuman</p>
                            <p class="text-8xl">
                                <img src="https://avatars.dicebear.com/api/adventurer/9.svg" alt="">
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
