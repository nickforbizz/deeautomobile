<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $mobile
 * @property string $message
 * @property float $price
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 */
class OfferRequest extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'email', 'mobile', 'message', 'price', 'status', 'created_at', 'updated_at'];

}
