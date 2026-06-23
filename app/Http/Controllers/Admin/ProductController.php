<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        // dd($products);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $types      = Type::all();
        return view('products.create', compact('types', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        //   dd($data);

        $newProduct = Product::create([
            'name'        => $data['name'],
            'description' => $data['description'],
            'type_id'     => $data['type'],
        ]);

        $path = $data['img']->store('productsImages', 'public');

        $newProduct->image()->create([
            'path'     => $path,
            'alt_text' => $data['alt_text'],
        ]);

        $newProduct->categories()->attach($data['categories']);

        return redirect()->route('products.show', $newProduct);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {

        // dd($product);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        $types      = Type::all();
       
        //  dd(count($product->categories));
        // dd(count($product->categories) != 0);
        if (count($product->categories) != 0) {
            foreach ($product->categories as $category) {
                $checkCategory[] = $category->id;

            }
        } else {
            $checkCategory[] = 'nulla';
        }

        return view('products.edit', compact('product', 'types', 'categories', 'checkCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {

        $data = $request->all();
        // dd($data);
        // dd(array_key_exists('img', $data));
        $product->name        = $data['name'];
        $product->description = $data['description'];
        //controllo se il tipo e diverso da quello precendende
        if ($product->type_id != $data['type']) {
            $product->type_id = $data['type'];
        }
        // dd($product->image->alt_text, $data['img']);
        //controllo se l'utente ha cambiato l'immagine
        if (array_key_exists('img', $data)) {
            if(  ! is_null($product->image)){
            Storage::disk('public')->delete($product->image->path);
            $path = $data['img']->store('productsImages', 'public');

            $product->image()->update([
                'path'     => $path,
                'alt_text' => $data['alt_text'],
            ]);
            }else{
                        $path = $data['img']->store('productsImages', 'public');

        $product->image()->create([
            'path'     => $path,
            'alt_text' => $data['alt_text'],
        ]);
            }
            
        }elseif ($product->image->alt_text!=$data['alt_text']) {
            $product->image()->update([
               
                'alt_text' => $data['alt_text'],
            ]);
        }

    
    $product->update();

    if (! empty($data['categories'])) {
        $product->categories()->sync($data['categories']);
    } else {
        $product->categories()->detach();
    }
    return redirect()->route('products.show', $product);

}

/**
 * Remove the specified resource from storage.
 */
public function destroy(Product $product)
{

    if (! is_null($product->image)) {
        Storage::disk('public')->delete($product->image->path);
    }
    $product->delete();

    return redirect()->route('products.index');
}
};
