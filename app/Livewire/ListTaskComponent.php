<?php

namespace App\Livewire;

use App\Models\ListTask;
use Livewire\Component;
use Livewire\WithPagination;

class ListTaskComponent extends Component
{
    use WithPagination;

    public $data = [];
    protected $rules = [
        'data.name' => 'required',
    ];

    protected $messages = [
        'data.name.required' => 'El nombre de la lista es obligatorio.',
    ];

    public function render()
    {
        return view(
            'livewire.list-task-component',
            ['listTasks' => $this->getListTask()]
        );
    }


    public function getListTask()
    {
        return ListTask::paginate(10);
    }

    public function save()
    {
        $this->validate();
        $data = new ListTask($this->data);
        $data->save();
        flash()->success('Se ha creado la nueva lista');
        $this->reset('data');
    }
}
