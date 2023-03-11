<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class Portfolio extends Model
{
    use HasFactory;

    protected $table = 'portfolios';

    public function getPortfolios(): Collection
    {
        return DB::table($this->table)->select(['id', 'title', 'description', 'image', 'link', 'status', 'created_at', 'updated_at'])->get();
    }

    public function getPortfolioById(int $id)
    {
        return DB::table($this->table)->find($id, ['id', 'title', 'description', 'image', 'link', 'status', 'created_at', 'updated_at'])->get();
    }
}
