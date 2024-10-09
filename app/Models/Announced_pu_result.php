<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announced_pu_result extends Model
{
    use HasFactory;
    public $table = "announced_pu_results";

    public function pollingDetails() {
        return $this->belongsTo(Polling_unit::class);
    }
}
