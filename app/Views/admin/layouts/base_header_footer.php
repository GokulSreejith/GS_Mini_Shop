<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $this->renderSection("title"); ?></title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico" />

    <!-- Tailwind css CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind first-party plugin -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>


    <!-- Tailwind css customize your configuration  -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>

    <!-- STYLES -->
    <?= $this->renderSection("styles"); ?>
</head>

<body>

    <div class="app">
        <!-- HEADER: MENU -->
        <?= $this->include("admin/components/header.php") ?>

        <!-- CONTENT -->
        <?= $this->renderSection("content"); ?>

        <!-- FOOTER -->
        <?= $this->include("admin/components/footer.php") ?>
    </div>

    <!-- SCRIPTS -->
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>

    <!-- SCRIPTS -->
    <?= $this->renderSection("script"); ?>

</body>

</html>