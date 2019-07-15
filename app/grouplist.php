<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grouplist extends Model
{
    protected $table = 'grouplist';
    /**
     * Quais campos pode preencher em atribuição em massa
     */
    protected $fillable = ['titulo'];

    public function lists()
    {
        # code...
        return $this->hasOne('App\ListCompra');
    }

}
