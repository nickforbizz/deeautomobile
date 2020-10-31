<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $make_id
 * @property int $model_id
 * @property string $name
 * @property string $description
 * @property string $label
 * @property int $price
 * @property string $manYr
 * @property string $speed
 * @property float $mileage
 * @property string $condition
 * @property string $bodyType
 * @property string $colour
 * @property string $fuel
 * @property string $transmission
 * @property string $duty
 * @property string $interior
 * @property float $cc
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 * @property VehicleMake $vehicleMake
 * @property ModelsImg[] $modelsImgs
 */
class VehicleModel extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'make_id', 'model_id', 'name', 'description', 'label', 'price', 'manYr', 'speed', 'mileage', 'condition', 'bodyType', 'colour', 'fuel', 'transmission', 'duty', 'interior', 'cc', 'status', 'created_at', 'updated_at'];

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modelsImgs()
    {
        return $this->hasMany('App\Models\ModelsImg', 'veh_model_id');
    }
}
