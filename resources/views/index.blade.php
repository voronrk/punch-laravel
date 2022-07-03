<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/resources/css/bulma.min.css">
    <link rel="stylesheet" href="/resources/css/style.css">

    <script type="module" src="/resources/js/script.js" defer></script>
    <title>Каталог штанц-форм</title>
</head>
<body>
    <div class="container">
      <nav class="navbar has-background-light">
        <div class="navbar-start">
          <div class="navbar-item">
            <a href= {{ route('create') }} class="button is-primary has-text-weight-bold <?php //echo ($_SESSION['auth'] ? '' : 'is-hidden');?>">Создать</a>
          </div>
        </div>
        <div class="navbar-end">
          <div class="navbar-item">
          <form method="POST" action="logout.php" class=<?php //echo ($_SESSION['auth'] ? '' : 'is-hidden');?>>
              <div class="field has-addons">
                  <div class="has-text-weight-bold mr-4"><?php //echo ($_SESSION['username']);?></div>
                  <button class="button is-primary has-text-weight-bold" type="submit">Выйти</button>
              </div>
          </form>
          <form method="POST" action="login.php" class=<?php //echo ($_SESSION['auth'] ? 'is-hidden' : '');?>>
            <div class="field has-addons">
              <p class="control">
                <input class="input" type="text" placeholder="Логин" name="login">
              </p>
              <p class="control">
                <input class="input" type="password" placeholder="Пароль" name="pass">
              </p>
              <p class="control">
                <button class="button is-primary has-text-weight-bold" type="submit" id="button-login">Войти</button>
              </p>
            </div>
          </form>

          </div>
        </div>
      </nav>
    <section class="section">
        <div class="columns">
            <x-filter/>
            <div class="column filter" id="cards-wrapper"></div>
        </div>
    </div>
    </section>

    <div class="modal" id="modal">
        <div class="modal-background"></div>
        <div class="modal-content">
            <div class="card">
              <div class="card-content">
                  <img class="modal-image" id="modal-img">
                  <div class="modal-arrow arrow-left"></div>
                  <div class="modal-arrow arrow-right"></div>
                </div>
            </div>
        </div>
        <button class="modal-close is-large" aria-label="close" id="modal-close"></button>
    </div>
</body>
</html>