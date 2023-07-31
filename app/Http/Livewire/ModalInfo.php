<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ModalInfo extends ModalComponent
{
    public string $title;
    public string $content;

    public function render()
    {
        return view('livewire.modal-info');
    }
}
