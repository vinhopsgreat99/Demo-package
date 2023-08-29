<?php 
namespace Vinh\Newpkg\Http\Controllers;

use PhpParser\Node\Expr\FuncCall;
use App\Http\Controllers\Controller;

class AdminController extends Controller {
    public function home() {
        return view('newpkg::home');
    }
}


?>