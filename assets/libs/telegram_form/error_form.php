<?php 
$description = "Marketing Concept";
$keywords = "Marketing Concept";
$page = 'form';
$title = "Marketing Concept";
include "../../../elements/header.php"; 
?>
<style>
  .form-card {
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px;
  }
  .form-card .btn-default {
    margin-top: 30px;
    background: #01D957;
    width: 300px;
    height: 50px;
    border-radius: 30px;
    color: white;
    font-weight: 500;
  }
  h3 {
    text-align: center;
  }
</style>

<div class="form-card col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
  <h3>Мы получили вашу заявку</h3>
  <a href="/" class="btn-default">Вернуться на главную</a>
</div>

<?php include "../../../elements/footer.php"; ?>