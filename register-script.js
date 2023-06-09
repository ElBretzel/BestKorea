function validatePassword() {
    var password = document.getElementById('password');
    var confirmPassword = document.getElementById('confirm_password');

    if (password.value !== confirmPassword.value) {
        password.style.border = "1px solid red";
        confirmPassword.style.border = "1px solid red";
        return false;
    }
    return true;
}