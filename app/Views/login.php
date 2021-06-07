<section class="section login login-page">
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 form-custom" >
          <div class="right-content">
            <div class="top-content">
            <h3>เข้าสู่ระบบ</h3>
            </div>
            <form id="login" action="<?= base_url() ?>/login" method="post">
              <div class="row">
                <div class="col-md-12">
                  <fieldset>
                    <!-- <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required=""> -->
                    <input type="text" class="form-control" name="email" id="email" placeholder="กรุณากรอกอีเมล" value="<?= set_value('email') ?>">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <!-- <input name="phone-number" type="text" class="form-control" id="phone-number" placeholder="Your Phone Number" required=""> -->
                    <input type="password" class="form-control" name="password" placeholder="กรุณากรอกรหัสผ่าน" id="password" value="">
                  </fieldset>
                </div>
                <?php if (isset($validation)): ?>
                  <div class="col-12">
                    <div class="alert alert-danger" role="alert">
                      <?= $validation->listErrors() ?>
                    </div>
                  </div>
                <?php endif; ?>
                <div class="col-md-12">
                  <fieldset>
                    <a href="<?= base_url() ?>/register">คุณยังไม่ได้เป็นสมาชิกใช่หรือไม่ ?</a>
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="button">เข้าสู่ระบบ</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
  </section>
