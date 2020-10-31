<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $message
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 */
class InquiryForm extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'inquiry_form';

    /**
     * @var array
     */
    protected $fillable = ['name', 'email', 'message', 'status', 'created_at', 'updated_at'];

}
