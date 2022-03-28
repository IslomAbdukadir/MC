<?php include "../../../elements/header.php"; ?>

<style>
  body {
    height: 100vh;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
  }

  footer {
    width: 100%;
  }

  main {
    flex-grow: 1;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    margin: 0;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    padding: 0;
  }

  main h1 {
    font-size: 36px;
    font-weight: bold;
    text-align: center;
    margin-bottom: 20px;
    color: #1c1c1c;
  }

  main a {
    text-align: center;
    font-size: 18px;
    font-weight: bold;
    color: #ba9e60;
    -webkit-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s;
  }

  main a:hover {
    opacity: 0.7;
  }
</style>

<main>
  <h1>Сервер перегружен, попробуйте отправить повторно</h1>
  <a href="/">Вернуться на главную</a>
</main>

<?php include "../../../elements/footer.php"; ?>