@extends('app')
@section('back', route('articles.index'))
@section('title', 'Criar um artigo')
@section('import', 'articles/create')
@section('actions')
    <x-button>
        <x-slot:attributes>
            id="save-button"
        </x-slot:attributes>
       Salvar
    </x-button>
@endsection


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <x-article-creator></x-article-creator>
        </div>
    </div>
@endsection
