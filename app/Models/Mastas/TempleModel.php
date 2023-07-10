<?php
namespace App\Models\Mastas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagenation\Paginator;

class TempleModel extends Model
{
    use HasFactory;
    protected $table = 'temples'; // テーブル名

/*
    protected $fillable = [
        'id',
        'display_order',
        'name_kana',
        'name',
        'postal_code',
        'adress1',
        'adress2',
        'tel',
        'fax',
        'other' 
    ];
    */


    // カスタムメソッドを定義する場合は、以下にメソッドを追加します

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
}


