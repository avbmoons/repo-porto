<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class Page extends Model
{
    use HasFactory;

    protected $table = 'pages';

    public function getPages(): Collection
    {
        return DB::table($this->table)->select(['id', 'title', 'slug', 'description', 'status', 'created_at', 'updated_at'])->get();
    }

    public function getPageById(int $id)
    {
        return DB::table($this->table)->find($id, ['id', 'title', 'slug', 'description', 'status', 'created_at', 'updated_at'])->get();
    }
}
