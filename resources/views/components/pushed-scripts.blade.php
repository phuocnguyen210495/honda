@foreach(\App\Support\Scripts::$pushedScripts as $script => $attrs)
    <script src="{{ $script }}" {{ $attrs }}></script>
@endforeach