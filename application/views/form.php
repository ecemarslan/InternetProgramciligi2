
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

  <title>Signin Template for Bootstrap</title>
  <?php $this->load->view('includes/header') ?>
</head>

<body class="text-center">
  <form class="form-signin border" style="background-color:white;" method="POST" action="<?php echo base_url("formApp/insert") ?>">
    <h1 class="h3 mb-3 font-weight-normal">Formu Doldurun</h1>
    <div class="row">
      <div class="col-12 mb-3">
        <input type="text" id="" class="form-control" name="name" placeholder="İsminizi Giriniz."  autofocus>
      </div>
      <div class="col-12 mb-3">
        <input type="email" id="inputEmail" class="form-control" name="email" placeholder="E-mail adresinizi giriniz." autofocus>
      </div>
      <div class="col-12 mb-3">
        <select class="form-select" aria-label="Default select example" name="service">
          <option>Hizmetler</option>
          <option>Müşteri İlişkileri</option>
          <option>Yazılım Geliştirme</option>
          <option>Proje Yürütücüsü</option>
          <option>Muhasebe</option>
        </select>
      </div>
      <div class="col-12 mb-3">
        <select class="form-select" aria-label="Default select example" name="budget">
          <option>Maaş Seçiniz</option>
          <option value="5500">5500 TL</option>
          <option value="6000">6000 TL</option>
          <option value="4500">4500 TL</option>
        </select>
      </div>

      <div class="col-12 mb-3">
        <textarea class="form-control" name="message" placeholder="Mesajınızı Giriniz" ></textarea>
      </div>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Gönder</button>
  </form>
</body>
</html>
