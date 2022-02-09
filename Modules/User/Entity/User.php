<?php

namespace Module\User\Entity;

use App\Models\Concerns\UsesUuid;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Module\Airplane\Entity\Airplane;
use Module\Flight\Entity\Flight;
use Module\Hotel\Entity\Hotel;
use Module\Passenger\Entity\Passenger;
use Module\User\Database\factories\UserFactory;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable,UsesUuid;

    /***ROLE***/

    const TYPE_SUPER = 'super';
    const TYPE_ADMIN = 'admin';
    const TYPE_USER = 'user';
    const TYPES = [self::TYPE_SUPER,self::TYPE_ADMIN,self::TYPE_USER];

    public function isSuper()
    {
        return $this->type = self::TYPE_SUPER;
    }

    public function isAdmin()
    {
        return $this->type = self::TYPE_ADMIN;
    }

    public function isUser()
    {
        return $this->type = self::TYPE_USER;
    }

    /*** END_ROLE***/

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Create a new factories instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return UserFactory::new();
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    // Start RELATIONS
    public function airplanes()
    {
        return $this->belongsToMany(Airplane::class,'users','code');
    }

    public function flights()
    {
        return $this->belongsToMany(Flight::class,'users','flight_number');
    }

    public function hotels()
    {
        return $this->belongsToMany(Hotel::class,'users','postal_code');
    }

    public function passengers()
    {
        return $this->belongsToMany(Passenger::class,'passenger_user','userId','passengerId');
    }

}
