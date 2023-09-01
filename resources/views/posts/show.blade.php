
@section('title'  , $post->title)

<x-layout >
    <x-post  :post="$post"  :comments="$comments" />
</x-layout>
