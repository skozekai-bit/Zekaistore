// Zekai Store Routes

Route::post('/zekai/verify', [ZekaiController::class, 'verify']);
Route::post('/zekai/submit-order', [ZekaiController::class, 'submitOrder']);
Route::get('/zekai/check-status/{orderId}', [ZekaiController::class, 'checkStatus']);

// Smile.one webhook
Route::post('/zekai/webhook/smile', [WebhookController::class, 'handleSmileWebhook']);
