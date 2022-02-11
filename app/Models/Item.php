<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'name',
        'slug',
        'price',
        'description',
        'status',
        'archived_at',
        'ordering',
    ];

    /**
     * --------------------------------------------
     * ----     Relationship    ----
     * --------------------------------------------
     */
    /**
     * User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Gallery 
     */
    public function gallery()
    {
        return $this->hasMany(ItemGallery::class, 'item_id', 'id');
    }
}
