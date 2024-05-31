<!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Products</title>
       <script src="https://cdn.tailwindcss.com"></script>
   </head>
   <body class="bg-gray-100">
       <div class="container mx-auto mt-8">
           <div class="flex justify-end mb-4">
               <a href="{{ route('admin.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                   Create Product
               </a>
           </div>
           <div class="bg-white shadow-md rounded">
               <table class="min-w-full bg-white">
                   <thead>
                       <tr>
                           <th class="py-2 px-4 border-b">Nama</th>
                           <th class="py-2 px-4 border-b">Role</th>
                           <th class="py-2 px-4 border-b">Deskripsi</th>
                           <th class="py-2 px-4 border-b">Gambar</th>
                           <th class="py-2 px-4 border-b">Actions</th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach ($products as $product)
                           <tr>
                               <td class="py-2 px-4 border-b">{{ $product->nama }}</td>
                               <td class="py-2 px-4 border-b">{{ $product->role }}</td>
                               <td class="py-2 px-4 border-b">{{ $product->deskripsi }}</td>
                               <td class="py-2 px-4 border-b">
                                   @if($product->gambar)
                                       <img src="{{ asset('storage/' . $product->gambar) }}" alt="{{ $product->nama }}" class="w-16 h-16">
                                   @endif
                               </td>
                               <td class="py-2 px-4 border-b">
                                   <a href="{{ route('admin.edit', $product) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">
                                       Edit
                                   </a>
                                   <form action="{{ route('admin.destroy', $product) }}" method="POST" class="inline-block">
                                       @csrf
                                       @method('DELETE')
                                       <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">
                                           Delete
                                       </button>
                                   </form>
                               </td>
                           </tr>
                       @endforeach
                   </tbody>
               </table>
           </div>
       </div>
   </body>
   </html>