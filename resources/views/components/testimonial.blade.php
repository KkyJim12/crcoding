<!--Testimonials Section Start-->
<section class="testimonials pt-100 pb-100" style="background-image: url('/assets/img/testimonial.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="owl-carousel owl-theme text-center">
                    <!--Testimonials Item-->
                    @foreach($testimonial as $show)
                    <div class="testimonial-item">
                        <div class="author-img">
                            <img src="/storage/{{$show->image}}" alt="">
                        </div>
                        <h5>{{$show->name}}</h5>
                        <span>{{$show->company}}</span>
                        <p>{{$show->content}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--Testimonials Section End-->