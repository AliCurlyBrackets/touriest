<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login | Travel Agency</title>
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;900&family=Playfair+Display:ital@0;1&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  :root {
    --gold: #F5A623;
    --gold-dark: #D4891A;
    --gold-light: #FFC85C;
    --bg: #F7F6F3;
    --bg-card: #FFFFFF;
    --text-dark: #1A1A1A;
    --text-mid: #555550;
    --text-light: #999990;
    --border: #E8E6E0;
  }

  body {
    font-family: 'Tajawal', sans-serif;
    background: var(--bg);
    min-height: 100vh;
    display: flex;
    overflow: hidden;
  }

  /* ===== LEFT PANEL ===== */
  .panel-left {
    flex: 1;
    background: var(--text-dark);
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 60px;
    overflow: hidden;
  }

  .panel-left::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
      radial-gradient(ellipse 80% 60% at 20% 80%, rgba(245,166,35,0.18) 0%, transparent 60%),
      radial-gradient(ellipse 50% 40% at 80% 20%, rgba(245,166,35,0.10) 0%, transparent 60%);
  }

  .panel-left::after {
    content: '';
    position: absolute;
    top: -100px; right: -100px;
    width: 400px; height: 400px;
    border-radius: 50%;
    border: 1px solid rgba(245,166,35,0.15);
  }

  /* Decorative circles */
  .deco-circle {
    position: absolute;
    border-radius: 50%;
    border: 1px solid rgba(245,166,35,0.12);
  }
  .deco-circle.c1 { width: 500px; height: 500px; top: -150px; right: -150px; }
  .deco-circle.c2 { width: 300px; height: 300px; bottom: 50px; left: -80px; }
  .deco-circle.c3 { width: 150px; height: 150px; top: 50%; right: 40px; border-color: rgba(245,166,35,0.25); }

  /* Floating icons */
  .float-icons {
    position: absolute;
    inset: 0;
    pointer-events: none;
  }
  .fi {
    position: absolute;
    font-size: 2rem;
    opacity: 0.07;
    animation: floatUp 8s ease-in-out infinite;
  }
  .fi:nth-child(1) { top: 15%; left: 20%; animation-delay: 0s; }
  .fi:nth-child(2) { top: 60%; left: 10%; animation-delay: 2s; font-size: 1.5rem; }
  .fi:nth-child(3) { top: 30%; right: 25%; animation-delay: 4s; font-size: 2.5rem; }
  .fi:nth-child(4) { bottom: 25%; right: 15%; animation-delay: 1s; }
  .fi:nth-child(5) { top: 75%; left: 40%; animation-delay: 3s; font-size: 1.8rem; }

  @keyframes floatUp {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(5deg); }
  }

  .brand-area {
    position: relative;
    z-index: 2;
  }

  .brand-icon {
    width: 56px; height: 56px;
    background: var(--gold);
    border-radius: 14px;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.8rem;
    margin-bottom: 28px;
    box-shadow: 0 8px 24px rgba(245,166,35,0.4);
  }

  .brand-name {
    font-family: 'Playfair Display', serif;
    font-size: 2.2rem;
    color: #fff;
    font-style: italic;
    line-height: 1.2;
    margin-bottom: 8px;
  }

  .brand-tagline {
    color: var(--gold);
    font-size: 0.85rem;
    letter-spacing: 3px;
    text-transform: uppercase;
    font-weight: 500;
    margin-bottom: 50px;
  }

  .left-headline {
    color: #fff;
    font-size: 2.6rem;
    font-weight: 900;
    line-height: 1.3;
    margin-bottom: 20px;
  }
  .left-headline span { color: var(--gold); }

  .left-desc {
    color: rgba(255,255,255,0.55);
    font-size: 1rem;
    line-height: 1.8;
    max-width: 360px;
    margin-bottom: 50px;
  }

  .stats-row {
    display: flex;
    gap: 40px;
  }
  .stat-item {}
  .stat-num {
    font-size: 1.8rem;
    font-weight: 900;
    color: var(--gold);
    line-height: 1;
  }
  .stat-label {
    font-size: 0.8rem;
    color: rgba(255,255,255,0.45);
    margin-top: 4px;
    letter-spacing: 1px;
  }

  /* ===== RIGHT PANEL ===== */
  .panel-right {
    width: 50%;
    flex-shrink: 0;
    background: var(--bg-card);
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 60px 50px;
    position: relative;
    overflow-y: auto;
  }

  .panel-right::before {
    content: '';
    position: absolute;
    top: 0; right: 0;
    width: 6px; height: 100%;
    background: linear-gradient(180deg, var(--gold), var(--gold-dark));
  }

  .form-header {
    margin-bottom: 40px;
  }

  .form-eyebrow {
    font-size: 0.75rem;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: var(--gold);
    font-weight: 700;
    margin-bottom: 10px;
  }

  .form-title {
    font-size: 2rem;
    font-weight: 900;
    color: var(--text-dark);
    margin-bottom: 8px;
  }

  .form-sub {
    color: var(--text-light);
    font-size: 0.95rem;
  }

  .form-group {
    margin-bottom: 22px;
  }

  .form-label {
    display: block;
    font-size: 0.85rem;
    font-weight: 700;
    color: var(--text-mid);
    margin-bottom: 8px;
    letter-spacing: 0.5px;
  }

  .input-wrap {
    position: relative;
  }

  .input-icon {
    position: absolute;
    top: 50%; left: 16px;
    transform: translateY(-50%);
    color: var(--text-light);
    font-size: 1.1rem;
    pointer-events: none;
    transition: color 0.3s;
  }

  .form-input {
    width: 100%;
    padding: 14px 16px 14px 44px;
    border: 1.5px solid var(--border);
    border-radius: 10px;
    font-family: 'Tajawal', sans-serif;
    font-size: 0.95rem;
    color: var(--text-dark);
    background: var(--bg);
    transition: all 0.3s;
    outline: none;
    direction: ltr;
  }

  .form-input:focus {
    border-color: var(--gold);
    background: #fff;
    box-shadow: 0 0 0 4px rgba(245,166,35,0.1);
  }

  .form-input:focus ~ .input-icon {
    color: var(--gold);
  }

  .form-options {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
  }

  .remember-wrap {
    display: flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
  }

  .custom-check {
    width: 18px; height: 18px;
    border: 2px solid var(--border);
    border-radius: 5px;
    position: relative;
    flex-shrink: 0;
    cursor: pointer;
    transition: all 0.2s;
  }

  #remember:checked ~ label .custom-check,
  .custom-check.checked {
    background: var(--gold);
    border-color: var(--gold);
  }

  .remember-label {
    font-size: 0.88rem;
    color: var(--text-mid);
    cursor: pointer;
  }

  .forgot-link {
    font-size: 0.88rem;
    color: var(--gold);
    text-decoration: none;
    font-weight: 600;
    transition: color 0.2s;
  }
  .forgot-link:hover { color: var(--gold-dark); }

  .btn-login {
    width: 100%;
    padding: 16px;
    background: linear-gradient(135deg, var(--gold), var(--gold-dark));
    color: #fff;
    border: none;
    border-radius: 10px;
    font-family: 'Tajawal', sans-serif;
    font-size: 1.05rem;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.3s;
    letter-spacing: 1px;
    position: relative;
    overflow: hidden;
    margin-bottom: 24px;
  }

  .btn-login::before {
    content: '';
    position: absolute;
    top: 0; left: -100%;
    width: 100%; height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.5s;
  }

  .btn-login:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 28px rgba(245,166,35,0.45);
  }

  .btn-login:hover::before { left: 100%; }

  .divider {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 24px;
  }
  .divider::before, .divider::after {
    content: '';
    flex: 1;
    height: 1px;
    background: var(--border);
  }
  .divider span {
    font-size: 0.82rem;
    color: var(--text-light);
    white-space: nowrap;
  }

  .social-btns {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
    margin-bottom: 32px;
  }

  .btn-social {
    padding: 12px;
    border: 1.5px solid var(--border);
    border-radius: 10px;
    background: var(--bg);
    font-family: 'Tajawal', sans-serif;
    font-size: 0.88rem;
    color: var(--text-mid);
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    transition: all 0.25s;
    font-weight: 500;
  }

  .btn-social:hover {
    border-color: var(--gold);
    color: var(--gold-dark);
    background: #fff;
  }

  .register-prompt {
    text-align: center;
    font-size: 0.92rem;
    color: var(--text-light);
  }

  .register-link {
    color: var(--gold);
    font-weight: 700;
    text-decoration: none;
  }
  .register-link:hover { text-decoration: underline; }
