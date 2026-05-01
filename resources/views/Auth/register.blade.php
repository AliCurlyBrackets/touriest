<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Create Account | Travel Agency</title>
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;900&family=Playfair+Display:ital@0;1&display=swap" rel="stylesheet">
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
  }

  /* ===== RIGHT PANEL (form) — now on the right side ===== */
  .panel-form {
    flex-shrink: 0;
    background: var(--bg-card);
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 50px 50px;
    position: relative;
    overflow-y: auto;
  }

  .panel-form::before {
    content: '';
    position: absolute;
    top: 0; left: 0;
    width: 6px; height: 100%;
    background: linear-gradient(180deg, var(--gold), var(--gold-dark));
  }

  /* ===== LEFT PANEL (decorative) ===== */
  .panel-deco {
    flex: 1;
    background: var(--text-dark);
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    padding: 60px;
    overflow: hidden;
  }

  .panel-deco::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
      radial-gradient(ellipse 80% 60% at 80% 20%, rgba(245,166,35,0.18) 0%, transparent 60%),
      radial-gradient(ellipse 50% 40% at 20% 80%, rgba(245,166,35,0.10) 0%, transparent 60%);
  }

  .deco-circle {
    position: absolute;
    border-radius: 50%;
    border: 1px solid rgba(245,166,35,0.12);
  }
  .c1 { width: 600px; height: 600px; top: 50%; left: 50%; transform: translate(-50%, -50%); }
  .c2 { width: 350px; height: 350px; top: 50%; left: 50%; transform: translate(-50%, -50%); border-color: rgba(245,166,35,0.2); }
  .c3 { width: 150px; height: 150px; top: 50%; left: 50%; transform: translate(-50%, -50%); background: rgba(245,166,35,0.05); border: none; }

  /* Journey steps visual */
  .journey {
    position: relative;
    z-index: 2;
  }

  .brand-row {
    display: flex;
    align-items: center;
    gap: 14px;
    margin-bottom: 50px;
  }

  .brand-icon {
    width: 48px; height: 48px;
    background: var(--gold);
    border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.5rem;
    box-shadow: 0 6px 20px rgba(245,166,35,0.4);
  }

  .brand-text .name {
    font-family: 'Playfair Display', serif;
    font-size: 1.4rem;
    color: #fff;
    font-style: italic;
  }

  .brand-text .tag {
    font-size: 0.72rem;
    color: var(--gold);
    letter-spacing: 2px;
    text-transform: uppercase;
  }

  .deco-headline {
    font-size: 3rem;
    font-weight: 900;
    color: #fff;
    line-height: 1.2;
    margin-bottom: 20px;
  }
  .deco-headline em {
    color: var(--gold);
    font-style: normal;
    position: relative;
  }
  .deco-headline em::after {
    content: '';
    position: absolute;
    bottom: 2px; left: 0;
    width: 100%; height: 3px;
    background: var(--gold);
    opacity: 0.4;
    border-radius: 2px;
  }

  .services-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 14px;
    margin-top: 30px;
  }

  .service-card {
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(245,166,35,0.15);
    border-radius: 12px;
    padding: 16px;
    display: flex;
    align-items: center;
    gap: 12px;
    backdrop-filter: blur(4px);
    transition: all 0.3s;
  }

  .service-card:hover {
    background: rgba(245,166,35,0.08);
    border-color: rgba(245,166,35,0.35);
    transform: translateY(-2px);
  }

  .s-icon {
    width: 36px; height: 36px;
    background: rgba(245,166,35,0.15);
    border-radius: 8px;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.1rem;
    flex-shrink: 0;
  }

  .s-text .s-name {
    font-size: 0.82rem;
    font-weight: 700;
    color: #fff;
    margin-bottom: 2px;
  }

  .s-text .s-desc {
    font-size: 0.74rem;
    color: rgba(255,255,255,0.4);
  }

  /* ===== FORM STYLES ===== */
  .form-header {
    margin-bottom: 32px;
  }

  .form-eyebrow {
    font-size: 0.75rem;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: var(--gold);
    font-weight: 700;
    margin-bottom: 8px;
  }

  .form-title {
    font-size: 1.9rem;
    font-weight: 900;
    color: var(--text-dark);
    margin-bottom: 6px;
  }

  .form-sub {
    color: var(--text-light);
    font-size: 0.92rem;
  }

  /* Progress steps */
  .steps-bar {
    display: flex;
    gap: 6px;
    margin-bottom: 28px;
  }

  .step-dot {
    flex: 1;
    height: 4px;
    border-radius: 2px;
    background: var(--border);
    position: relative;
    overflow: hidden;
  }

  .step-dot.active {
    background: var(--gold);
  }

  .step-dot.done {
    background: var(--gold);
  }

  .step-dot.active::after {
    content: '';
    position: absolute;
    top: 0; left: 0;
    width: 50%; height: 100%;
    background: rgba(255,255,255,0.4);
    animation: shimmer 1.5s ease-in-out infinite;
  }

  @keyframes shimmer {
    0%, 100% { transform: translateX(-100%); }
    50% { transform: translateX(300%); }
  }

  .form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
    margin-bottom: 16px;
  }

  .form-group {
    margin-bottom: 16px;
  }

  .form-group.full { grid-column: 1 / -1; }

  .form-label {
    display: block;
    font-size: 0.82rem;
    font-weight: 700;
    color: var(--text-mid);
    margin-bottom: 7px;
    letter-spacing: 0.3px;
  }

  .input-wrap {
    position: relative;
  }

  .input-icon {
    position: absolute;
    top: 50%; right: 14px;
    transform: translateY(-50%);
    color: var(--text-light);
    font-size: 1rem;
    pointer-events: none;
    transition: color 0.3s;
  }

  .form-input {
    width: 100%;
    padding: 12px 40px 12px 14px;
    border: 1.5px solid var(--border);
    border-radius: 10px;
    font-family: 'Tajawal', sans-serif;
    font-size: 0.92rem;
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

  .form-input:focus + .input-icon {
    color: var(--gold);
  }

  .form-input.select-input {
    appearance: none;
    -webkit-appearance: none;
    cursor: pointer;
  }

  /* Password strength */
  .strength-bar {
    display: flex;
    gap: 4px;
    margin-top: 8px;
  }

  .strength-seg {
    flex: 1;
    height: 3px;
    border-radius: 2px;
    background: var(--border);
  }

  .strength-hint {
    font-size: 0.78rem;
    color: var(--text-light);
    margin-top: 4px;
  }

  /* Terms */
  .terms-wrap {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    margin-bottom: 24px;
    padding: 14px;
    background: rgba(245,166,35,0.05);
    border: 1px solid rgba(245,166,35,0.2);
    border-radius: 10px;
  }

  .custom-check {
    width: 20px; height: 20px;
    border: 2px solid var(--border);
    border-radius: 5px;
    position: relative;
    flex-shrink: 0;
    cursor: pointer;
    transition: all 0.2s;
    margin-top: 2px;
  }

  .custom-check.checked {
    background: var(--gold);
    border-color: var(--gold);
  }

  .custom-check.checked::after {
    content: '✓';
    position: absolute;
    top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    color: #fff;
    font-size: 0.75rem;
    font-weight: 700;
  }

  .terms-text {
    font-size: 0.85rem;
    color: var(--text-mid);
    line-height: 1.6;
  }

  .terms-link {
    color: var(--gold);
    text-decoration: none;
    font-weight: 600;
  }

  .btn-register {
    width: 100%;
    padding: 15px;
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
    margin-bottom: 20px;
  }

  .btn-register::before {
    content: '';
    position: absolute;
    top: 0; left: -100%;
    width: 100%; height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.5s;
  }

  .btn-register:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 28px rgba(245,166,35,0.45);
  }

  .btn-register:hover::before { left: 100%; }

  .login-prompt {
    text-align: center;
    font-size: 0.9rem;
    color: var(--text-light);
  }

  .login-link {
    color: var(--gold);
    font-weight: 700;
    text-decoration: none;
  }
  .login-link:hover { text-decoration: underline; }
