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
        <a href="../extras">
            <img src="../media/raidenpoint.png">
            <p>Click here to go back to the <span>extras</span> page.</p>
        </a>
    </div>
    <div id="formstuff">
        <h2><?= esc($title) ?></h2>

        <?= session()->getFlashdata('error') ?>
        <?= validation_list_errors() ?>

        <form action="create" method="post">
            <?= csrf_field() ?>
            <div id="labels">
                <label for="title">Outlander Name</label>
                <input type="input" name="name" value="<?= set_value('name') ?>">
                <br>
            </div>

            <div id="labels">
                <label for="email">Outlander Email</label>
                <input type="input" name="email" value="<?= set_value('email') ?>">
                <br>
            </div>

            <div id="labels">
                <label for="comments">Comments</label>
                <textarea name="comments" cols="45" rows="4"><?= set_value('comments') ?></textarea>
                <br>
            </div>
            <div id="submitbutton">
                <input type="submit" name="submit" value="Join the outlander affairs agency">
            </div>
        </form>
    </div>
    <div id="wannamake">
        <h3>Wanna see who else has been here? Click the link below!</h3>
        <a href="../guest">Click Here</a>
    </div>