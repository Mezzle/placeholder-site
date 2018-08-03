<?php
function getTitle()
{
    switch ($_SERVER['HTTP_HOST']) {
        case 'mez.im':
        case 'www.mez.im':
          return 'mez.im';
        case 'www.sourceguru.net':
        case 'sourceguru.net':
          return 'Source Guru';
        case 'candidcoding.com':
        case 'www.candidcoding.com':
          return 'Candid Coding';
    }

    return $_SERVER['HTTP_HOST'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= getTitle(); ?> | I dun goofed</title>
  <link rel="stylesheet" href="styles/normalize.css">
  <link href="https://fonts.googleapis.com/css?family=Walter+Turncoat" rel="stylesheet">
  <link rel="stylesheet" href="styles/main.css">
</head>
<body>
<div class="container">
  <div class="left"><img src="images/mezzle_character.svg"></div>
  <div class="right">
    <div class="speechbubble">
      <h1>Hi there!</h1>
      <p>I managed to break all my websites, so that's why you're seeing this message. It'll be back, eventually.</p>
    </div>
  </div>
</div>
</body>
</html>