<?php
namespace App\Models\Mastas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagenation\Paginator;

class ObituaryText extends Model
{
    use HasFactory;
    protected $table = 'obituary_texts'; // テーブル名

    protected $fillable = [
        'obituary_main',
    ];

    // カスタムメソッドを定義する場合は、以下にメソッドを追加します

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
}


