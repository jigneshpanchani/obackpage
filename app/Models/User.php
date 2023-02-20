<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;


class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'google_id',
        'credits'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
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
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    function getUser()
    {

        $array = user::from('users')
            ->select('id', 'name', 'email', 'credits')
            ->get()->toArray();
        return $array;
    }

    public function updateUser($request)
    {

        $user_id = Auth::user()->id;
        $getCurrentCredit = User::select('credits')->where('id', $user_id)->get()->toArray();
        $updatedCredit = $getCurrentCredit[0]['credits'] + $request->input('credit_amount');
        $objService = user::find($user_id);
        $objService->credits =  $updatedCredit;
        $objService->update();
        return true;
    }
}
