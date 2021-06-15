<div class="modal fade pop-model-content" id="<?= $id ?>" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">

        <h5 class="modal-title" id="exampleModalLabel">
          <img src="/img/popup/icn-pocket.jpg" class="icn" /><?= $title ?>
        </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <img src="/img/popup/btn-popup-close-off.png" class="img-fluid" />
        </button>

        <div class="popup-content py-4 w-80 mx-auto">
          <div class="pop-img text-center">
            <img src="<?= $img ?>" class="img-text" />
          </div>
          <div class="popup-text mt-4">
            <?= $text ?>
          </div>
          <br>
        </div>
      </div>
    </div>
  </div>
</div>


<style>
.pop-model-content .modal-title {
  color: #000;
  background: url(/img/popup/title-bg.png) 0 0 no-repeat;
  background-size: 100% 100%;
  font-size: 2.5vw;
  font-family: "tenbyfive";
  display: table;
  padding: 1.5vw 2vw 0.5vw 2vw;
  margin: -4% 0 0 -5%;

}

.pop-model-content .modal-title .icn {
  width: 15%;
  margin-right: 1vw;
}

.pop-model-content .modal-content {
  background: url(/img/popup/bg.png) 0 0 no-repeat;
  background-size: 100% 100%;
  border: 0;
  min-height: 20vh;
  width: 100vh;
  margin: auto
}

.pop-model-content .popup-text {
  font-size: 1.5vw;
  text-align: center;
  padding: 0 2vw;
  font-weight: bold;
  margin-bottom: 2vh;
}

.pop-model-content .close {
  position: absolute;
  right: 0;
  top: 0;
  width: 3vw;
  height: 3vw;
  opacity: 1;
}

.pop-model-content .popup-content .img-text {
  width: 70%;
}
</style>