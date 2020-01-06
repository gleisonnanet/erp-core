<?php

namespace erpcore\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;
use erpcore\Ordination\OrdinationTrait;

class Cfop extends Model
{
    use OrdinationTrait;

    protected $primaryKey = 'codigo';
}
