@extends('dashboard.main')

@section('title', 'Fornecedores')

@section('content')
    <section>
            <h3 class="font-bold my-3 border-l-4 border-blue-200 p-1 px-4 text-[1.2rem]">Fornecedores</h3>

            <div class="w-[full] h-[65vh] p-4 shadow-sm rounded-md">
                <div class="w-[95%] shadow-lg p-3 flex gap-3">
                    <div class="w-[60px] h-[60px] bg-red-500 rounded-md">

                    </div>
                    <div>
                        <h3 class="text-[1.3rem] font-semibold">COCA-COLA</h3>
                        <p>Cel: <span>19 99345-9126</span></p>
                    </div>
                </div>

            </div>
    </section>

@endsection
