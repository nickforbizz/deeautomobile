<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $model_id
 * @property int $feature_id
 * @property string $model_name
 * @property string $feature_name
 * @property string $description
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 */
class ModelFeature extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'model_id', 'feature_id', 'model_name', 'feature_name', 'description', 'status', 'created_at', 'updated_at'];

}
