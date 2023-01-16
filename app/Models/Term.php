<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;

class Term extends Model
{
    use HasFactory;

    protected $guarderd = ['id'];

    /**
     * relationship beetween Term and Subject
     *
     * @return Relationship
     * 
     */
    public function subjects(){
        return $this->hasMany(Subject::class);
    }
}
