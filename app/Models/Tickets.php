<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Status;
use App\Models\Categories;
class Tickets extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'category_id', 'user_id', 'agent_id', 'status_id'];

    public function status(){
        return $this->belongsTo(Status::class);
    }
    public function categories(){
        return $this->belongsTo(Categories::class,'category_id'); 
    }
    public function users(){
        return $this->belongsTo(User::class);
    }
}
