<?php

namespace App\Http\Livewire\Admin;

use App\Models\ServiceCategory;
use Livewire\Component;
use Livewire\WithPagination;

class AdminServiceCategoryComponent extends Component
{
    use WithPagination;
    public $delete_id;
    // protected $listeners = ['deleteConfirmed' => 'deleteCategory'];

    public function deleteServiceCategory($id)
    {
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');

        // $scategory = ServiceCategory::find($id);
        // if ($scategory->image)
        // {
        //     unlink('images/categories' . '/' . $scategory->image);
        // }
        // $scategory->delete();
        // session()->flash('message', 'Service Category has been deleted successfully!');
    }
    // public function deleteCategory()
    // {
    //     $scategory = ServiceCategory::where('id', $this->delete_id)->first();
    //     if ($scategory->image)
    //     {
    //         unlink('images/categories' . '/' . $scategory->image);
    //     }
    //     $scategory->delete();
    //     $this->dispatchBrowserEvent('categoryDeleted');
    // }

    public function render()
    {
        $scategories = ServiceCategory::orderBy('id', 'DESC')->paginate(10);

        return view('livewire.admin.admin-service-category-component', [
            'scategories' => $scategories,
        ])->layout('layouts.base');
    }
}
