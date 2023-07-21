<?php
namespace App\Models\Mastas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagenation\Paginator;

class Hall extends Model
{
    use HasFactory;
    protected $table = 'halls'; // テーブル名

    protected $fillable = [
        'display_order',
        'name',	
        'postal_code',	
        'adress1',	
        'adress2',	
        'tel',	
        'fax',	
        'map',	
    ];

    // カスタムメソッドを定義する場合は、以下にメソッドを追加します

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
}


