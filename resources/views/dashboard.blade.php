<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Dashboard - Loja de Carros</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');

  /* Reset */
  * {
    margin: 0; padding: 0; box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
  }

  body {
    display: flex;
    min-height: 100vh;
    overflow: hidden;
    transition: background-color 0.3s ease, color 0.3s ease;
  }

  nav.sidebar {
    width: 260px;
    display: flex;
    flex-direction: column;
    padding: 2rem 1.5rem;
    box-shadow: 2px 0 20px rgba(210, 176, 76, 0.3);
    transition: background-color 0.3s ease, color 0.3s ease;
  }

  nav.sidebar h1 {
    font-weight: 700;
    font-size: 1.8rem;
    letter-spacing: 3px;
    margin-bottom: 2.5rem;
    user-select: none;
    transition: color 0.3s ease;
  }

  nav.sidebar a {
    text-decoration: none;
    padding: 1rem 1.2rem;
    border-radius: 8px;
    margin-bottom: 1rem;
    font-weight: 600;
    transition: background-color 0.3s ease, color 0.3s ease;
    display: block;
    cursor: pointer;
  }

  nav.sidebar a.active,
  nav.sidebar a:hover {
    background-color: var(--gold);
    color: var(--bg);
  }

  main {
    flex-grow: 1;
    padding: 2.5rem 3rem;
    overflow-y: auto;
    transition: background-color 0.3s ease, color 0.3s ease;
  }

  header.dashboard-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 3rem;
  }

  header.dashboard-header h2 {
    font-weight: 700;
    font-size: 2.6rem;
    letter-spacing: 2px;
    transition: color 0.3s ease;
  }

  header.dashboard-header div {
    font-weight: 500;
    font-size: 1.1rem;
  }

  .cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
  }

  .card {
    border-radius: 12px;
    padding: 1.8rem 2rem;
    box-shadow: 0 2px 12px rgba(210, 176, 76, 0.15);
    transition: box-shadow 0.3s ease, background-color 0.3s ease, color 0.3s ease;
    cursor: default;
  }

  .card:hover {
    box-shadow: 0 8px 24px rgba(210, 176, 76, 0.35);
  }

  .card h3 {
    font-weight: 700;
    font-size: 1.3rem;
    margin-bottom: 0.7rem;
    letter-spacing: 1px;
    transition: color 0.3s ease;
  }

  .card p {
    font-size: 2rem;
    font-weight: 700;
    transition: color 0.3s ease;
  }

  section table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 12px;
  }

  thead tr {
    font-weight: 700;
    font-size: 1rem;
    letter-spacing: 1.2px;
    transition: color 0.3s ease;
  }

  thead th {
    padding: 1rem 1.5rem;
    text-align: left;
  }

  tbody tr {
    border-radius: 10px;
    box-shadow: 0 1px 8px rgba(0,0,0,0.6);
    transition: background-color 0.25s ease;
  }

  tbody tr:hover {
    background-color: var(--hover-bg);
  }

  tbody td {
    padding: 1rem 1.5rem;
    transition: color 0.3s ease;
  }

  /* Scrollbar */
  main::-webkit-scrollbar {
    width: 8px;
  }
  main::-webkit-scrollbar-track {
    background: var(--bg);
  }
  main::-webkit-scrollbar-thumb {
    background: var(--gold);
    border-radius: 10px;
  }

  /* Toggle button */
  .toggle-theme {
    background: transparent;
    border: 2px solid var(--gold);
    border-radius: 20px;
    color: var(--gold);
    padding: 0.4rem 1rem;
    font-weight: 600;
    cursor: pointer;
    user-select: none;
    transition: background-color 0.3s ease, color 0.3s ease;
  }

  .toggle-theme:hover {
    background-color: var(--gold);
    color: var(--bg);
  }


  /* ----------- DARK THEME ----------- */
  body.dark {
    --bg: #0d0d0d;
    --bg-secondary: #1c1c1c;
    --bg-card: #1f1f1f;
    --text-primary: #d2b04c;
    --text-secondary: #eee8aa;
    --text-muted: #ccc9a8;
    --hover-bg: #292929;
    --gold: #d2b04c;
  }

  body.dark nav.sidebar {
    background-color: var(--bg-secondary);
    color: #f3d66a; /* dourado mais claro e vibrante */
  }

  body.dark nav.sidebar h1,
  body.dark nav.sidebar a {
    color: #f3d66a;
    text-shadow: 0 0 5px rgba(243, 214, 106, 0.7);
  }

  body.dark nav.sidebar a.active,
  body.dark nav.sidebar a:hover {
    background-color: #f3d66a;
    color: var(--bg);
    box-shadow: 0 0 8px #f3d66a;
  }

  body.dark main {
    background-color: #141414;
    color: var(--text-secondary);
  }

  body.dark header.dashboard-header h2 {
    color: var(--text-primary);
  }

  body.dark header.dashboard-header div {
    color: var(--text-muted);
  }

  body.dark .card {
    background-color: var(--bg-card);
    color: var(--text-secondary);
    box-shadow: 0 2px 12px rgba(210, 176, 76, 0.15);
  }

  body.dark .card:hover {
    box-shadow: 0 8px 24px rgba(210, 176, 76, 0.35);
  }

  body.dark .card h3 {
    color: var(--text-primary);
  }

  body.dark thead tr {
    color: var(--text-primary);
  }

  body.dark tbody tr {
    background-color: var(--bg-card);
    box-shadow: 0 1px 8px rgba(0,0,0,0.6);
  }

  body.dark tbody tr:hover {
    background-color: var(--hover-bg);
  }

  body.dark tbody td {
    color: var(--text-secondary);
  }

  /* ----------- LIGHT THEME ----------- */
  body.light {
    --bg: #f5f5f5;
    --bg-secondary: #eaeaea;
    --bg-card: #ffffff;
    --text-primary: #7a6200;
    --text-secondary: #5e4b00;
    --text-muted: #847a4a;
    --hover-bg: #ddd7a1;
    --gold: #a98700;
  }

  body.light nav.sidebar {
    background-color: var(--bg-secondary);
    color: var(--gold);
  }

  body.light nav.sidebar h1,
  body.light nav.sidebar a {
    color: var(--gold);
  }

  /* Corrigindo o hover e ativo da sidebar no modo claro */
  body.light nav.sidebar a.active,
  body.light nav.sidebar a:hover {
    background-color: var(--gold);
    color: var(--bg);
  }

  body.light main {
    background-color: var(--bg);
    color: var(--text-secondary);
  }

  body.light header.dashboard-header h2 {
    color: var(--text-primary);
  }

  body.light header.dashboard-header div {
    color: var(--text-muted);
  }

  body.light .card {
    background-color: var(--bg-card);
    color: var(--text-secondary);
    box-shadow: 0 2px 12px rgba(169, 135, 0, 0.15);
  }

  body.light .card:hover {
    box-shadow: 0 8px 24px rgba(169, 135, 0, 0.35);
  }

  body.light .card h3 {
    color: var(--text-primary);
  }

  body.light thead tr {
    color: var(--text-primary);
  }

  body.light tbody tr {
    background-color: var(--bg-card);
    box-shadow: 0 1px 8px rgba(0,0,0,0.12);
  }

  body.light tbody tr:hover {
    background-color: var(--hover-bg);
  }

  body.light tbody td {
    color: var(--text-secondary);
  }
