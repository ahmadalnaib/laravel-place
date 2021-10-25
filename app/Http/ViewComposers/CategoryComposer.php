<?php
namespace App\Http\ViewComposers;
use Illuminate\View\View;
use App\Models\Category;

class CategoryComposer{
  public function compose(view $view){
    return $view->with('categories',Category::all());
  }
}