<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars Place - Estoque em Tabela</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            transition: background-color 0.3s, color 0.3s, border-color 0.3s;
        }
        
        body {
            background-color: #0a0a0a;
            color: #f5f5f5;
            line-height: 1.6;
        }
        
        body.light-mode {
            background-color: #f8f9fa;
            color: #2c3e50;
        }
        
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 20px;
        }
        
        header {
            background: linear-gradient(135deg, #000000, #1a1a1a);
            color: #D4AF37;
            padding: 25px 0;
            text-align: center;
            border-bottom: 3px solid #D4AF37;
            box-shadow: 0 4px 15px rgba(212, 175, 55, 0.2);
            position: relative;
        }
        
        .light-mode header {
            background: linear-gradient(135deg, #2c3e50, #34495e);
            color: #D4AF37;
            border-bottom: 3px solid #D4AF37;
            box-shadow: 0 4px 15px rgba(44, 62, 80, 0.1);
        }
        
        .logo {
            font-size: 2.8rem;
            font-weight: bold;
            margin-bottom: 10px;
            text-shadow: 0 0 10px rgba(212, 175, 55, 0.5);
        }
        
        .light-mode .logo {
            text-shadow: 0 0 10px rgba(212, 175, 55, 0.3);
        }
        
        .tagline {
            font-size: 1.2rem;
            opacity: 0.9;
            color: #e0e0e0;
        }
        
        .light-mode .tagline {
            color: #ecf0f1;
        }
        
        .theme-toggle {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(212, 175, 55, 0.2);
            border: 1px solid #D4AF37;
            border-radius: 50px;
            padding: 10px 15px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            color: #D4AF37;
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .light-mode .theme-toggle {
            background: rgba(212, 175, 55, 0.15);
            border: 1px solid #D4AF37;
            color: #D4AF37;
        }
        
        .theme-toggle:hover {
            background: rgba(212, 175, 55, 0.3);
            transform: translateY(-2px);
        }
        
        .light-mode .theme-toggle:hover {
            background: rgba(212, 175, 55, 0.25);
        }
        
        .controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 25px 0;
            padding: 20px;
            background-color: #1a1a1a;
            border-radius: 10px;
            border: 1px solid #333;
        }
        
        .light-mode .controls {
            background-color: #ffffff;
            border: 1px solid #e1e8ed;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }
        
        .search-box {
            display: flex;
            align-items: center;
            gap: 10px;
            flex: 1;
            max-width: 400px;
        }
        
        .search-box i {
            color: #D4AF37;
        }
        
        .search-box input {
            flex: 1;
            padding: 12px;
            border: 1px solid #444;
            border-radius: 5px;
            background-color: #0a0a0a;
            color: #f5f5f5;
            transition: all 0.3s;
        }
        
        .light-mode .search-box input {
            background-color: #ffffff;
            color: #2c3e50;
            border: 1px solid #dce4ec;
        }
        
        .search-box input:focus {
            outline: none;
            border-color: #D4AF37;
            box-shadow: 0 0 8px rgba(212, 175, 55, 0.3);
        }
        
        .light-mode .search-box input:focus {
            border-color: #D4AF37;
            box-shadow: 0 0 8px rgba(212, 175, 55, 0.2);
        }
        
        .filters {
            display: flex;
            gap: 15px;
            align-items: center;
        }
        
        .filter-group {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
        
        .filter-label {
            font-size: 0.85rem;
            color: #D4AF37;
            font-weight: 600;
        }
        
        .light-mode .filter-label {
            color: #2c3e50;
        }
        
        .price-filter {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .price-input {
            width: 120px;
            padding: 8px 12px;
            border: 1px solid #444;
            border-radius: 5px;
            background-color: #0a0a0a;
            color: #f5f5f5;
            text-align: center;
        }
        
        .light-mode .price-input {
            background-color: #ffffff;
            color: #2c3e50;
            border: 1px solid #dce4ec;
        }
        
        .price-separator {
            color: #D4AF37;
            font-weight: bold;
        }
        
        .btn {
            background-color: #D4AF37;
            color: #000;
            border: none;
            padding: 12px 25px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        
        .btn:hover {
            background-color: #e6c04c;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(212, 175, 55, 0.4);
        }
        
        .light-mode .btn:hover {
            box-shadow: 0 5px 15px rgba(212, 175, 55, 0.3);
        }
        
        .btn-add {
            background-color: transparent;
            color: #D4AF37;
            border: 1px solid #D4AF37;
        }
        
        .light-mode .btn-add {
            background-color: transparent;
            color: #D4AF37;
            border: 1px solid #D4AF37;
        }
        
        .btn-add:hover {
            background-color: #D4AF37;
            color: #000;
        }
        
        .btn-filter {
            background-color: transparent;
            color: #D4AF37;
            border: 1px solid #D4AF37;
            padding: 8px 15px;
            font-size: 0.9rem;
        }
        
        .btn-filter:hover {
            background-color: #D4AF37;
            color: #000;
        }
        
        .table-container {
            background-color: #1a1a1a;
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid #333;
            box-shadow: 0 0 15px rgba(212, 175, 55, 0.1);
            margin-bottom: 30px;
            overflow-x: auto;
        }
        
        .light-mode .table-container {
            background-color: #ffffff;
            border: 1px solid #e1e8ed;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        thead {
            background: linear-gradient(135deg, #000000, #1a1a1a);
            border-bottom: 2px solid #D4AF37;
        }
        
        .light-mode thead {
            background: linear-gradient(135deg, #2c3e50, #34495e);
            border-bottom: 2px solid #D4AF37;
        }
        
        th {
            padding: 18px 15px;
            text-align: left;
            color: #D4AF37;
            font-weight: 600;
            font-size: 1rem;
            border-right: 1px solid #444;
        }
        
        .light-mode th {
            color: #D4AF37;
            border-right: 1px solid #4a6572;
        }
        
        th:last-child {
            border-right: none;
        }
        
        th i {
            margin-right: 8px;
        }
        
        tbody tr {
            border-bottom: 1px solid #333;
            transition: all 0.3s;
        }
        
        .light-mode tbody tr {
            border-bottom: 1px solid #e1e8ed;
        }
        
        tbody tr:hover {
            background-color: #252525;
        }
        
        .light-mode tbody tr:hover {
            background-color: #f8f9fa;
        }
        
        td {
            padding: 15px;
            border-right: 1px solid #333;
        }
        
        .light-mode td {
            border-right: 1px solid #e1e8ed;
            color: #2c3e50;
        }
        
        td:last-child {
            border-right: none;
        }
        
        .car-name {
            font-weight: 600;
            color: #D4AF37;
        }
        
        .light-mode .car-name {
            color: #2c3e50;
            font-weight: 700;
        }
        
        .car-model {
            display: inline-block;
            padding: 5px 12px;
            background-color: #333;
            border-radius: 15px;
            font-size: 0.85rem;
            color: #D4AF37;
            font-weight: 500;
        }
        
        .light-mode .car-model {
            background-color: #e1e8ed;
            color: #2c3e50;
        }
        
        .car-address {
            max-width: 200px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        
        .car-mileage {
            text-align: center;
            font-weight: 500;
        }
        
        .car-price {
            font-weight: bold;
            color: #D4AF37;
            font-size: 1.1rem;
            text-align: right;
        }
        
        .light-mode .car-price {
            color: #27ae60;
            font-weight: 700;
        }
        
        .stats {
            display: flex;
            justify-content: space-between;
            margin: 30px 0;
            background-color: #1a1a1a;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #333;
        }
        
        .light-mode .stats {
            background-color: #ffffff;
            border: 1px solid #e1e8ed;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        
        .stat-card {
            text-align: center;
            flex: 1;
            padding: 15px;
        }
        
        .stat-value {
            font-size: 2.5rem;
            font-weight: bold;
            color: #D4AF37;
            margin-bottom: 5px;
        }
        
        .light-mode .stat-value {
            color: #2c3e50;
        }
        
        .stat-label {
            color: #aaa;
            font-size: 0.9rem;
        }
        
        .light-mode .stat-label {
            color: #7f8c8d;
        }
        
        footer {
            text-align: center;
            margin-top: 50px;
            padding: 20px;
            color: #aaa;
            border-top: 1px solid #333;
        }
        
        .light-mode footer {
            color: #7f8c8d;
            border-top: 1px solid #e1e8ed;
        }
        
        .pagination {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }
        
        .page-btn {
            padding: 8px 15px;
            background-color: #1a1a1a;
            color: #f5f5f5;
            border: 1px solid #333;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .light-mode .page-btn {
            background-color: #ffffff;
            color: #2c3e50;
            border: 1px solid #e1e8ed;
        }
        
        .page-btn.active {
            background-color: #D4AF37;
            color: #000;
            border-color: #D4AF37;
        }
        
        .light-mode .page-btn.active {
            background-color: #D4AF37;
            color: #000;
        }
        
        .page-btn:hover:not(.active) {
            background-color: #333;
        }
        
        .light-mode .page-btn:hover:not(.active) {
            background-color: #f8f9fa;
        }
        
        .filter-active {
            background-color: #D4AF37 !important;
            color: #000 !important;
        }
        
        @media (max-width: 768px) {
            .controls {
                flex-direction: column;
                gap: 15px;
            }
            
            .search-box {
                max-width: 100%;
            }
            
            .filters {
                flex-direction: column;
                width: 100%;
            }
            
            .price-filter {
                justify-content: center;
            }
            
            .stats {
                flex-direction: column;
            }
            
            .stat-card {
                margin-bottom: 15px;
            }
            
            th, td {
                padding: 10px 8px;
                font-size: 0.9rem;
            }
            
            .theme-toggle {
                position: relative;
                top: auto;
                right: auto;
                margin: 10px auto;
                width: fit-content;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <button class="theme-toggle" id="theme-toggle">
                <i class="fas fa-moon"></i>
                <span>Modo Escuro</span>
            </button>
            <div class="logo">CARS PLACE</div>
            <div class="tagline">Os melhores carros com a excelência dourada</div>
        </div>
    </header>
    
    <div class="container">
        <div class="controls">
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" id="search" placeholder="Pesquisar carro...">
            </div>
            
            <div class="filters">
                <div class="filter-group">
                    <div class="filter-label">Faixa de Preço</div>
                    <div class="price-filter">
                        <input type="number" id="min-price" class="price-input" placeholder="Mínimo" min="0">
                        <span class="price-separator">-</span>
                        <input type="number" id="max-price" class="price-input" placeholder="Máximo" min="0">
                        <button class="btn btn-filter" id="apply-price-filter">
                            <i class="fas fa-filter"></i>
                        </button>
                    </div>
                </div>
                
                <div class="filter-group">
                    <div class="filter-label">Filtros Rápidos</div>
                    <div style="display: flex; gap: 8px;">
                        <button class="btn btn-filter price-quick-filter" data-min="0" data-max="100000">
                            < R$ 100k
                        </button>
                        <button class="btn btn-filter price-quick-filter" data-min="100000" data-max="200000">
                            R$ 100-200k
                        </button>
                        <button class="btn btn-filter price-quick-filter" data-min="200000" data-max="999999999">
                            > R$ 200k
                        </button>
                    </div>
                </div>
            </div>
            
            <button class="btn btn-add" id="add-car"><i class="fas fa-plus"></i> Adicionar Carro</button>
        </div>
        
        <div class="stats">
            <div class="stat-card">
                <div class="stat-value">24</div>
                <div class="stat-label">Carros em Estoque</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">R$ 2,5M</div>
                <div class="stat-label">Valor Total</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">12</div>
                <div class="stat-label">Vendidos Este Mês</div>
            </div>
        </div>
        
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th><i class="fas fa-car"></i> Nome</th>
                        <th><i class="fas fa-cog"></i> Modelo</th>
                        <th><i class="fas fa-calendar-alt"></i> Data de Fabricação</th>
                        <th><i class="fas fa-map-marker-alt"></i> Endereço</th>
                        <th><i class="fas fa-tachometer-alt"></i> Quilometragem</th>
                        <th><i class="fas fa-tag"></i> Preço</th>
                    </tr>
                </thead>
                <tbody id="cars-table-body">
                    <!-- Os carros serão inseridos aqui via JavaScript -->
                </tbody>
            </table>
        </div>
        
        <div class="pagination">
            <button class="page-btn active">1</button>
            <button class="page-btn">2</button>
            <button class="page-btn">3</button>
            <button class="page-btn"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>
    
    <footer>
        <div class="container">
            <p>Cars Place &copy; 2023 - Todos os direitos reservados</p>
        </div>
    </footer>

    <script>
        // Dados de exemplo
        const cars = [
            {
                id: 1,
                name: "BMW Série 3",
                model: "Sedan",
                manufacture: "2022-05-15",
                address: "São Paulo, SP",
                mileage: 15000,
                price: 245000
            },
            {
                id: 2,
                name: "Audi Q5",
                model: "SUV",
                manufacture: "2021-11-20",
                address: "Rio de Janeiro, RJ",
                mileage: 22000,
                price: 320000
            },
            {
                id: 3,
                name: "Mercedes Classe C",
                model: "Sedan",
                manufacture: "2023-01-10",
                address: "Belo Horizonte, MG",
                mileage: 5000,
                price: 289000
            },
            {
                id: 4,
                name: "Porsche 911",
                model: "Esportivo",
                manufacture: "2022-08-05",
                address: "Brasília, DF",
                mileage: 8000,
                price: 850000
            },
            {
                id: 5,
                name: "Land Rover Defender",
                model: "SUV",
                manufacture: "2021-12-18",
                address: "Curitiba, PR",
                mileage: 18000,
                price: 520000
            },
            {
                id: 6,
                name: "Volvo XC60",
                model: "SUV",
                manufacture: "2023-03-22",
                address: "Porto Alegre, RS",
                mileage: 3000,
                price: 375000
            },
            {
                id: 7,
                name: "Toyota Corolla",
                model: "Sedan",
                manufacture: "2022-09-12",
                address: "Salvador, BA",
                mileage: 12000,
                price: 125000
            },
            {
                id: 8,
                name: "Jeep Compass",
                model: "SUV",
                manufacture: "2023-02-28",
                address: "Fortaleza, CE",
                mileage: 7000,
                price: 195000
            },
            {
                id: 9,
                name: "Fiat Toro",
                model: "Pickup",
                manufacture: "2022-11-05",
                address: "Recife, PE",
                mileage: 14000,
                price: 145000
            },
            {
                id: 10,
                name: "Chevrolet Onix",
                model: "Hatch",
                manufacture: "2023-04-18",
                address: "Manaus, AM",
                mileage: 2500,
                price: 75000
            },
            {
                id: 11,
                name: "Hyundai HB20",
                model: "Hatch",
                manufacture: "2023-01-20",
                address: "Florianópolis, SC",
                mileage: 5000,
                price: 68000
            },
            {
                id: 12,
                name: "Ford Ranger",
                model: "Pickup",
                manufacture: "2022-08-15",
                address: "Goiânia, GO",
                mileage: 18000,
                price: 220000
            }
        ];
        
        // Elementos do DOM
        const tableBody = document.getElementById('cars-table-body');
        const searchInput = document.getElementById('search');
        const themeToggle = document.getElementById('theme-toggle');
        const themeIcon = themeToggle.querySelector('i');
        const themeText = themeToggle.querySelector('span');
        const minPriceInput = document.getElementById('min-price');
        const maxPriceInput = document.getElementById('max-price');
        const applyPriceFilter = document.getElementById('apply-price-filter');
        const priceQuickFilters = document.querySelectorAll('.price-quick-filter');
        
        // Estado dos filtros
        let currentFilters = {
            search: '',
            minPrice: null,
            maxPrice: null
        };
        
        // Verificar preferência do usuário
        const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)');
        const currentTheme = localStorage.getItem('theme');
        
        // Aplicar tema salvo ou preferência do sistema
        if (currentTheme === 'light' || (!currentTheme && !prefersDarkScheme.matches)) {
            document.body.classList.add('light-mode');
            themeIcon.className = 'fas fa-sun';
            themeText.textContent = 'Modo Claro';
        }
        
        // Alternar tema
        themeToggle.addEventListener('click', () => {
            document.body.classList.toggle('light-mode');
            
            if (document.body.classList.contains('light-mode')) {
                themeIcon.className = 'fas fa-sun';
                themeText.textContent = 'Modo Claro';
                localStorage.setItem('theme', 'light');
            } else {
                themeIcon.className = 'fas fa-moon';
                themeText.textContent = 'Modo Escuro';
                localStorage.setItem('theme', 'dark');
            }
        });
        
        // Função para aplicar filtros
        function applyFilters() {
            let filteredCars = cars.filter(car => {
                // Filtro de pesquisa
                const searchMatch = 
                    car.name.toLowerCase().includes(currentFilters.search) || 
                    car.model.toLowerCase().includes(currentFilters.search) ||
                    car.address.toLowerCase().includes(currentFilters.search);
                
                // Filtro de preço
                const priceMatch = 
                    (currentFilters.minPrice === null || car.price >= currentFilters.minPrice) &&
                    (currentFilters.maxPrice === null || car.price <= currentFilters.maxPrice);
                
                return searchMatch && priceMatch;
            });
            
            renderTable(filteredCars);
            updateStats(filteredCars);
        }
        
        // Função para renderizar a tabela
        function renderTable(carsToRender) {
            tableBody.innerHTML = '';
            
            if (carsToRender.length === 0) {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td colspan="6" style="text-align: center; padding: 40px; color: #aaa;">
                        <i class="fas fa-search" style="font-size: 2rem; margin-bottom: 10px; display: block;"></i>
                        Nenhum carro encontrado com os filtros aplicados
                    </td>
                `;
                tableBody.appendChild(row);
                return;
            }
            
            carsToRender.forEach(car => {
                const row = document.createElement('tr');
                
                // Formatar a data
                const manufactureDate = new Date(car.manufacture);
                const formattedDate = manufactureDate.toLocaleDateString('pt-BR');
                
                row.innerHTML = `
                    <td>
                        <div class="car-name">${car.name}</div>
                    </td>
                    <td>
                        <span class="car-model">${car.model}</span>
                    </td>
                    <td>${formattedDate}</td>
                    <td>
                        <div class="car-address">${car.address}</div>
                    </td>
                    <td class="car-mileage">${car.mileage.toLocaleString('pt-BR')} km</td>
                    <td class="car-price">R$ ${car.price.toLocaleString('pt-BR')}</td>
                `;
                
                tableBody.appendChild(row);
            });
        }
        
        // Função para atualizar estatísticas
        function updateStats(filteredCars) {
            const totalCars = filteredCars.length;
            const totalValue = filteredCars.reduce((sum, car) => sum + car.price, 0);
            
            document.querySelector('.stat-value:nth-child(1)').textContent = totalCars;
            document.querySelector('.stat-value:nth-child(2)').textContent = `R$ ${(totalValue / 1000000).toFixed(1)}M`;
        }
        
        // Função de pesquisa
        searchInput.addEventListener('input', () => {
            currentFilters.search = searchInput.value.toLowerCase();
            applyFilters();
        });
        
        // Aplicar filtro de preço manual
        applyPriceFilter.addEventListener('click', () => {
            const minPrice = minPriceInput.value ? parseInt(minPriceInput.value) : null;
            const maxPrice = maxPriceInput.value ? parseInt(maxPriceInput.value) : null;
            
            currentFilters.minPrice = minPrice;
            currentFilters.maxPrice = maxPrice;
            
            // Remover destaque dos filtros rápidos
            priceQuickFilters.forEach(btn => btn.classList.remove('filter-active'));
            
            applyFilters();
        });
        
        // Filtros rápidos de preço
        priceQuickFilters.forEach(button => {
            button.addEventListener('click', () => {
                const minPrice = parseInt(button.getAttribute('data-min'));
                const maxPrice = parseInt(button.getAttribute('data-max'));
                
                currentFilters.minPrice = minPrice;
                currentFilters.maxPrice = maxPrice;
                
                // Preencher os inputs
                minPriceInput.value = minPrice === 0 ? '' : minPrice;
                maxPriceInput.value = maxPrice === 999999999 ? '' : maxPrice;
                
                // Destacar o botão clicado
                priceQuickFilters.forEach(btn => btn.classList.remove('filter-active'));
                button.classList.add('filter-active');
                
                applyFilters();
            });
        });
        
        // Permitir pressionar Enter nos inputs de preço
        [minPriceInput, maxPriceInput].forEach(input => {
            input.addEventListener('keypress', (e) => {
                if (e.key === 'Enter') {
                    applyPriceFilter.click();
                }
            });
        });
        
        // Inicializar a página
        renderTable(cars);
        updateStats(cars);
    </script>
</body>
</html>