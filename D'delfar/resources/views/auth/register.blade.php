<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register - D'Delfar</title>
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

<div class="login-wrapper">
    <div class="login-card">
        <div class="image-box">
            <img src="/images/motor.png" alt="Motor Sport">
        </div>

        <div class="form-box">
            <h2>Create Account</h2>

            <form id="registerForm" action="{{ route('register') }}" method="POST">
                @csrf
                <label>Full Name</label>
                <input type="text" name="name" placeholder="Enter your full name" required>

                <label>Email</label>
                <input type="email" name="email" placeholder="Enter your email" required>

                <label>Password</label>
                <div class="password-box">
                    <input type="password" name="password" id="password" required>
                    <span class="toggle" onclick="togglePassword('password','toggleIcon1')" id="toggleIcon1">👁️‍🗨️</span>
                </div>

                <label>Confirm Password</label>
                <div class="password-box">
                    <input type="password" name="password_confirmation" id="password2" required>
                    <span class="toggle" onclick="togglePassword('password2','toggleIcon2')" id="toggleIcon2">👁️‍🗨️</span>
                </div>

                <button type="submit" class="btn-login" id="btnRegister">Register</button>
            </form>

            <div class="divider"><span>or register with</span></div>

            <div class="google-btn">
                <img src="/images/google.png" alt="Google"> Google
            </div>
        </div>
    </div>
</div>

<!-- Alert box -->
<div id="alertBox"></div>

<script>
function togglePassword(inputId, iconId) {
    const pw = document.getElementById(inputId);
    const icon = document.getElementById(iconId);
    if (pw.type === "password") {
        pw.type = "text";
        icon.textContent = "👁️";
    } else {
        pw.type = "password";
        icon.textContent = "👁️‍🗨️";
    }
}

const alertBox = document.getElementById('alertBox');
function showAlert(message) {
    alertBox.textContent = message;
    alertBox.style.display = 'block';
    setTimeout(() => { alertBox.style.display = 'none'; }, 3000);
}

document.getElementById('registerForm').addEventListener('submit', function(e){
    const name = this.name.value.trim();
    const email = this.email.value.trim();
    const password = this.password.value;
    const confirmPassword = this.password_confirmation.value;

    if (!name || !email || !password || !confirmPassword) {
        e.preventDefault();
        showAlert('Semua form harus diisi!');
        return false;
    }

    if (password !== confirmPassword) {
        e.preventDefault();
        showAlert('Confirm password harus sama dengan password!');
        return false;
    }
});
</script>

</body>
</html>