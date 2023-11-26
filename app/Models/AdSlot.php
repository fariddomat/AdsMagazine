<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdSlot extends Model
{
    use HasFactory;


    protected $guarded=[];

    public function scopeWhenSearch($query, $search)
    {
        return $query->when($search,function($q) use ($search){
            return $q->where('name','like',"%$search%");
        });
    }

    public function ads()
    {
        return $this->hasMany(Ad::class);
    }
}
