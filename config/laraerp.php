<?php

/**
 * erp-core - Configuração
 * Author: Jansen Felipe
 */

return [

    'repositories' => [

        'CidadeRepository' => \erp-core\Eloquent\Repositories\CidadeEloquentRepository::class,
        'ClienteRepository' => \erp-core\Eloquent\Repositories\ClienteEloquentRepository::class,
        'ContatoRepository' => \erp-core\Eloquent\Repositories\ContatoEloquentRepository::class,
        'EmpresaRepository' => \erp-core\Eloquent\Repositories\EmpresaEloquentRepository::class,
        'EnderecoRepository' => \erp-core\Eloquent\Repositories\EnderecoEloquentRepository::class,
        'FornecedorRepository' => \erp-core\Eloquent\Repositories\FornecedorEloquentRepository::class,
        'PessoaRepository' => \erp-core\Eloquent\Repositories\PessoaEloquentRepository::class,
        'ProdutoRepository' => \erp-core\Eloquent\Repositories\ProdutoEloquentRepository::class,
        'UnidadeMedidaRepository' => \erp-core\Eloquent\Repositories\UnidadeMedidaEloquentRepository::class,
        'UnidadeMedidaFatorRepository' => \erp-core\Eloquent\Repositories\UnidadeMedidaFatorEloquentRepository::class,
        'UnidadeMedidaFatorSinonimoRepository' => \erp-core\Eloquent\Repositories\UnidadeMedidaFatorSinonimoEloquentRepository::class,
        'NotaFiscalRepository' => \erp-core\Eloquent\Repositories\NotaFiscalEloquentRepository::class,
        'NotaFiscalItemRepository' => \erp-core\Eloquent\Repositories\NotaFiscalItemEloquentRepository::class,
        'FaturaRepository' => \erp-core\Eloquent\Repositories\FaturaEloquentRepository::class,
    ]
];