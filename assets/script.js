const pwlen = document.getElementById("pwlen");
const len = document.getElementById("len");

pwlen.addEventListener("input", function() {
    len.textContent = pwlen.value;
});

function copia() {
    let passwordText = document.getElementById('password-text');
    let password = document.createElement('input');
    password.value = passwordText.innerText;
    document.body.appendChild(password);
    password.select();
    document.execCommand('copy');
    console.log('Copiato'); 
    document.body.removeChild(password);
}