</style>
</head>
<body class="dark">

<nav class="sidebar">
  <img style="width: 175px ; margin-left: 15px; margin-bottom: 15px;" src="katas.png" alt="">
  <a href="#" class="active">Dashboard</a>
  <a href="#">Veículos</a>
  <a href="#">Clientes</a>
  <a href="#">Vendas</a>
  <a href="#">Relatórios</a>
  <a href="#">Configurações</a>
</nav>

<main>
  <header class="dashboard-header">
    <h2>Dashboard</h2>
    <div>
      Bem-vindo, <strong>Usuário</strong>
      <button class="toggle-theme" aria-label="Alternar tema">Modo Claro</button>
    </div>
  </header>

  <section class="cards">
    <div class="card">
      <h3>Carros em Estoque</h3>
      <p>128</p>
    </div>
    <div class="card">
      <h3>Vendas Hoje</h3>
      <p>25</p>
    </div>
    <div class="card">
      <h3>Receita Mensal</h3>
      <p>R$ 85.400</p>
    </div>
    <div class="card">
      <h3>Clientes Ativos</h3>
      <p>342</p>
    </div>
  </section>

  <section>
    <h3 style="color: var(--gold); margin-bottom: 1rem; letter-spacing: 1.2px;">Últimas Vendas</h3>
    <table>
      <thead>
        <tr>
          <th>Carro</th>
          <th>Dono</th>
          <th>Data</th>
          <th>Preço</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Honda Civic</td>
          <td>João Silva</td>
          <td>12/10/2025</td>
          <td>R$ 85.000</td>
          <td>Concluído</td>
        </tr>
        <tr>
          <td>Ford Mustang</td>
          <td>Maria Oliveira</td>
          <td>11/10/2025</td>
          <td>R$ 250.000</td>
          <td>Concluído</td>
        </tr>
        <tr>
          <td>Toyota Corolla</td>
          <td>Vinicius Tardelli</td>
          <td>10/10/2025</td>
          <td>R$ 90.000</td>
          <td>Pendente</td>
        </tr>
        <tr>
          <td>Chevrolet Camaro</td>
          <td>Ana Pereira</td>
          <td>09/10/2025</td>
          <td>R$ 230.000</td>
          <td>Concluído</td>
        </tr>
      </tbody>
    </table>
  </section>
</main>

<script>
  const btn = document.querySelector('.toggle-theme');
  const body = document.body;

  btn.addEventListener('click', () => {
    if (body.classList.contains('dark')) {
      body.classList.replace('dark', 'light');
      btn.textContent = 'Modo Escuro';
    } else {
      body.classList.replace('light', 'dark');
      btn.textContent = 'Modo Claro';
    }
  });
</script>

</body>
</html>
