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
            <p>Click here to go back to the <span>resources</span> page.</p>
        </a>
    </div>
    <div id="containingstuff">
        <h2><?= esc($title) ?></h2>

        <?php if (! empty($news) && is_array($news)): ?>

            <?php foreach ($news as $news_item): ?>
                <div id="newstuff">
                    <h3><?= esc($news_item['title']) ?></h3>

                    <div class="main">
                        <?= esc($news_item['body']) ?>
                    </div>
                    <p><a href="news/<?= esc($news_item['slug'], 'url') ?>">View article</a></p>
                </div>

            <?php endforeach ?>

        <?php else: ?>

            <h3>No News</h3>

            <p>Unable to find any news for you.</p>

        <?php endif ?>
    </div>
    <div id="wannamake">
        <h3>Wanna see your own article here? Click the link below!</h3>
        <a href="news/create">Click Here</a>
    </div>