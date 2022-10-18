<?php

    include 'partials/header.tpl.php';
    ?>

<body>
<form action="?url=regaction" method="POST">
        User:<input type="text" name="username" id="username" placeholder="username">
        Email:<input type="email" name="email" id="email" placeholder="email">
        Contraseña: <input type="password" name="password" id="password" placeholder="password">
        <button type="submit">Register</button>
</form>

</body>
</html>