<?php
// index.php — Custom Homepage UI
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>My Custom Web Proxy</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>🌐 My Custom Web Proxy</h1>
    <p class="subtitle">Browse the web securely through my private proxy.</p>

    <form class="proxy-form" action="proxy/index.php" method="GET">
        <input type="text" name="q" placeholder="Enter URL (example: https://example.com)" required>
        <button type="submit">Go</button>
    </form>

    <p class="note">Your traffic is proxied and rewritten through the server for privacy.</p>

</div>

</body>
</html>
