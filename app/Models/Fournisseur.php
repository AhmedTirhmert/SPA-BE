<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    use HasFactory;
    protected $primaryKey="code_fournisseur";

    protected $fillable=[
        'name',
        'adresse',
        'email',
        'telephone'
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    public function Product()
    {
        return $this->hasMany(Product::class,'code_fournisseur','code_fournisseur');
    }
}
