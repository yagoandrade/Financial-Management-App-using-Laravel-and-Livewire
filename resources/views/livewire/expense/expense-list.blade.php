<div>
    <x-slot name='header'>
        Meus registros
    </x-slot>
    <table>
        <thead>
            <tr>
                <td>#</td>
                <td>Description</td>
                <td>Amount</td>
                <td>Register Date</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($expenses as $exp)
                <tr>
                    <td>{{ $exp->id }}</td>
                    <td>{{ $exp->description }}</td>
                    <td>{{ $exp->amount }}</td>
                    <td>{{ $exp->created_at->format('d/m/Y H:i:s') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $expenses->links()}}
</div>
