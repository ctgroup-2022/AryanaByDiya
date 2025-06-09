<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Agency Registration</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: linear-gradient(135deg, #1e1e2f, #2a2a40);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      color: #fff;
    }

    .register-container {
      background: #2d2d44;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.25);
      width: 100%;
      max-width: 450px;
    }

    .register-container h2 {
      text-align: center;
      margin-bottom: 1.5rem;
      font-weight: 600;
      color: #ffffff;
    }

    .form-group {
      margin-bottom: 1.2rem;
    }

    label {
      display: block;
      margin-bottom: 0.5rem;
      font-size: 0.95rem;
      color: #ccc;
    }

    input {
      width: 100%;
      padding: 0.75rem;
      border: none;
      border-radius: 8px;
      background: #44445e;
      color: #fff;
      font-size: 1rem;
    }

    input:focus {
      outline: none;
      background: #55556e;
    }

    .show-password {
      margin-top: 0.5rem;
      font-size: 0.85rem;
      cursor: pointer;
      color: #999;
      user-select: none;
    }

    button {
      width: 100%;
      padding: 0.9rem;
      border: none;
      border-radius: 8px;
      background: #00b894;
      color: #fff;
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    button:hover {
      background: #019170;
    }

    .error {
      color: #ff7675;
      font-size: 0.85rem;
      margin-top: 0.3rem;
    }
  </style>
</head>
<body>

<div class="register-container">
  <h2>Create Your Account</h2>
  <form id="registerForm">
    <div class="form-group">
      <label for="name">Full Name</label>
      <input type="text" id="name" required placeholder="John Doe">
      <div class="error" id="nameError"></div>
    </div>
    <div class="form-group">
      <label for="email">Email Address</label>
      <input type="email" id="email" required placeholder="your@email.com">
      <div class="error" id="emailError"></div>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" id="password" required placeholder="••••••••">
      <div class="show-password" onclick="togglePassword('password')">Show Password</div>
      <div class="error" id="passwordError"></div>
    </div>
    <div class="form-group">
      <label for="confirmPassword">Confirm Password</label>
      <input type="password" id="confirmPassword" required placeholder="••••••••">
      <div class="show-password" onclick="togglePassword('confirmPassword')">Show Confirm Password</div>
      <div class="error" id="confirmError"></div>
    </div>
    <button type="submit">Register</button>
  </form>
</div>

<script>
  const form = document.getElementById('registerForm');
  const nameInput = document.getElementById('name');
  const emailInput = document.getElementById('email');
  const passwordInput = document.getElementById('password');
  const confirmPasswordInput = document.getElementById('confirmPassword');

  const nameError = document.getElementById('nameError');
  const emailError = document.getElementById('emailError');
  const passwordError = document.getElementById('passwordError');
  const confirmError = document.getElementById('confirmError');

  form.addEventListener('submit', function (e) {
    e.preventDefault();
    let isValid = true;

    // Reset errors
    nameError.textContent = '';
    emailError.textContent = '';
    passwordError.textContent = '';
    confirmError.textContent = '';

    if (nameInput.value.trim().length < 3) {
      nameError.textContent = 'Please enter your full name.';
      isValid = false;
    }

    if (!emailInput.value.includes('@')) {
      emailError.textContent = 'Please enter a valid email.';
      isValid = false;
    }

    if (passwordInput.value.length < 6) {
      passwordError.textContent = 'Password must be at least 6 characters.';
      isValid = false;
    }

    if (confirmPasswordInput.value !== passwordInput.value) {
      confirmError.textContent = 'Passwords do not match.';
      isValid = false;
    }

    if (isValid) {
      alert('Registration successful!');
      form.reset();
    }
  });

  function togglePassword(id) {
    const field = document.getElementById(id);
    const type = field.getAttribute('type');
    field.setAttribute('type', type === 'password' ? 'text' : 'password');
  }
</script>

</body>
</html>
