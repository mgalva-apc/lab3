<!DOCTYPE html>
<html>
<body>
    <div id="backtonarnia">
            <a href="/lab3/ci4/public/forms">
                <img src="media/raidenpoint.png">
                <p>Click here to go back to the <span>User Registration</span> page.</p>
            </a>
    </div>

    <h2><?= esc($title) ?></h2>

    <?php if (! empty($guests) && is_array($guests)): ?>

        <?php foreach ($guests as $guests_item): ?>

            <h3><?= esc($guests_item['name']) ?></h3>

            <div class="main">
                <?= esc($news_item['comments']) ?>
            </div>
            
            <?= anchor("guests/" . esc($guest['id'], 'url'), "View this outlander") ?>

        <?php endforeach ?>

    <?php else: ?>

        <h3>No guests</h3>

        <p>Looks like Starfell Beach is kinda empty right now</p>

    <?php endif ?>