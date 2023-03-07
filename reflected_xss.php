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

    <h1>Reflected XSS Example</h1>

    <p class="disclaimer">
        THIS IS AN EXAMPLE OF A PAGE VULNERABLE TO REFLECTED XSS.
        THE TEXT IS NOT SANITIZED AND CAN BE USED TO INJECT MALICIOUS CODE.
        DO NOT USE THIS CODE IN REAL PROJECTS.
    </p>

    <p>Use the GET parameter text (example: http://localhost/reflected_xss.php?text=test) to insert text in the page. The text will be displayed below.</p>

    <div>
        <?= $_GET['text']?? "" ?>
    </div>
</body>
</html>