<?php

namespace App\View\Components\Folder;

use Illuminate\View\Component;

class Hello extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('components.folder.hello');
    }
}
