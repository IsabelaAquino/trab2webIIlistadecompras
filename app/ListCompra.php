<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class ListCompra extends Model
{
    protected $table = 'lists';
    /**
     * Quais campos pode preencher em atribuição em massa
     */
    protected $fillable = ['titulo', 'descricao', 'preco', 'data'];

    /**
     * get Created_at para formatar na data brasileira
     *
     */
    public function getDataAttribute($value)
    {
        return (Carbon::parse($value)->format('d/m/Y H:i:s'));
    }
    public function getCreatedAtAttribute($value)
    {
        return (Carbon::parse($value)->format('d/m/Y H:i:s'));
    }
}
