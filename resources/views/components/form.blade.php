
@csrf
<div class="container py-4">
    <div class="my-2">
        <label for="title" class="form-label">عنوان المقالة</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ $post->title ?? '' }}">
    </div>

    <div  class="my-2">
        <label for="body" class="form-label">نص المقالة</label>
        <textarea name="body" id="body" cols="30" rows="10" class="form-control" >{{ $post->body ?? '' }}</textarea>
    </div>

    <div  class="my-2">
        <label for="author" class="form-label">كاتب المقالة</label>
        <input type="text" name="author" id="author" class="form-control" value="{{ $post->author ?? '' }}">
    </div>
</div>
