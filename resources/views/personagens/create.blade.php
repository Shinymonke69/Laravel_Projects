@extends('layouts.app')

@section('slot')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800">
                    <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-6 text-center">
                        Criar Personagem
                    </h1>
                    <form method="POST" action="{{ route('personagens.store') }}">
                        @csrf

                        <div class="mb-4">
                            <label class="block font-medium text-gray-700 dark:text-gray-300">Nome</label>
                            <input class="form-input mt-1 block w-full" name="nome" value="{{ $nome ?? '' }}" required>
                        </div>
                        <div class="mb-4">
                            <label class="block font-medium text-gray-700 dark:text-gray-300">Sobrenome</label>
                            <input class="form-input mt-1 block w-full" name="sobrenome" value="{{ $sobrenome ?? '' }}" required>
                        </div>
                        <div class="mb-4">
                            <label class="block font-medium text-gray-700 dark:text-gray-300">Classe</label>
                            <input class="form-input mt-1 block w-full" name="classe" value="{{ $classe ?? '' }}" required>
                            @if(isset($classeDetalhes['hit_die']))
                                <div class="text-sm text-gray-600 dark:text-gray-400">Dado de vida: d{{ $classeDetalhes['hit_die'] }}</div>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label class="block font-medium text-gray-700 dark:text-gray-300">Raça</label>
                            <input class="form-input mt-1 block w-full" name="raça" value="{{ $raca ?? '' }}" required>
                            @if(isset($racaDetalhes['alignment']))
                                <div class="text-sm text-gray-600 dark:text-gray-400">Alinhamento: {{ $racaDetalhes['alignment'] }}</div>
                            @endif
                            @if(isset($racaDetalhes['language_desc']))
                                <div class="text-sm text-gray-600 dark:text-gray-400">Linguagens: {{ $racaDetalhes['language_desc'] }}</div>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label class="block font-medium text-gray-700 dark:text-gray-300">Magia/Poder</label>
                            <input class="form-input mt-1 block w-full" name="poderes" value="{{ $magia ?? '' }}">
                            @if(isset($magiaDetalhes['desc']))
                                <div class="text-sm text-gray-600 dark:text-gray-400">Descrição da magia: {{ implode(' ', $magiaDetalhes['desc']) }}</div>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label class="block font-medium text-gray-700 dark:text-gray-300">Atributos</label>
                            <input class="form-input mt-1 block w-full" name="atributos" value="{{ json_encode($atributos ?? []) }}" required>
                            <ul class="mt-2 text-sm text-gray-700 dark:text-gray-300">
                                @foreach($atributos as $atrib => $valor)
                                    <li>{{ ucfirst($atrib) }}: <span class="font-mono">{{ $valor }}</span></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="mb-4">
                            <label class="block font-medium text-gray-700 dark:text-gray-300">História</label>
                            <textarea class="form-input mt-1 block w-full" name="historia">{{ $historia ?? '' }}</textarea>
                        </div>
                        <div class="mb-4">
                            <label class="block font-medium text-gray-700 dark:text-gray-300">Inventário</label>
                            <textarea class="form-input mt-1 block w-full" name="inventario">{{ $inventario ?? '' }}</textarea>
                        </div>
                        <button type="submit" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Salvar</button>
                        <a href="{{ route('personagens.create') }}" class="ml-4 text-gray-600 hover:text-gray-900 dark:text-gray-400">Gerar outro personagem</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
