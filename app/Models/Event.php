<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'capacity'
    ];

    public function users(){
        return $this->belongsToMany(User::class, 'event_user');
    }
}

//cdigo andrea

// public function subscribe($id)
//     {
//         $user =User::find(Auth::id());
//         //$user =Auth::user();
//         $courses = $user->courses;
//         $course_id=Course::find($id);
//         //dd($user->courses);
//         if ($courses->find($id) === null) {
//         $user->courses()->attach($course_id);
//         $this->sendEmail();
//         return redirect()->route('myCourses');
//         }
        
//         return redirect()->route('home')->with('message',"You are already subscribed in this course");
    
//     }