<div class="max-w-7xl mx-auto py-15 px-4 my-5">

    <x-slot name="header">
        <p class="font-bold">
            Meus Registros
        </p>
    </x-slot>

    <div class="w-full mx-auto text-right mb-4">
        <a href="{{ route('expenses.create') }}"
            class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-800 dark:border-gray-700">Criar
            Registro</a>
    </div>

    @include('includes.message')

    <table class="table-auto w-full mx-auto">
        <thead>
            <tr class="text-left">
                <th class="px-4 py-2">#</th>
                <th class="px-4 py-2">Descrição</th>
                <th class="px-4 py-2">Valor</th>
                <th class="px-4 py-2">Data Registro</th>
                <th class="px-4 py-2">Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($expenses as $exp)
                <tr>
                    <td class="px-4 py-2 border">{{ $exp->id }}</td>
                    <td class="px-4 py-2 border">{{ $exp->description }}</td>
                    <td class="px-4 py-2 border">
                        <span class="{{ $exp->type == 1 ? 'text-green-600' : 'text-red-600' }}">R$
                            {{ number_format($exp->amount, 2, ',', '.') }}
                        </span>
                    </td>
                    <td class="px-4 py-2 border">{{ $exp->expense_date
                                                    ? $exp->expense_date->format('d/m/Y H:i:s')
                                                    : $exp->created_at->format('d/m/Y H:i:s') }}</td>
                    <td class="px-4 py-4 border">
                        <a href="{{ route('expenses.edit', $exp->id) }}"
                            class="text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-gray-600 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-800">Editar</a>
                        <a href="#" wire:click.prevent="remove({{ $exp->id }})"
                            class="text-white
                            bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm
                            px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700
                            dark:focus:ring-red-900">Remover</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="w-full mx-auto mt-10">
        @if(count($expenses))
            {{$expenses->links();}}
        @endif
    </div>
</div>