</style>
</head>
<body>

<!-- LEFT -->
<div class="panel-left">
  <div class="deco-circle c1"></div>
  <div class="deco-circle c2"></div>
  <div class="deco-circle c3"></div>
  <div class="float-icons">
    <div class="fi">✈️</div>
    <div class="fi">🗺️</div>
    <div class="fi">🏝️</div>
    <div class="fi">⛵</div>
    <div class="fi">🌍</div>
  </div>

  <div class="brand-area">
    <div class="brand-icon">✈</div>
    <div class="brand-name">TravelVista</div>
    <div class="brand-tagline">Full-Service Travel Agency</div>

    <div class="left-headline">
      Discover the World<br>
      with Your <span>Trusted</span> Partner
    </div>
    <div class="left-desc">
      We offer you an unforgettable travel experience — from booking tickets to tours designed just for you. Explore the world with confidence and comfort.
    </div>

    <div class="stats-row">
      <div class="stat-item">
        <div class="stat-num">+50K</div>
        <div class="stat-label">Happy Clients</div>
      </div>
      <div class="stat-item">
        <div class="stat-num">120+</div>
        <div class="stat-label">Destinations</div>
      </div>
      <div class="stat-item">
        <div class="stat-num">15</div>
        <div class="stat-label">Years Experience</div>
      </div>
    </div>
  </div>
