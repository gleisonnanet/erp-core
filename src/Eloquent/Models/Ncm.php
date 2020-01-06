<?php

namespace erpcore\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;
use erpcore\Ordination\OrdinationTrait;

class Ncm extends Model
{
    use OrdinationTrait;

    protected $primaryKey = 'codigo';
}
