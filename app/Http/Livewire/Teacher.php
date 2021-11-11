<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\Teacher as ModelsTeacher;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Teacher extends Component
{
    public  $courses,$name,$email,$password,$date,$time;
    public $edit_mode = false;

    public function add(){
        $this->validate([
            // 'courses' =>'required',      
            'name' =>'required',      
            'email' =>'required'      
        ]);
        $adding = new ModelsTeacher();
        $adding->fname = $this->name;
        $adding->email = $this->email;
        $adding->password = Hash::make($this->password);
        $adding->save();
        session()->flash('add','add');
    }

    public function edit($id){
        $edit_course = ModelsTeacher::find($id);
        $this->name = $edit_course->fname;
        $this->email = $edit_course->email;
        $this->password = $edit_course->password;
        $this->edit_mode = true;
        $this->edit_info = $id;
    }

    public function update(){
        $change_course = ModelsTeacher::find($this->edit_info);
        $change_course->fname = $this->name;
        $change_course->email = $this->email;
        $change_course->password = $this->password;
        $change_course->save();
        $this->edit_mode = false;
        session()->flash('update','update');
        $this->resetinputs();

    }

    function delete($id)
    {
        $data = ModelsTeacher::find($id);
        $data->delete();
    }

    public function resetinputs()
    {
        $this->name = null;
// $this->courses = null;
$this->email   = null;
$this->password = null;
// $this->time = null;
// $this->date = null;
    }
    

    public function render()
    {
        $course= Course::get();
        $teach = ModelsTeacher::get();
        return view('livewire.teacher',
         ['collection' => $course,
         'col' => $teach]);
    }
}
