<?php
$CookieName = "Bonjour";
$CookieValue = "J ai pas d idée";
setCookie($CookieName, $CookieValue, time()+ (86400 * 30));

if (lisset($_COOKIE[$CookieName]))
{
    echo "Cookie is not available";
} else {
    echo "Cookie Value: " $_COOKIE[$CookieValue];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de test php</title>
</head>
<body>
    
</body>
</html>