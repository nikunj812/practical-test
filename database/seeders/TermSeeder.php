<?php

namespace Database\Seeders;

use App\Models\Faculty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Term;
use App\Models\Subject;

class TermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<6; $i++){
            $post = new Term();
            $post->name = 'Term '.($i);
            $post->save();
        }

        $faculty = new Faculty();
        $faculty->name  = 'Lorem';
        $faculty->email  = 'Lorem@testmail.srg';
        $faculty->save();

        $faculty = new Faculty();
        $faculty->name  = 'ipsum';
        $faculty->email  = 'ipsum@testmail.srg';
        $faculty->save();

        $faculty = new Subject();
        $faculty->name  = 'Science';
        $faculty->term_id  = 2;
        $faculty->save();

        $faculty = new Subject();
        $faculty->name  = 'Maths';
        $faculty->term_id  = 3;
        $faculty->save();

        
    }
}
