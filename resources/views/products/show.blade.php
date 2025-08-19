<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h2>Detalle del Producto</h2>
                        <div>
                            <a href="{{ route('products.list') }}" class="btn btn-secondary me-2">Volver a la Lista</a>
                            <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">Inicio</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="card-title text-primary">{{ $product->name }}</h5>
                                <p class="text-muted">{{ $product->category }}</p>
                                
                                @if($product->imageUrl)
                                    <img src="{{ $product->imageUrl }}" alt="{{ $product->name }}" 
                                         class="img-fluid rounded mb-3" style="max-height: 200px;">
                                @endif
                            </div>
                            
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <strong>Precio:</strong>
                                    <span class="badge bg-success fs-6">${{ number_format($product->price, 2) }}</span>
                                </div>
                                
                                <div class="mb-3">
                                    <strong>Stock:</strong>
                                    <span class="badge bg-{{ $product->stock > 0 ? 'info' : 'danger' }} fs-6">
                                        {{ $product->stock }} unidades
                                    </span>
                                </div>
                                
                                <div class="mb-3">
                                    <strong>Personalizable:</strong>
                                    <span class="badge bg-{{ $product->customizable ? 'success' : 'secondary' }} fs-6">
                                        {{ $product->customizable ? 'Sí' : 'No' }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-4">
                            <h6>Descripción:</h6>
                            <p class="text-muted">{{ $product->description }}</p>
                        </div>
                        
                        <div class="mt-4 d-flex justify-content-between">
                            <div>
                                <small class="text-muted">
                                    Creado: {{ $product->created_at->format('d/m/Y H:i') }}
                                </small>
                            </div>
                            
                            <div>
                                <form action="{{ route('products.destroy', $product->id) }}" 
                                      method="POST" class="d-inline" 
                                      onsubmit="return confirm('¿Estás seguro de que quieres eliminar este producto?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="bi bi-trash"></i> Eliminar Producto
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
