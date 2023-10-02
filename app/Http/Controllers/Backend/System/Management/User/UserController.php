<?php

namespace App\Http\Controllers\Backend\System\Management\User;

use App\Exceptions\backend\System\Management\User\UserCrudException;
use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function index()
    {
        try
        {
            $users = User::all();
            return view('backend.system.management.users.index',compact('users'));
        } catch(QueryException|Exception $e)
        {
            Log::channel('user-crud-management')
                ->error('failed to perform read crud-management',['error' => $e->getMessage(),]);
        }
    }
}
