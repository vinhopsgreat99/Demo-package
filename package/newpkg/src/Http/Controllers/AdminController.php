<?php 
namespace Vinh\Newpkg\Http\Controllers;

use PhpParser\Node\Expr\FuncCall;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\Product;

use App\Models\Order;

use Illuminate\Support\Facades\Redirect;


//Processing the data in the admin's page
class AdminController extends Controller
{
    public function home() {
        
        return view('newpkg::home');
    }
    
    public function view_category()
    {
        $data = category::all();
        return view('newpkg::category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $data = new category;
        $data->category_name = $request->category;
        $data->save();

        return redirect()->back();
    }

    public function delete_category($id)
    {
        $data = category::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function view_product()
    {
        $category = category::all();
        return view('newpkg::product', compact('category'));
    }

    public function add_product(Request $request)
    {
        $product = new product;

        $product->title = $request->title;

        $product->description = $request->description;

        $product->price = $request->price;

        $product->quantity = $request->quantity;

        $product->discount_price = $request->dis_price;

        $product->category = $request->category;

        $image = $request->image;

        if ($image) {

            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('product', $imagename);

            $product->image = $imagename;
        }

        $product->save();

        return redirect()->back();
    }

    public function show_product()
    {
        $product = product::all();
        return view('newpkg::show_product', compact('product'));
    }

    public function delete_product($id)
    {
        $product = product::find($id);
        $product->delete();
        return redirect()->back();
    }

    public function update_product($id)
    {
        $product = product::find($id);
        $category = category::all();
        return view('newpkg::update_product', compact('product', 'category'));
    }

    public function update_product_confirm(Request $request, $id)
    {
        $product = product::find($id);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->discount_price = $request->dis_price;
        $product->category = $request->category;
        $product->quantity = $request->quantity;
        $image = $request->image;

        if ($image) {

            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('product', $imagename);
            $product->image = $imagename;
        }

        $product->save();
        return redirect()->back();
    }

    public function order() {
        $order = order::all();
        return view('newpkg::order', compact('order'));
    }

    public function delivered($id) {
        $order = order::find($id);
        $order->delivery_status = "delivered";
        $order->payment_status = "paid";
        $order->save();
        return redirect()->back();
    }

    public function searchdata(Request $request) {
        $searchText = $request->search;

        $order = order::where('name', 'LIKE', "%$searchText%")->orWhere('product_title', 'LIKE', "%$searchText%")->get();

        return view('newpkg::order', compact('order'));
        
    }
}



?>