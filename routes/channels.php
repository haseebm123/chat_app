<?php

use Illuminate\Support\Facades\Broadcast;
use App\Http\Controllers\ChatAppController;
/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('users-list',function($user){
    return $user;
});

// Broadcast::channel('users-list1',[ChatAppController::class,'userList']);
