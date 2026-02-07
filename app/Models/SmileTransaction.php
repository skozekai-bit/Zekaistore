<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SmileTransaction extends Model
{
    // Fillable properties
    protected $fillable = [
        'transaction_id',
        'amount',
        'status',
        'user_id',
        'created_at',
        'updated_at',
    ];

    // Casts
    protected $casts = [
        'amount' => 'float',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Scopes
    public function scopeSuccessful($query)
    {
        return $query->where('status', 'success');
    }

    public function scopeFailed($query)
    {
        return $query->where('status', 'failed');
    }

    // Methods
    public function markAsSuccess() 
    {
        $this->status = 'success';
        $this->save();
    }

    public function markAsFailed() 
    {
        $this->status = 'failed';
        $this->save();
    }

    public function canRetry() 
    {
        return $this->status === 'failed';
    }
}