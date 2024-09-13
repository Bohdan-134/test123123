<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
      <title>Amphora joke</title>
      <link rel="stylesheet" href="./static/dist/bundle.css">


      <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

      <script>
         var filePath = './static/'
      </script>
   </head>
   <body>

      <div class="wrapper">
         <div id="roulette"></div>

         <div class="amphora">
            <div class="amphora__title">РАЗБЕЙТЕ АМФОРУ И ПОЛУЧИТЕ СКИДКУ 100%</div>
            <div class="amphora__wrapper">
               <div class="amphora__item" id="amphora1">
                  <img loading="lazy" src="./static/images/amphora1.png" alt="" class="amphora__item-img amphora__item-animation">
                  <div class="amphora__item-crash amphora__item-animation">
                     <img loading="lazy" src="./static/images/amphora1-1.png" alt="" class="amphora__item-piece amphora__item-piece-1">
                     <img loading="lazy" src="./static/images/amphora1-2.png" alt="" class="amphora__item-piece amphora__item-piece-2">
                     <img loading="lazy" src="./static/images/amphora1-3.png" alt="" class="amphora__item-piece amphora__item-piece-3">
                     <img loading="lazy" src="./static/images/amphora1-4.png" alt="" class="amphora__item-piece amphora__item-piece-4">
                  </div>
                  <div class="amphora__item-discount"></div>
               </div>
               <div class="amphora__item" id="amphora2">
                  <img loading="lazy" src="./static/images/amphora2.png" alt="" class="amphora__item-img amphora__item-animation"> 
                  <div class="amphora__item-crash amphora__item-animation">
                     <img loading="lazy" src="./static/images/amphora2-1.png" alt="" class="amphora__item-piece amphora__item-piece-1">
                     <img loading="lazy" src="./static/images/amphora2-2.png" alt="" class="amphora__item-piece amphora__item-piece-2">
                     <img loading="lazy" src="./static/images/amphora2-3.png" alt="" class="amphora__item-piece amphora__item-piece-3">
                     <img loading="lazy" src="./static/images/amphora2-4.png" alt="" class="amphora__item-piece amphora__item-piece-4">
                  </div>
                  <div class="amphora__item-discount"></div>
               </div>
               <div class="amphora__item" id="amphora3">
                  <img loading="lazy" src="./static/images/amphora3.png" alt="" class="amphora__item-img amphora__item-animation"> 
                  <div class="amphora__item-crash amphora__item-animation">
                     <img loading="lazy" src="./static/images/amphora3-1.png" alt="" class="amphora__item-piece amphora__item-piece-1">
                     <img loading="lazy" src="./static/images/amphora3-3.png" alt="" class="amphora__item-piece amphora__item-piece-2">
                     <img loading="lazy" src="./static/images/amphora3-2.png" alt="" class="amphora__item-piece amphora__item-piece-3">
                     <img loading="lazy" src="./static/images/amphora3-4.png" alt="" class="amphora__item-piece amphora__item-piece-4">
                  </div>
                  <div class="amphora__item-discount"></div>
               </div>
            </div>
            <div class="amphora__subtitle">Нажми еще раз, скидка совсем рядом!</div>
         </div>

         <div class="order_block">
            <div><img loading="lazy" src="./static/order_tube3.png" style="width:100%;max-width:250px;"></div>
            <h3>Все что Вам нужно – это ввести имя и номер телефона.<br>Поторопитесь! У Вас осталось времени:<br><span class="time_remains" id="min">10</span> : <span class="time_remains" id="sec">00</span> </h3>
            <form id="order_form"><input name="order[fio]" type="text" class="input-roulette" id="input-name" placeholder="Введите ваше имя" maxlength="50" autocomplete="name"> <input name="order[phone]" type="tel" class="input-roulette" id="input-phone" placeholder="Введите номер" autocomplete="tel" required> <input type="submit" class="submit-roulette" onclick="$(this).closest('form').submit();return false;" value="ПОЛУЧИТЬ БЕСПЛАТНО"> <input type="hidden" name="order[specifications]" value="" /> <input type="hidden" name="order[discount]" value=""> </form>
         </div>

         <div class="spin-result-wrapper">
            <div class="pop-up-window">
               <div class="close-popup"></div> <span class=pop-up-heading style="font-size: 40px;margin-bottom:5px;display:block;color:black;">Поздравляем!</span>
               <p class="ruletka-p pop-up-text" style="text-indent:0;line-height:1.4;font-size: 22px!important; font-weight:400;text-align:center!important;margin:0px 0px 20px!important;font-family: open sans;">Вы выиграли скидку
                  <font style="color: red;">100%</font> и можете забрать «Талисман Цезаря» абсолютно <span style="color:red;">бесплатно!</span> </p> <a href="#roulette" class=pop-up-button style="margin-top:20px;color:white;">OK</a> </div>
         </div>

      </div>
            
      <script src="./static/dist/bundle.js"></script>
   </body>
</html>