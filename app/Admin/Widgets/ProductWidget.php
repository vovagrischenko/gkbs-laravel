<?php

namespace App\Admin\Widgets;

use App\Models\Product;
use Arrilot\Widgets\AbstractWidget;

class ProductWidget extends AbstractWidget
{
	protected $config = [];

	public function run(){

		$count = Product::count();

		return view('voyager::dimmer', array_merge($this->config, [
			'icon' => 'voyager-news',
			'title' => 'счётчик продуктов',
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