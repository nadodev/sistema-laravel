<!-- mi_vista.blade
.php -->
@extends('dashboard')
@section('content')
<style>
    .miniatura-imagem {
        width: 100px;
        height: 100px;
        object-fit: cover;
        margin-right: 10px;
    }
</style>
   <div class="p-8">
    <form action="{{ route('noticias.store') }}" method="POST" class="mx-auto p-6" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="titulo" class="block text-sm font-medium text-gray-700">Título</label>
            <input type="text" id="titulo" name="titulo" class="mt-1 p-2 w-full border rounded-md focus:ring focus:ring-opacity-50 focus:outline-none focus:border-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="subtitulo" class="block text-sm font-medium text-gray-700">SubTítulo</label>
            <input type="text" id="subtitulo" name="subtitulo" class="mt-1 p-2 w-full border rounded-md focus:ring focus:ring-opacity-50 focus:outline-none focus:border-blue-500" required>
        </div>
         <div class="mb-4">
            <label for="author" class="block text-sm font-medium text-gray-700">Autor</label>
            <input type="text" id="author" name="author" class="mt-1 p-2 w-full border rounded-md focus:ring focus:ring-opacity-50 focus:outline-none focus:border-blue-500" required>
        </div>
        <div class="mb-4">
          <div class="mb-4">
            <label for="imagem" class="block text-sm font-medium text-gray-700">Imagem</label>
            <input type="file" multiple id="imagem" name="imagem[]" class="mt-1 p-2 w-full border rounded-md focus:ring focus:ring-opacity-50 focus:outline-none focus:border-blue-500" required>
            </div>

            <div class="mb-4" id="area-imagens-selecionadas" style="display: none;">
            <label class="block text-sm font-medium text-gray-700">Imagens Selecionadas</label>
            <div id="imagens-selecionadas" class="mt-1 p-2 border border-gray-300 rounded-md flex gap-2">
                <!-- Aqui você pode exibir as imagens selecionadas -->
            </div>
        </div>
        </div>
         <div class="mb-4">
            <label for="titulo" class="block text-sm font-medium text-gray-700">Categoria</label>
            <select name="categorias" id="categorias" class="mt-1 p-2 border rounded w-full">
                <option value="">Selecione</option>
                <option value="Esporte">Esporte</option>
                <option value="Técnologia">Técnologia</option>
                <option value="Saúde"> Saúde </option>
            </select>
        </div>
        <div class="mb-4">
            <label for="conteudo" class="block text-sm font-medium text-gray-700">Conteúdo</label>
            <textarea id="conteudo" name="conteudo" class="mt-1 p-2 w-full h-70 border rounded-md focus:ring focus:ring-opacity-50 focus:outline-none focus:border-blue-500" required></textarea>
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Enviar</button>
    </form>
</div>
<script>
    const inputImagem = document.getElementById('imagem');
    const areaImagensSelecionadas = document.getElementById('area-imagens-selecionadas');
    const divImagensSelecionadas = document.getElementById('imagens-selecionadas');

    inputImagem.addEventListener('change', (event) => {
        const imagensSelecionadas = event.target.files;

        if (imagensSelecionadas.length > 0) {
            areaImagensSelecionadas.style.display = 'block';

            divImagensSelecionadas.innerHTML = ''; // Limpa o conteúdo existente

            for (const imagem of imagensSelecionadas) {
                const imgElement = document.createElement('img');
                imgElement.src = URL.createObjectURL(imagem);
                imgElement.classList.add('mt-2', 'miniatura-imagem'); // Adiciona a classe para estilos de miniatura
                divImagensSelecionadas.appendChild(imgElement);
            }
        } else {
            areaImagensSelecionadas.style.display = 'none';
            divImagensSelecionadas.innerHTML = ''; // Limpa o conteúdo ao remover as imagens
        }
    });
</script>
@endsection
