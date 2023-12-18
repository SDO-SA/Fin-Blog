@props(['author','size'])
<img class="w-7 h-7 rounded-full mr-3" src="{{ $author->profile_photo_url }}" alt="{{ $author->name }}">
<span class="mr-1 text-xs">{{ $author->name }}</span>