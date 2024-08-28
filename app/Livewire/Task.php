<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Task extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['task-created' => '$refresh'];
    public function render()
    {
        $user = auth()->user();
        if($user) {
            $tasks = $user->tasks()->orderBy('created_at', 'desc')->paginate(5);
            $task_count = $tasks->count();
            return view('livewire.task', compact('tasks', 'task_count'));
        }
        return redirect()->route('login');
    }

    public function deleteTask($id) {
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        $user = auth()->user();

        $task = $user->tasks()->find($id);

        if($task) {
            $task->delete();

            session()->flash('success', $task->title . ' Deleted Successfully !');
        }
    }
}
