<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $rec_type
 * @property string $car_listing
 * @property string $blog_listing
 * @property boolean $guest_email_notifications
 * @property string $created_at
 * @property string $updated_at
 */
class Parameter extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['rec_type', 'car_listing', 'blog_listing', 'guest_email_notifications', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';
}
