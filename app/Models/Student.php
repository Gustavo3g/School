<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = ['name', 'cpf', 'birth_date', 'gender', 'gender', 'registered', 'responsible_id'];

    public function responsible(){
        return $this->belongsTo(Responsible::class,'responsible_id','id');
    }
}
