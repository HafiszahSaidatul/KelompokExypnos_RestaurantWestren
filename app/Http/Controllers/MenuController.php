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
            $title = $category->name;
        }

        return view('menus', [
            "title" => "All Menu" . $title,
            "active" => 'menus',
            "menus" => Menu::all()
        ]);
    }

    public function show(Menu $menu)
    {
        return view('menu', [
            "title" => "Single Menu",
            "active" => 'menus',
            "menu" => $menu
        ]);
    }
}
