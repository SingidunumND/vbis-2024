<?php
?>

<html lang="eng">
<head>

    <title></title>
<style>
    .custom-header {
        style=width: 100%;
        background-color: red;
        color: white;
    }
    .custom-footer {
        style=width: 100%;
        background-color: blue;
        color: white;
    }
</style>
</head>

<body>
<header class="custom-header">
    HEADER PAGE
</header>

<main>
    {{ RENDER_SECTION }}
</main>

</body>

<footer class="custom-footer">
    FOOTER PAGE
</footer>

</html>
