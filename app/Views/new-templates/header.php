<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= config('Params')->AppName ?></title>
    <link rel="shortcut icon" href="<?= base_url() ?>/assets/images/icon/main-icon.png?v=0.002" type="image/x-icon">

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GEHX6M7NZ1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GEHX6M7NZ1');
</script>
    

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css?v=<?= config('Params')->AssetVersion ?>" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/fontawesome.css?v=<?= config('Params')->AssetVersion ?>">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/templatemo-grad-school.css?v=<?= config('Params')->AssetVersion ?>">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/owl.css?v=<?= config('Params')->AssetVersion ?>">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/lightbox.css?v=<?= config('Params')->AssetVersion ?>">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/aos.css?v=<?= config('Params')->AssetVersion ?>">

    <!-- Custom css -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/custom.css?v=<?= config('Params')->AssetVersion ?>">

    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url() ?>/assets/vendor/jquery/jquery.min.js?v=<?= config('Params')->AssetVersion ?>"></script>
    <script src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.min.js?v=<?= config('Params')->AssetVersion ?>"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    
    <script src="<?= base_url() ?>/assets/js/aos.js?v=<?= config('Params')->AssetVersion ?>"></script>
  </head>

<body>
  <!--header-->
  <header class="main-header main-header-light clearfix" role="header">
    <div class="logo">
      <!-- <a href="<?= base_url() ?>/"><div style="color:#000;"><?= config('Params')->AppName ?></div></a> -->
      <a href="<?= base_url() ?>"> <img src="<?= base_url() ?>/assets/images/logo/main-logo.png"> </a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars" style="color: #000;"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu main-menu-light">
        <li class="<?= (getUriSegments() == '' ? 'active' : null) ?> thai-lang"><a href="<?= base_url() ?>/">หน้าแรก</a></li>
        <li class="thai-lang about-us-menu"><a onclick="scrollToElement('about-us');$('li.active').each(function(){$(this).removeClass('active')});$('.about-us-menu').addClass('active');">เกี่ยวกับเรา</a></li>
        <li class="has-submenu"><a>บริการ</a>
          <ul class="sub-menu">
            <li class="thai-lang"><a href="javascript:;">ชีทวิชาเรียนต่างๆ</a></li>
            <li class="thai-lang"><a href="javascript:;">ค้นหาติวเตอร์</a></li>
          </ul>
        </li>
       
    <?php if (session()->get('isLoggedIn')): ?>
        <li class="<?= (getUriSegments() == 'profile' ? 'active' : null) ?> thai-lang thai-lang-bold"><a href="<?= base_url() ?>/profile">โปรไฟล์</a></li>
        <li class="thai-lang"><a href="<?= base_url() ?>/logout" class="external">ออกจากระบบ</a></li>
    <?php else: ?>
        <li class="<?= (getUriSegments() == 'login' ? 'active' : null) ?>"><a href="<?= base_url() ?>/login">เข้าสู่ระบบ</a></li>
        <li class="<?= (getUriSegments() == 'register' ? 'active' : null) ?>"><a href="<?= base_url() ?>/register">ลงทะเบียน</a></li>
    <?php endif; ?>
      </ul>
    </nav>
    <script>
      // gtag('event', 'click', {
      //   'event_category': 'click',
      //   'event_label': 'click',
      //   'value': 'click'
      // });
    </script>
  </header>

  <div class="body-section">
      <!-- Content here -->