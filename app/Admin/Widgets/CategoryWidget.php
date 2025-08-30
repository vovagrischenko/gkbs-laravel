<?php

namespace App\Admin\Widgets;

use App\Models\Category;
use Arrilot\Widgets\AbstractWidget;

class CategoryWidget extends AbstractWidget
{
	protected $config = [];

	public function run(){

		$count = Category::count();

		return view('voyager::dimmer', array_merge($this->config, [
			'icon' => 'voyager-news',
			'title' => 'счётчик категорий',
			'text' => "кол-во новостей: {$count}",
			'button' => [
				'text' => 'перейти к списку',
				'link' => ''
			],
			'image' => 'news-bg'
		]));
	}

	public function shouldBeDisplayed(){
		return true;
	}
}