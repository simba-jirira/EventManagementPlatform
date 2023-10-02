<?php

namespace App\Exceptions\backend\System\Management\User;

use Exception;

class UserCrudException extends Exception
{
    public function render($request)
    {
        return response()->json([
            'error' => 'Error with performing management user crud operations.',
        ], 400);
    }
}
