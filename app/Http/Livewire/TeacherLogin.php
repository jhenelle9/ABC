<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TeacherLogin extends Component
{
    public $Email, $Password; 

    protected $rules = [
 'Email' => 'requireed',
 'Password' => 'requireed',
    ];

    public function login (){
        $CheckInputs = $this->validate();
        Auth::attempt($CheckInputs)
        ?$this->redirectTo('Teacher.dashboard'):dd('no');
    }

    public function redirectTo($name)
    {
        return redirect()->route($name);
    }


    public function render()
    {
        return view('livewire.teacher-login');
    }
}
