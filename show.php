<?php
$go_plan = $_POST["which"];
$now_where = $_POST["where"];
$now_what = $_POST["what"];
?>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <title>Shiranai-furi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="responsive.css">
</head>
<body>
  <!--          header          -->
  <header>
    <div class="header-logo">
      <a href="/Shiranaifuri">知らないふり <span>メーカー</span></a>
    </div>
  </header>
  <!--          main          -->
  <main>
    <div class="line-bc"><!--①LINE会話全体を囲う-->

      <!--②左コメント始-->
      <div class="balloon6">
        <div class="faceicon">
          ここにアイコン画像<img~>
        </div>
        <div class="chatting">
          <div class="says">
            <p>
              もう始まってるよ！<br>
              いまどこ？(＞▽＜)(＞▽＜)
            </p>
          </div>
        </div>
      </div>
      <!--②/左コメント終-->

      <!--③右コメント始-->
      <div class="mycomment">
        <p>
          ごめん、<?php echo $go_plan ?> には行けません。<br>
          いま、<?php echo $now_where ?>にいます。<br>
          南北に縦断する<?php echo $now_what ?>を 私は作っています。<br>
          本当は　あの頃が恋しいけれど...<br>
          でも！ 今は もう少しだけ知らないふりをします。<br>
          私の<?php echo $now_what ?>も、きっといつか　誰かの青春を載せるから！
        </p>
      </div>
      <!--/③右コメント終-->

    </div><!--/①LINE会話終了-->

  </main>
  <!--          footer          -->
  <footer>
    <div class="footer-upward"></div>
    <div class="footer-lower"></div>
  </footer>
</body>
</html>
