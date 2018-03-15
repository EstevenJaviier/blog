<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\view;
use App\Category;
use App\Tag;
use App\Image;

class AsideComposer {

	public function compose(View $view)
	{
		$tags = Tag::orderBy('id', 'DESC')->get();
        $categories = Category::orderBy('id', 'DESC')->simplepaginate(7);
        $images = Image::orderBy('id', 'DESC')->paginate(4);

        $view->with('tags', $tags)
        	 ->with('categories', $categories)
        	 ->with('images', $images);
	}
}