@section('title'  , "تعديل المقالة رقم $post->id")


<x-layout >
    <form action="/posts/{{$post->id}}" method="POST">
        @method('PATCH')
        <x-form :post="$post" />
        <button class="btn btn-primary my-2">تعديل المقالة</button>
    </form>
</x-layout>
