<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function ad_slot()
    {
        return $this->belongsTo(AdSlot::class);
    }

    public function ad_clicks()
    {
        return $this->hasMany(AdClick::class);
    }


    public function scopeOrderByClicks($query, $direction = 'desc')
    {
        return $query->withCount('ad_clicks')->orderBy('ad_clicks_count', $direction);
    }

    public function ad_views()
    {
        return $this->hasMany(AdView::class);
    }


    public function scopeOrderByViews($query, $direction = 'desc')
    {
        return $query->withCount('ad_views')->orderBy('ad_views_count', $direction);
    }
}
