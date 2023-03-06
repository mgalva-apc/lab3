<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>[MilkyPage]</title>
  <link rel="icon" type="image/x-icon" href="../media/berryfavi.ico">
  <link href="../css/newsspecific-style.css" rel="stylesheet">
</head>
<body>
    <div id="backtonarnia">
        <a href="../news">
            <img src="../media/raidenpoint.png">
            <p>Click here to go back to the <span>news</span> page.</p>
        </a>
    </div>
    <div id="picfornews">
        <img src="../media/newsflash.png">
    </div>
    <div id="containstuff">
        <h2><?= esc($news['title']) ?></h2>
        <p><?= esc($news['body']) ?></p>
    </div>