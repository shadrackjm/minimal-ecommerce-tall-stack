<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Actions\Logout;

class Header extends Component
{
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
    public function render()
    {
        return view('livewire.header');
    }
}
