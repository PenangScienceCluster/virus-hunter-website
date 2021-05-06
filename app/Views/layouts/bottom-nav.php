<div class="bottom-nav w-100 d-flex flex-row">
  <div class="mr-auto w-35 back text-uppercase tenbyfive text-right pt-3">
    <a href="<?= urlWithLocale($backLink) ?>" class="  text-white">
      <?= lang('App.back') ?> <span><?= $backLinkName ?></span>
    </a>
  </div>
  <div class="ml-auto w-35 next text-uppercase tenbyfive pt-3">
    <a href="<?= urlWithLocale($nextLink) ?>" class="w-100  text-white">
      <?php
      if ($nextLinkName == 'done') {
          echo $nextLinkName;
      } else {
          echo lang('App.next').' <span>'.$nextLinkName.'</span>';
      }
      ?>
    </a>
  </div>
</div>