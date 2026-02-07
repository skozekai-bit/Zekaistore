<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // Fillable properties
    protected $fillable = [
        'user_id',
        'status',
        'total',
        'created_at',
        'updated_at',
    ];

    // Relationship to SmileTransaction
    public function smileTransaction() {
        return $this->hasOne(SmileTransaction::class);
    }

    // Query scope for filtering by user
    public function scopeByUser($query, $userId) {
        return $query->where('user_id', $userId);
    }

    // Query scope for filtering by status
    public function scopeByStatus($query, $status) {
        return $query->where('status', $status);
    }
}
