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
use Illuminate\Support\Str;
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
        try {
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt(Str::random(10)),
            ]);
            Log::channel('create-new-user-management')->info('The user has been created!');
            return redirect()->route('system.management.users')->with('success','The user has been created!');
        } catch (QueryException|\Exception $e){
            Log::channel('create-new-user-management')->error('failed to create user ',
                ['Error '=>$e->getMessage(), ' Error Code '=> $e->getCode()]);
            return redirect()->route('system.management.users.create-user')
                ->with('error','Failed to create user!.');
        }
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
