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
  <link rel="stylesheet" href="CSS/style2.css">
</head>
<body>
 <h1>〇性別と年齢をご選択ください。</h1>
  <form method="POST" action="info3.php">
   <div class="element_wrap">
    <p><label for="sex">あなたの性別は？</label></p>
    <select id="sex" name="sex" class="form">
      <option value="">選択してください</option>
      <option value="">男性</option>
      <option value="">女性</option>
    </select>
   </div>
   <div class="element_wrap"> 
    <p><label for="age">あなたの年齢は？</label></p>
    <select id="age" name="age" class="form">
      <option value="">選択してください</option>
      <option value="">10代</option>
      <option value="">20代</option>
      <option value="">30代</option>
      <option value="">40代</option>
      <option value="">50代</option>
      <option value="">60代</option>
      <option value="">70代</option>
    </select>
    </div>
   <p><a href="explanation.html"><input type="submit" value="送信"></a></p>
  </form>
  </div>
</body>
</html>
