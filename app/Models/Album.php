<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Album extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'name',
        'parent_id'
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
        return $this->hasMany(ItemGallery::class, 'album_id', 'id');
    }

    /**
     * Parent
     */
    public function parent()
    {
        return $this->belongsTo(Album::class, 'parent_id', 'id');
    }
    
    /**
     * Children
     */
    public function children()
    {
        return $this->hasMany(Album::class, 'parent_id', 'id');
    }
}
