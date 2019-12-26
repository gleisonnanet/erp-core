<?php

namespace erp-core\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;
use gleisonnanet\Utils\Utils;
use erp-core\Ordination\OrdinationTrait;

class Endereco extends Model
{
    use OrdinationTrait;

    protected $fillable = ['id', 'pessoa_id', 'cep', 'logradouro', 'numero', 'complemento', 'bairro', 'cidade_id'];

    /*
     * BelongsTo Cidade
     */
    public function cidade(){
        return $this->belongsTo(Cidade::class);
    }

    /**
     * Mutators
     */
    protected function setCepAttribute($value){
        $this->attributes['cep'] = Utils::unmask($value);
    }
}
