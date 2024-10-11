<?php

namespace App\Models;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;
    protected $fillable=[
        'classname',
        'academic_level',
        'status'
    ];
    public static function rules(){
        return [
            'classname'=>'required|min:3|max:25',
            'academic_level'=>'required|min:3|max:25',
            'status'=>['in:active,inactive'],

        ];
    }

    public function students(){
        return $this->hasMany(Student::class,'classroom_id','id');
    }

}
