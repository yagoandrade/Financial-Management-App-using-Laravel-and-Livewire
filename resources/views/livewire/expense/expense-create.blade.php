<div class="max-w-7xl mx-auto py-15 px-4 my-10">

    <x-slot name="header">
        <p class="font-bold">
            Criar registro
        </p>
    </x-slot>

    @include('includes.message')

    <form action="" wire:submit.prevent="createExpense" class="w-full max-w-7xl mx-auto">
        <div class="flex flex-wrap -mx-3 mb-6">

            <p class="w-full px-3 mb-6 md:mb-4">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Descrição
                    Registro</label>
                <input type="text" name="description" wire:model="description"
                    class="block appearance-none w-full bg-gray-200 border @error('description') border-red-500 @else border-gray-200 @enderror  text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">

                @error('description')
                <h5 class="text-red-500 text-xs italic -mt-3 mb-3 mx-3">{{ $message }}</h5>
            @enderror
            </p>


            <p class="w-full px-3 mb-6 md:mb-4">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Valor do
                    Registro</label>
                <input type="text" name="amount" wire:model="amount"
                    class="block appearance-none w-full bg-gray-200 border @error('amount') border-red-500 @else border-gray-200 @enderror  text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">

                @error('amount')
                <h5 class="text-red-500 text-xs italic -mt-3 mb-3 mx-3">{{ $message }}</h5>
            @enderror

            </p>


            <p class="w-full px-3 mb-6 md:mb-4">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Tipo do
                    Registro</label>
                <select name="type" id="" wire:model="type"
                    class="block appearance-none w-full bg-gray-200 border @error('type') border-red-500 @else border-gray-200 @enderror  text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    <option value="">Selecione o tipo do registro: Entrada ou Saída...</option>
                    <option value="1">Entrada</option>
                    <option value="2">Saída</option>
                </select>

                @error('type')
                <h5 class="text-red-500 text-xs italic mt-1 mb-3 mx-3">{{ $message }}</h5>
            @enderror
            </p>

            <div class="w-full px-3 mb-6 md:mb-4">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Foto
                    comprovante</label>
                <input type="file" name="photo" wire:model="photo"
                    class="block appearance-none w-full @error('photo') border-red-500 @else border-gray-200 @enderror text-gray-700 pb-3 pt-1 px-4 pr-8 rounded leading-tight focus:outline-none">

                @error('photo')
                    <h5 class="text-red-500 text-xs italic -mt-3 mb-3 mx-3">{{ $message }}</h5>
                @enderror
            </div>

            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Data de
                    registro (se for hoje, pode deixar em branco)</label>
                <input type="text" name="expense_date" wire:model="expense_date"
                    class="block appearance-none w-full bg-gray-200 border @error('expense_date') border-red-500 @else border-gray-200 @enderror  text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">

                @error('expense_date')
                    <h5 class="text-red-500 text-xs italic -mt-3 mb-3 mx-3">{{ $message }}</h5>
                @enderror
            </div>
        </div>
        <div class="w-full flex justify-end mb-6 md:mb-0">
            <button type="submit"
                class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-800 dark:border-gray-700">Criar
                Registro</button>
        </div>

    </form>
</div>
