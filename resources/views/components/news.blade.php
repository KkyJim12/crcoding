<!--Blog Section Start-->
<section class="blogs pt-100 pb-100 bg-gray" data-scroll-index="4">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="heading text-center">
                    <h6>ช่าวสาร</h6>
                    <h2>บทความ</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel owl-theme">
                <!--Blogs Item-->
                @foreach($news as $show)
                <div class="blog-item">
                    <div class="blog-img">
                        <a href="single-blog.html">
                            <img src="/storage/{{$show->image}}" alt="">
                        </a>
                    </div>
                    <div class="blog-content">
                        <h3>{{$show->title}}</h3>
                        <p>{{$show->content}}</p>
                        <div class="blog-meta">
                            <span class="more">
                                <a href="single-blog.html">อ่านต่อ</a>
                            </span>
                            <span class="date">
                                {{$show->created_at}}
                            </span>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- End Blog Items-->
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <div class="blog-button pt-40">
                    <a class="main-btn" href="blogs-page.html">ดูทั้งหมด</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Blog Section End-->