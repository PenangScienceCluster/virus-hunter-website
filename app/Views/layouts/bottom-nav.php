<div class="bottom-nav w-100 d-flex flex-row">
  <div class="mr-auto w-35 back text-uppercase tenbyfive text-right pt-3 btm-nav text-white"
    data-href="<?= urlWithLocale($backLink) ?>">

    <?= lang('App.back') ?> <span><?= $backLinkName ?></span>

  </div>
  <div class="ml-auto w-35 next text-uppercase tenbyfive pt-3 text-white btm-nav"
    data-href="<?= urlWithLocale($nextLink) ?>">

    <?php
      if ($nextLinkName == 'done') {
          echo $nextLinkName;
      } else {
          echo lang('App.next').' <span>'.$nextLinkName.'</span>';
      }
      ?>

  </div>
</div>