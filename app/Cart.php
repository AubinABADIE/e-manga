<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Cart extends Model
{
    public static function getAllPurchases(){
        return DB::table('purchase')
          ->get();
    }
}
