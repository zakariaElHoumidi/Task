<?php

namespace App\Livewire;

use Livewire\Component;

class AddTask extends Component
{
    public $title;
    public $description;

    protected $rules = [
        'title' => 'required|between:3,25',
        'description' => 'required|between:5,50',
    ];
    public function render()
    {
        return view('livewire.add-task');
    }

    public function addTask() {
        $this->validate();

        $user = auth()->user();

        $task = $user->tasks()->create([
            'title' => $this->title,
            'description' => $this->description,
            'status' => 'pending'
        ]);
        $this->title = '';
        $this->description = '';

        session()->flash('success', $this->title . ' Added Successfully !');
        $this->dispatch('task-created', title: $task->title);
    }

}
