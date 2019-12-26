<?php

namespace erp-core\Eloquent\Repositories;

use Illuminate\Database\Eloquent\Model;
use erp-core\Contracts\Repositories\ClienteRepository;
use erp-core\Eloquent\BasePessoaRepository;
use erp-core\Eloquent\Models\Cliente;

class ClienteEloquentRepository extends BasePessoaRepository implements ClienteRepository
{
    /**
     * Cria o model eloquent
     *
     * @return Model
     */
    public function model()
    {
        return new Cliente();
    }

}