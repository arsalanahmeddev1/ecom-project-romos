<?php

namespace App\Faker;

use Faker\Provider\Base;

class ProductProvider extends Base
{
  protected static $productNames = [
    'Wireless Mouse',
        'Gaming Keyboard',
        'LED Monitor',
        'Bluetooth Speaker',
        'USB-C Hub',
        'Ergonomic Chair',
        'Laptop Stand',
        'Smartwatch',
  ];

  protected static $categoryNames = [
    'Electronics',
        'Furniture',
        'Accessories',
        'Wearables',
  ];

  public function productName() {
    return static::randomElement(self::$productNames);
  }

  public function categoryName() {
    return static::randomElement(self::$categoryNames);
  }
}
?>