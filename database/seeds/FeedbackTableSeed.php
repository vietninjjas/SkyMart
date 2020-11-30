<?php

use Illuminate\Database\Seeder;
use App\Feedback;

class FeedbackTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <=20; $i++){
            Feedback::create([
                'user_id' => mt_rand(1,10),
                'content' => 'website rat tot, toi rat hai long',
            ]);
        }
    }
}