</style>
</head>
<body>

<!-- FORM PANEL -->
<div class="panel-form">
  <div class="form-header">
    <div class="form-eyebrow">Start Your Journey Now</div>
    <div class="form-title">Create New Account</div>
    <div class="form-sub">Join thousands of travelers around the world</div>
  </div>

  <div class="steps-bar">
    <div class="step-dot done"></div>
    <div class="step-dot active"></div>
    <div class="step-dot"></div>
  </div>

  @if(session('success_register'))
    <div class="alert alert-success">
        {{ session('success_register') }}
    </div>
  @endif

  <div class="form-grid">
    <form action="{{ route('register.register') }}" method="POST">
        @csrf
        <div class="form-group">
      <label class="form-label">First Name</label>
      <div class="input-wrap">
        <input type="text" name="first_name" class="form-input" placeholder="John">
        <span class="input-icon">👤</span>
      </div>
    </div>
    <div class="form-group">
      <label class="form-label">Last Name</label>
      <div class="input-wrap">
        <input type="text" name="last_name" class="form-input" placeholder="Doe">
        <span class="input-icon">👤</span>
      </div>
    </div>
    <div class="form-group full">
      <label class="form-label">Email Address</label>
      <div class="input-wrap">
        <input type="email" name="email" class="form-input" placeholder="example@email.com">
        <span class="input-icon">✉</span>
      </div>
    </div>
    <div class="form-group full">
      <label class="form-label">Phone Number</label>
      <div class="input-wrap">
        <input type="tel" name="phone" class="form-input" placeholder="+1 XXX XXX XXXX">
        <span class="input-icon">📱</span>
      </div>
    </div>
    <div class="form-group full">
      <label class="form-label">Nationality</label>
      <div class="input-wrap">
        <select name="nationality" class="form-input select-input">
          <option value="">Select your nationality</option>
          <option value="American">American</option>
          <option value="British">British</option>
          <option value="Canadian">Canadian</option>
          <option value="Australian">Australian</option>
          <option value="Other">Other</option>
        </select>
        <span class="input-icon">🌍</span>
      </div>
    </div>
    <div class="form-group full">
      <label class="form-label">Password</label>
      <div class="input-wrap">
        <input type="password" name="password" class="form-input" id="passInput" placeholder="••••••••" oninput="checkStrength(this.value)">
        <span class="input-icon">🔒</span>
      </div>
      <div class="strength-bar">
        <div class="strength-seg" id="s1"></div>
        <div class="strength-seg" id="s2"></div>
        <div class="strength-seg" id="s3"></div>
        <div class="strength-seg" id="s4"></div>
      </div>
      <div class="strength-hint" id="strengthHint">Must contain at least 8 characters</div>
    </div>

     <div class="terms-wrap">
    <div class="custom-check" onclick="this.classList.toggle('checked')"></div>
    <div class="terms-text">
      I agree to the <a href="#" class="terms-link">Terms & Conditions</a> and <a href="#" class="terms-link">Privacy Policy</a> of TravelVista. I confirm that the information I entered is accurate.
    </div>
  </div>

  <button type="submit" class="btn-register">Create Account 🌍</button>

    </form>
  </div>



  <div class="login-prompt">
    Already have an account? <a href="{{ route('login.index') }}" class="login-link">Sign In</a>
  </div>
