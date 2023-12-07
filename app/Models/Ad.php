<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public function ad_medias()
    {
        return $this->hasMany(AdMedia::class);
    }

    public function withVideo()
    {
        // ->extension()
        if ($this->ad_medias()->exists()) {
            foreach ($this->ad_medias as $key => $value) {
                // $ext = pathinfo($value->file, PATHINFO_EXTENSION);
                $lastDotPos = strrpos($value->media, '.');
                if (!$lastDotPos) return false;
                $extension = substr($value->media, $lastDotPos + 1);
                $allowedfileExtension = ['mp4', 'mkv', 'avi'];
                $check = in_array($extension, $allowedfileExtension);
                if ($check) {
                    return $value->media;
                }
            }
        }
        return false;
    }

    public function hasMoreThanOneImage()
    {
        $count = 0;
        if ($this->ad_medias()->exists()) {
            foreach ($this->ad_medias as $key => $value) {
                // $ext = pathinfo($value->file, PATHINFO_EXTENSION);
                $lastDotPos = strrpos($value->media, '.');
                if (!$lastDotPos) return false;
                $extension = substr($value->media, $lastDotPos + 1);
                $allowedfileExtension = ['jpg', 'png', 'gif', 'webp'];
                $check = in_array($extension, $allowedfileExtension);
                if ($check) {
                    $count++;
                }
            }
        }
        if ($count > 1) {
            return true;
        } else {
            return false;
        }
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

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }



    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }



    public function favorites()
    {
        return $this->belongsToMany(User::class, 'favorites');

    }

    public function scopeWhenFavorite($query, $favorite)
    {
        return $query->when($favorite, function ($q) {

            return $q->whereHas('favorites', function ($qu) {

                return $qu->where('user_id', auth()->user()->id);
            });
        });
    }

    public function scopeWhenApproved($query)
    {
        Ad::whereDoesntHave('ad_slot', function ($query) {
            $query->where(DB::raw('DATE_ADD(ads.created_at, INTERVAL ad_slots.duration DAY)'), '>', now());
        })->delete();

        return $query->where('status', 'approved')
            ->whereHas('ad_slot', function ($query) {
                $query->where(DB::raw('DATE_ADD(ads.created_at, INTERVAL ad_slots.duration DAY)'), '>', now())
                    ->orderByDesc('ad_slots.price');
            })
            ->orderBy('ads.created_at', 'desc');
    }

}
