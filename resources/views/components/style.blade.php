@php
    use App\Support\Styles;
    if ($slot->isEmpty()) {
        Styles::push($link, $attributes);
    } else {
        Styles::pushRaw($slot);
    }
@endphp
