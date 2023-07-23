<?php
namespace App\Models\Mastas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagenation\Paginator;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products'; // テーブル名

    protected $fillable = [
        'display_order',	
        'group_by_product_code',
        'code',	
        'name',	
        'unit_price',	
        'tax_rate',	
        'quantity',	
        'unit_orice_including_tax',	
        'unit',	
        'other',
    ];

    // カスタムメソッドを定義する場合は、以下にメソッドを追加します

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
}


