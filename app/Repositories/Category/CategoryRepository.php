<?php

namespace App\Repositories\Category;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Repositories\Category\InterfaceCategory;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class CategoryRepository implements InterfaceCategory
{
    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
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
        return $this->category->get();
    }

    public function getCategoryProduct()
    {
        return $this->category->where('type','=','produk')->get();
    }

    public function getCategoryArticle()
    {
        return $this->category->where('type','=','artikel')->get();
    }

    public function getById($id)
    {
        return $this->category->where('id',$id)->first();
    }

    public function save(Request $request)
    {
        $category = new $this->category;
        $category->name = $request->name;
        $file = $request->file('image');
        $category->image = $this->uploadImages($file,'image/category');
        $category->type = $request->type;
        $category->save();

        return $category->fresh();
    }

    public function delete($id)
    {
        $category = $this->category->find($id);
        $category->delete();
    }

    public function update(Request $request, $id)
    {
        $update = $this->category->find($id);
        $update->name = $request->name;
        $update->type = $request->type;
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
                // $image_path = $request->oldImage;
                // unlink($image_path);
            }
            $update->image = $this->uploadImages($request->file('image'),'image/category');
        }
        $update->save();
        return $update->fresh();
    }
}
