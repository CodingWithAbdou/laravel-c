@section('title'  ,    " إنشاء مقالة جديدة")


<x-layout >
    <form action="/posts" method="POST">
        <x-form />
        <button class="btn btn-primary my-2">إنشاء مقالة</button>
    </form>
</x-layout>
