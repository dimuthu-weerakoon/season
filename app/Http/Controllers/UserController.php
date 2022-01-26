<?php

namespace App\Http\Controllers;


use App\Actions\Fortify\CreateNewUser;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Password;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(StoreUserRequest $request)
    {

        // $ValidatedData = $request->validated();
        // $user = User::create($ValidatedData);

        $newUser = new CreateNewUser();
        $user = $newUser->create($request([
       //'category',
        //'nic',
        //'student_reg_no',
        'name',
        //'gender',
       //'age',
        //'date_of_birth',
        //'address',
       //'contact_no',
        //'province',
       // 'district',
       // 'postal_code',
       // 'depot',
       // 'institute',
        //'route_no',
       // 'starting_point',
        //'interchanging_point',
        //'destination_point',
        //'ticket_fee',
        // 'permission_letter',
        'email',
        'password',
        'password_confirmation'
    ]));



    Password::sendResetLink($request->only(['email']));

        return redirect()->route('register')->with('success','user created');
    }


}
