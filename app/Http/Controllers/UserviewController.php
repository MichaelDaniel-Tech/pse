<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class UserviewController extends Controller
{

    public function index(): View
    {
        $users = User::latest()->paginate(10);

        return view('users.index', compact('users'));
    }

    // public $getRecord;

    // public function mount($id)
    // {
    //     // $this->getRecord = User::find($id);
    //     $getRecord = User::find($id);
    //     return view('admin.user-list',['getRecord'=>$getRecord]);
    // }

    // public function render()
    // {
    //     return view('admin.user-list', ['getRecord' => $this->getRecord]);
    // }
}
