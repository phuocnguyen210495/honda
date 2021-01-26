@foreach(\App\Support\Scripts::$pushedScripts as $script => $attrs)
    <script src="{{ $script }}" {{ $attrs }}></script>
@endforeach

@foreach(\App\Support\Scripts::$pushedRaw as $script)
    <script>
        {!! $script !!}
    </script>
@endforeach
