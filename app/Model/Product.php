<?php

namespace App\Model;

use App\Http\Controllers\FixSlug\FixSlugController;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $guarded = [];


    /**
     * 
     * 
     */
    // protected static function boot()
    // {
    //     parent::boot();

    //     static::created(function ($slug) {
    //         $slug->create([
    //             'slug' => FixSlugController::slug()
    //         ]);
    //     });

    //     // static::created(function ($user) {
    //     //     $user->profile()->create([
    //     //         'title' => 'Profile de ' . $user->username
    //     //     ]);
    //     // });
    // }


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class);
    }


}
