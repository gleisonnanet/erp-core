<?php

namespace erp-core\Eloquent\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use erp-core\Contracts\Repositories\FornecedorRepository;
use erp-core\Eloquent\BasePessoaRepository;
use erp-core\Eloquent\Models\Fornecedor;

class FornecedorEloquentRepository extends BasePessoaRepository implements FornecedorRepository
{
    /**
     * Cria o model eloquent
     *
     * @return Model
     */
    public function model()
    {
        return new Fornecedor();
    }

}