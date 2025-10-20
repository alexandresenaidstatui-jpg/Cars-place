<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>CarsPlace — Login</title>

  <!-- Fonte clean -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

  <style>
    :root {
      --bg-900: #060607;
      --bg-800: #0f0f10;
      --panel: rgba(255, 255, 255, 0.03);
      --gold: #FFCC00;
      --gold-dark: #e6b800;
      --muted: #a8a8a8;
      --accent: rgba(255, 204, 0, 0.06);
      --radius: 14px;
      --glass-blur: 8px;
    }

    * {
      box-sizing: border-box;
    }

    html, body {
      height: 100%;
      margin: 0;
      font-family: "Inter", sans-serif;
      background:
        radial-gradient(1200px 600px at 10% 10%, rgba(255, 204, 0, 0.03), transparent 8%),
        radial-gradient(1000px 400px at 90% 90%, rgba(255, 255, 255, 0.02), transparent 12%),
        linear-gradient(180deg, var(--bg-900), var(--bg-800));
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 32px;
    }

    .wrap {
      width: 100%;
      max-width: 980px;
      display: grid;
      grid-template-columns: 1fr 420px;
      gap: 34px;
      align-items: center;
      padding: 28px;
    }

    .showcase {
      background: linear-gradient(180deg, rgba(255,255,255,0.02), transparent);
      border-radius: var(--radius);
      padding: 36px;
      backdrop-filter: blur(var(--glass-blur));
      box-shadow: 0 10px 30px rgba(1,1,1,0.6), 0 2px 0 rgba(255,204,0,0.02) inset;
      border: 1px solid rgba(255,255,255,0.02);
      min-height: 360px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      gap: 18px;
    }

    .shield {
      width: 86px;
      height: 86px;
      display: grid;
      place-items: center;
      background: linear-gradient(135deg, var(--gold), var(--gold-dark));
      border-radius: 16px;
      box-shadow: 0 8px 28px rgba(255, 204, 0, 0.25), 0 1px 0 rgba(255,255,255,0.06) inset;
      margin-bottom: 6px;
    }

    .brand {
      display: flex;
      gap: 14px;
      align-items: center;
    }

    .brand h1 {
      font-size: 28px;
      letter-spacing: 2px;
      margin: 0;
      color: var(--gold);
      font-weight: 700;
      text-transform: uppercase;
    }

    .tag {
      color: var(--muted);
      font-size: 14px;
    }

    .showcase p {
      color: #dcdcdc;
      line-height: 1.5;
      font-size: 15px;
      margin-top: 10px;
    }

    .specs {
      display: flex;
      gap: 14px;
      margin-top: 18px;
      flex-wrap: wrap;
    }

    .spec {
      background: rgba(255, 255, 255, 0.02);
      padding: 12px 14px;
      border-radius: 10px;
      font-size: 13px;
      color: var(--muted);
      display: flex;
      gap: 10px;
      align-items: center;
    }

    .spec svg {
      color: var(--gold);
    }

    .card {
      background: linear-gradient(180deg, rgba(255,255,255,0.01), rgba(255,255,255,0.015));
      border-radius: var(--radius);
      padding: 34px;
      backdrop-filter: blur(6px);
      box-shadow: 0 10px 40px rgba(0,0,0,0.6);
      border: 1px solid rgba(255,255,255,0.03);
    }

    .card h2 {
      margin: 0 0 6px;
      font-size: 20px;
      color: #fff;
    }

    .card p.lead {
      margin: 0 0 18px;
      color: var(--muted);
      font-size: 13px;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 14px;
    }

    .field {
      position: relative;
    }

    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 14px 14px 14px 44px;
      border-radius: 10px;
      border: 1px solid rgba(255, 255, 255, 0.04);
      background: linear-gradient(180deg, rgba(255,255,255,0.012), rgba(255,255,255,0.006));
      color: #fff;
      font-size: 15px;
      outline: none;
      transition: 0.18s;
    }

    input:focus {
      border-color: var(--gold);
      box-shadow: 0 6px 30px rgba(255, 204, 0, 0.12), 0 0 0 4px rgba(255, 204, 0, 0.06);
    }

    .input-icon {
      position: absolute;
      top: 50%;
      left: 12px;
      transform: translateY(-50%);
      color: var(--gold);
    }

    .row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 10px;
    }

    .remember {
      display: flex;
      gap: 10px;
      align-items: center;
      color: var(--muted);
      font-size: 14px;
    }

    .remember input {
      width: 16px;
      height: 16px;
    }

    .link {
      color: var(--gold);
      font-size: 13px;
      text-decoration: none;
    }

    .link:hover {
      text-decoration: underline;
      color: var(--gold-dark);
    }

    .btn {
      width: 100%;
      padding: 13px;
      background: linear-gradient(90deg, var(--gold), var(--gold-dark));
      border: none;
      color: #111;
      font-weight: 700;
      border-radius: 10px;
      cursor: pointer;
      font-size: 15px;
      box-shadow: 0 10px 32px rgba(255, 204, 0, 0.25);
      transition: transform 0.1s ease;
    }

    .btn:hover {
      filter: brightness(1.05);
    }

    .btn:active {
      transform: translateY(1px);
    }

    .subtle {
      font-size: 13px;
      color: var(--muted);
      text-align: center;
      margin-top: 12px;
    }

    @media (max-width: 900px) {
      .wrap {
        grid-template-columns: 1fr;
        max-width: 480px;
      }

      .showcase {
        order: 2;
      }

      .card {
        order: 1;
      }
    }

  </style>
