<div {{$attributes->merge(['class' => 'flex relative z-0 overflow-hidden'])}}>
    @foreach($models as $model)
        <x-avatar :search="$model->$searchFrom"
                  :src="$urlFromSource($model)"
                  :provider="$provider"
                  :fallback="$fallback"
                  class="{{$avatarClass}} relative inline-block h-{{$size}} w-{{$size}} rounded-full text-white shadow-solid {{($loop->first && $reverse) || ($loop->last && !$reverse) ? '' : $margin}}"
                  style="z-index:{{$reverse ? '-' : ''}}{{$loop->index}}"
        />
    @endforeach
</div>