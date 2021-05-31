<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Word;
use Illuminate\Http\Request;

class UserLessonController extends Controller
{
    public function index($course_id)
    {
        $lessons = Lesson::with('courses')->where('course_id', '=', $course_id)->get();
        $course = Course::find($course_id)->first();

        $courseItems = [];
        foreach($lessons as $lesson){
            array_push($courseItems, $lesson);
        }
        $listLesson = array('course' => $course, 'lessons' => $courseItems);

        // dd($listLesson['lessons']);
        return view('layouts.functions.lessons')->with('listLesson', $listLesson);
    }
}
