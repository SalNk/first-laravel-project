<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateFormRequest;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function store(ValidateFormRequest $request){
        // dd($request);

        $verif = $request;

        if($verif){
            return 'C\'est bon';
        }else{
            return redirect()->back();
        }
    }
    public function accueil(){
        return view('welcome');
    }
    public function methode1($userName){
        return 'Je suis ' .$userName;
    }

    public function test(){
        // $userName = 'Sal';
        // $users = ['name', 'hello'];
        // $grades = ['Developper web', 'Freelance',];
        // $emails = ['salemnk02@gmail.com', 'admin@gmail.com'];

        $users = [
            [
                'name' => 'Salem',
                'grade' => 'Developper Full Stack',
                'email' => 'salemnk02@gmail.com',
            ],
            [
                'name' => 'Bns',
                'grade' => 'Developper Mobile',
                'email' => 'bns@gmail.com',
            ],
            [
                'name' => 'Admin',
                'grade' => 'IT Engineer',
                'email' => 'admin@gmail.com',
            ],
        ];

        return view('test', [
            'users' => $users
        ]);
    }
}
