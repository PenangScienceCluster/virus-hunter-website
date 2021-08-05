<?php

namespace App\Controllers;

class Merge extends BaseController
{
  public function __construct()
  {
    // parent::__construct();
  }

  public function index()
  {
    $frameId = $this->request->getPost('frameId');
    $imageBase64 = $this->request->getPost('image');

    // $your_original_image = base_url('/img/reward/test-selfie.jpg');
    $your_frame_image = base_url('/img/reward/frame_'.$frameId.'.png');

    $image = imagecreatefromstring(base64_decode($imageBase64));
    $frame = imagecreatefromstring(file_get_contents($your_frame_image));

    $frameWidth  = imagesx($frame);
    $frameHeight = imagesy($frame);

    $imageWidth  = imagesx($image);
    $imageHeight = imagesy($image);

    $resizeWidth = $frameWidth;
    $resizeHeight = $frameHeight;
    $dstX = 0;
    $dstY = 0;


    if($frameId == 2) {
      $resizeWidth = 326;
      $resizeHeight = 386;
      $dstX = 439;
      $dstY = 67;
    }

    if($frameId == 3) {
      $resizeWidth = 630;
      $resizeHeight = 460;
      $dstX = 17;
      $dstY = 17;
    }

    $merged_image = imagecreatetruecolor($frameWidth, $frameHeight);

    // DEFINE MAGENTA AS THE TRANSPARENCY COLOR AND FILL THE IMAGE FIRST
    $transparentColor = imagecolorallocate($merged_image, 255, 255, 255);
    imagecolortransparent($merged_image, $transparentColor);
    imagefill($merged_image, 0, 0, $transparentColor);
    imagesavealpha($merged_image, true);

    //resize 
    $ratio_img = $resizeWidth / $resizeHeight; 
    $ratio_original = $imageWidth / $imageHeight; // ratio original

    if ($ratio_original >= $ratio_img) {
      $yo = $imageHeight;
      $xo = ceil(($yo * $resizeWidth) / $resizeHeight);
      $xo_ini = ceil(($imageWidth - $xo) / 2);
      $xy_ini = 0;
    } else {
      $xo = $imageWidth;
      $yo = ceil(($xo * $resizeHeight) / $resizeWidth);
      $xy_ini = ceil(($imageHeight - $yo) / 2);
      $xo_ini = 0;
    }
    imagecopyresized($merged_image, $image, $dstX, $dstY, $xo_ini, $xy_ini, $resizeWidth, $resizeHeight, $xo, $yo);

    // merge with frame
    imagealphablending($frame, false);
    imagecopyresampled($merged_image, $frame, 0, 0, 0, 0, $frameWidth, $frameHeight, $frameWidth, $frameHeight);
    imagealphablending($frame, true);
    imagedestroy($frame); // FREE UP SOME MEMORY

    imagealphablending($merged_image, false);
    imagesavealpha($merged_image, true);

    $filename = time().'_'.rand(1,10).'.png';

    # Save the image to a file
    if (!is_dir( FCPATH . '/uploads/merge/')) {
      mkdir(FCPATH . '/uploads/merge/', 0777, TRUE);
  }
  
    imagepng($merged_image, FCPATH . '/uploads/merge/'.$filename);

    echo json_encode([
      'filename' => $filename,
    ]);
  }


  public function delete()
  {
    $filename = $this->request->getPost('filename');
    unlink(FCPATH . '/uploads/merge/'.$filename);
  }
}
