<!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video src="assets/images/course-video.mp4" type="video/mp4" class="video-background" autoplay muted loop playsinline disablePictureInPicture="true" id="bg-video"></video>
      <!-- <img src="assets/images/video-bg.jpg" style="display:none;"/> -->
      <div class="video-overlay header-text" style="height: 100%;">
          <div class="caption">
          <div data-aos="flip-up">
              <h6 class="thai-lang">สังคมแห่งการเรียนรู้ที่รวบรวมชีทและติวเตอร์จากทั่วประเทศ</h6>
              <h2 class="thai-lang"><em>เอพลัสบัดดี้</em> เพื่อนซี้วัยเรียน</h2>
              <!-- <div class="main-button row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 find-sheet-button thai-lang"><a href="#section2">หาชีท</a></div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 find-tutor-button thai-lang"><a href="#section2">หาติวเตอร์</a></div>
              </div> -->
              <div class="col-md-12 text-center arrow-down">
                <a onclick="scrollToElement('course-section');"><img src="<?= base_url() ?>/assets/images/icon/arrow-down.svg" alt=""></a>
              </div>
              </div>
          </div>
      </div>
  </section>
  <script>
    $('body').on('click touchstart', function () {
            const videoElement = document.getElementById('bg-video');
            if (!videoElement.playing) {
                videoElement.play();
            }
    });
  </script>
  <!-- ***** Main Banner Area End ***** -->


  <section class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="features-post">
            <div class="features-content">
              <div class="content-show text-center">
                <h4 class="thai-lang"><i class="fa fa-pencil"></i>ชีท</h4>
              </div>
              <div class="content-hide">
                <p class="thai-lang">ชีทสรุปสั้นกระชับเข้าใจง่าย ประหยัดเวลา ครบ จบตรงประเด็น</p>
                <p class="hidden-sm thai-lang">ชีทสรุปสั้นกระชับเข้าใจง่าย ประหยัดเวลา ครบ จบตรงประเด็น</p>
                <div class="scroll-to-section thai-lang text-center"><a href="#section2">More Info.</a></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post second-features">
            <div class="features-content">
              <div class="content-show text-center">
                <h4 class="thai-lang"><i class="fa fa-graduation-cap"></i>ติวเตอร์</h4>
              </div>
              <div class="content-hide">
                <p class="thai-lang">เลือกติวเตอร์ได้ตามควาวมต้องการ กำหนดเวลาเองได้ การสอนหลากหลายรูปแบบ</p>
                <p class="hidden-sm thai-lang">เลือกติวเตอร์ได้ตามควาวมต้องการ กำหนดเวลาเองได้ การสอนหลากหลายรูปแบบ</p>
                <div class="scroll-to-section thai-lang text-center"><a href="#section3">Details</a></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post third-features">
            <div class="features-content">
              <div class="content-show text-center">
                <h4 class="thai-lang"><i class="fa fa-book"></i>สถาบัน</h4>
              </div>
              <div class="content-hide">
                <p class="thai-lang">ประชาสัมพันธ์สถาบันและเข้าถึงกลุ่มผู้เรียนได้มากขึ้น</p>
                <p class="hidden-sm thai-lang">ประชาสัมพันธ์สถาบันและเข้าถึงกลุ่มผู้เรียนได้มากขึ้น</p>
                <div class="scroll-to-section thai-lang text-center"><a href="#section4">Read More</a></div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section courses" data-section="section4">
    <div class="container-fluid" id="course-section">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading" data-aos="fade-up">
            <h2 class="eng-lang sheet-title">Sheets</h2>
          </div>
        </div>
        <div class="owl-carousel owl-theme" data-aos="fade-down">
          <div class="item">
            <img src="assets/images/courses-01.jpg" alt="Course #1">
            <div class="down-content">
              <h4 class="thai-lang">Digital Marketing</h4>
              <p class="thai-lang">You can get free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>
              <div class="author-image">
                <img src="assets/images/author-01.png" alt="Author 1">
              </div>
              <div class="text-button-pay">
                <a href="#" class="thai-lang">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-02.jpg" alt="Course #2">
            <div class="down-content">
              <h4 class="thai-lang">Business World</h4>
              <p class="thai-lang">Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>
              <div class="author-image">
                <img src="assets/images/author-02.png" alt="Author 2">
              </div>
              <div class="text-button-free">
                <a href="#" class="thai-lang">Free <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-03.jpg" alt="Course #3">
            <div class="down-content">
              <h4 class="thai-lang">Media Technology</h4>
              <p class="thai-lang">Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
              <div class="author-image">
                <img src="assets/images/author-03.png" alt="Author 3">
              </div>
              <div class="text-button-pay">
                <a href="#" class="thai-lang">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-04.jpg" alt="Course #4">
            <div class="down-content">
              <h4 class="thai-lang">Communications</h4>
              <p class="thai-lang">Download free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>
              <div class="author-image">
                <img src="assets/images/author-04.png" alt="Author 4">
              </div>
              <div class="text-button-free">
                <a href="#" class="thai-lang">Free <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-05.jpg" alt="">
            <div class="down-content">
              <h4 class="thai-lang">Business Ethics</h4>
              <p class="thai-lang">Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
              <div class="author-image">
                <img src="assets/images/author-05.png" alt="">
              </div>
              <div class="text-button-pay">
                <a href="#" class="thai-lang">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-01.jpg" alt="">
            <div class="down-content">
              <h4 class="thai-lang">Photography</h4>
              <p class="thai-lang">Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>
              <div class="author-image">
                <img src="assets/images/author-01.png" alt="">
              </div>
              <div class="text-button-free">
                <a href="#" class="thai-lang">Free <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-02.jpg" alt="">
            <div class="down-content">
              <h4 class="thai-lang">Web Development</h4>
              <p class="thai-lang">Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
              <div class="author-image">
                <img src="assets/images/author-02.png" alt="">
              </div>
              <div class="text-button-free">
                <a href="#" class="thai-lang">Free <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-03.jpg" alt="">
            <div class="down-content">
              <h4 class="thai-lang">Learn HTML CSS</h4>
              <p class="thai-lang">You can get free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>
              <div class="author-image">
                <img src="assets/images/author-03.png" alt="">
              </div>
              <div class="text-button-pay">
                <a href="#" class="thai-lang">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-04.jpg" alt="">
            <div class="down-content">
              <h4 class="thai-lang">Social Media</h4>
              <p class="thai-lang">Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
              <div class="author-image">
                <img src="assets/images/author-04.png" alt="">
              </div>
              <div class="text-button-pay">
                <a href="#" class="thai-lang">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-05.jpg" alt="">
            <div class="down-content">
              <h4 class="thai-lang">Digital Arts</h4>
              <p class="thai-lang">Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>
              <div class="author-image">
                <img src="assets/images/author-05.png" alt="">
              </div>
              <div class="text-button-free">
                <a href="#" class="thai-lang">Free <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-01.jpg" alt="">
            <div class="down-content">
              <h4 class="thai-lang">Media Streaming</h4>
              <p class="thai-lang">Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
              <div class="author-image">
                <img src="assets/images/author-01.png" alt="">
              </div>
              <div class="text-button-pay">
                <a href="#" class="thai-lang">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section about-us" id="about-us" data-section="section6" style="padding-bottom: 190px;">
    <div class="container contact-container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading section-heading-about-us" data-aos="fade-up">
            <h2 class="thai-lang about-us-title">เกี่ยวกับเรา</h2>
          </div>
        </div>
        <div class="col-md-6" data-aos="fade-left">
            <div class="row">
              <div class="col-md-12 about-us-box">
                  <p class="thai-lang">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  <p class="thai-lang">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
              </div>
            </div>
        </div>
        <div class="col-md-6" data-aos="fade-right">
          <div class="row">
            <div class="col-md-12 worker-title text-center"><h1 class="thai-lang">Team</h1></div>
              <div class="col-md-4 text-center worker-item"><img class="rounded-circle center" src="https://sketchok.com/images/articles/01-cartoons/058-powerpuff-girls/13/11.jpg"><p class="worker-desc">Firstname Lastname</p></div>
              <div class="col-md-4 text-center worker-item"><img class="rounded-circle center" src="https://sketchok.com/images/articles/01-cartoons/058-powerpuff-girls/15/12.jpg"><p class="worker-desc">Firstname Lastname</p></div>
              <div class="col-md-4 text-center worker-item"><img class="rounded-circle center" src="https://sketchok.com/images/articles/01-cartoons/058-powerpuff-girls/12/09.jpg"><p class="worker-desc">Firstname Lastname</p></div>
          </div>
        </div>
      </div>
    </div>
  </section>


