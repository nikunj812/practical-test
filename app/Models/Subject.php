<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Term;

class Subject extends Model
{
    use HasFactory;

    protected $guarderd = ['id'];

    /**
     * relationship beetween Term and Subject
     *
     * @return Relationship
     * 
     */
    public function term(){
        return $this->belongsTo(Term::class);
    }
}
