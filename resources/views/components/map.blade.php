<div
    x-data="
{
    initMapbox: function () {
        mapboxgl.accessToken = '{{ config('services.mapbox.public_token') }}';
        var map = new mapboxgl.Map({{ json_encode($options()) }});
        @foreach ($markers as $marker)
        new mapboxgl.Marker()
            .setLngLat({{ json_encode($marker) }})
                    .addTo(map);
        @endforeach
        }
    }"
    x-init="initMapbox()"
    id="{{ $id }}"
    {{ $attributes }}
></div>
<x-script link="https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js" />
<x-style link="https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css" />
