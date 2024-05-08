<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('vendor/twbs/bootstrap/dist/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('vendor/components/font-awesome/css/all.min.css'); ?>">
    <title>Document</title>



</head>
<body>
    <div class="container"> <!-- Zobrazí content -->
<?= $this->renderSection('content'); ?> 
    </div>
</body>
</html>