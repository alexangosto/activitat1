<?php

    include 'partials/header.tpl.php';
    ?>

<body>
<form action="?url=logaction" method="POST">
        Email:<input type="email" name="email" id="email" placeholder="email">
        Contraseña: <input type="password" name="password" id="password" placeholder="password">
        User:<input type="text" name="username" id="username" placeholder="username">
        <button type="submit">Register</button>
</form>

</body>
</html>