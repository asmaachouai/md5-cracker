<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer le hachage MD5 fourni par l'utilisateur
    $hash = $_POST["hash"];

    // Fonction pour inverser le hachage MD5 en utilisant une approche de force brute
    function bruteForceMD5($hashedString) {
        $charset = "abcdefghijklmnopqrstuvwxyz"; // Caractères à utiliser pour la force brute
        $charsetLength = strlen($charset);
        $maxLength = 2; // Longueur maximale de la chaîne d'entrée

        // Parcourir toutes les combinaisons possibles de caractères
        for ($i = 0; $i < $charsetLength; $i++) {
            for ($j = 0; $j < $charsetLength; $j++) {
                $input = $charset[$i] . $charset[$j];
                // Vérifier si le hachage MD5 de la chaîne générée correspond au hachage recherché
                if (md5($input) === $hashedString) {
                    return $input; // Retourner la chaîne d'entrée trouvée
                }
            }
        }
        return "Not found"; // Retourner si la chaîne d'entrée n'a pas été trouvée
    }

    // Trouver la chaîne d'entrée pour le hachage MD5 fourni
    $originalText = bruteForceMD5($hash);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MD5 Cracker - Result</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>MD5 Cracker - Result</h1>
        <p><strong>Original Text:</strong> <?php echo $originalText; ?></p>
        <a href="index.php" class="btn btn-primary">Reset</a>
    </div>
</body>
</html>
