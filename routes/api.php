// Registo tradicional
Route::post('/register', [AuthController::class, 'register']);
Route::post('/email/verify', [AuthController::class, 'verifyEmail']);
Route::post('/login', [AuthController::class, 'login']);

// SSO
Route::get('/auth/{provider}', [SocialController::class, 'redirectToProvider']);
Route::get('/auth/{provider}/callback', [SocialController::class, 'handleProviderCallback']);