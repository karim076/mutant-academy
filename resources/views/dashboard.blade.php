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
                    <div class="grid grid-cols-4 gap-2 items-start comic-header">
                        <div class="comic-border-1 bg-blue-200 monitor-item shadow-md rounded-lg p-4 text-center">
                            <p class="font-bold"># SUPERHELDEN</p>
                            <p class="text-8xl">{{ $superhumans->count() }}</p>
                        </div>
                         <div class="comic-border-2 bg-blue-200 monitor-item shadow-md rounded-lg p-4 text-center">
                            <p class="font-bold"># TEAMS</p>
                            <p class="text-8xl">{{ $groups->count() }}</p>
                        </div>
                         <div class=" comic-border-3 bg-blue-200 monitor-item shadow-md rounded-lg p-4 text-center">
                            <p class="font-bold"># MISSIES</p>
                            <p class="text-8xl">{{ $missions->count() }}</p>
                        </div>
                         <div class="comic-border-2 bg-blue-200 monitor-item shadow-md rounded-lg p-4 text-center">
                            <p class="font-bold"># Laatst toegevoegde Superhuman</p>
                            <p class="text-8xl">
                                <img src="https://avatars.dicebear.com/api/adventurer/{{$superhumans->last()->id}}.svg" alt="">
                            </p>
                            <p>{{$superhumans->last()->name}}</p>
                        </div>
                    </div>
                </div>

                <div class="p-6 text-gray-900">
                    <h2 class="text-8xl text-center font-bold comic-header">Mission Map</h2>
                    <div style="

                    " id="map" class="p-8 h-192 comic-border-1 "></div>
                </div>

                <script>
                    let map = L.map('map').setView([51.505, -0.09], 2);
                    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        maxZoom: 19,
                        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                    }).addTo(map);

                    // create legend for leaflet map

                    let legend = L.control({position: 'bottomleft'});
                    legend.onAdd = function (map) {
                        let div = L.DomUtil.create('div', 'info legend');
                        div.innerHTML += '<i style="color:#ff0000"></i><span style="color: #ff0000">High Threat</span><br>';
                        div.innerHTML += '<i style="color:#ffff00"></i><span style="color: #ffff00">Medium Threat</span><br>';
                        div.innerHTML += '<i style="color:#ffff00"></i><span style="color: #00ff00">Low Threat</span><br>';
                        return div;
                    };
                    legend.addTo(map);

                    fetch('/api/missions')
                        .then(response => response.json())
                        .then(data => {
                            data.forEach(mission => {

                                let marker = L.marker([mission.latitude, mission.longitude]).addTo(map);
                                // change marker color
                                marker.setIcon(L.divIcon({
                                    className: 'my-div-icon',
                                    html: `<div class="marker-pin "></div><span class="comic-header marker-number marker-${mission.threat_level}">
                                                ${mission.name}
                                            </span>`
                                }));
                                marker.bindPopup(`<h2>${mission.name}</h2><p>${mission.description}</p>`);
                            });
                        });

                </script>
            </div>


        </div>
    </div>
</x-app-layout>
