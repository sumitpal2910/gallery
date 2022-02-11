<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItemGallery extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'item_id',
        'album_id',
        'path',
        'path_type',
        'type',
        'cover_image',
        'name',
        'description',
        'ordering',
        'status',
    ];

    /**
     * --------------------------------------------
     * ----     Relationship    ----
     * --------------------------------------------
     */
    /**
     * Item
     */
    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    /**
     * Album
     */
    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
