<?php

namespace App\Http\Livewire;

use App\Models\Course as ModelsCourse;
use Livewire\Component;

class Course extends Component
{
    public  $course,$name;
    public $edit_mode = false;


    public function add(){
        $this->validate([
            'course' =>'required'
        ]);
        $adding = new ModelsCourse();
        $adding->course = $this->course;
        $adding->save();
        session()->flash('add','add');
    }

    public function edit($id){
        $edit_course = ModelsCourse::find($id);
        $this->course  = $edit_course->course;
        $this->edit_mode = true;
        $this->edit_info = $id;
    }

    public function update(){
        $change_course = ModelsCourse::find($this->edit_info);
        $change_course->course = $this->course;
        $change_course->save();
        $this->edit_mode = false;
        session()->flash('update','update');
        $this->resetinputs();

    }

    function delete($id)
    {
        $data = ModelsCourse::find($id);
        $data->delete();
    }

    public function resetinputs()
    {
        $this->name = null;
    }
    

    public function render()
    {
        $course = ModelsCourse::get();
        return view('livewire.course',['info' => $course]);
    }
}
