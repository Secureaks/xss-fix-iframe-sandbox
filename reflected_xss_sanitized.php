<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reflected XSS Example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
    <style>
        .disclaimer {
            color: red;
        }
    </style>
</head>
<body>

    <h1>Sanitized reflected XSS Example</h1>

    <p>Use the GET parameter text (example: http://localhost/reflected_xss.php?text=test) to insert text in the page. The text will be displayed below.</p>

    <div>
        <?= htmlentities($_GET['text']?? "", ENT_QUOTES) ?>
    </div>
</body>
</html>