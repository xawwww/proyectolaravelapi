<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table = 'productos';
    
    protected $fillable = ['idcategoria','codigo','nombre','presentation','laboratorio','concentracion','medida','fechaelaboracion','fechaexpiracion','lote','numfactura','stock','precio_venta','stockfraccion','condicion'];
    
    public function categoria(){

        return $this->belongsTo("App\Categoria");
    }
}