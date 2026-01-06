@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) }}>


@if (isset($attributes['type']) && $attributes['type']=='file' && isset($attributes['value']))

<img class="w-40 mt-1" src="{{asset($attributes['value'])}}" alt="">
@endif
