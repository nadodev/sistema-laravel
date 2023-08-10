
<x-app-layout>
    <div class="w-full h-full">
        <div class="grid grid-cols-custom h-custom">
 
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm ">
          
                <div class="p-4 text-gray-900 dark:text-gray-100">
                    <h2> MENU</h2>
                </div>  
                <div class=" text-gray-900 dark:text-gray-100">
                    <div class="hidden space-y-2 sm:flex sm:flex-col">
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="w-full bg-zinc-200 hover:bg-zinc-100 px-2 py-4 flex items-center text-zinc-500 justify-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                            </svg>
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        
                      <x-nav-link :href="route('teste')" :active="request()->routeIs('teste')" class="w-full px-2 py-4 flex items-center gap-2 {{ auth()->user()->role !== 'admin' ? 'opacity-50 cursor-not-allowed' : 'bg-zinc-200 hover:bg-zinc-100 text-zinc-500' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                            </svg>
                            {{ __('Cadastro Usuarios') }}
                        </x-nav-link>

                        <x-nav-link :href="route('listar')" :active="request()->routeIs('listar')" class="w-full bg-zinc-200 hover:bg-zinc-100 px-2 py-4 flex items-center text-zinc-500 justify-start gap-2 {{ auth()->user()->role !== 'admin' ? 'opacity-50 cursor-not-allowed' : 'bg-zinc-200 hover:bg-zinc-100 text-zinc-500' }}">    
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                            </svg>
                            {{ __('Listar Usuarios') }}
                        </x-nav-link>
                        <x-nav-link :href="route('noticias.cadastrar')" :active="request()->routeIs('noticias.cadastrar')" class="w-full bg-zinc-200 hover:bg-zinc-100 px-2 py-4 flex items-center text-zinc-500 justify-start gap-2 {{ auth()->user()->role !== 'admin' ? 'opacity-50 cursor-not-allowed' : 'bg-zinc-200 hover:bg-zinc-100 text-zinc-500' }}">    
                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                            </svg>
                            {{ __('Cadastrar Noticias') }}
                        </x-nav-link>
                         <x-nav-link :href="route('noticias.mostrar')" :active="request()->routeIs('noticias.mostrar')" class="w-full bg-zinc-200 hover:bg-zinc-100 px-2 py-4 flex items-center text-zinc-500 justify-start gap-2 {{ auth()->user()->role !== 'admin' ? 'opacity-50 cursor-not-allowed' : 'bg-zinc-200 hover:bg-zinc-100 text-zinc-500' }}">    
                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                            </svg>
                            {{ __('Listar Noticias') }}
                        </x-nav-link>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 shadow-sm flex-1">
                <div class="p-6 text-gray-900 dark:text-gray-100 bg-zinc-100 h-custom">
                  <div id="flash-message-error-dashboard">
                    @if (session('error'))
                        <div class="w-full bg-red-100 flex items-center justify-between rounded-md text-red-500 dark:text-red-500 dark:bg-red-600 p-4 mb-4">
                            {{ session('error') }}
                            <button class="text-sm" onclick="closeFlashMessageErrorDashboard(this)">
                                Fechar
                            </button>
                        </div>
                    @endif
                </div>
                <div id="flash-message-success-dashboard">
                     @if (session('success'))
                        <div class="w-full bg-green-100 flex items-center justify-between rounded-md text-green-500 dark:text-green-500 dark:bg-green-600 p-4 mb-4">
                            {{ session('success') }}
                            <button class="text-sm" onclick="closeFlashMessageSuccessDashboard(this)">
                                Fechar
                            </button>
                        </div>
                    @endif
                </div>
                <script>
                    function closeFlashMessageErrorDashboard(button) {
                        var flashMessage = document.getElementById('flash-message-error-dashboard');
                        flashMessage.style.display = 'none';
                    }
                     function closeFlashMessageSuccessDashboard(button) {
                        var flashMessage = document.getElementById('flash-message-success-dashboard');
                        flashMessage.style.display = 'none';
                    }
                </script>
                <div class="bg-white px-4 py-5 sm:p-6 shadow-md rounded-md"> 
                    @yield('content')
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
