<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\Student;
use Livewire\Component;

class Students extends Component
{
    public  $courses,$name,$email,$password,$date,$time;
    public $edit_mode = false;
    
    public function add(){
        $change_course =new Student();
        $change_course->full_name = $this->name;
        $change_course->course_id = $this->courses;
        $change_course->email = $this->email;
        $change_course->password = $this->password;
        $change_course->save();
        $this->edit_mode = false;
        session()->flash('add','add');
        // $this->resetinputs();

    }
    public function update(){
        $change_course = Student::find($this->edit_info);
        $change_course->full_name = $this->name;
        $change_course->course_id = $this->courses;
        $change_course->email = $this->email;
        $change_course->password = $this->password;
        $change_course->save();
        $this->edit_mode = false;
        session()->flash('update','update');
        // $this->resetinputs();

    }

    function delete($id)
    {
        $data = Student::find($id);
        $data->delete();
    }

    public function render()
    {
        $stu = Student::get();
        $cou = Course::get();
        return view('livewire.students', ['col' => $stu , 'collection'=>$cou]);
    }
}
