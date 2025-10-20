<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Notícia</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"; rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .card-header {
            background-color: #8205ff !important;
        }
        .btn-primary {
            background-color: #8205ff;
            border-color: #8205ff;
        }
        .btn-primary:hover {
            background-color: #6b04cc;
            border-color: #6b04cc;
        }
    </style>
</head>
<body>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-12">
                <div class="card shadow-sm rounded">
                    <div class="card-header text-white">
                        <h5 class="mb-0">Deletar Proposta</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('deleta_carro')}}" method="POST">
                            @csrf
                            <input type="text" id="id" name="id" hidden value="{{$carro->id}}">

                            <!-- Título -->
                            <div class="mb-3">
                                <label for="titulo" class="form-label">Nome do carro</label>
                                <input type="text" name="nome" disabled value="{{ $Carro->nome}}" id="nome" class="form-control form-control-sm"
                                    placeholder="Digite o nome do carro" required>
                            </div>

                             <!-- Título -->
                            <div class="mb-3">
                                <label for="categoria" class="form-label">Modelo</label>
                                <input type="text" name="modelo" disabled value="{{$Carro->modelo}}" id="modelo" class="form-control form-control-sm"
                                    placeholder="Digite o modelo do carro" required>
                            </div>

                            <!-- Jornalista -->
                            <div class="mb-3">
                                <label for="autor" class="form-label">data de fabricação</label>
                                <input type="text" name="data_fabri" id="autor" disabled value="{{$Carro->data_fabri}}"  class="form-control form-control-sm"
                                    placeholder="data da fabricação" required>
                            </div>

                            <!-- Corpo -->
                            <div class="mb-3">
                                <label for="autor" class="form-label">endereço</label>
                                <input type="text" name="endereco" id="endereco" disabled value="{{$Carro->endereco}}"  class="form-control form-control-sm"
                                    placeholder="Digite oseu endereço" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="autor" class="form-label">quilometragem</label>
                                <input type="text" name="kilometragem" id="kilometragem" disabled value="{{$Carro->kilometragem}}"  class="form-control form-control-sm"
                                    placeholder="Digite a quilometragem do carro" required>
                            </div>

                            <div class="mb-3">
                                <label for="autor" class="form-label">preço</label>
                                <input type="text" name="preco" id="preco" disabled value="{{$Carro->preco}}"  class="form-control form-control-sm"
                                    placeholder="Digite o preço" required>
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-danger btn-sm">Deletar Proposta</button>
                            </div>
                         
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS (Bundle com Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script&gt;
</body>
</html>