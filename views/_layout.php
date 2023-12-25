<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="chat.png" type="image/png">
    <link rel="stylesheet" href="<?= PATH ?>assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title><?= ucfirst($page) ?></title>

</head>
<body>
    <h1><?= ucfirst($page) ?> View</h1>

    <main>
        <?php include_once 'views/' . $page . '_views.php'; ?>
    </main>

    <footer></footer>
    <script src="<?= PATH ?>assets/js/main.js"></script>
</body>
</html>