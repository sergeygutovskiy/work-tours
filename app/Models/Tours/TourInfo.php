<?php

namespace App\Models\Tours;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Complexity;
use App\Models\Season; 
use Database\Factories\TourInfoFactory;

class TourInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'people_amount',
        'duration',
        'description',
        'video_path',
        'season_id',
        'complexity_id',
        'document_path'
    ];

    public function getIsMediaIsVideoAttribute()
    {
        return str_contains($this->video_path, 'youtube');
    }

    public function getDocumentSrcAttribute()
    {
        return  '/images/storage' . $this->tour->local_storage_path . $this->document_path;
    }

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }

    public function complexity()
    {
        return $this->belongsTo(Complexity::class);
    }

    public function season()
    {
        return $this->belongsTo(Season::class);
    }

    public function locations()
    {
        return $this->hasMany(TourLocation::class, 'tour_info_id');
    }

    public function services()
    {
        return $this->hasMany(TourService::class, 'tour_info_id');
    }

    public function services_in_price()
    {
        return $this->hasMany(TourService::class, 'tour_info_id')->where('is_included_in_price', true);
    }

    public function services_not_in_price()
    {
        return $this->hasMany(TourService::class, 'tour_info_id')->where('is_included_in_price', false);
    }

    protected static function newFactory()
    {
        return TourInfoFactory::new();
    }
}
