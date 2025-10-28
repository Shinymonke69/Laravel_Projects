@extends('layouts.app')

@section('slot')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class="text-3xl font-extrabold text-gray-700 dark:text-gray-300 mb-8 text-center">
                    Ficha de Personagem RPG
                </h1>
                <div class="mb-4">
                    <span class="font-medium text-gray-700 dark:text-gray-300">Nome:</span>
                    <span class="font-medium text-gray-700 dark:text-gray-300">{{ $personagem->nome }} {{ $personagem->sobrenome }}</span>
                </div>
                <div class="mb-4">
                    <span class="font-medium text-gray-700 dark:text-gray-300">Raça:</span>
                    <span class="font-medium text-gray-700 dark:text-gray-300">{{ $personagem->raça }}</span>
                </div>
                <div class="mb-4">
                    <span class="font-medium text-gray-700 dark:text-gray-300">Classe:</span>
                    <span class="font-medium text-gray-700 dark:text-gray-300">{{ $personagem->classe }}</span>
                </div>
                <div class="mb-4">
                    <span class="font-medium text-gray-700 dark:text-gray-300">Atributos:</span>
                    <ul class="font-medium text-gray-700 dark:text-gray-300">
                        @foreach ($personagem->atributos as $key => $value)
                            <li>
                                <span class="font-medium text-gray-700 dark:text-gray-300">{{ ucfirst($key) }}:</span>
                                <span class="font-medium text-gray-700 dark:text-gray-300">{{ $value }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="mb-4">
                    <span class="font-medium text-gray-700 dark:text-gray-300">Poderes/Magias:</span>
                    <span class="font-medium text-gray-700 dark:text-gray-300">{{ $personagem->poderes ?? '' }}</span>
                </div>
                <div class="mb-4">
                    <span class="font-medium text-gray-700 dark:text-gray-300">História:</span>
                    <span class="font-medium text-gray-700 dark:text-gray-300">{{ $personagem->historia ?? '' }}</span>
                </div>
                <div class="mb-4">
                    <span class="font-medium text-gray-700 dark:text-gray-300">Inventário:</span>
                    <span class="font-medium text-gray-700 dark:text-gray-300">{{ $personagem->inventario ?? '' }}</span>
                </div>
                <div class="flex justify-between mt-10">
                    <a href="{{ route('personagens.edit', $personagem->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Editar Ficha</a>
                    <a href="{{ route('personagens.index') }}" class="bg-gray-700 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded">Voltar</a>
                </div>
            </div>
        </div>
    </div>
@endsection