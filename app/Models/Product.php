<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
    use Kyslik\ColumnSortable\Sortable;
  
class Product extends Model
{
    use Sortable;

    protected $fillable = [
        'name', 'detail', 'image', 'harga', 'stok'
    ];

    public $sortable = ['id', 'name', 'detail', 'harga', 'stok'];
}