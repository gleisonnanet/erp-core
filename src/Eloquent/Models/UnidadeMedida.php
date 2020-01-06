<?php

namespace erpCore\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;
use erpCore\Ordination\OrdinationTrait;

class UnidadeMedida extends Model
{
    use OrdinationTrait;

    protected $fillable = ['id', 'descricao'];
}
