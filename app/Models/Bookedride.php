<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $mobile
 * @property string $date
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 */
class Bookedride extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'email', 'mobile', 'date', 'status', 'created_at', 'updated_at'];

}
