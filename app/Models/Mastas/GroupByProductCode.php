<?php
namespace App\Models\Mastas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagenation\Paginator;

class GroupByProductCode extends Model
{
    use HasFactory;
    protected $table = 'group_by_products'; // テーブル名

    protected $fillable = [
       'display_order',	
       'group_by_product_code',		
       'name',	
    ];
}


