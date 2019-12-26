<?php

namespace erp-core\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;
use erp-core\Ordination\OrdinationTrait;

class UnidadeMedida extends Model
{
    use OrdinationTrait;

    protected $fillable = ['id', 'descricao'];
}
