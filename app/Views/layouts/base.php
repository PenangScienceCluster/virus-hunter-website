<!DOCTYPE html>
<html lang="en-MY">

<head>
  <title></title>
  <!-- prefix -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= lang('App.share_title') ?>">
  <meta property="og:description" content="<?= lang('App.share_description') ?>">
  <meta property="og:image" content="<?= lang('App.share_image') ?>">
  <meta property="og:url" content="">

  <!-- Twitter -->
  <meta property="twitter:card" content="<?= lang('App.share_title') ?>">
  <meta property="twitter:url" content="">
  <meta property="twitter:title" content="<?= lang('App.share_title') ?>">
  <meta property="twitter:description" content="<?= lang('App.share_description') ?>">
  <meta property="twitter:image" content="<?= lang('App.share_image') ?>">

  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="<?= lang('App.share_title') ?>">
  <meta itemprop="description" content="<?= lang('App.share_description') ?>">
  <meta itemprop="image" content="<?= lang('App.share_image') ?>">

  <!-- prefix -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

  <link href="/css/fonts/index.css" rel="stylesheet" />
  <link href="/css/base.css" rel="stylesheet" />
  <link href="/css/navigation.css" rel="stylesheet" />

  <?php if (! empty($css) && is_array($css)) : ?>
  <?php foreach ($css as $v): ?>
  <link rel="stylesheet" href="<?= $v ?>" media="screen" />
  <?php endforeach; ?>
  <?php endif ?>
</head>

<body>

  <?= view('pages/bestview') ?>
  <div class="container-fluid wrapper position-relative p-0">
    <?= view('layouts/navigation') ?>
    <?= $this->renderSection('content') ?>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
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