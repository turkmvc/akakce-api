<?php 

namespace turkmvc\Akakce\AkakceProducts;

use turkmvc\Akakce\AkakceProduct\Product;
use Philo\Blade\Blade;

 /**
 * Products
 * 
 * @package    turkmvc\Akakce
 * @author     Cuma KÖSE <turkmvc@gmail.com>
 */

class Products {
	
	protected $products = [];

	public function addProduct(Product $product){
		array_push($this->products, $product);
	}

	public function getProducts(){

		return $this->products;

	}

	public function render(){
		$views = __DIR__;
		$cache = __DIR__ . '/cache';
		$blade = new Blade($views, $cache);

		return $blade->view()->make('products', [ 'products' => $this->getProducts() ])->render();
	}
}




?>
