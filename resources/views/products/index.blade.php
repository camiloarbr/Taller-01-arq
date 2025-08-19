<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Sistema de Gestión de Productos</h2>
                    </div>
                    <div class="card-body text-center">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        
                        <div class="d-grid gap-3">
                            <a href="{{ route('products.create') }}" class="btn btn-primary btn-lg">
                                <i class="bi bi-plus-circle"></i> Crear Nuevo Producto
                            </a>
                            
                            <a href="{{ route('products.list') }}" class="btn btn-success btn-lg">
                                <i class="bi bi-list"></i> Listar Productos
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
