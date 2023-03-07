<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formatted textarea with iframe sandbox</title>
    <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
    <style>
        iframe {
            width: 100%;
            height: 300px;
            border: 0;
        }
    </style>
</head>
<body>

    <h1>Exemple of formatted text secured with iframe sandbox</h1>

    <p>Here is a text area with formatting text. You can write some text and submit it. The text will be displayed below the form.</p>

    <form action="textarea_secure.php" method="post">
        <label for="text">Formatted textarea with iframe sandbox</label>
        <textarea id="text" name="text" rows="10" cols="50"></textarea>
        <p>
            <input type="submit" value="Submit">
        </p>
    </form>
    <script>
        CKEDITOR.replace( 'text' );
    </script>

    <div>
        <iframe src="data:text/html;base64,<?= base64_encode($_POST['text']?? "") ?>" sandbox=""></iframe>
    </div>
</body>
</html>