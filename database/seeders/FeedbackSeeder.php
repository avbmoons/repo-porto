<?php

namespace Database\Seeders;

use App\Enums\FeedbackStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feedbacks')->insert($this->getData());
    }

    private function getData(): array
    {
        $nowData = now();
        for ($i = 0; $i < 5; $i++) {
            $data[] = [
                'comment' => \fake()->text(100),
                'status' => FeedbackStatus::DRAFT->value,
                'created_at' => $nowData,
                'updated_at' => $nowData,
            ];
        }
        return $data;
    }
}
