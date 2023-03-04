<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>[MilkyPage]</title>
  <link rel="icon" type="image/x-icon" href="../../media/berryfavi.ico">
  <link href="../css/newsformscreatestuff.css" rel="stylesheet">
</head>
<body>
    <div id="backtonarnia">
        <a href="../news">
            <img src="../media/raidenpoint.png">
            <p>Click here to go back to the <span>news</span> page.</p>
        </a>
    </div>
    <div id="formstuff">
        <h2><?= esc($title) ?></h2>

        <?= session()->getFlashdata('error') ?>
        <?= validation_list_errors() ?>

        <form action="create" method="post">
            <?= csrf_field() ?>
            <div id="labels">
                <label for="title">Title</label>
                    <input type="input" name="title" value="<?= set_value('title') ?>">
                    <br>
            </div>
            <div id="labels">
                <label for="body">Text</label>
                <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
                <br>
            </div>
            <div id="submitbutton">
                <input type="submit" name="submit" value="Create news item">
            </div>
        </form>
    </div>