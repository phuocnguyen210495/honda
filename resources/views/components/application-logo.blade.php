@switch($context)
    @case('sidebar')
    @case('navigation')
    <h2 {{ $attributes->merge(['class' => 'text-white text-lg font-bold']) }}>{{ env('APP_NAME') }}</h2>
    @break
    @default
    <span {{ $attributes }}>{{ env('APP_NAME') }}</span>
    @break
@endswitch
