<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $make_id
 * @property string $name
 * @property string $description
 * @property string $image
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 * @property VehicleMake $vehicleMake
 */
class CarModel extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'make_id', 'name', 'description', 'image', 'status', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vehicleMake()
    {
        return $this->belongsTo('App\Models\VehicleMake', 'make_id');
    }
}
