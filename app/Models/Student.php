<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classroom;

class Student extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'last_name',
        'email',
        'number',
        'birthday',
        'status',
    ];
    public static function rules(){
        return [
            'name'=>'required|min:3|max:25',
            'last_name'=>'required|min:3|max:25',
            'email'=>'required',
            'number'=>'required|min:8|max:16',
            'birthday'=>'required','date','before:today',
            'status'=>['in:active,inactive'],

        ];
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class,'classroom_id','id');
    }


}
