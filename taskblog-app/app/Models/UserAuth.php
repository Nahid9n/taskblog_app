<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAuth extends Model
{
    use HasFactory;
    private static $user;
    public static function registerUser($request){
        self::$user = new UserAuth();
        self::$user->name = $request->name;
        self::$user->email = $request->email;
        self::$user->password = bcrypt($request->password);
        self::$user->confirm_password = bcrypt($request->confirm_password);
        self::$user->save();
        return self::$user;
    }
}
