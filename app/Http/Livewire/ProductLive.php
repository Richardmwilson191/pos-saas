<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ProductLive extends Component
{
    public Product $product;

    protected $rules = [
        'product.store_id' => 'required',
        'product.brand_id' => 'required',
        'product.category_id' => 'required',
        'product.name' => 'required',
        'product.weight' => 'required',
        'product.price' => 'required',
        'product.sale_price' => 'required',
        'product.sku' => 'required',
        'product.qty' => 'required',
        'product.status' => 'required',
        'product.desc' => 'required',
    ];

    public function mount()
    {
        $this->product = new Product();
    }

    public function createProduct(): void
    {
        //
    }

    public function storeProduct($storeId): void
    {
        $this->validate();
        $this->student->save();
        $this->reset();
        session()->flash('success', 'Product has been successfully created');
    }

    public function render()
    {
        return view('livewire.product-live', [
            'brands' => Brand::all(),
            'categories' => Category::all(),
        ]);
    }
}