<!DOCTYPE html>
<html lang = "ru">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Форма регистрации</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="Style/styleReg.css">
</head>
<body>
   <?php require_once "Block/header.php" ?>
        <div class="col">
            <div id=black>
                 <form  action="checkReg.php" method="post">

                  <h1 id="fg">Форма регистрации</h1>

                  <input type="text" class="form-control" name="login" value="login" id="login" placeholder="Введите ваш логин"><br>

                   <input type="text" class="form-control" name="name" value="name" id="name" placeholder="Введите ваше имя"><br>

                   <input type="password" class="form-control" name="pass" value="pass" id="pass" placeholder="Введите ваш пароль"><br>

                   <button id="butNext" class="btn btn-success"  type ="submit" >Регистрация</button>



                   <a id="ha" href="aut.php">Авторизация</a>
               </form>  

             </div>
         </div>
          <?php require_once "Block/footer.php" ?>
</body>
</html>