</head>
<body>

  <div class="wrap">
    <!-- Showcase -->
    <section class="showcase">
      <div class="brand">
        <div class="shield">
          <!-- SVG ícone -->
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none">
            <path d="M3 9.5C3 9.5 5 6 12 6s9 3.5 9 3.5v6c0 2-1.5 3-1.5 3H4.5S3 17.5 3 15.5v-6z" fill="#111"/>
            <circle cx="7.5" cy="15" r="1.6" fill="#111"/>
            <circle cx="16.5" cy="15" r="1.6" fill="#111"/>
          </svg>
        </div>
        <div>
          <h1>CarsPlace</h1>
          <div class="tag">Marketplace & Gestão — Premium</div>
        </div>
      </div>
      <p>
        Plataforma segura para acesso ao sistema de veículos. Interface pensada para experiência premium e confiança.
      </p>
      <div class="specs">
        <div class="spec">
          <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l7 3v5c0 5-3.5 9.5-7 11-3.5-1.5-7-6-7-11V5l7-3z"/></svg>
          Segurança
        </div>
        <div class="spec">
          <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M3 12h18"/></svg>
          Estabilidade
        </div>
        <div class="spec">
          <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2v20"/></svg>
          Design Premium
        </div>
      </div>
    </section>

    <!-- Formulário -->
    <aside class="card">
      <h2>Entrar na sua conta</h2>
      <p class="lead">Use o e-mail corporativo para acessar a plataforma CarsPlace.</p>

      <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <div class="field">
          <span class="input-icon">
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M3 8.5l9 6 9-6"/></svg>
          </span>
          <input id="email" name="email" type="email" placeholder="seu@carsplace.com" required autocomplete="username">
        </div>

        <!-- Password -->
        <div class="field">
          <span class="input-icon">
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="10" rx="2"/><path d="M7 11V8a5 5 0 0 1 10 0v3"/></svg>
          </span>
          <input id="password" name="password" type="password" placeholder="••••••••" required autocomplete="current-password">
        </div>

        <div class="row">
          <label class="remember"><input type="checkbox" name="remember"> Lembrar de mim</label>
          <a class="link" href="{{ route('password.request') }}">Esqueceu a senha?</a>
        </div>

        <button type="submit" class="btn">Entrar</button>

        <div class="row">
          <a class="link" href="{{ route('register') }}">Não tem conta?</a>
        </div>
      </form>
    </aside>
  </div>

</body>
</html>
