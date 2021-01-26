@php
    use App\Support\Scripts;
    if ($slot->isEmpty()) {
        Scripts::push($link, $attributes);
    } else {
        Scripts::pushRaw($slot);
    }
@endphp
