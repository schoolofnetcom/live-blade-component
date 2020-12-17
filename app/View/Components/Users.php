<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Users extends Component
{
    public $users = [];

    public function __construct($users)
    {
        $this->users = $users;
    }

    public function count() {
        // 10
        // return count($this->users);
        return $this->users->count();
    }

    public function print($message) {
        return $message;
    }

    public function render()
    {
        return view('components.users');
    }
}
