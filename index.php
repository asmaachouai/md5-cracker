<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MD5 Cracker</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>MD5 Cracker</h1>
        <p>This application takes an MD5 hash of a two-character lower case string and attempts to hash all two-character combinations to determine the original two characters.</p>
        <form action="crack.php" method="post">
            <div class="form-group">
                <label for="hash">Enter MD5 Hash:</label>
                <input type="text" class="form-control" id="hash" name="hash" required>
            </div>
            <button type="submit" class="btn btn-primary">Crack MD5 Hash</button>
        </form>
    </div>
</body>
</html>
