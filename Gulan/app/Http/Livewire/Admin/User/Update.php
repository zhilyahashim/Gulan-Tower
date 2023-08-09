<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $user;

    public $name;
    public $email;
    public $password;
    public $datetime;
    public $file;
    
    protected $rules = [
        'name' => 'require',        
    ];

    public function mount(User $User){
        $this->user = $User;
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->password = $this->user->password;
        $this->datetime = $this->user->datetime;
        $this->file = $this->user->file;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('User') ]) ]);
        
        if($this->getPropertyValue('file') and is_object($this->file)) {
            $this->file = $this->getPropertyValue('file')->store('file');
        }

        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'datetime' => $this->datetime,
            'file' => $this->file,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.user.update', [
            'user' => $this->user
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('User') ])]);
    }
}
