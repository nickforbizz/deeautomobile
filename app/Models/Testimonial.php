<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $occupation
 * @property string $email
 * @property string $mobile
 * @property string $description
 * @property string $image
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 */
class Testimonial extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'name', 'occupation', 'email', 'mobile', 'description', 'image', 'status', 'created_at', 'updated_at'];

}
