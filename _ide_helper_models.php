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
 * App\Models\Superhero
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $full_name
 * @property string|null $strength
 * @property string|null $speed
 * @property string|null $durability
 * @property string|null $power
 * @property string|null $combat
 * @property string|null $race
 * @property string|null $height_0
 * @property string|null $height_1
 * @property string|null $weight_0
 * @property string|null $weight_1
 * @property string|null $eye_color
 * @property string|null $hair_color
 * @property string|null $publisher
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Superhero filter(?string $filter)
 * @method static \Illuminate\Database\Eloquent\Builder|Superhero newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Superhero newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Superhero query()
 * @method static \Illuminate\Database\Eloquent\Builder|Superhero whereCombat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Superhero whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Superhero whereDurability($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Superhero whereEyeColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Superhero whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Superhero whereHairColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Superhero whereHeight0($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Superhero whereHeight1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Superhero whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Superhero whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Superhero wherePower($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Superhero wherePublisher($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Superhero whereRace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Superhero whereSpeed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Superhero whereStrength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Superhero whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Superhero whereWeight0($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Superhero whereWeight1($value)
 */
	class Superhero extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
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

