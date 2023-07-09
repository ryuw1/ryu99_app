<?php
namespace App\Models\Mastas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempleModel extends Model
{
    use HasFactory;
    protected $table = 'temples'; // テーブル名
/*
    // テーブルのカラム名を指定する場合は、以下のようにプロパティを追加します
    protected $fillable = ['column1', 'column2', ...];

    // カスタムメソッドを定義する場合は、以下にメソッドを追加します

    public function customMethod()
    {
        // メソッドの処理
    }
*/
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
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
}


