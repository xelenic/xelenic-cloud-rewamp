<?php

namespace App\Services\Products\ProductService;

use App\Models\Products;

class ProductService
{

   public static function getFeatureProductMenu()
   {
       $products = Products::all();
       $outDetails = [];
       foreach ($products as $product)
       {
              $outDetailsItem = [
                'title' => $product->name,
                'url' => $product->name,
                'icon' => $product->icon
              ];
              array_push( $outDetails,$outDetailsItem);
       }

       return $outDetails;
   }

}
