<?php
class Petugas
{
  public function actionForm(){
      echo "hello ".$_POST['nama'];exit;
  }

  public function actionList(){
      return "hello list";
  }
}
?>
