<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Bus\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\FailedJob;
use Exception;

class ProcessSmileTopUp implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $maxAttempts = 5;
    protected $backoff = [1, 3, 5, 8, 13]; // Exponential backoff times

    public function handle()
    {
        try {
            // Your top-up processing logic here.
        } catch (Exception $e) {
            // Log the exception and handle failure.
            FailedJob::log($e);
            throw $e; // Will trigger retry logic.
        }
    }
}