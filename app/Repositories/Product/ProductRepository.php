<?php

namespace App\Repositories\Product;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Repositories\Product\InterfaceProduct;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductRepository implements InterfaceProduct
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    private function base()
    {
        $base_path = '';
    }

    protected function uploadImages($file, $path)
    {
        $date = Carbon::now();
        $filePath = $path . "/$date->year";
        $filename = $this->base() . $date->timestamp . '_' . $file->getClientOriginalName();
        $dd = $file->storeAs(
            $filePath, $filename, 'public'
        );
        $url = Storage::disk('public')->url($dd);
        return $url;
    }

    public function getAll()
    {
        return $this->product->with(['category','productImages'])->get();
    }

    public function getById($id)
    {
        return $this->product->where('id',$id)->with('productImages')->first();
    }

    public function getBySlug($slug)
    {
        return $this->product->with(['category','productImages'])->where('slug',$slug)->firstOrFail();
    }

    public function save(Request $request)
    {
        $product = new $this->product;
        $product->title = $request->title;
        $product->category_id = $request->category_id;
        $product->available_qty = $request->available_qty;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->weight = $request->weight;
        $product->slug = Str::slug($request->title);
        $product->save();

        $file = $request->file('images');
        for ($i=0; $i < count($file) ; $i++) {
            $product_images = new ProductImage();
            $product_images->product_id = $product->id;
            $product_images->image = $this->uploadImages($file[$i],'image/product_imagess');
            $product_images->save();
        }
        $product_images->save();

        return $product->fresh();
    }

    public function delete($id)
    {
        $product = $this->product->find($id);
        $product->delete();
    }

    public function update(Request $request, $id)
    {
        $product = $this->product->find($id);
        $product->title = $request->title;
        $product->category_id = $request->category_id;
        $product->available_qty = $request->available_qty;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->weight = $request->weight;
        $product->slug = Str::slug($request->title);
        $product->save();

        $file = $request->file('images');
        for ($i=0; $i < count($file) ; $i++) {
            $product_images = ProductImage::whereIn('product_id', $id)->update(['image' => $this->uploadImages($file[$i],'image/product_imagess')]);
            $product_images->save();
        }
        $product_images->save();
        return $product->fresh();
    }
}