</div>

<!-- RIGHT -->
<div class="panel-right">
  <div class="form-header">
    <div class="form-eyebrow">Welcome Back</div>
    <div class="form-title">Sign In</div>
    <div class="form-sub">Enter your details to access your account</div>
  </div>

  @if( session('error_login') )
    <div class="alert alert-danger">
        {{ session('error_login') }}
    </div>
  @endif

 <form action="{{ route('login.login') }}" method="POST">
    @csrf
     <div class="form-group">
    <label class="form-label">Email Address</label>
    <div class="input-wrap">
      <span class="input-icon">✉</span>
      <input name="email" type="email" class="form-input" placeholder="example@email.com">
    </div>
  </div>

  <div class="form-group">
    <label class="form-label">Password</label>
    <div class="input-wrap">
      <span class="input-icon">🔒</span>
      <input name="password" type="password" class="form-input" placeholder="••••••••">
    </div>
  </div>

  <div class="form-options">
    <div class="remember-wrap" onclick="this.querySelector('.custom-check').classList.toggle('checked')">
      <div class="custom-check"></div>
      <span class="remember-label">Remember me</span>
    </div>
    <a href="#" class="forgot-link">Forgot password?</a>
  </div>

  <button class="btn-login">Sign In ✈</button>
 </form>

  <div class="divider"><span>or sign in with</span></div>

  <div class="social-btns">
    <button class="btn-social">🌐 Google</button>
    <button class="btn-social">📘 Facebook</button>
  </div>

  <div class="register-prompt">
    Don t have an account? <a href="{{ route('register.index') }}" class="register-link">Register Now</a>
  </div>
</div>

</body>
</html>
