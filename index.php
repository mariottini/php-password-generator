<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="password.php" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Name...">
        <label for="pwlen">Password length: <span id="len"></span></label>
        <input type="range" name="pwlen" id="pwlen" min="6" max="20">
        <button type="submit">Submit</button>
    </form>

    <script>
        const pwlen = document.getElementById("pwlen");
        const len = document.getElementById("len");

        pwlen.addEventListener("input", function() {
            len.textContent = pwlen.value;
        });
    </script>
</body>
</html>