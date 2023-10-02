<?php

namespace App\Http\Controllers\Backend\System\Management\User;

use App\Exceptions\backend\System\Management\User\UserCrudException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\System\User\Management\UserFormRequest;
use App\Models\User;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Whoops\Exception\ErrorException;

class UserController extends Controller
{
    public function index()
    {
        try
        {
            $users = User::latest()->paginate(10);
            return view('backend.system.management.users.index',compact('users'));
        } catch(QueryException|Exception $e)
        {
            Log::channel('user-crud-management')
                ->error('failed to perform read crud-management',['error' => $e->getMessage(),]);

        }
    }

    public function createUser()
    {
       return view('backend.system.management.users.create-user');
    }

    public function store(UserFormRequest $request)
    {
        //
    }

    public function destroy(User $user)
    {
        try
        {
            $user->delete();
            Log::channel('user-destroy-crud-management')
                ->info('That user has been deleted!');
            return redirect()->route('system.management.users')->with('info','The user has been deleted!.');
        } catch (QueryException|Exception $e)
        {
            Log::channel('user-destroy-crud-management')
                ->error('failed to delete user '.$user->name.' with ID '.$user->id.' ',['error' => $e->getMessage(),]);
            return redirect()->route('system.management.users')->with('error','Failed to delete user!.');
        }

    }
}
