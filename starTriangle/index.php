<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, initial-scale=1"/>
    <title>Mehmet ÖZEN</title>
    <link rel="stylesheet" href="css/style.css" />
    <style>
      @font-face {
        font-family: "Jont";
        src: url("./Jost--/Jost-Black.woff");
        font-weight: 900;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: "Jont";
        src: url("./Jost--/Jost-Bold.woff");
        font-weight: 700;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: "Jont";
        src: url("./Jost--/Jost-SemiBold.woff");
        font-weight: 600;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: "Jont";
        src: url("./Jost--/Jost-Regular.woff");
        font-weight: 400;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: "Jont";
        src: url("./Jost--/Jost-Medium.woff");
        font-weight: 200;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: "Jont";
        src: url("./Jost--/Jost-Light.woff");
        font-weight: 100;
        font-style: normal;
        font-display: swap;
      }

      body {
        font-family: "Jont" !important;
      }
    </style>
  </head>
  <body>
    <section class="homework-array">
        <div class="homework-header"><p class="header-property">Star Triangle</p></div>
        <div class="star-area">
            <div class="star"><?php
                if(isset($_POST['send'])){
                  $changeStar =$_POST['starNumber'];
                }else{
                  $changeStar=15;
                }
                function star($star=15){
                  for($i=0;$i<$star;$i++){
                    $a=0;
                    while($a<=$i){
                      $a++;
                      echo "0";
                    }
                    ?><br><?php
                  }
                }
                star($changeStar);
            ?></div>
            <div >
                <form class="take-star" method="post">
                    <input  name="starNumber" type="text" placeholder="Kaç Yıldız Olmasını İstersiniz?">
                    <button name="send"       type="submit" class="btn-property">Yıldızlara Bak</button>
                </form>
            </div>
        </div>
    </section>
  </body>
</html>
