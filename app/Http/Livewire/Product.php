<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Product as ProductModel;
use Illuminate\Support\Facades\Log;

class Product extends Component
{


    public $products, $title, $description, $productId, $updateProduct = false, $addProduct = false;
    /**
     * delete action listener
     */
    

    /**
     * List of add/edit form rules
     */
    protected $rules = [
        'title' => 'required',
        'description' => 'required'
    ];

    /**
     * Reseting all inputted fields
     * @return void
     */
    public function resetFields(){
        $this->title = '';
        $this->description = '';
    }

    /**
     * render the post data
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        $this->products = ProductModel::all();
        return view('livewire.product');
    }

    /**
     * Open Add Post form
     * @return void
     */
    public function addProduct()
    {
        $this->resetFields();
        $this->addProduct = true;
        $this->updateProduct = false;
    }
     /**
      * store the user inputted post data in the posts table
      * @return void
      */
    public function storeProduct()
    {
        $this->validate();
        try {
            ProductModel::create([
                'title' => $this->title,
                'description' => $this->description
            ]);
            session()->flash('success','Product Created Successfully!!');
            $this->resetFields();
            $this->addProduct = false;
        } catch (\Exception $ex) {
            session()->flash('error','Something goes wrong!!');
        }
    }

    /**
     * show existing post data in edit post form
     * @param mixed $id
     * @return void
     */
    public function editProduct($id){

        try {
            $product = ProductModel::findOrFail($id);
            if( !$product) {
                session()->flash('error','Post not found');
            } else {
                $this->title = $product->title;
                $this->description = $product->description;
                $this->productId = $product->id;
                $this->updateProduct = true;
                $this->addProduct = false;
            }
        } catch (\Exception $ex) {
            session()->flash('error','Something goes wrong!!', $ex->getMessage());
        }

    }

    /**
     * update the post data
     * @return void
     */
    public function updateProduct()
    {
        $this->validate();
        try {
            ProductModel::whereId($this->productId)->update([
                'title' => $this->title,
                'description' => $this->description
            ]);
            session()->flash('success','Post Updated Successfully!!');
            $this->resetFields();
            $this->updateProduct= false;
        } catch (\Exception $ex) {
            session()->flash('success','Something goes wrong!!',$ex->getMessage());
        }
    }

    /**
     * Cancel Add/Edit form and redirect to post listing page
     * @return void
     */
    public function cancelProduct()
    {
        $this->addProduct = false;
        $this->updateProduct = false;
        $this->resetFields();
    }

    /**
     * delete specific post data from the posts table
     * @param mixed $id
     * @return void
     */
    public function deleteProduct($id)
    {

        try{
            ProductModel::find($id)->delete();
            session()->flash('success',"Product Deleted Successfully!!");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong!!");
        }
    }
}
