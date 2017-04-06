<?php include('config/header.php');?>
<div class="col-lg-12">
    <h1 class="page-header">Advance Form Elements</h1>
    <?php
      require_once "core/Petugas.php";
      $pts = new Petugas();
    ?>
    <form method="post" action="<?php $pts->actionForm() ?>">
      <input type="text" name="nama"/>
      <input type="submit" name="submit" value="send"/>
    </form>
</div>
<?php include('config/footer.php');?>
