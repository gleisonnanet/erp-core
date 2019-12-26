<?php

namespace erp-core\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;
use erp-core\Ordination\OrdinationTrait;

class Cfop extends Model
{
    use OrdinationTrait;

    protected $primaryKey = 'codigo';
}
