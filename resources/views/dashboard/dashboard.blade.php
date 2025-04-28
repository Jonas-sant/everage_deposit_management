@extends('dashboard.main')

@section('title', 'Home')

@section('content')

    <section class="py-4 bg-[#d4f8ff] rounded-lg mt-5 p-2">
        <h3 class="font-bold my-3 border-l-4 border-blue-200 p-1 px-4 text-[1.2rem]">Quadro de Avisos</h3>
        <div class="p-2 text-sm">
            <p>Aqui aparecerão avisos sobre o seu estabelecimento. Ex:</p>
            <p>Produto x esta acabando, restam apenas 3 un.</p>
        </div>
    </section>
    <section>
        <div class="flex justify-between items-center">
            <h3 class="font-bold my-3 border-l-4 border-blue-200 p-1 px-4 text-[1.2rem]">Cadastros</h3>
            <ion-icon name="add-outline" class="text-[28px]" onclick="showElement('registrations')" id="show_registrations"></ion-icon>
            <ion-icon name="remove-outline" class="text-[28px] hidden" id="hide_registrations" onclick="showElement('registrations')"></ion-icon>
        </div>

        <div class="flex flex-wrap justify-center gap-5 hidden" id="registrations">
            <div class="w-[40%] p-3 flex flex-col gap-2 shadow-lg rounded-md p-3">
                <ion-icon name="people-outline" class="text-[28px]"></ion-icon>
                <span>Clientes</span>
            </div>
            <div class="w-[40%] p-3 flex flex-col gap-2 shadow-lg rounded-md p-3">
                <ion-icon name="person-add-outline" class="text-[28px]"></ion-icon>
                <span>Colaboradores</span>
            </div>
            <div class="w-[40%] p-3 flex flex-col gap-2 shadow-lg rounded-md p-3">
                <ion-icon name="archive-outline" class="text-[28px]"></ion-icon>
                <span>Fornecedores</span>
            </div>
            <div class="w-[40%] p-3 flex flex-col gap-2 shadow-lg rounded-md p-3">
                <ion-icon name="beer-outline" class="text-[28px]"></ion-icon>
                <span>Produtos</span>
            </div>
        </div>

    </section>
    <section>
        <div class="flex justify-between items-center">
            <h3 class="font-bold my-3 border-l-4 border-blue-200 p-1 px-4 text-[1.2rem]">Financeiro</h3>
            <ion-icon name="add-outline" class="text-[28px]" onclick="showElement('finance')" id="show_finance"></ion-icon>
            <ion-icon name="remove-outline" class="text-[28px] hidden" id="hide_finance" onclick="showElement('finance')"></ion-icon>
        </div>

            <div class="flex flex-wrap justify-center gap-5 hidden" id="finance">
                <div class="w-[40%] p-3 flex flex-col gap-2 shadow-lg rounded-md p-3">
                    <ion-icon name="calendar-number-outline" class="text-[28px]"></ion-icon>
                    <span>Fluxo de Caixa</span>
                </div>
                <div class="w-[40%] p-3 flex flex-col gap-2 shadow-lg rounded-md p-3">
                    <ion-icon name="bar-chart-outline" class="text-[28px]"></ion-icon>
                    <span>Relatório de vendas</span>
                </div>
                <div class="w-[40%] p-3 flex flex-col gap-2 shadow-lg rounded-md p-3">
                    <ion-icon name="wallet-outline" class="text-[28px]"></ion-icon>
                    <span>Pagamentos</span>
                </div>
                <div class="w-[40%] p-3 flex flex-col gap-2 shadow-lg rounded-md p-3">
                    <ion-icon name="cash-outline" class="text-[28px]"></ion-icon>
                    <span>Recebimentos</span>
                </div>
            </div>
    </section>
    <section>
        <div class="flex justify-between items-center">
            <h3 class="font-bold my-3 border-l-4 border-blue-200 p-1 px-4 text-[1.2rem]">Operacional</h3>
            <ion-icon name="add-outline" class="text-[28px]" onclick="showElement('operational')" id="show_operational"></ion-icon>
                <ion-icon name="remove-outline" class="text-[28px] hidden" id="hide_operational" onclick="showElement('operational')"></ion-icon>
        </div>


        <div class="flex flex-wrap justify-center gap-5 hidden" id="operational">
            <div class="w-[40%] flex flex-col gap-2 shadow-lg rounded-md p-3">
                <ion-icon name="cart-outline" class="text-[28px]"></ion-icon>
                <span>Compras</span>
            </div>
            <div class="w-[40%] p-3 flex flex-col gap-2 shadow-lg rounded-md p-3">
                <ion-icon name="desktop-outline" class="text-[28px]"></ion-icon>
                <span>Estoque</span>
            </div>
        </div>
    </section>

    <script src="/assets/js/dashboard.js"></script>
@endsection
