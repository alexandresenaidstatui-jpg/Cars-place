<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Notícia</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"; rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background: linear-gradient(135deg, #0c0c0c 0%, #1a1a1a 50%, #0c0c0c 100%);
            color: #ffffff;
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            position: relative;
            overflow-x: hidden;
        }
        
        /* Efeito de partículas douradas no background */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 30%, rgba(212, 175, 55, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, rgba(212, 175, 55, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 80%, rgba(212, 175, 55, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 60% 20%, rgba(212, 175, 55, 0.08) 0%, transparent 50%);
            z-index: -1;
        }
        
        /* Linhas de conexão douradas sutis */
        body::after {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                linear-gradient(90deg, transparent 95%, rgba(212, 175, 55, 0.03) 95%),
                linear-gradient(0deg, transparent 95%, rgba(212, 175, 55, 0.03) 95%);
            background-size: 50px 50px;
            z-index: -1;
        }
        
        .container {
            position: relative;
            z-index: 1;
        }
        
        .logo {
            text-align: center;
            margin-bottom: 30px;
            padding-top: 20px;
        }
        
        .logo h1 {
            color: #d4af37;
            font-weight: 700;
            font-size: 3rem;
            text-shadow: 0 0 15px rgba(212, 175, 55, 0.5);
            letter-spacing: 2px;
            margin-bottom: 5px;
        }
        
        .logo p {
            color: #aaaaaa;
            font-style: italic;
            font-size: 1.1rem;
        }
        
        .card {
            border: none;
            border-radius: 15px;
            background: rgba(30, 30, 30, 0.8);
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
        }
        
        .card-header {
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.9) 0%, rgba(170, 140, 44, 0.9) 100%);
            border-bottom: none;
            padding: 20px;
            text-align: center;
        }
        
        .card-header h5 {
            color: #000;
            font-weight: bold;
            font-size: 1.5rem;
            margin: 0;
            text-shadow: 0 1px 2px rgba(255, 255, 255, 0.3);
        }
        
        .card-body {
            padding: 30px;
        }
        
        .form-label {
            color: #d4af37;
            font-weight: 600;
            margin-bottom: 8px;
        }
        
        .form-control {
            background-color: rgba(40, 40, 40, 0.8);
            border: 1px solid rgba(212, 175, 55, 0.3);
            color: #000000;
            border-radius: 8px;
            padding: 12px 15px;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            background-color: rgba(50, 50, 50, 0.9);
            border-color: #d4af37;
            box-shadow: 0 0 0 0.25rem rgba(212, 175, 55, 0.25);
            color: #000000;
        }
        
        .form-control::placeholder {
            color: #888;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #d4af37 0%, #b8941f 100%);
            border: none;
            color: #000;
            font-weight: bold;
            border-radius: 8px;
            padding: 12px 30px;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, #e0bf45 0%, #c9a325 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(212, 175, 55, 0.4);
            color: #000;
        }
        
        .form-group {
            margin-bottom: 20px;
            position: relative;
        }
        
        /* Efeito de brilho nos inputs quando focados */
        .form-group:focus-within::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #d4af37, transparent);
            animation: glow 2s infinite;
        }
        
        @keyframes glow {
            0% { opacity: 0.5; }
            50% { opacity: 1; }
            100% { opacity: 0.5; }
        }
        
        /* Efeito de luz de destaque no card */
        .card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(212, 175, 55, 0.1) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.5s ease;
            pointer-events: none;
        }
        
        .card:hover::before {
            opacity: 1;
        }
        
        /* Responsividade */
        @media (max-width: 768px) {
            .logo h1 {
                font-size: 2.2rem;
            }
            
            .card-body {
                padding: 20px;
            }
        }
    </style>
</head>
<body>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-12">
                <div class="card shadow-sm rounded">
                    <div class="card-header text-white">
                        <h5 class="mb-0">Cadastrar Notícia</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('alterar_carro')}}" method="POST">
                            @csrf

                            <input type="text" id="id" name="id" hidden value="{{$carro->id}}">

                            <!-- Título -->
                            <div class="mb-3">
                                <label for="titulo" class="form-label">Nome</label>
                                <input type="text" name="nome" value="{{$carro->nome}}" id="nome" class="form-control form-control-sm"
                                    placeholder="Digite o título da notícia" required>
                            </div>

                             <!-- Título -->
                            <div class="mb-3">
                                <label for="categoria" class="form-label">Modelo</label>
                                <input type="text" name="categoria" id="categoria" value="{{$noticia->categoria}}" class="form-control form-control-sm"
                                    placeholder="Digite o título da categoria" required>
                            </div>

                            <!-- Jornalista -->
                            <div class="mb-3">
                                <label for="autor" class="form-label">Nome do Jornalista</label>
                                <input type="text" name="autor" value="{{$noticia->autor}}" id="autor" class="form-control form-control-sm"
                                    placeholder="Digite o nome do autor" required>
                            </div>

                            <!-- Corpo -->
                            <div class="mb-3">
                                <label for="conteudo" class="form-label">Corpo da Notícia</label>
                                <textarea name="conteudo" id="conteudo" class="form-control form-control-sm" rows="5"
                                    placeholder="Escreva a notícia aqui..." required>{{$noticia->conteudo}}</textarea>
                            </div>

                            <!-- Botão -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-warning btn-sm">Alterar Notícia</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS (Bundle com Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>