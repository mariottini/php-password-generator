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
        
        <label for="lowercase">Lowercase</label>
        <input type="checkbox" name="lowercase" id="lowercase">
        
        <label for="uppercase">Uppercase</label>
        <input type="checkbox" name="uppercase" id="uppercase">
        
        <label for="digits">Digits</label>
        <input type="checkbox" name="digits" id="digits">
        
        <label for="specials">Specials</label>
        <input type="checkbox" name="specials" id="specials">
        
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