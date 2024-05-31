<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto mt-8">
        <div class="max-w-md mx-auto bg-white rounded-md overflow-hidden shadow-md">
            <div class="p-6">
                <h1 class="text-2xl font-bold mb-4">Edit Product</h1>
                <form action="{{ route('admin.update', $product) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="nama" class="block text-gray-700 text-sm font-semibold mb-2">Nama</label>
                        <input id="nama" type="text" name="nama" value="{{ $product->nama }}" required
                            class="w-full px-4 py-2 text-gray-700 bg-gray-200 rounded-md focus:outline-none focus:bg-white focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="role" class="block text-gray-700 text-sm font-semibold mb-2">Role</label>
                        <input id="role" type="text" name="role" value="{{ $product->role }}" required
                            class="w-full px-4 py-2 text-gray-700 bg-gray-200 rounded-md focus:outline-none focus:bg-white focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="deskripsi" class="block text-gray-700 text-sm font-semibold mb-2">Deskripsi</label>
                        <textarea id="deskripsi" name="deskripsi" required
                            class="w-full px-4 py-2 text-gray-700 bg-gray-200 rounded-md focus:outline-none focus:bg-white focus:ring-2 focus:ring-blue-500">{{ $product->deskripsi }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label for="gambar" class="block text-gray-700 text-sm font-semibold mb-2">Gambar</label>
                        <input id="gambar" type="file" name="gambar"
                            class="w-full px-4 py-2 text-gray-700 bg-gray-200 rounded-md focus:outline-none focus:bg-white focus:ring-2 focus:ring-blue-500">
                        @if($product->gambar)
                        <img src="{{ asset('storage/' . $product->gambar) }}" alt="{{ $product->nama }}"
                            class="w-24 h-24 mt-4 object-cover rounded-md">
                        @endif
                    </div>
                    <div class="flex justify-end">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
