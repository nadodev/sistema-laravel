<!-- mi_vista.blade
.php -->
@extends('dashboard')
@section('content')
      <div class="smx-auto my-8">
        <h2 class="text-xl font-semibold mb-4">Lista de Noticia</h2>
<style>
    .miniatura-imagem {
        width: 40px;
        height: 40px;
        object-fit: cover;
        margin-right: 10px;
    }
</style>
       <div class="w-full overflow-x-auto">    
     <table class="w-full border w-[1200px]">
            <thead>
                <tr class="bg-gray-100">
                    <th class="py-2 px-4 border">Titulo</th>
                    <th class="py-2 px-4 border">SubTítulo</th>
                    <th class="py-2 px-4 border">categoria</th>
                    <th class="py-2 px-4 border">Author</th>
                    <th class="py-2 px-4 border">Imagens</th>
                    <th class="py-2 px-4 border">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($noticias as $noticia)
                <tr class="border">
                    <td class="py-2 px-4 border text-center">{{ $noticia->titulo }}</td>
                    <td class="py-2 px-4 border text-center">{{ Str::limit($noticia->subtitulo, 50) }}</td>
                    <td class="py-2 px-4 border text-center">{{ $noticia->categorias }}</td>
                    <td class="py-2 px-4 border text-center">{{ $noticia->author }}</td>
                    <td class="py-2 px-4 border text-center">
                        <div class=" flex gap-2 items-center">
                              @foreach($noticia->imagens as $imagem)

                      <img src="{{ Storage::url($imagem) }}" class="miniatura-imagem" alt="">

                      @endforeach
                        </div>
                    </td>
                    <td class="py-2 px-4 border text-center flex gap-2 items-center w-full">
                        <form action="{{ route('usuarios.edit', $noticia->id) }}" method="GET" class="flex gap-2">
                            <button class="bg-blue-600 hover:bg-blue-700 py-2 px-2 rounded-md text-white text-sm">
                                @csrf
                                @method('GET')
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                </svg>
                            </button>
                        </form>
                      <form action="{{ route('noticias.destroy', $noticia->id) }}" method="POST" class="flex gap-2">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-600 hover:bg-red-700 py-2 px-2 rounded-md text-white text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
       </div>
    </div>
@endsection
