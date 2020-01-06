<?php

/**
 * erpcore - Configuração
 * Author: Jansen Felipe
 */

return [

    'repositories' => [

        'CidadeRepository' => \erpcore\Eloquent\Repositories\CidadeEloquentRepository::class,
        'ClienteRepository' => \erpcore\Eloquent\Repositories\ClienteEloquentRepository::class,
        'ContatoRepository' => \erpcore\Eloquent\Repositories\ContatoEloquentRepository::class,
        'EmpresaRepository' => \erpcore\Eloquent\Repositories\EmpresaEloquentRepository::class,
        'EnderecoRepository' => \erpcore\Eloquent\Repositories\EnderecoEloquentRepository::class,
        'FornecedorRepository' => \erpcore\Eloquent\Repositories\FornecedorEloquentRepository::class,
        'PessoaRepository' => \erpcore\Eloquent\Repositories\PessoaEloquentRepository::class,
        'ProdutoRepository' => \erpcore\Eloquent\Repositories\ProdutoEloquentRepository::class,
        'UnidadeMedidaRepository' => \erpcore\Eloquent\Repositories\UnidadeMedidaEloquentRepository::class,
        'UnidadeMedidaFatorRepository' => \erpcore\Eloquent\Repositories\UnidadeMedidaFatorEloquentRepository::class,
        'UnidadeMedidaFatorSinonimoRepository' => \erpcore\Eloquent\Repositories\UnidadeMedidaFatorSinonimoEloquentRepository::class,
        'NotaFiscalRepository' => \erpcore\Eloquent\Repositories\NotaFiscalEloquentRepository::class,
        'NotaFiscalItemRepository' => \erpcore\Eloquent\Repositories\NotaFiscalItemEloquentRepository::class,
        'FaturaRepository' => \erpcore\Eloquent\Repositories\FaturaEloquentRepository::class,
    ]
];