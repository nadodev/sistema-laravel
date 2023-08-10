<!-- mi_vista.blade
.php -->
@extends('dashboard')
@section('content')
    <div class="mx-auto">
        <h2 class="text-xl font-semibold mb-4">Registro de Usuario</h2>
        
        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium">Nome</label>
                <input type="text" name="name" id="name" class="mt-1 p-2 border rounded w-full" required>
            </div>
            <div class="mb-4">
                <label for="role" class="block text-sm font-medium">Role</label>
               <select name="role" id="role" class="mt-1 p-2 border rounded w-full">
                    <option value="">Selecione</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>

            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium">E-mail</label>
                <input type="email" name="email" id="email" class="mt-1 p-2 border rounded w-full" required>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium">Senha</label>
                <input type="password" name="password" id="password" class="mt-1 p-2 border rounded w-full" required>
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block text-sm font-medium">Confirmar Senha</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="mt-1 p-2 border rounded w-full" required>
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Registrar</button>
            </div>
        </form>
    </div>
@endsection
