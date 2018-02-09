<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public  function getRoleNameAttribute(){
        $str = '';
        if($this->role == 0){
            $str  = 'Super Admin';
        }
        if($this->role == 1){
            $str  = 'Admin';
        }

        if($this->role == 3){
            $str  = 'Sub Admin';
        }

        if($this->role == 4){
            $str  = 'Deliver Boy';
        }

        if(empty($str)){
            $str = 'Not define';
        }

        return $str;
    }
    public  function getStatusNameAttribute(){
        $str = '';
        if($this->status == 0){
            $str  = 'De-Active';
        }
        if($this->status == 1){
            $str  = 'Active';
        }



        if(empty($str)){
            $str = 'Not define';
        }

        return $str;
    }
}
