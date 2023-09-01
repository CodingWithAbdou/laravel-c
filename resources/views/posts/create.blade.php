
<!DOCTYPE html>
    <html lang="en" dir="rtl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
        <title>Create Post</title>
    </head>

    <body>
        <form action="/posts" method="POST">
            @csrf
            <div class="container py-4">
                <div class="my-2">
                    <label for="title" class="form-label">عنوان المقالة</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>

                <div  class="my-2">
                    <label for="body" class="form-label">نص المقالة</label>
                    <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <div  class="my-2">
                    <label for="author" class="form-label">كاتب المقالة</label>
                    <input type="text" name="author" id="author" class="form-control">
                </div>
                <button class="btn btn-primary my-2">إنشاء مقالة</button>
            </div>
        </form>
    </body>
</html>
