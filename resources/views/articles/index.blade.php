@extends('app')
@section('title', 'Artigos')
@section('import', 'articles/index')
@section('actions')
    <x-button :type="'a'">
        <x-slot:attributes>
            href="{{ route('articles.create') }}"
        </x-slot:attributes>
        Criar
    </x-button>
    <x-datatable-filter :table="'_articles'">

    </x-datatable-filter>
    <x-dropdown :toggle="'_acoes'" :name="'Ações'">
        <x-dropdown-item :name="'Action'" :route="'teste'" />
        <x-dropdown-item :name="'Another action'" :route="'teste'" />
    </x-dropdown>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <x-datatable :id="'_articles_table'" :total=2>
                <x-slot:heads>
                    <x-datatable-head-column>#</x-datatable-head-column>
                    <x-datatable-head-column>Article</x-datatable-head-column>
                </x-slot:heads>
                <x-slot:bodys>
                    @foreach ($articles as $item)
                        <x-datatable-body-row :view="route('articles.show', ['article' => $item])">
                            <x-datatable-body-column>{{ $item->id }}</x-datatable-body-column>
                            <x-datatable-body-column :class="'column__overflow'">{{ $item->article }}</x-datatable-body-column>

                        </x-datatable-body-row>
                    @endforeach

                </x-slot:bodys>
            </x-datatable>
        </div>
    </div>
@endsection
