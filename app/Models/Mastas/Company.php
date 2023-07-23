<?php
namespace App\Models\Mastas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagenation\Paginator;

class Company extends Model
{
    use HasFactory;
    protected $table = 'companys'; // テーブル名

    protected $fillable = [
        'name',
        'postal_code',
        'adress1',
        'tel',
        'fax',
        'bank_name',
        'bank_account',
    ];

    // カスタムメソッドを定義する場合は、以下にメソッドを追加します

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
}


