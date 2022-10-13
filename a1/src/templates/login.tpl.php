<?php
    include 'partials/header.tpl.php';
    include 'partials/nav.tpl.php';
?>
<body>
    <form action="?url=logaction" method="POST">
        Email:<input type="email" name="email" id="email" placeholder="email">
        Contraseña: <input type="password" name="password" id="password" placeholder="password">
        <button type="submit">Login</button>
</form>
</body>
</html>