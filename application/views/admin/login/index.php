<!DOCTYPE html>
<html>

<head>
  <?php $this->load->view('admin/head.php'); ?>
  <style>
  <?php include 'index.css'?>
  </style>
</head>

<body>
  <div class="container">
    <div class="screen">
      <div class="screen__content">
        <h3 class="screen__title">ĐĂNG NHẬP</h3>
        <form class=" login" role="form" method="post">
          <div class="login__field">
            <i class="login__icon fas fa-user"></i>
            <input name="email" type="email" autofocus="" class="login__input" placeholder="User name / Email">
            <div class="form-error">
              <?php echo form_error('email'); ?>
            </div>
          </div>
          <div class="login__field">
            <i class="login__icon fas fa-lock"></i>
            <input type="password" class="login__input" placeholder="Mật khẩu" name="password" type="password" value="">
            <div class="form-error">
              <?php echo form_error('password'); ?>
            </div>
          </div>
          <div class="form-error">
            <?php echo form_error('login'); ?>
          </div>
          <button class="button login__submit" type="submit">
            <span class="button__text">Đăng nhập</span>
            <i class='button__icon bx bxs-chevron-right'></i>
            <svg class="button__icon glyph stroked chevron right">
              <use xlink:href="#stroked-chevron-right" />
            </svg>
          </button>
        </form>
        <div class="social-login">
          <h3>KAYG Store</h3>
        </div>
      </div>
      <div class="screen__background">
        <span class="screen__background__shape screen__background__shape4"></span>
        <span class="screen__background__shape screen__background__shape3"></span>
        <span class="screen__background__shape screen__background__shape2"></span>
        <span class="screen__background__shape screen__background__shape1"></span>
      </div>
    </div>
  </div>
  <?php $this->load->view('admin/footer.php'); ?>
</body>

</html>