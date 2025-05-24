<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MenuCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function menus()
    {
        return $this->hasMany(Menu::class, 'category_id');
    }
}
