<?php require_once 'includes/initialize.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <title>Music Collection Add</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
<div class="container px-4">
    <h1 class="title mt-4">Add evenement</h1>
    <?php if (!empty($errors)): ?>
        <section class="content">
            <ul class="notification is-danger">
                <?php foreach ($errors as $error): ?>
                    <li><?= $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </section>
    <?php endif; ?>

    <?php if (isset($success)) { ?>
        <p class="notification is-primary"><?= $success; ?></p>
    <?php } ?>

    <?php if (isset($evenement)): ?>
        <section class="columns">
            <form class="column is-6" action="" method="post" enctype="multipart/form-data">
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label" for="name">Evenement</label>
                    </div>
                    <div class="field-body">
                        <input class="input" id="name" type="text" name="name" value="<?= $evenement->name; ?>"/>
                    </div>
                </div>
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label" for="date">Datum</label>
                    </div>
                    <div class="field-body">
                        <input class="input" id="date" type="date" name="date" value="<?= $evenement->date; ?>"/>
                    </div>
                </div>
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label" for="description">description</label>
                    </div>
                    <div class="field-body">
                        <input class="input" id="description" type="text" name="description" value="<?= $evenement->description; ?>"/>
                    </div>
                </div>
             
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label" for="image">Image</label>
                    </div>
                    <div class="field-body">
                        <input class="input" id="image" type="file" name="image"/>
                    </div>
                </div>
                <div class="field is-horizontal">
                    <div class="field-label is-normal"></div>
                    <div class="field-body">
                        <button class="button is-primary is-fullwidth" type="submit" name="submit">Save</button>
                    </div>
                </div>
            </form>
        </section>
    <?php endif; ?>
    <a class="button mt-4" href="index.php">&laquo; Go back to the list</a>
</div>
</body>
</html>
