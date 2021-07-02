<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LoginRegisterLayout extends Component
{
    // タイトル
    public $title;

    public function __construct()
    {
        $this->title = "";
    }

    public function render()
    {
        return view('layouts.login-register');
    }
}
