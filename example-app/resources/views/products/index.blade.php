<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Danh sách sản phẩm</h2>

        <!-- Nút thêm sản phẩm mới -->
        <a href="create.html" class="btn btn-success mb-3">+ Thêm sản phẩm mới</a>

        <!-- Bảng sản phẩm -->
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>SKU</th>
                    <th>Tên sản phẩm</th>
                    <th>Mô tả</th>
                    <th>Giá (VND)</th>
                    <th>Tình trạng</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productsList as $product )
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->sku }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->discription }}</td>
                        <td>{{ number_format($product->price, 0, ',', '.') }}</td>
                        <td><span class="badge {{ $product->available == true ? 'bg-success' : 'bg-danger' }}">{{ $product->available == true ? 'Còn hàng' : 'Hết hàng' }}</span></td>
                        <td>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-info">Xem</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning">Sửa</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xoá sản phẩm này?')">Xoá</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
