<?php

namespace erp-core\Contracts\Repositories;

use erp-core\Contracts\RepositoryInterface;

interface NotaFiscalItemRepository extends RepositoryInterface
{
    /**
     * Aplica condição $like
     *
     * @param null $like
     * @return NotaFiscalItemRepository
     */
    public function whereLike($like = null);

    /**
     * Aplica condição $tipo
     *
     * @param null $tipo
     * @return NotaFiscalItemRepository
     */
    public function whereTipo($tipo = null);
}