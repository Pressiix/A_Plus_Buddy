<section class="section register register-page">
    <div class="container">
      <div class="row">
        <!-- <div class="col-md-2"></div> -->
        <div class="col-md-2"></div>
        <div class="col-md-8 form-custom" >
          <div class="right-content">
            <div class="top-content">
              <div class="thai-lang"><h3>ลงทะเบียน</h3></div>
              <div class="eng-lang" style="display:none;"><h3>Register</h3></div>
            </div>
            <form id="register" action="<?= base_url() ?>/register" method="post">

              <div class="row">
                <div class="col-md-12">
                  <fieldset>
                    <!-- <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required=""> -->
                    <input type="text" class="form-control" name="email" id="email" placeholder="อีเมล" value="<?= set_value('email') ?>">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <!-- <input name="phone-number" type="text" class="form-control" id="phone-number" placeholder="Your Phone Number" required=""> -->
                    <input type="password" class="form-control" name="password" placeholder="รหัสผ่าน" id="password" value="">
                  </fieldset>
                </div>
                <div class="col-md-6">
                  <fieldset>
                    <!-- <input name="phone-number" type="text" class="form-control" id="phone-number" placeholder="Your Phone Number" required=""> -->
                    <input type="text" class="form-control" name="age" placeholder="อายุ" id="age" value="">
                  </fieldset>
                </div>
                <div class="col-md-6">
                  <fieldset>
                    <!-- <input name="phone-number" type="text" class="form-control" id="phone-number" placeholder="Your Phone Number" required=""> -->
                    <input type="text" class="form-control" name="gender" placeholder="เพศ" id="gender" value="">
                  </fieldset>
                </div>
                <div id="province-form" class="col-md-12">
                  <fieldset>
                    <!-- <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required=""> -->
                    <select id="province" class="form-control">
                        <option value="">กรุณาเลือกจังหวัด</option>
                        <?php 
                        foreach($province as $key => $item)
                        {
                            echo '<option value="'.$item->id.'">'.str_replace('*','',$item->name_th).'</option>';
                        }
                        ?>
                    </select>
                  </fieldset>
                </div>
                <div id="district-form" class="col-md-6">
                  <fieldset>
                    <select id="district" class="form-control" style="display:none;"></select>
                  </fieldset>
                </div>
               </div>

               <div class="row">
                <?php if (isset($validation)): ?>
                  <div class="col-12">
                    <div class="alert alert-danger" role="alert">
                      <?= $validation->listErrors() ?>
                    </div>
                  </div>
                <?php endif; ?>
                <!-- <div class="col-md-12">
                  <fieldset>
                    <a href="<?= base_url() ?>/register">Don't have an account yet?</a>
                  </fieldset>
                </div> -->
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="button">Register</button>
                  </fieldset>
                </div>
              </div>

            </form>
          </div>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </section>
