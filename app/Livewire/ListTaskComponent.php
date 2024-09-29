<?php

namespace App\Livewire;

use App\Models\ListTask;
use Livewire\Component;
use Livewire\WithPagination;

class ListTaskComponent extends Component
{
    use WithPagination;

    public $data = [];
    public $dataUpdate = [];
    public $dataDelete = [];


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


    public function setEdit(ListTask $list)
    {
        $this->dataUpdate  = $list->toArray();
    }

    public function setDelete(ListTask $list)
    {
        $this->dataDelete  = $list->toArray();
    }

    public function cancelEdit()
    {
        flash()->error('Se ha cancelado la edicion');
        $this->reset( 'dataUpdate');
    }


    public function cancelDelete()
    {
        flash()->error('Se ha cancelado la eliminacion');
        $this->reset( 'dataDelete');
    }

    
    public function destroy()
    {
        $data = ListTask::find($this->dataDelete['id']);
        $data->delete();
        flash()->success('Se ha  eliminado la lista '.$this->dataDelete['name']);
        $this->reset( 'dataDelete');
    }

    public function save()
    {
        $message = 'Se ha creado la nueva lista';
 
        if (isset($this->dataUpdate['id'])) {
            $this->validate([ 'dataUpdate.name' => 'required'], [ 'dataUpdate.name.required' => 'El nombre de la lista es obligatorio.']);
            $message = 'Se ha actualizado la nueva lista';
            $data = ListTask::find($this->dataUpdate['id']);
            $data->fill($this->dataUpdate);
        } else {
            $this->validate([ 'data.name' => 'required'], [ 'data.name.required' => 'El nombre de la lista es obligatorio.']);
            $data = new ListTask($this->data);
        }

        $data->save();
        flash()->success($message);
        $this->reset('data', 'dataUpdate');
       
    }
}
