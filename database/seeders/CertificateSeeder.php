<?php

namespace Database\Seeders;

use App\Enums\CertificateStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('certificates')->insert($this->getData());
    }

    private function getData(): array
    {
        $nowData = now();
        for ($i = 0; $i < 5; $i++) {
            $data[] = [
                'title' => \fake()->jobTitle(),
                'description' => \fake()->text(100),
                'status' => CertificateStatus::DRAFT->value,
                'created_at' => $nowData,
                'updated_at' => $nowData,
            ];
        }
        return $data;
    }
}
