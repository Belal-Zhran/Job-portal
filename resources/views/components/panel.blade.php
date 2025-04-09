@php

    $default = 'p-4 bg-white/7 rounded-xl border border-transparent hover:border-red-500 group transition-colors duration-300';
@endphp


<div {{ $attributes([ 'class' => $default]) }}>

    {{ $slot }}
</div>
