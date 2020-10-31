<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $description
 * @property string $image
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 * @property CarModel[] $carModels
 * @property VehicleModel[] $vehicleModels
 */
class VehicleMake extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'name', 'description', 'image', 'status', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carModels()
    {
        return $this->hasMany('App\Models\CarModel', 'make_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehicleModels()
    {
        return $this->hasMany('App\Models\VehicleModel', 'make_id');
    }
}
