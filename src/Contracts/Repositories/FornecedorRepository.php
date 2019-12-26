<?php

namespace erp-core\Contracts\Repositories;

use erp-core\Contracts\RepositoryInterface;

interface FornecedorRepository extends RepositoryInterface
{

    /**
     * Aplica condição $like no repositório
     *
     * @param null $like
     * @return FornecedorRepository
     */
    public function whereLike($like = null);

}