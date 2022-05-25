<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsible extends Model
{
    use HasFactory;

    protected $fillable = ['name','cpf','birth_date','gender'];

    public function student(){
        return $this->hasMany(Student::class,'responsible_id','id');
    }
}
