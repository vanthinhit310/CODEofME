<?php
/**
 * Created by PhpStorm.
 * User: vanth
 * Date: 08-Jan-19
 * Time: 21:05
 */

namespace App;


class Cart
{
    public $product;
    public $total;
    public $count;

    /**
     * Cart constructor.
     * @param $product
     * @param $total
     * @param $count
     */
    public function __construct($product, $total, $count)
    {
        $this->product = $product;
        $this->total = $total;
        $this->count = $count;
    }

}
