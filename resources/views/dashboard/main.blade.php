<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>
<body>
    <header class="fixed top-0 w-full bg-white shadow-md shadow-slate-300 p-3 m-auto flex justify-between items-center z-50">
        <div class="w-[80%] flex justify-center">
            <img class="w-[140px]" src="assets/img/official_logo.png" alt="Logo Oficial"/>
        </div>
        <!-- Perfil Menu-Drop Down -->
        <div class="flex justify-between items-center max-w-[15%]">
            <span class="hidden">Olá, Jonas Santos</span>
            <div class="w-[50px] h-[50px] bg-slate-700 rounded-full "></div>
        </div>

    </header>
    <div class="shadow-md bg-white absolute top-[10%] right-[5px] w-[40%] h-[18%] p-2 hidden">
        <nav class="text-[18px] font-semibold">
            <span class="font-normal text-[16px] ml-2">Jonas Santos</span>
            <ul>
                <li class="flex items-center gap-2 m-2">
                    <ion-icon name="person-outline"></ion-icon>
                    <a href="#">Perfil</a>
                </li>
                <li class="flex items-center gap-2 m-2">
                    <ion-icon class="text-[20px]" name="log-out-outline"></ion-icon>
                    <a href="#">Sair</a>
                </li>
            </ul>
        </nav>
    </div>
    <main class="pt-[17%]">

        <div class="py-2 md:py-4 lg:py-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <p class="text-right font-bold text-[#555454]" id="actualDate">Seg. 16 de Dezembro</p>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="static bottom-1 w-[100%]">
        <p class="text-center">Created By &copy; <a href="#">Jonas Santos</a> - <span id="year"></span></p>
    </footer>

    <!-- Scripts -->
    <script src="assets/js/main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
