<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Resources\User as UserResources;

use App\prosser\convert2;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Response;

class UserController extends Controller
{

    protected $convert;

    public function __construct(convert2 $convert)
    {
        $this->convert = $convert;

        // $this->middleware('auth')->only('index');
      //  $this->middleware('auth')->except('index');
    }

    public function index()
    {

        $users = User::all();

       
        return  UserResources::collection($users);
    }

    public function show(User $user)
    {
         
        if (!$user) {
            return $this->respondNotFound("this user not fond ");
           
        }
        return  new UserResources($user);
    }
    public function store()
    {
        dd("story");
    }
}
