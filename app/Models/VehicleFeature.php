<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $description
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 */
class VehicleFeature extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'name', 'description', 'status', 'created_at', 'updated_at'];

}
