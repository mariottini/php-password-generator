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
        <div class="username">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Name...">
        </div>
        <div class="pwlen">
            <label for="pwlen">Password length: <span id="len"></span></label>
            <input type="range" name="pwlen" id="pwlen" min="6" max="20">
        </div>
        <div class="choices">
            <div class="lowercase">
                <input type="checkbox" name="lowercase" id="lowercase">
                <label for="lowercase">Lowercase</label>
            </div>
            <div class="uppercase">
                <input type="checkbox" name="uppercase" id="uppercase">
                <label for="uppercase">Uppercase</label>
            </div>
            <div class="digits">
                <input type="checkbox" name="digits" id="digits">
                <label for="digits">Digits</label>
            </div>
            <div class="specials">
                <input type="checkbox" name="specials" id="specials">
                <label for="specials">Specials</label>
            </div>
        </div>
        <button class="submit" type="submit">Submit</button>
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