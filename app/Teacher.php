<?php

namespace App;

use App\Profession;
use App\TeacherContactNumber;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $guarded =['id'];

    public function profession()
    {
        return $this->hasOne (Profession::class);
    }
    public function contactNumbers()
    {
        return $this->hasMany (TeacherContactNumber::class);
    }
}
