<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="商品名" required>
    <input type="number" name="price" placeholder="価格" required>
    <input type="file" name="image" required>
    <button type="submit">登録</button>
</form>