<?php
  $stars = isset($_GET['s']) ? $_GET['s'] : 0;
  $sharedImg = base_url(lang('App.share_image', [$stars]));
?>
<!DOCTYPE html>
<html lang="en-MY">

<head>
  <title>Virus Hunter</title>
  <!-- prefix -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, shrink-to-fit=no" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:title"
    content="<?= lang('App.share_title') ?>">
  <meta property="og:description"
    content="<?= lang('App.share_description') ?>">
  <meta property="og:image" content="<?= $sharedImg ?>">
  <meta property="og:url" content="">

  <!-- Twitter -->
  <meta property="twitter:card"
    content="<?= lang('App.share_title') ?>">
  <meta property="twitter:url" content="">
  <meta property="twitter:title"
    content="<?= lang('App.share_title') ?>">
  <meta property="twitter:description"
    content="<?= lang('App.share_description') ?>">
  <meta property="twitter:image" content="<?= $sharedImg ?>">

  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name"
    content="<?= lang('App.share_title') ?>">
  <meta itemprop="description"
    content="<?= lang('App.share_description') ?>">
  <meta itemprop="image" content="<?= $sharedImg ?>">

  <!-- prefix -->

  <link href="https://fonts.googleapis.com/css2?family=Signika:wght@500&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" />



  <link href="/css/fonts/index.css" rel="stylesheet" />
  <link href="/css/base.css" rel="stylesheet" />


  <?php if (! empty($css) && is_array($css)) : ?>
  <?php foreach ($css as $v): ?>
  <link rel="stylesheet" href="<?= $v ?>" media="screen" />
  <?php endforeach; ?>
  <?php endif ?>
</head>

<body>



  <div class="container-fluid wrapper position-relative p-0">

    <?= $this->renderSection('content') ?>
  </div>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous">
  </script>
  <script src="/js/base.js"></script>

  <?php if (! empty($js) && is_array($js)) : ?>
  <?php foreach ($js as $v): ?>
  <script src="<?= $v ?>"></script>
  <?php endforeach; ?>
  <?php endif ?>



</body>

</html>