<?php
namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LogoutResponse as a;
use Illuminate\Http\Request;

class LogoutResponse implements a{
    public function toResponse($request) {
        return redirect('/login');
    }
}