
@section('title' , 'المقالات')

<x-layout>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the Firehose
        </h3>

        <?php foreach ($posts as $post ) : ?>
            <div class="blog-post">
                <a href="/posts/<?= $post->id ?>">
                    <h2 class="blog-post-title">
                        <?= $post->title ?>
                    </h2>
                </a>
                <p class="blog-post-meta">
                    <a href="#">بقلم <?= $post->author ?></a>
                    <?= Carbon\Carbon::parse($post->created_at)-> diffForHumans() ?>
                </p>
            </div>
        <?php endforeach ?>

        <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
        <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">تخفيض</h4>
            <p class="mb-0">احصل الان على تخفيض بقيمة 30% لكتابنا الجديد سارع الان الكمية محدودة ادحل بريدك الالكتروني للحصول على المويد من التقاصيل</p>
            <form action="/mail" method="POST">
                @csrf
                <div class="my-3">
                    <input type="email" name="email" class="form-control" id="name" placeholder="الايميل">
                    @error('email')
                    <div class="alert alert-danger alert-dismissible fade show">
                        <strong>
                            {{ $message }}
                        </strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary ">حفظ</button>

            </form>
        </div>


        </aside><!-- /.blog-sidebar -->

    </div>
</main>

</x-layout>
