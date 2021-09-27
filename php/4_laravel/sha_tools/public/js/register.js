document.onreadystatechange = function () {
    if (document.readyState == "complete") {
        document.getElementById("confirm_password").addEventListener("keyup", function () {
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('confirm_password').value;
            var validator = document.getElementById('validator');
            if (password == '' || confirmPassword == '' || password == confirmPassword) {
                validator.style.display = "none";
            } else {
                validator.style.display = "block";
            }
        });
        document.getElementById("password").addEventListener("keyup", function () {
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('confirm_password').value;
            var validator = document.getElementById('validator');
            if (password == '' || confirmPassword == '' || password == confirmPassword) {
                validator.style.display = "none";
            } else {
                validator.style.display = "block";
            }
        });
    }
}

