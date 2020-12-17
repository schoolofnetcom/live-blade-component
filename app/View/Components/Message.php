<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Message extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return <<<'blade'
        <div class="alert alert-danger" role="alert">
            {{ $slot }}
        </div>
        blade;
    }
}
