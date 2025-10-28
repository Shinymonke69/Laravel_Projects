@extends('layouts.app')

@section('slot')
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-lg">
                <h1 class="text-2xl font-bold mb-8 text-center text-yellow-500">Criar Personagem</h1>
                <form method="POST" action="{{ route('personagens.store') }}">
                    @csrf

                    <div class="mb-4">
                        <label class="block font-bold">Nome</label>
                        <input class="form-input mt-1 block w-full" name="nome" value="{{ $nome ?? '' }}" required>
                    </div>
                    <div class="mb-4">
                        <label class="block font-bold">Sobrenome</label>
                        <input class="form-input mt-1 block w-full" name="sobrenome" value="{{ $sobrenome ?? '' }}" required>
                    </div>
                    <div class="mb-4">
                        <label class="block font-bold">Classe</label>
                        <input class="form-input mt-1 block w-full" name="classe" value="{{ $classe ?? '' }}" required>
                        @if(isset($classeDetalhes['hit_die']))
                            <div>Dado de vida: d{{ $classeDetalhes['hit_die'] }}</div>
                        @endif
                    </div>
                    <div class="mb-4">
                        <label class="block font-bold">Raça</label>
                        <input class="form-input mt-1 block w-full" name="raça" value="{{ $raca ?? '' }}" required>
                        @if(isset($racaDetalhes['alignment']))
                            <div>Alinhamento: {{ $racaDetalhes['alignment'] }}</div>
                        @endif
                        @if(isset($racaDetalhes['language_desc']))
                            <div>Linguagens: {{ $racaDetalhes['language_desc'] }}</div>
                        @endif
                    </div>
                    <div class="mb-4">
                        <label class="block font-bold">Magia/Poder</label>
                        <input class="form-input mt-1 block w-full" name="poderes" value="{{ $magia ?? '' }}">
                        @if(isset($magiaDetalhes['desc']))
                            <div>Descrição da magia: {{ implode(' ', $magiaDetalhes['desc']) }}</div>
                        @endif
                    </div>
                    <div class="mb-4">
                        <label class="block font-bold">Atributos</label>
                        <input class="form-input mt-1 block w-full" name="atributos" value="{{ json_encode($atributos ?? []) }}" required>
                        <!-- Se quiser mostrar em lista visual também: -->
                        <ul class="mt-2 text-sm">
                            @foreach($atributos as $atrib => $valor)
                                <li>{{ ucfirst($atrib) }}: <span class="font-mono">{{ $valor }}</span></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="mb-4">
                        <label class="block font-bold">História</label>
                        <textarea class="form-input mt-1 block w-full" name="historia">{{ $historia ?? '' }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label class="block font-bold">Inventário</label>
                        <textarea class="form-input mt-1 block w-full" name="inventario">{{ $inventario ?? '' }}</textarea>
                    </div>
                    <button type="submit" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded w-full mt-6">Salvar</button>
                    <a href="{{ route('personagens.create') }}" class="block bg-indigo-500 hover:bg-indigo-700 text-white px-4 py-2 rounded mt-4 text-center">Gerar outro personagem</a>
                </form>
            </div>
        </div>
    </div>
@endsection