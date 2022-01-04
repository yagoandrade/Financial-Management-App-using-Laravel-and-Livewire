<?php

namespace App\Http\Livewire\Expense;

use Livewire\Component;
use App\Models\Expenses;

class ExpenseEdit extends Component
{
    public Expenses $expense;

    public $description;
    public $amount;
    public $type;

    protected $rules = [
        'amount' => 'required',
        'type' => 'required',
        'description' => 'required'
    ];

    public function mount(/* Expenses $expense */)
    {
        $this->description  = $this->expense->description;
        $this->amount       = $this->expense->amount;
        $this->type         = $this->expense->type;
    }

    public function updateExpense()
    {
        $this->validate();
        $this->expense->update([
            'description' => $this->description,
            'amount' => $this->amount,
            'type' => $this->type
        ]);
        session()->flash('message', 'Registro atualizado com sucesso!');
    }

    public function render()
    {
        return view('livewire.expense.expense-edit');
    }
}