</div>

<!-- DECO PANEL -->
<div class="panel-deco">
  <div class="deco-circle c1"></div>
  <div class="deco-circle c2"></div>
  <div class="deco-circle c3"></div>

  <div class="journey">
    <div class="brand-row">
      <div class="brand-icon">✈</div>
      <div class="brand-text">
        <div class="name">TravelVista</div>
        <div class="tag">Full-Service Travel Agency</div>
      </div>
    </div>

    <div class="deco-headline">
      Plan Your<br>
      <em>Exceptional</em> Trip
    </div>

    <div class="services-grid">
      <div class="service-card">
        <div class="s-icon">✈</div>
        <div class="s-text">
          <div class="s-name">Air Tickets</div>
          <div class="s-desc">Best prices to any destination</div>
        </div>
      </div>
      <div class="service-card">
        <div class="s-icon">⛵</div>
        <div class="s-text">
          <div class="s-name">Voyages & Cruises</div>
          <div class="s-desc">Luxury cruises around the world</div>
        </div>
      </div>
      <div class="service-card">
        <div class="s-icon">🏨</div>
        <div class="s-text">
          <div class="s-name">Hotel Bookings</div>
          <div class="s-desc">From 5-star to cozy properties</div>
        </div>
      </div>
      <div class="service-card">
        <div class="s-icon">🗺</div>
        <div class="s-text">
          <div class="s-name">Tailored Tours</div>
          <div class="s-desc">Unforgettable summer experiences</div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
function checkStrength(val) {
  const segs = [document.getElementById('s1'), document.getElementById('s2'), document.getElementById('s3'), document.getElementById('s4')];
  const hint = document.getElementById('strengthHint');
  const colors = ['#e74c3c','#e67e22','#f5a623','#27ae60'];
  const labels = ['Very Weak','Weak','Medium','Strong ✓'];

  let score = 0;
  if (val.length >= 8) score++;
  if (/[A-Z]/.test(val)) score++;
  if (/[0-9]/.test(val)) score++;
  if (/[^A-Za-z0-9]/.test(val)) score++;

  segs.forEach((s, i) => {
    s.style.background = i < score ? colors[Math.max(0, score - 1)] : 'var(--border)';
  });

  hint.textContent = val.length === 0 ? 'Must contain at least 8 characters' : 'Password strength: ' + (labels[score - 1] || 'Enter a password');
  hint.style.color = val.length === 0 ? 'var(--text-light)' : colors[Math.max(0, score - 1)];
}
</script>

</body>
</html>
