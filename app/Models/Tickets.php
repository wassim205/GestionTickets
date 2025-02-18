<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Status;
class Tickets extends Model
{
    use HasFactory;

    public function status(){
        return $this->belongsTo(Status::class);
    }
    public function categories(){
        return $this->belongsTo(Categories::class);
    }
    public function users(){
        return $this->belongsTo(User::class);
    }
}
