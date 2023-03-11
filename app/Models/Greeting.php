<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class Greeting extends Model
{
    use HasFactory;

    protected $table = 'greetings';

    public function getGreetings(): Collection
    {
        return DB::table($this->table)->select(['id', 'title', 'description', 'image', 'status', 'created_at', 'updated_at'])->get();
    }

    public function getGreetingById(int $id)
    {
        return DB::table($this->table)->find($id, ['id', 'title', 'description', 'image', 'status', 'created_at', 'updated_at'])->get();
    }
}
