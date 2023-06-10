<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Encategory extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'seo_title', 'parent_id', 'description', 'img', 'slug', 'published'];

    public function setSlugAttribute($slug)
    {
        $this->attributes['slug'] = Str::slug(mb_substr($this->seo_title, 0, 140) . "-");
    }


    public function subcategories():HasMany
    {
        return $this->hasMany(Encategory::class, 'parent_id');
    }

    public function products(): HasMany
    {
        return $this->hasMany(Enproduct::class);
    }

    public function enproducts(): BelongsToMany
    {
        return $this->belongsToMany(Enproduct::class, 'encategory_enproduct', 'encategory_id', 'enproduct_id');
    }
}
