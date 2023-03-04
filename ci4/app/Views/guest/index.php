<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>[MilkyPage]</title>
  <link rel="icon" type="image/x-icon" href="media/berryfavi.ico">
  <link href="css/newsformscreatestuff.css" rel="stylesheet">
</head>
<body>
    <div id="backtonarnia">
        <a href="extras">
            <img src="media/raidenpoint.png">
            <p>Click here to go back to the <span>extras</span> page.</p>
        </a>
    </div>
    <div id="containingstuff">

        <h2><?= esc($title) ?></h2>

        <?php if (! empty($guest) && is_array($guest)): ?>
            <?php foreach ($guest as $guest_item): ?>

                <div class="mainforms">
                    <h3><?= esc($guest_item['name']) ?></h3>
                    <p><?= esc($guest_item['email']) ?></p>
                    <p><?= esc($guest_item['comments']) ?></p>
                </div>
            <?php endforeach?>

        <?php else: ?>
            <h3>No guests</h3>
            <p>Unable to find any guests for you.</p>
        <?php endif?>
    </div>
