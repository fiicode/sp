<?php

namespace App;

use App\Model\Categorie;
use App\Model\Product;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function category(): HasMany
    {
        return $this->hashMany(Categorie::class);
    }
    public function product(): HasMany
    {
        return $this->hashMany(Product::class);
    }
}
