<?php

namespace Database\Seeders;

use App\Enums\PageStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert($this->getData());
    }

    private function getData(): array
    {
        $nowData = now();
        $data = [
            1 => [
                'id' => 1,
                'title' => 'Главная',
                'slug' => 'main',
                'description' => fake()->text(100),
                'status' => PageStatus::DRAFT->value,
                'created_at' => $nowData,
                'updated_at' => $nowData,
            ],
            2 => [
                'id' => 2,
                'title' => 'Компетенции',
                'slug' => 'competencies',
                'description' => fake()->text(100),
                'status' => PageStatus::DRAFT->value,
                'created_at' => $nowData,
                'updated_at' => $nowData,
            ],
            3 => [
                'id' => 3,
                'title' => 'Сертификаты',
                'slug' => 'certificates',
                'description' => fake()->text(100),
                'status' => PageStatus::DRAFT->value,
                'created_at' => $nowData,
                'updated_at' => $nowData,
            ],
            4 => [
                'id' => 4,
                'title' => 'Работы',
                'slug' => 'portfolios',
                'description' => fake()->text(100),
                'status' => PageStatus::DRAFT->value,
                'created_at' => $nowData,
                'updated_at' => $nowData,
            ],
            5 => [
                'id' => 5,
                'title' => 'Приветствие',
                'slug' => 'greetings',
                'description' => fake()->text(100),
                'status' => PageStatus::DRAFT->value,
                'created_at' => $nowData,
                'updated_at' => $nowData,
            ],
            6 => [
                'id' => 6,
                'title' => 'Обратная связь',
                'slug' => 'feedbacks',
                'description' => fake()->text(100),
                'status' => PageStatus::DRAFT->value,
                'created_at' => $nowData,
                'updated_at' => $nowData,
            ],
            7 => [
                'id' => 7,
                'title' => 'Калькулятор',
                'slug' => 'calculator',
                'description' => fake()->text(100),
                'status' => PageStatus::DRAFT->value,
                'created_at' => $nowData,
                'updated_at' => $nowData,
            ],
        ];
        return $data;
    }
}
