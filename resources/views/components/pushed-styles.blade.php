@foreach(\App\Support\Styles::$pushedStyles as $style => $attrs)
<link rel="stylesheet" href="{{ $style }}" {{ $attrs }}>
@endforeach