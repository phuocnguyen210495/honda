@foreach(\App\Support\Styles::$pushedStyles as $style => $attrs)
    <link rel="stylesheet" href="{{ $style }}" {{ $attrs }}>
@endforeach

@foreach(\App\Support\Styles::$pushedRaw as $style)
    <style>
        {!! $style !!}
    </style>
@endforeach
