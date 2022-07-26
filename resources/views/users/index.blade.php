@extends('app')
@section('title', 'Usuários')
@section('import', 'users/index')
@section('actions')
    <x-dropdown :toggle="'_acoes'"
                :name="'Ações'">
        <x-dropdown-item :name="'Action'"
                         :route="'teste'" />
        <x-dropdown-item :name="'Another action'"
                         :route="'teste'" />
    </x-dropdown>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <x-datatable :total="$users->count()">
                <x-slot:heads>
                    <x-datatable-head-column>Nome</x-datatable-head-column>
                    <x-datatable-head-column>Email</x-datatable-head-column>
                    <x-datatable-head-column>Ativo</x-datatable-head-column>
                </x-slot:heads>
                <x-slot:bodys>
                    @foreach ($users as $item)
                        <x-datatable-body-row>
                            <x-datatable-body-column>{{ $item->name }}</x-datatable-body-column>
                            <x-datatable-body-column>{{ $item->email }}</x-datatable-body-column>
                            <x-datatable-body-column>
                                <span class="badge badge-lg badge__datatable badge-dot">
                                    <i class="bg-success"></i>
                                </span>
                            </x-datatable-body-column>

                        </x-datatable-body-row>
                    @endforeach

                </x-slot:bodys>
            </x-datatable>
        </div>
    </div>
@endsection
