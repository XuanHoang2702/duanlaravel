<div class="blogs mt-5">
    <div class="Blog-title fs-1 text-center mb-5">
        <h3>From the Blogs</h3>
    </div>
    <div class="row ">
        @foreach ($blogs as $blog)
            <div class="blog_item  col-lg-4 ">
                <div class="image-blog text-center">
                    <img class="rounded img-thumbnail w-100" class="" src="/front/img/blog/{{ $blog->image }}"
                        alt="">
                </div>
                <p class="fs-4 font-weight-normal ">{{ $blog->title }}</p>
                <p>{{ $blog->subtitle }}</p>
            </div>
        @endforeach

    </div>
</div>
