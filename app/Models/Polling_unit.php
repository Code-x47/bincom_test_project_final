<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Polling_unit extends Model
{
    use HasFactory;
    public $table = "polling_unit";

    public function pollingResults() {
        return $this->hasMany(Announced_pu_result::class);
    }
}
