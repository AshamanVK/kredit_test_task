<!DOCTYPE html>
<html>
<head>

  <title>Список обращений</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Compiled custom scss file -->
  <link href="stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />

  <!-- Kube CSS -->
  <link rel="stylesheet" href="dist/css/kube.css">

</head>
<body>

  <div class="row align-center">
    <div class="col col-9">
      <h2>Поддержка</h2>

      <button data-component="modal" data-target="#add_call_modal" class="add_call__button">Добавить звонок</button>
      <div id="add_call_modal" class="modal-box hide">
        <div class="modal">
          <span class="close"></span>
          <div class="modal-header">Добавить звонок</div>
          <div class="modal-body">
            <form method="post" action="" class="form" id="add_call">

              <div class="form-item">
                <label>Тема <span class="req">*</span></label>
                <input id="theme" type="text" name="theme" required>
              </div>

              <div class="form-item">
                <label>Текст обращения <span class="req">*</span></label>
                <textarea id="message" rows="4" name="message" required></textarea>
              </div>

              <div class="form-item">
                <button>Добавить</button>
              </div>

            </form>
          </div>
        </div>
      </div>

      <div class="row table_header">
        <div class="col col-3"><b>Создан</b></div>
        <div class="col col-3"><b>Тема</b></div>
        <div class="col col-3"><b>Сообщение</b></div>
      </div>

      <div id="tickets">
        <?php include "includes/get_data.php"; ?>
      </div>


    </div>
  </div>

  <!-- Kube JS + jQuery are used for some functionality, but are not required for the basic setup -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="dist/js/kube.js"></script>

  <script src="js/jquery.validate.min.js"></script>

  <script src="js/script.js"></script>

</body>
</html>