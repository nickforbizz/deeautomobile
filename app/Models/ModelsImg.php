<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $veh_model_id
 * @property int $user_id
 * @property string $name
 * @property string $description
 * @property string $media_link
 * @property string $type
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 * @property VehicleModel $vehicleModel
 */
class ModelsImg extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['veh_model_id', 'user_id', 'name', 'description', 'media_link', 'type', 'status', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vehicleModel()
    {
        return $this->belongsTo('App\Models\VehicleModel', 'veh_model_id');
    }
}
