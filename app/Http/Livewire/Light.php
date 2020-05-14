<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Light extends Component
{
    public $bridghtness=90;
    public function on()
    {
        $this->$bridghtness=100;
    }

    public function increment()
    {
        $this->$bridghtness +=10;
    }

    public function decrement()
    {
        $this->$bridghtness -=10;
    }

    public function off()
    {
        $this->$bridghtness=0;
    }
    public function render()
    {
        return view('livewire.light');
    }
}
