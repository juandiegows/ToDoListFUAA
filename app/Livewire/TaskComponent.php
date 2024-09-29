<?php

namespace App\Livewire;

use App\Models\ListTask;
use App\Models\Task;
use Livewire\Component;

class TaskComponent extends Component
{

    public ListTask $listTask;
    public $data = [];
    public $dataUpdate = [];
    public $dataDelete = [];

    public function mount($id)
    {
        $this->listTask =ListTask::findOrFail($id);
        
    }
    public function render()
    {
        return view('livewire.task-component',[
            'tasks' => $this->getTasks()
        ]);
    }

    public function getTasks(){
        return Task::where('list_task_id', $this->listTask->id)->paginate(10);
    }
    
    public function setEdit(Task $list)
    {
        $this->dataUpdate  = $list->toArray();
    }

    public function cancelEdit()
    {
        flash()->error('Se ha cancelado la edicion');
        $this->reset( 'dataUpdate');
    }

    public function setDelete(Task $list)
    {
        $this->dataDelete  = $list->toArray();
    }

    public function cancelDelete()
    {
        flash()->error('Se ha cancelado la eliminacion');
        $this->reset( 'dataDelete');
    }

    public function destroy()
    {
        $data = Task::find($this->dataDelete['id']);
        $data->delete();
        flash()->success('Se ha  eliminado la tarea '.$this->dataDelete['name']);
        $this->reset( 'dataDelete');
    }

    public function toggleCompletion(Task $task)
    {

        if (!$task->is_complete) {
            $task->completed_at = now();
            $task->completed_by =  auth()->user()->id;
            flash()->success("Se completo la tarea -> ".$task->name);
        } else {
            $task->completed_at = null; 
            $task->completed_by = null; 
            flash()->success("Se restablecio la tarea -> ".$task->name);
        }
        $task->save();
    }


    public function save()
    {
        $message = 'Se ha creado la nueva tarea';
 
        if (isset($this->dataUpdate['id'])) {
            $this->validate([ 'dataUpdate.name' => 'required'], [ 'dataUpdate.name.required' => 'El nombre de la lista es obligatorio.']);
            $message = 'Se ha actualizado la nueva tarea';
            $data = Task::find($this->dataUpdate['id']);
            $data->fill($this->dataUpdate);
            $data->list_task_id = $this->listTask->id;
        } else {
            $this->validate([ 'data.name' => 'required'], [ 'data.name.required' => 'El nombre de la lista es obligatorio.']);
            $data = new Task($this->data);
            $data->created_by = auth()->user()->id;
            $data->list_task_id = $this->listTask->id;
        }

        $data->save();
        flash()->success($message);
        $this->reset('data', 'dataUpdate');
       
    }

}
