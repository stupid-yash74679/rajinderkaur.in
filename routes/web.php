<?php

use Illuminate\Support\Facades\Route;

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);
Route::get('/link-storage', function () {
    Artisan::call('storage:link');

    // Optionally, get the output of the command
    $output = Artisan::output();

    // Return a response or view
    return response()->json([
        'output' => $output,
    ]);
});
Route::get('/unlink-storage', function () {
    Artisan::call('storage:unlink');

    // Optionally, get the output of the command
    $output = Artisan::output();

    // Return a response or view
    return response()->json([
        'output' => $output,
    ]);
});
