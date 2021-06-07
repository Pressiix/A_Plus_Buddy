<div class="container">
  <div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
      <div class="container">
        <h3>Login</h3>
        <hr>
        <?php if (session()->get('success')): ?>
          <div class="alert alert-success" role="alert">
            <?= session()->get('success') ?>
          </div>
        <?php endif; ?>
        <form class="login-form" action="<?= base_url() ?>/login" method="post">
          <div class="form-group">
           <label for="email">Email address</label>
           <input type="text" class="form-control" name="email" id="email" value="<?= set_value('email') ?>">
          </div>
          <div class="form-group">
           <label for="password">Password</label>
           <input type="password" class="form-control" name="password" id="password" value="">
          </div>
          <?php if (isset($validation)): ?>
            <div class="col-12">
              <div class="alert alert-danger" role="alert">
                <?= $validation->listErrors() ?>
              </div>
            </div>
          <?php endif; ?>
          <div class="row">
            <div class="col-12 col-sm-4">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <div class="col-12 col-sm-8 text-right">
              <a href="<?= base_url() ?>/register">Don't have an account yet?</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<section class="section coming-soon" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="right-content">
            <div class="top-content">
            <h3>Login</h3>
            </div>
            <form id="contact" action="" method="get">
              <div class="row">
                <div class="col-md-12">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="phone-number" type="text" class="form-control" id="phone-number" placeholder="Your Phone Number" required="">
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
                    <a href="<?= base_url() ?>/register">Don't have an account yet?</a>
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="button">Login</button>
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
