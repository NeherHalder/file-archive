<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class SearchController extends Controller
{
    public function create()
    {
    	$categories = Category::orderBy('name','asc')->get();
    	return view('admin.search.create', compact('categories'));
    }
}
