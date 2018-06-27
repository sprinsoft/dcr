<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = "dcr_order";

    protected $fillable = [ 'firm_id', 'distributor_id', 'financial_year_id', 'order_no', 'order_for_date', 'party_id', 'area_id', 'route_id', 'address', 'description', 'is_deleted', 'created_datetime', 'updated_datetime'];
}
