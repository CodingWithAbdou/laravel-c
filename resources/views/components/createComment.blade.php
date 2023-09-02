<form action="/posts/{{ $post->id}}/comments" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">إسم صاحب التعليق</label>
        <input type="text" name="name" class="form-control" id="name" >
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">نص التعليق</label>
        <textarea name="body" id="body" cols="30" rows="5" class="form-control"></textarea>
        @error('body')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary my-4">حفظ</button>
</form>
