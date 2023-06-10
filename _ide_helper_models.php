<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $title
 * @property int|null $parent_id
 * @property string $img
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Category> $subcategories
 * @property-read int|null $subcategories_count
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Encategory
 *
 * @property int $id
 * @property string $title
 * @property string $seo_title
 * @property int|null $parent_id
 * @property string $description
 * @property string $img
 * @property string $slug
 * @property int $published
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Enproduct> $enproducts
 * @property-read int|null $enproducts_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Enproduct> $products
 * @property-read int|null $products_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Encategory> $subcategories
 * @property-read int|null $subcategories_count
 * @method static \Illuminate\Database\Eloquent\Builder|Encategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Encategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Encategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|Encategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Encategory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Encategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Encategory whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Encategory whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Encategory wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Encategory whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Encategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Encategory whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Encategory whereUpdatedAt($value)
 */
	class Encategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Enproduct
 *
 * @property int $id
 * @property string $title
 * @property string|null $seo_title
 * @property string|null $encategory_id
 * @property string $content
 * @property float $price
 * @property string|null $img
 * @property string $slug
 * @property string|null $description
 * @property int $published
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Encategory> $category
 * @property-read int|null $category_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Encategory> $encategories
 * @property-read int|null $encategories_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Image> $images
 * @property-read int|null $images_count
 * @method static \Illuminate\Database\Eloquent\Builder|Enproduct allPaginate($numbers)
 * @method static \Illuminate\Database\Eloquent\Builder|Enproduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Enproduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Enproduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|Enproduct whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enproduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enproduct whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enproduct whereEncategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enproduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enproduct whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enproduct wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enproduct wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enproduct whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enproduct whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enproduct whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Enproduct whereUpdatedAt($value)
 */
	class Enproduct extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Image
 *
 * @property int $id
 * @property string $image
 * @property int $product_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Image newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image query()
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereUpdatedAt($value)
 */
	class Image extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Nocategory
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $slug
 * @property string|null $img
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Nocategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Nocategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Nocategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|Nocategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nocategory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nocategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nocategory whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nocategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nocategory whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Nocategory whereUpdatedAt($value)
 */
	class Nocategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Noproduct
 *
 * @property int $id
 * @property string $title
 * @property string|null $seo_title
 * @property string $category_id
 * @property string $content
 * @property float $price
 * @property string|null $img
 * @property string $slug
 * @property string|null $description
 * @property int $published
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Nocategory|null $category
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Image> $images
 * @property-read int|null $images_count
 * @method static \Illuminate\Database\Eloquent\Builder|Noproduct allPaginate($numbers)
 * @method static \Illuminate\Database\Eloquent\Builder|Noproduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Noproduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Noproduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|Noproduct whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noproduct whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noproduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noproduct whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noproduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noproduct whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noproduct wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noproduct wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noproduct whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noproduct whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noproduct whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Noproduct whereUpdatedAt($value)
 */
	class Noproduct extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

