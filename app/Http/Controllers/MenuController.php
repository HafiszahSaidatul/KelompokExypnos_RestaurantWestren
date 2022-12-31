<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Menu;
use App\Models\User;

class MenuController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' Category : ' . $category->name;
        }

        return view('menus', [
            "title" => "All Menu" . $title,
            "active" => 'menus',
            "menus" => Menu::latest()->filter(request(['search', 'category']))->paginate(12)->withQueryString()
        ]);
    }

    public function show(Menu $menu)
    {
        return view('menu', [
            "title" => "Menu",
            "active" => 'menus',
            "menu" => $menu
        ]);
    }
}
