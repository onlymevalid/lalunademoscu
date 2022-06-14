<?php
   
namespace App\Models;
   
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;
   
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
 
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type'
    ];
   
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
 
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
   
    /**
     * The attributes that should be cast.
     *
     * @var array
 
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
  
    /**
     * Interact with the user's first name.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    

    public function type()
    {
        $role = '';
         switch ($this->type) {
            case 1:
                $role = 'admin';
                break;
            case 2:
                $role = 'agency';
                break;            
            default:
                $role = 'user';
                break;
        }
        return $role;
    }
}