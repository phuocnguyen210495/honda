<form method="{{ $method !== 'GET' ? 'POST' : 'GET' }}"
      action="{{ $action }}" {!! $hasFiles ? 'enctype="multipart/form-data"' : '' !!} {{ $attributes->merge(['class' => 'w-full']) }}>
    @csrf
    @method($method)

    {{ $slot }}
</form>
