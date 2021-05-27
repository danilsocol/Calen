<!DOCTYPE html>
<html lang="ru">
    <head >
        <meta charset="utf-8">
        <link rel="stylesheet" href="Style/styleMain.css">
        <link rel="stylesheet" href="Style/styleCal.css">
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        />
        <link
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"/>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/i18n/jquery-ui-i18n.min.js"></script>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Главная страница</title>
    </head>

    <body>
        
       <?php require_once "Block/header.php" ?>

        <div id="wrapper">

            <div id="column">

                <div id="person">
                    Персона
                </div>

                <form  action="script.js" method="post" id="find">

                     <button id="findData" class="btn btn-success"  type ="submit" >Найти</button>

                   <input class="form-control" id="datepicker" placeholder="Выберете дату"><br>
                    <script >
                        $(function(){
                            $.datepicker.setDefaults($.datepicker.regional["ru"]);

                            $('#datepicker').datepicker();
                        });
                    </script>
                </form>

            </div>

            <div id="content">
                <form id="headCal">

                      

                </form>
                <form class="container">

                            <div class ="calendar">
                                <div class="calendar-header">

                                    <span class="month-picker" id="month-picker">February</span>

                                        <div class="year-picker">
                                        <span class="year-change" id="prev-year">
                                            <pre><</pre>
                                        </span>
                                        <span id="year">2021</span>
                                        <span class="year-change" id="next-year">
                                            <pre>></pre>
                                        </span>
                                    </div>
                                </div>
                                <div class="calendar-body">
                                    <div class="calendar-week-day">
                                        <div>Sun</div>
                                        <div>Mon</div>
                                        <div>Tue</div>
                                        <div>Wed</div>
                                        <div>Thu</div>
                                        <div>Fri</div>
                                        <div>Sat</div>
                                    </div>
                                    <div class="calendar-days"></div>
                                </div>
                                <div class="calendar-footer">
                                    <div class="toggle">
                                        <span>Dark Mode</span>
                                        <div class="dark-mode-switch">
                                            <div class="dark-mode-switch-ident"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="month-list"></div>
                            </div>

                            <script src="script.js"></script>

                            <div class="day">
                                <div id="oneC"> 
                                    <div id="everydaywork">111</div>
                                    <div id="datwork">2222</div>
                                </div>
                                    <div id="twoC">
                               <div id="detail">3333</div>
                                </div>
                            </div>
            </form>
            </div >

                <div id = "imgs" >
                    <img id="imageOne" src="\Image\1.jpg">
                </div>

                <div id = "imgs" >
                   <img id="imageTwo"src="\Image\2.jpg"   >             
                </div>

                 <div id = "imgs" >
                   <img id="imageThree" src="\Image\3.jpg"   >             
                </div>

                 <div id = "imgs">
                   <img id="imageFour" src="\Image\4.jpg"  >             
                </div>

        </div>

         <?php require_once "Block/footer.php" ?>

    </body>
</html>