<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - D'Delfar</title>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>

<div class="login-wrapper">

    <div class="login-card">

        <div class="image-box">
            <img src="/images/motor.png" alt="Motor Sport">
        </div>

        <div class="form-box">
            <h2>Log in</h2>

            <form action="{{ route('login') }}" method="POST">
                @csrf
            
                <label>Email</label>
                <input type="text" name="email" placeholder="Enter your email" required>
            
                <label>Password</label>
                <div class="password-box">
                    <input type="password" name="password" id="password">
                    <span class="toggle" onclick="togglePassword()" id="toggleIcon">👁️‍🗨️</span>
                </div>
            
                <button class="btn-login">Log in</button>
            </form>
            

            <div class="divider">
                <span>or login with</span>
            </div>

            <div class="google-btn">
                <img src="/images/google.png" alt="Google"> Google
            </div>
        </div>

    </div>

</div>

<script>
function togglePassword() {
    const pw = document.getElementById("password");
    const icon = document.getElementById("toggleIcon");

    if (pw.type === "password") {
        pw.type = "text";
        icon.textContent = "👁️"; 
    } else {
        pw.type = "password";
        icon.textContent = "👁️‍🗨️"; 
    }
}
</script>

</body>
</html>
