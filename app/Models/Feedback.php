<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedbacks';

    public function getFeedbacks(): Collection
    {
        return DB::table($this->table)->select(['id', 'comment', 'image', 'file', 'status', 'created_at', 'updated_at'])->get();
    }

    public function getFeedbackById(int $id)
    {
        return DB::table($this->table)->find($id, ['id', 'comment', 'image', 'file', 'status', 'created_at', 'updated_at'])->get();
    }
}
