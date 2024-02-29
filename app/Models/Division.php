<?php

namespace App\Models;

use App\Models\Position;
use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Division extends Model
{
    use HasFactory;

    public function division() {
        return $this->hasMany(Position::class, 'position_id');
    }

    public function depart() {
        return $this->belongsTo(Department::class, 'department_id');
    }
}
