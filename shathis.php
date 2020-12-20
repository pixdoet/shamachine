<?php
$rawtext = $_POST['inputtext'];

$sha1edtext = sha1($rawtext);
$md5edtext = md5($rawtext);

echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<meta charset="utf-8">";
echo "<title>SHAed Text</title>";
echo "</head>";
echo "<body style="font-family:Arial;font-size:30px;text-align:Center">";
echo ("<h3>Fuhon SHA Hasher Results</h3>");
echo ("<label for="sha1">Sha1 Results:</label>");
echo ("<p id="sha1">");
echo ($sha1edtext);
echo ("</p>");
echo ("<p style="font-size:14px">SHA encryptor is licensed under the GNU license. Visit our <a href="https://github.com/pixdoet/shamachine">Github</a> for more info</p>");
echo ("</body>");
echo ("</html>");
?>
