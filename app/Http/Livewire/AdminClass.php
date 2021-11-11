<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\Teacher;
use App\Models\teachers_course;
use Livewire\Component;

class AdminClass extends Component
{
    public  $courses, $teacher, $date, $time;
    public $edit_mode = false;

    public function add()
    {
        $this->validate([
            'teacher' => 'required',
            'courses' => 'required',
            'date' => 'required',
            'time' => 'required',
        ]);
        $adding = new teachers_course();
        $adding->teacher_id = $this->teacher;
        $adding->course_id = $this->courses;
        $adding->class_time = $this->time;
        $adding->class_day = $this->date;
        $adding->save();
        session()->flash('add', 'add');
    }

    public function edit($id)
    {
        $edit_course = teachers_course::find($id);
        $this->name = $edit_course->full_name;
        $this->courses = $edit_course->course_id;
        $this->time = $edit_course->class_time;
        $this->date = $edit_course->class_day;
        $this->edit_mode = true;
        $this->edit_info = $id;
    }

    public function update()
    {
        $change_course = teachers_course::find($this->edit_info);
        $change_course->course_id = $this->courses;
        $change_course->class_time = $this->time;
        $change_course->class_day = $this->date;
        $change_course->save();
        $this->edit_mode = false;
        session()->flash('update', 'update');
        $this->resetinputs();
    }

    function delete($id)
    {
        $data = teachers_course::find($id);
        $data->delete();
    }

    public function resetinputs()
    {
        $this->name = null;
        $this->courses = null;
        $this->time = null;
        $this->date = null;
    }


    public function render()
    {
        $course = Course::get();
        $teach = Teacher::get();
        $teachers_course = teachers_course::get();
        return view(
            'livewire.admin-class',
            [
                'collection' => $course,
                'col' => $teach,
                'learn' => $teachers_course
            ]
        );
    }
}
