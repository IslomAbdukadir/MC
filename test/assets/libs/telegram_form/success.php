<?php 
$description = "Chotqol санаторий";
$keywords = "Chotqol санаторий";
$title = "Chotqol санаторий";
$page = 'form';
include "../../../elements/header.php"; 
?>
<style>
  .navigation {
    background: #151515;
  }
  .form-card {
    height: 80vh;
    background: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-top: 90px;
  }
  .btn-default {
    margin-top: 30px;
  }
  h3 {
    text-align: center;
  }
  a {
    color: white;
  }
</style>



<div class="form-card col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
  <h3>Мы получили вашу заявку, мы с вами свяжемся в течение 12 часов</h3>
  <a href="/" class="btn-default">Вернуться на главную</a>
</div>

<?php 
include "../../../elements/footer.php"; 
?>