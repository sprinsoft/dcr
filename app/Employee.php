<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employee extends Authenticatable
{
    //
    use Notifiable;

    protected $gaurd = "employee";

	protected $table = "dcr_employee";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firm_id', 'distributor_id', 'code_no', 'name', 'address', 'phone_no', 'email', 'salary', 'pan', 'uid', 'description', 'is_active', 'is_deleted', 'created_datetime', 'updated_datetime', 'password', 'username', 'remember_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
