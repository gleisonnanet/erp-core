<?php

namespace erpCore\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;
use erpCore\Ordination\OrdinationTrait;

class Cfop extends Model
{
    use OrdinationTrait;

    protected $primaryKey = 'codigo';
}
