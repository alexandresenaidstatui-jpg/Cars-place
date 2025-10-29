<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarsPlace - Venda de Carros</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary-black: #121212;
            --secondary-black: #1e1e1e;
            --accent-gold: #d4af37;
            --light-gold: #f4e4a6;
            --text-light: #f5f5f5;
            --text-gray: #b0b0b0;
            --border-color: #333;
        }

        body {
            background-color: var(--primary-black);
            color: var(--text-light);
            line-height: 1.6;
        }

        /* Header */
        header {
            background-color: var(--primary-black);
            padding: 15px 5%;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            position: sticky;
            top: 0;
            z-index: 100;
            border-bottom: 1px solid var(--border-color);
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo h1 {
            font-size: 28px;
            font-weight: 700;
            background: linear-gradient(to right, var(--accent-gold), var(--light-gold));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .logo i {
            color: var(--accent-gold);
            font-size: 24px;
        }

        .search-bar {
            flex: 1;
            max-width: 500px;
            margin: 0 20px;
            position: relative;
        }

        .search-bar input {
            width: 100%;
            padding: 12px 20px;
            border-radius: 30px;
            border: 1px solid var(--border-color);
            background-color: var(--secondary-black);
            color: var(--text-light);
            font-size: 16px;
        }

        .search-bar button {
            position: absolute;
            right: 5px;
            top: 5px;
            background-color: var(--accent-gold);
            border: none;
            border-radius: 50%;
            width: 36px;
            height: 36px;
            cursor: pointer;
            color: var(--primary-black);
        }

        .user-actions a {
            color: var(--text-light);
            text-decoration: none;
            margin-left: 20px;
            font-weight: 500;
            transition: color 0.3s;
        }

        .user-actions a:hover {
            color: var(--accent-gold);
        }

        /* Navigation */
        nav {
            background-color: var(--secondary-black);
            padding: 15px 5%;
            border-bottom: 1px solid var(--border-color);
        }

        .nav-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-links {
            display: flex;
            gap: 25px;
        }

        .nav-links a {
            color: var(--text-light);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
            position: relative;
        }

        .nav-links a:hover {
            color: var(--accent-gold);
        }

        .nav-links a.active {
            color: var(--accent-gold);
        }

        .nav-links a.active::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: var(--accent-gold);
        }

        .filter-toggle {
            background-color: var(--accent-gold);
            color: var(--primary-black);
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                        url('https://images.unsplash.com/photo-1494976388531-d1058494cdd8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 0 20px;
        }

        .hero-content {
            max-width: 800px;
        }

        .hero h2 {
            font-size: 42px;
            margin-bottom: 20px;
            color: var(--text-light);
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 30px;
            color: var(--text-gray);
        }

        .cta-button {
            background-color: var(--accent-gold);
            color: var(--primary-black);
            border: none;
            padding: 15px 30px;
            border-radius: 5px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .cta-button:hover {
            background-color: var(--light-gold);
        }

        /* Main Content */
        .container {
            max-width: 1400px;
            margin: 40px auto;
            padding: 0 20px;
            display: flex;
            gap: 30px;
        }

        /* Filters */
        .filters {
            width: 280px;
            background-color: var(--secondary-black);
            border-radius: 10px;
            padding: 20px;
            height: fit-content;
        }

        .filter-section {
            margin-bottom: 25px;
            border-bottom: 1px solid var(--border-color);
            padding-bottom: 20px;
        }

        .filter-section:last-child {
            border-bottom: none;
        }

        .filter-section h3 {
            font-size: 18px;
            margin-bottom: 15px;
            color: var(--accent-gold);
        }

        .filter-options {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .filter-option {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .filter-option input[type="checkbox"] {
            accent-color: var(--accent-gold);
        }

        .filter-option label {
            cursor: pointer;
        }

        .price-range {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .price-input {
            width: 45%;
            padding: 8px;
            background-color: var(--primary-black);
            border: 1px solid var(--border-color);
            border-radius: 5px;
            color: var(--text-light);
        }

        /* Car Listings */
        .car-listings {
            flex: 1;
        }

        .listings-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .listings-header h2 {
            font-size: 24px;
        }

        .sort-options select {
            background-color: var(--secondary-black);
            color: var(--text-light);
            border: 1px solid var(--border-color);
            padding: 8px 15px;
            border-radius: 5px;
        }

        .car-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
        }

        .car-card {
            background-color: var(--secondary-black);
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .car-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .car-image {
            height: 200px;
            background-color: #2a2a2a;
            position: relative;
            overflow: hidden;
        }

        .car-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .car-card:hover .car-image img {
            transform: scale(1.05);
        }

        .car-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: var(--accent-gold);
            color: var(--primary-black);
            padding: 5px 10px;
            border-radius: 3px;
            font-size: 12px;
            font-weight: 600;
        }

        .car-info {
            padding: 20px;
        }

        .car-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
        }

        .car-price {
            color: var(--accent-gold);
            font-weight: 700;
        }

        .car-details {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
            color: var(--text-gray);
            font-size: 14px;
        }

        .car-detail {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .car-location {
            display: flex;
            align-items: center;
            gap: 5px;
            color: var(--text-gray);
            font-size: 14px;
            margin-bottom: 15px;
        }

        .car-actions {
            display: flex;
            gap: 10px;
        }

        .car-button {
            flex: 1;
            padding: 10px;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            text-align: center;
            transition: all 0.3s;
        }

        .primary-button {
            background-color: var(--accent-gold);
            color: var(--primary-black);
            border: none;
        }

        .primary-button:hover {
            background-color: var(--light-gold);
        }

        .secondary-button {
            background-color: transparent;
            color: var(--text-light);
            border: 1px solid var(--border-color);
        }

        .secondary-button:hover {
            border-color: var(--accent-gold);
            color: var(--accent-gold);
        }

        /* Footer */
        footer {
            background-color: var(--secondary-black);
            padding: 50px 5% 20px;
            margin-top: 50px;
            border-top: 1px solid var(--border-color);
        }

        .footer-container {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
        }

        .footer-column h3 {
            font-size: 18px;
            margin-bottom: 20px;
            color: var(--accent-gold);
        }

        .footer-links {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .footer-links a {
            color: var(--text-gray);
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: var(--accent-gold);
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            color: var(--text-gray);
            font-size: 20px;
            transition: color 0.3s;
        }

        .social-links a:hover {
            color: var(--accent-gold);
        }

        .footer-bottom {
            max-width: 1400px;
            margin: 40px auto 0;
            padding-top: 20px;
            border-top: 1px solid var(--border-color);
            text-align: center;
            color: var(--text-gray);
            font-size: 14px;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .footer-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }
            
            .filters {
                width: 100%;
            }
            
            .header-container {
                flex-direction: column;
                gap: 15px;
            }
            
            .search-bar {
                max-width: 100%;
                margin: 10px 0;
            }
            
            .nav-container {
                flex-direction: column;
                gap: 15px;
            }
            
            .hero h2 {
                font-size: 32px;
            }
        }

        @media (max-width: 480px) {
            .car-grid {
                grid-template-columns: 1fr;
            }
            
            .footer-container {
                grid-template-columns: 1fr;
            }
            
            .hero h2 {
                font-size: 28px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="header-container">
            <div class="logo">
                <i class="fas fa-car"></i>
                <h1>CarsPlace</h1>
            </div>
            <div class="search-bar">
                <input type="text" placeholder="Buscar carro, marca, modelo...">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="user-actions">
                <a href="#"><i class="fas fa-heart"></i> Favoritos</a>
                <a href="#"><i class="fas fa-user"></i> Minha Conta</a>
                <a href="#"><i class="fas fa-plus"></i> Anunciar</a>
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav>
        <div class="nav-container">
            <div class="nav-links">
                <a href="#" class="active">Comprar Carros</a>
                <a href="#">Vender Carro</a>
                <a href="#">Financiamento</a>
                <a href="#">Seguro</a>
                <a href="#">Avaliações</a>
            </div>
            <button class="filter-toggle">
                <i class="fas fa-sliders-h"></i> Filtros
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h2>Encontre o carro dos seus sonhos</h2>
            <p>Mais de 50.000 carros novos e usados disponíveis para você</p>
            <button class="cta-button">Ver Ofertas</button>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container">
        <!-- Filters -->
        <aside class="filters">
            <div class="filter-section">
                <h3>Marca</h3>
                <div class="filter-options">
                    <div class="filter-option">
                        <input type="checkbox" id="toyota">
                        <label for="toyota">Toyota</label>
                    </div>
                    <div class="filter-option">
                        <input type="checkbox" id="honda">
                        <label for="honda">Honda</label>
                    </div>
                    <div class="filter-option">
                        <input type="checkbox" id="volkswagen">
                        <label for="volkswagen">Volkswagen</label>
                    </div>
                    <div class="filter-option">
                        <input type="checkbox" id="ford">
                        <label for="ford">Ford</label>
                    </div>
                    <div class="filter-option">
                        <input type="checkbox" id="chevrolet">
                        <label for="chevrolet">Chevrolet</label>
                    </div>
                </div>
            </div>

            <div class="filter-section">
                <h3>Preço</h3>
                <div class="price-range">
                    <input type="text" class="price-input" placeholder="Mínimo">
                    <input type="text" class="price-input" placeholder="Máximo">
                </div>
            </div>

            <div class="filter-section">
                <h3>Ano</h3>
                <div class="filter-options">
                    <div class="filter-option">
                        <input type="checkbox" id="2020-2023">
                        <label for="2020-2023">2020 - 2023</label>
                    </div>
                    <div class="filter-option">
                        <input type="checkbox" id="2015-2019">
                        <label for="2015-2019">2015 - 2019</label>
                    </div>
                    <div class="filter-option">
                        <input type="checkbox" id="2010-2014">
                        <label for="2010-2014">2010 - 2014</label>
                    </div>
                    <div class="filter-option">
                        <input type="checkbox" id="2005-2009">
                        <label for="2005-2009">2005 - 2009</label>
                    </div>
                </div>
            </div>

            <div class="filter-section">
                <h3>Combustível</h3>
                <div class="filter-options">
                    <div class="filter-option">
                        <input type="checkbox" id="gasolina">
                        <label for="gasolina">Gasolina</label>
                    </div>
                    <div class="filter-option">
                        <input type="checkbox" id="alcool">
                        <label for="alcool">Álcool</label>
                    </div>
                    <div class="filter-option">
                        <input type="checkbox" id="flex">
                        <label for="flex">Flex</label>
                    </div>
                    <div class="filter-option">
                        <input type="checkbox" id="diesel">
                        <label for="diesel">Diesel</label>
                    </div>
                    <div class="filter-option">
                        <input type="checkbox" id="eletrico">
                        <label for="eletrico">Elétrico</label>
                    </div>
                </div>
            </div>

            <div class="filter-section">
                <h3>Câmbio</h3>
                <div class="filter-options">
                    <div class="filter-option">
                        <input type="checkbox" id="automatico">
                        <label for="automatico">Automático</label>
                    </div>
                    <div class="filter-option">
                        <input type="checkbox" id="manual">
                        <label for="manual">Manual</label>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Car Listings -->
        <main class="car-listings">
            <div class="listings-header">
                <h2>Carros em Destaque</h2>
                <div class="sort-options">
                    <select>
                        <option>Ordenar por: Mais Relevantes</option>
                        <option>Menor Preço</option>
                        <option>Maior Preço</option>
                        <option>Mais Novos</option>
                        <option>Menor Quilometragem</option>
                    </select>
                </div>
            </div>

            <div class="car-grid">
                <!-- Car 1 -->
                <div class="car-card">
                    <div class="car-image">
                        <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Toyota Corolla">
                        <div class="car-badge">Novo</div>
                    </div>
                    <div class="car-info">
                        <div class="car-title">
                            <span>Toyota Corolla</span>
                            <span class="car-price">R$ 125.900</span>
                        </div>
                        <div class="car-details">
                            <div class="car-detail">
                                <i class="fas fa-calendar-alt"></i> 2022
                            </div>
                            <div class="car-detail">
                                <i class="fas fa-tachometer-alt"></i> 15.000 km
                            </div>
                            <div class="car-detail">
                                <i class="fas fa-gas-pump"></i> Flex
                            </div>
                        </div>
                        <div class="car-location">
                            <i class="fas fa-map-marker-alt"></i> São Paulo, SP
                        </div>
                        <div class="car-actions">
                            <button class="car-button primary-button">Ver Detalhes</button>
                            <button class="car-button secondary-button">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Car 2 -->
                <div class="car-card">
                    <div class="car-image">
                        <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Chevrolet Onix">
                        <div class="car-badge">Semi-novo</div>
                    </div>
                    <div class="car-info">
                        <div class="car-title">
                            <span>Chevrolet Onix</span>
                            <span class="car-price">R$ 68.500</span>
                        </div>
                        <div class="car-details">
                            <div class="car-detail">
                                <i class="fas fa-calendar-alt"></i> 2020
                            </div>
                            <div class="car-detail">
                                <i class="fas fa-tachometer-alt"></i> 32.000 km
                            </div>
                            <div class="car-detail">
                                <i class="fas fa-gas-pump"></i> Flex
                            </div>
                        </div>
                        <div class="car-location">
                            <i class="fas fa-map-marker-alt"></i> Rio de Janeiro, RJ
                        </div>
                        <div class="car-actions">
                            <button class="car-button primary-button">Ver Detalhes</button>
                            <button class="car-button secondary-button">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Car 3 -->
                <div class="car-card">
                    <div class="car-image">
                        <img src="https://images.unsplash.com/photo-1603584173870-7f23fdae1b7a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" alt="Honda Civic">
                        <div class="car-badge">Novo</div>
                    </div>
                    <div class="car-info">
                        <div class="car-title">
                            <span>Honda Civic</span>
                            <span class="car-price">R$ 142.000</span>
                        </div>
                        <div class="car-details">
                            <div class="car-detail">
                                <i class="fas fa-calendar-alt"></i> 2023
                            </div>
                            <div class="car-detail">
                                <i class="fas fa-tachometer-alt"></i> 8.000 km
                            </div>
                            <div class="car-detail">
                                <i class="fas fa-gas-pump"></i> Flex
                            </div>
                        </div>
                        <div class="car-location">
                            <i class="fas fa-map-marker-alt"></i> Belo Horizonte, MG
                        </div>
                        <div class="car-actions">
                            <button class="car-button primary-button">Ver Detalhes</button>
                            <button class="car-button secondary-button">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Car 4 -->
                <div class="car-card">
                    <div class="car-image">
                        <img src="https://images.unsplash.com/photo-1621007947382-bb3c3994e3fb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Volkswagen Golf">
                        <div class="car-badge">Semi-novo</div>
                    </div>
                    <div class="car-info">
                        <div class="car-title">
                            <span>Volkswagen Golf</span>
                            <span class="car-price">R$ 95.800</span>
                        </div>
                        <div class="car-details">
                            <div class="car-detail">
                                <i class="fas fa-calendar-alt"></i> 2019
                            </div>
                            <div class="car-detail">
                                <i class="fas fa-tachometer-alt"></i> 45.000 km
                            </div>
                            <div class="car-detail">
                                <i class="fas fa-gas-pump"></i> Gasolina
                            </div>
                        </div>
                        <div class="car-location">
                            <i class="fas fa-map-marker-alt"></i> Curitiba, PR
                        </div>
                        <div class="car-actions">
                            <button class="car-button primary-button">Ver Detalhes</button>
                            <button class="car-button secondary-button">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Car 5 -->
                <div class="car-card">
                    <div class="car-image">
                        <img src="https://images.unsplash.com/photo-1621390533795-40333d195d06?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Ford Ranger">
                        <div class="car-badge">Novo</div>
                    </div>
                    <div class="car-info">
                        <div class="car-title">
                            <span>Ford Ranger</span>
                            <span class="car-price">R$ 189.900</span>
                        </div>
                        <div class="car-details">
                            <div class="car-detail">
                                <i class="fas fa-calendar-alt"></i> 2022
                            </div>
                            <div class="car-detail">
                                <i class="fas fa-tachometer-alt"></i> 22.000 km
                            </div>
                            <div class="car-detail">
                                <i class="fas fa-gas-pump"></i> Diesel
                            </div>
                        </div>
                        <div class="car-location">
                            <i class="fas fa-map-marker-alt"></i> Brasília, DF
                        </div>
                        <div class="car-actions">
                            <button class="car-button primary-button">Ver Detalhes</button>
                            <button class="car-button secondary-button">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Car 6 -->
                <div class="car-card">
                    <div class="car-image">
                        <img src="https://images.unsplash.com/photo-1593941707882-a5bba533b69d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1472&q=80" alt="BMW Série 3">
                        <div class="car-badge">Importado</div>
                    </div>
                    <div class="car-info">
                        <div class="car-title">
                            <span>BMW Série 3</span>
                            <span class="car-price">R$ 245.000</span>
                        </div>
                        <div class="car-details">
                            <div class="car-detail">
                                <i class="fas fa-calendar-alt"></i> 2021
                            </div>
                            <div class="car-detail">
                                <i class="fas fa-tachometer-alt"></i> 18.000 km
                            </div>
                            <div class="car-detail">
                                <i class="fas fa-gas-pump"></i> Gasolina
                            </div>
                        </div>
                        <div class="car-location">
                            <i class="fas fa-map-marker-alt"></i> Porto Alegre, RS
                        </div>
                        <div class="car-actions">
                            <button class="car-button primary-button">Ver Detalhes</button>
                            <button class="car-button secondary-button">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <h3>CarsPlace</h3>
                <div class="footer-links">
                    <a href="#">Sobre Nós</a>
                    <a href="#">Carreiras</a>
                    <a href="#">Contato</a>
                    <a href="#">Imprensa</a>
                    <a href="#">Blog</a>
                </div>
            </div>
            <div class="footer-column">
                <h3>Para Compradores</h3>
                <div class="footer-links">
                    <a href="#">Como Comprar</a>
                    <a href="#">Financiamento</a>
                    <a href="#">Seguro Auto</a>
                    <a href="#">Perguntas Frequentes</a>
                    <a href="#">Avaliações de Carros</a>
                </div>
            </div>
            <div class="footer-column">
                <h3>Para Vendedores</h3>
                <div class="footer-links">
                    <a href="#">Como Vender</a>
                    <a href="#">Anunciar Carro</a>
                    <a href="#">Planos e Preços</a>
                    <a href="#">Dicas para Vender</a>
                    <a href="#">Consultoria</a>
                </div>
            </div>
            <div class="footer-column">
                <h3>Contato</h3>
                <div class="footer-links">
                    <a href="#"><i class="fas fa-phone"></i> (11) 4000-2000</a>
                    <a href="#"><i class="fas fa-envelope"></i> contato@carsplace.com</a>
                    <a href="#"><i class="fas fa-map-marker-alt"></i> Av. Paulista, 1000 - São Paulo, SP</a>
                </div>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2023 CarsPlace - Todos os direitos reservados</p>
        </div>
    </footer>

    <script>
        // Adicionar funcionalidade básica aos botões de favoritos
        document.querySelectorAll('.secondary-button').forEach(button => {
            button.addEventListener('click', function() {
                const icon = this.querySelector('i');
                if (icon.classList.contains('fas')) {
                    icon.classList.remove('fas');
                    icon.classList.add('far');
                } else {
                    icon.classList.remove('far');
                    icon.classList.add('fas');
                }
            });
        });
    </script>
</body>
</html>