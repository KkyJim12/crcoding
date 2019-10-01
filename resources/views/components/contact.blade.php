<!--Contact Section Start-->
<section class="contact pt-100 pb-100" data-scroll-index="5">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="heading">
                    <h6>ติดต่อเรา</h6>
                    <h2>ฝากข้อความ</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <!--Contact Form-->
                <form id='contact-form' method='POST'>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <!--name-->
                            <input type="text" class="form-control con-validate" id="contact-name" placeholder="ชื่อ" minlength=3 required>
                        </div>
                        <div class="col-md-6 form-group">
                            <!--email-->
                            <input type="tel" class="form-control con-validate" id="contact-email" placeholder="เบอร์โทร" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <!--message box-->
                            <textarea class="form-control con-validate" id="contact-message" placeholder="เขียนข้อความ" rows=6 required></textarea>
                        </div>
                        @csrf
                        <div class="col-md-12 text-center">
                            <!--contact button-->
                            <button type="submit" id="contact-submit" class="mt-30 main-btn">
                                ส่งข้อความ
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--Contact Section End-->