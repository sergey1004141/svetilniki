<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Builder;
use function Laravel\Prompts\select;


class Products extends Model
{
    use HasFactory;

    protected $table = 'products';

    public function scopeGetProduct(Builder $query, $IDs) {
        $plp = 'products_link_properties';
        $query
            ->select([$this->table.'.id', $this->table.'.name', $this->table.'.price', $this->table.'.count'])
            ->whereIn($plp.".property_id", $IDs)
            ->join($plp, $plp.".product_id", '=', $this->table.'.id')
            ->distinct()
        ;
    }
}
