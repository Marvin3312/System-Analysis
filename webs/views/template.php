<!-- include php in html -->
<?php
$path = TemplateController::path();
?>

<!-- template html from php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FakeProduct - Transform Your Workflow</title> <!-- title from database -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo $path ?> views/assets/css/index.css" rel="stylesheet"/>

</head>
<body>
    <div class="wrapper">
        <?php 
        include 'modules/navbar.php';
        include 'modules/hero.php';
        include 'pages/main.php';
        include '../views/pages/main/template.php';
        include 'modules/footer.php';
        ?>

    </div>


    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>