<?php

namespace erpcore\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;
use erpcore\Ordination\OrdinationTrait;

class UnidadeMedida extends Model
{
    use OrdinationTrait;

    protected $fillable = ['id', 'descricao'];
}
