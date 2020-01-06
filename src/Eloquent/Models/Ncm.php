<?php

namespace erpCore\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;
use erpCore\Ordination\OrdinationTrait;

class Ncm extends Model
{
    use OrdinationTrait;

    protected $primaryKey = 'codigo';
}
