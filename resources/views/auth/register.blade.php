<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Cadastro — CarsPlace</title>
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
      box-shadow: 0 10px 30px rgba(1,1,1,0.6);
      border: 1px solid rgba(255,255,255,0.02);
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
      box-shadow: 0 8px 28px rgba(255, 204, 0, 0.25);
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
      box-shadow:
        0 0 0 1px rgba(255, 204, 0, 0.15),
        0 0 12px rgba(255, 204, 0, 0.08),
        0 10px 40px rgba(0,0,0,0.6);
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

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 14px;
      border-radius: 10px;
      border: 1px solid rgba(255, 204, 0, 0.3);
      background: linear-gradient(180deg, rgba(255,255,255,0.012), rgba(255,255,255,0.006));
      color: #fff;
      font-size: 15px;
      outline: none;
      box-shadow: 0 0 6px rgba(255, 204, 0, 0.15);
      transition: 0.18s;
    }

    input:focus {
      border-color: var(--gold);
      box-shadow:
        0 0 0 2px rgba(255, 204, 0, 0.3),
        0 0 14px rgba(255, 204, 0, 0.15),
        0 6px 30px rgba(255, 204, 0, 0.12);
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

    .link {
      color: var(--gold);
      font-size: 13px;
      text-decoration: none;
      text-align: right;
    }

    .link:hover {
      color: var(--gold-dark);
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

    <!-- Vitrine -->
    <section class="showcase">
      <div class="brand">
        <div class="shield">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none">
            <path d="M3 9.5C3 9.5 5 6 12 6s9 3.5 9 3.5v6c0 2-1.5 3-1.5 3H4.5S3 17.5 3 15.5v-6z" fill="#111"/>
            <circle cx="7.5" cy="15" r="1.6" fill="#111"/>
            <circle cx="16.5" cy="15" r="1.6" fill="#111"/>
          </svg>
        </div>
        <div>
          <h1>CarsPlace</h1>
          <div class="tag">Sua garagem digital</div>
        </div>
      </div>
      <p>Cadastre-se para acessar o sistema exclusivo da CarsPlace, pensado para conforto, segurança e desempenho.</p>
      <div class="specs">
        <div class="spec">🚘 Gerencie seu estoque</div>
        <div class="spec">💼 Atendimento exclusivo</div>
      </div>
    </section>

    <!-- Formulário -->
    <aside class="card">
      <h2>Criar conta</h2>
      <p class="lead">Preencha os campos para se cadastrar.</p>

      <form method="POST" action="{{ route('register') }}">
        @csrf

        <input type="text" name="name" placeholder="Nome completo" value="{{ old('name') }}" required autofocus>
        <x-input-error :messages="$errors->get('name')" class="mt-2" />

        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
        <x-input-error :messages="$errors->get('email')" class="mt-2" />

        <input type="password" name="password" placeholder="Senha" required>
        <x-input-error :messages="$errors->get('password')" class="mt-2" />

        <input type="password" name="password_confirmation" placeholder="Confirmar senha" required>
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

        <button type="submit" class="btn">Cadastrar</button>

        <div class="subtle">
          Já possui conta? <a href="{{ route('login') }}" class="link">Fazer login</a>
        </div>
      </form>
    </aside>

  </div>

</body>
</html>
