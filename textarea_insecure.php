<!DOCTYPE html>
<html lang="en">
<head>
    <title>Insecure formatted textarea</title>
    <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
    <style>
        .disclaimer {
            color: red;
        }
    </style>
</head>
<body>

    <h1>Exemple of insecure formatted text</h1>

    <p class="disclaimer">
        THIS IS AN EXAMPLE OF A TEXTAREA WITH INSECURE FORMATTING TEXT LEADING TO XSS.
        THE TEXT IS NOT SANITIZED AND CAN BE USED TO INJECT MALICIOUS CODE.
        DO NOT USE THIS CODE IN REAL PROJECTS.
    </p>

    <p>Here is a text area with formatting text. You can write some text and submit it. The text will be displayed below the form.</p>

    <form action="textarea_insecure.php" method="post">
        <label for="text">Insecure formatted text</label>
        <textarea id="text" name="text" rows="10" cols="50"></textarea>
        <p>
            <input type="submit" value="Submit">
        </p>
    </form>
    <script>
        CKEDITOR.replace( 'text' );
    </script>

    <div>
        <?= $_POST['text']?? "" ?>
    </div>
</body>
</html>