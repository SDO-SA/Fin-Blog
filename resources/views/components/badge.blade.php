@props(['textColor', 'bgColor'])

@php
$textColor = match ($textColor) {
'red' => 'text-red-800',
'yellow' => 'text-yellow-800',
default => 'text-red-800',
};

$bgColor = match ($bgColor) {
'red' => 'bg-red-800',
'yellow' => 'bg-yellow-800',
default => 'bg-red-800',
};
@endphp

<a href="" class=" {{ $textColor }} {{ $bgColor }} rounded-xl  px-3 py-1 text-base">
    {{ $slot }}
</a>