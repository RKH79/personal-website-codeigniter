<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section class="contact section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mx-auto col-md-7 col-12 py-5 mt-5 text-center" data-aos="fade-up">
        <h1 class="mb-4">جهت ارتباط <strong>باما</strong> میتوانید از <strong>بخش زیر ‍</strong></h1>
        <p>و یا آدرس ایمیل <a href="mailto:info@rkhoshhal.ir">info@rkhoshhal.ir</a> استفاده کنید</p>
      </div>
      <div class="col-lg-8 mx-auto col-md-10 col-12 rtl">
        <form action="newMessage" method="post" class="contact-form" data-aos="fade-up" data-aos-delay="300" role="form">
          <div class="row">
            <div class="col-lg-6 col-12">
              <input type="text" class="form-control" name="name" placeholder="نام">
            </div>
            <div class="col-lg-6 col-12">
              <input type="email" class="form-control text-right" name="email" placeholder="آدرس ایمیل" dir="ltr">
            </div>
            <div class="col-lg-12 col-12">
              <textarea class="form-control" rows="6" name="message" placeholder="پیام"></textarea>
            </div>
            <div class="col-lg-6 col-12">
              <input type="text" class="form-control text-right" name="captchaCode" placeholder="کد تصویر" dir="ltr">
            </div>
            <div class="col-lg-6 col-12 text-center">
              <img src="assets/captcha.php" class="mt-3 refresh-captcha"  alt="captcha"/>
            </div>
            <div class="col-lg-5 mx-auto col-7">
              <button type="submit" class="form-control" id="submit-button" name="submit">ارسال پیام</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<script>
    let refreshButton = document.querySelector(".refresh-captcha");
    refreshButton.onclick = function() {
      refreshButton.src = 'assets/captcha.php?' + Date.now();
    }
</script>