<!doctype html>
<html lang='en'> 
<head>
  <meta charset='utf-8'/>
  <title><?=$title?></title>
<link rel='stylesheet' href='<?=$stylesheet?>'/>
</head>
<body>
  <div id='wrap-header'>
    <div id='header'>
    <div id='banner'>
      <a href='<?=base_url()?>'>
        </a>
      <p class='site-title'><?=$header?></p>
     </div>
 <?=@$main?>
 <div id='wrap-footer'>
    <div id='footer'>
      <?=$footer?>
      <?=get_debug()?>
    </div>
  </div>
</body>
</html>
