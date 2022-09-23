<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SweetAlertComponent extends Component
{
    protected $listeners = ['remove'];

    public function render()
    {
        return view('livewire.sweet-alert-component')->layout('layouts.base');
    }

    public function alertSuccess()
    {
        $this->dispatchBrowserEvent('swal.modal', [
            'type' => 'success',
            'message' => 'Category created successfully!',
            'text' => 'It will list on category table soon.'
        ]);
    }

    public function alertConfirm()
    {
        $this->dispatchBrowserEvent('swal.confirm', [
            'type' => 'warning',
            'message' => 'Are you sure?',
            'text' => 'If deleted, you will not be able to recover this category.'
        ]);
    }

    public function remove()
    {
        $this->dispatchBrowserEvent('swal.modal', [
            'type' => 'success',
            'message' => 'Category deleted Successfully!',
            'text' => 'It will not list on users table soon.'
        ]);
    }
}
