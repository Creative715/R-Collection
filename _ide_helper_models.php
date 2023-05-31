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
 * App\Models\Encategory
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Encategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Encategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Encategory query()
 */
	class Encategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Enproduct
 *
 * @property-read \App\Models\Encategory|null $category
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Image> $images
 * @property-read int|null $images_count
 * @property-write mixed $slug
 * @method static \Illuminate\Database\Eloquent\Builder|Enproduct allPaginate($numbers)
 * @method static \Illuminate\Database\Eloquent\Builder|Enproduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Enproduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Enproduct query()
 */
	class Enproduct extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Image
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Image newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image query()
 */
	class Image extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Nocategory
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Nocategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Nocategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Nocategory query()
 */
	class Nocategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Noproduct
 *
 * @property-read \App\Models\Nocategory|null $category
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Image> $images
 * @property-read int|null $images_count
 * @property-write mixed $slug
 * @method static \Illuminate\Database\Eloquent\Builder|Noproduct allPaginate($numbers)
 * @method static \Illuminate\Database\Eloquent\Builder|Noproduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Noproduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Noproduct query()
 */
	class Noproduct extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property mixed $password
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 */
	class User extends \Eloquent {}
}

