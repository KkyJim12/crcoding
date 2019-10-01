<!--Portfolio Section Start-->
<section class="portfolio pt-100 pb-70" data-scroll-index="3">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="heading text-center">
                    <h6>รายละเอียด</h6>
                    <h2>ผลงานทั้งหมด</h2>
                </div>
                <div class="portfolio-filter text-center">
                    <ul>
                        <li class="sel-item" data-filter="*">ทั้งหมด</li>
                        <li data-filter=".web">เว็บไซต์</li>
                        <li data-filter=".app">แอพ</li>
                        <li data-filter=".design">ดีไซน์</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row portfolio-items">
            <!--Portfolio Item-->
            @foreach($port as $show)
            <div class="col-lg-4 col-md-6 item @if($show->type == 1) web @elseif($show->type == 2) app @elseif($show->type == 3) design @endif">
                <div class="item-content">
                    <img src="/storage/{{$show->image}}" alt="portfolio">
                    <div class="item-overlay">
                        <a href="{{$show->link}}" target="_blank"><h6>{{$show->name}}</h6></a>
                        <div class="icons">
                            <span class="icon link">
                                <a href="/storage/{{$show->image}}">
                                    <i class="fa fa-search"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- End Portfolio Item -->
        </div>
    </div>
</section>
<!--Portfolio Section End-->