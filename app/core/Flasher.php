<?php

class Flasher
{
  public static function setFlash($tipe, $pesan)
  {
    $_SESSION['flash'] = [
      "tipe" => $tipe,
      "pesan" => $pesan
    ];
  }

  public static function flash()
  {
    echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
    ' . $_SESSION['flash']['pesan'] . '
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }
}
