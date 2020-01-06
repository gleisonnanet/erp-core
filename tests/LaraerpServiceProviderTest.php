<?php

use gleisonnanet\Utils\Utils;
use erpCore\Contracts\Repositories\CidadeRepository;
use erpCore\Contracts\Repositories\ClienteRepository;
use erpCore\Contracts\Repositories\ContatoRepository;
use erpCore\Contracts\Repositories\EmpresaRepository;
use erpCore\Contracts\Repositories\EnderecoRepository;
use erpCore\Contracts\Repositories\FaturaRepository;
use erpCore\Contracts\Repositories\FornecedorRepository;
use erpCore\Contracts\Repositories\NotaFiscalItemRepository;
use erpCore\Contracts\Repositories\NotaFiscalRepository;
use erpCore\Contracts\Repositories\PessoaRepository;
use erpCore\Contracts\Repositories\ProdutoRepository;
use erpCore\Contracts\Repositories\UnidadeMedidaFatorRepository;
use erpCore\Contracts\Repositories\UnidadeMedidaFatorSinonimoRepository;
use erpCore\Contracts\Repositories\UnidadeMedidaRepository;
use erpCore\Ordination\Facade;
use erpCore\Providers\erpCoreServiceProvider;
use Orchestra\Testbench\TestCase;

class erpCoreServiceProviderTest extends TestCase
{

    /**
     * Registrando ServiceProvider
     */
    protected function getPackageProviders($app)
    {
        return [erpCoreServiceProvider::class];
    }

    /**
     * Verificando se construiu os repositórios
     */
    public function testConstrucaoRepositorios()
    {
        $this->assertInstanceOf(CidadeRepository::class, $this->app[config('erpCore.repositories.CidadeRepository')]);
        $this->assertInstanceOf(ClienteRepository::class, $this->app[config('erpCore.repositories.ClienteRepository')]);
        $this->assertInstanceOf(ContatoRepository::class, $this->app[config('erpCore.repositories.ContatoRepository')]);
        $this->assertInstanceOf(EmpresaRepository::class, $this->app[config('erpCore.repositories.EmpresaRepository')]);
        $this->assertInstanceOf(EnderecoRepository::class, $this->app[config('erpCore.repositories.EnderecoRepository')]);
        $this->assertInstanceOf(FornecedorRepository::class, $this->app[config('erpCore.repositories.FornecedorRepository')]);
        $this->assertInstanceOf(PessoaRepository::class, $this->app[config('erpCore.repositories.PessoaRepository')]);
        $this->assertInstanceOf(ProdutoRepository::class, $this->app[config('erpCore.repositories.ProdutoRepository')]);
        $this->assertInstanceOf(UnidadeMedidaRepository::class, $this->app[config('erpCore.repositories.UnidadeMedidaRepository')]);
        $this->assertInstanceOf(UnidadeMedidaFatorRepository::class, $this->app[config('erpCore.repositories.UnidadeMedidaFatorRepository')]);
        $this->assertInstanceOf(UnidadeMedidaFatorSinonimoRepository::class, $this->app[config('erpCore.repositories.UnidadeMedidaFatorSinonimoRepository')]);
        $this->assertInstanceOf(NotaFiscalRepository::class, $this->app[config('erpCore.repositories.NotaFiscalRepository')]);
        $this->assertInstanceOf(NotaFiscalItemRepository::class, $this->app[config('erpCore.repositories.NotaFiscalItemRepository')]);
        $this->assertInstanceOf(FaturaRepository::class, $this->app[config('erpCore.repositories.FaturaRepository')]);
    }

    /**
     * Verificando contrução dos alias
     */
    public function testConstrucaoAlias()
    {
        $this->assertInstanceOf(Utils::class, $this->app['Utils']);
        $this->assertInstanceOf(Facade::class, $this->app['Order']);
    }

}