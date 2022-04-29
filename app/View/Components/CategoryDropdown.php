<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class CategoryDropdown extends Component {
  /**
   * Create a new component instance.
   *
   * @return void
   */

  public function render() {
    $categories = Category::all();
    $currentCategory = Category::firstWhere('slug', request('category'));

    return view('components.category-dropdown', [
      'categories' => $categories,
      'currentCategory' => $currentCategory,
    ]);
  }
}
