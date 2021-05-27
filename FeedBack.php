<!DOCTYPE html>
<html lang = "ru">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Обратная связь</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="Style/styleMain.css">
   
   <link rel="stylesheet" href="Style/styleFeedBack.css">
</head>
<body>
         <?php require_once "Block/header.php" ?>
         
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        </script>
        <script>
         $(document).ready (function () {
          $("#done").click (function () {
           $("#messageShow").hide ();
           var name = $("#name").val ();
           var email = $("#email").val ();
           var subject = $("#subject").val ();
           var message = $("#message").val ();
           var fail = "";
           if (name.length < 2) { 
           fail = "Имя не меньше 2 символов";
           } else if (email.split ('@').length - 1 == 0 || email.split ('.').length - 1 == 0) {
            fail = "Вы ввели неоректный email";
            } else if (subject.length < 3) {
             fail = "Тема сообщения меньше 3 символов";
                } else if (message.length < 20) {
              fail = "Сообщение не менее 20 символов";
              }
           if (fail != "") {
            $('#messageShow').html (fail + "<div class='clear'><br></div>");
            $('#messageShow').show ();
            return false;
           }
           $.ajax({
            url: '/Back/fbAjax.php',
            type: 'POST',
            cache: false,
            data: {'name':name,'email':email,'subject':subject,'message':message},
            dataType: 'html',
            success: function(data){
            $('#messageShow').html (data + "<div class='clear'><br></div>");
            $('#messageShow').show ();            }
           });
          });
         });
        </script>
        <div id="fbBody">
          <div id="block">
              <input type="text" placeholder="Имя" id="name" name="name"><br/>
              <input type="text" placeholder="email" id="email" name="email"><br/>
              <input type="text" placeholder="Тема сообщения" id="subject" name="subject"><br/>
              <textarea name="message" id="message"></textarea><br/>
              <input type="button" id="done" value="Отправить" name="done"><br/>
          </div>
          <div id="messageShow"> </div>
        </div>
          <?php require_once "Block/footer.php" ?>
</body>
</html>