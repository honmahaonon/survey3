<?php
var_dump($_POST);
?>

<!DOCTYPE html>
<html>
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-T3P325HL3Z"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-T3P325HL3Z');
</script>
  <meta charset="UTF8">
  <meta name="viewport" context="width=device-width">
  <title>調査用サイト</title>
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

   <!-- Optional theme -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/style4.css">
</head>
<body>
  <div class="content">
    <h1>Q1.「３つの電球のスイッチはどれ？」</h1>
    <br><h2>※全ての調査終了後、最終ページにも正解を添付しておりますので、こちらのページでは答えを見ずになるべくご自身でお考え下さい。</h2> </br>
    <p>あなたのいる部屋”A”には、3つのスイッチが置かれています。</p><br>
    <p>部屋”A”のスイッチは、部屋”B”に置かれた電球にそれぞれつながっています。</p><br>
    <p>ただし、どのスイッチがどの電球につながっているかはわかりません。</p><br>
    <p>いったん部屋”A”を出ると、部屋”B”に行くことはできますが、もう一度部屋”A”に戻ってくることはできません。</p><br>
    <p>さて、部屋”A”の3つのスイッチが、それぞれどの電球につながっているのか知りたい場合、どうすればよいでしょう？</p><br>
  </div>
 <div class="form-group">
  <form action="task1-333.php" method="post">
    <label for="message">Q.どうすればスイッチがわかる？(回答欄)<span class="required">※必須</span></label>
    <input type="textarea" name="confirm" rows="8" value="">
    <p><a href="Answer.html">答えはこちら</a></p> 
    <input type="submit" value="送信する">
  </form>
 </div>
 <p><a href="task2-333.html" class="btn">次へ</a></p>
</body>
</html>
