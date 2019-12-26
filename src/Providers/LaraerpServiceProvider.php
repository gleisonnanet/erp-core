<?php

namespace erp-core\Providers;

use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;
use gleisonnanet\Utils\Mask;
use gleisonnanet\Utils\Utils;
use erp-core\Contracts\Repositories\CidadeRepository;
use erp-core\Contracts\Repositories\ClienteRepository;
use erp-core\Contracts\Repositories\ContatoRepository;
use erp-core\Contracts\Repositories\EmpresaRepository;
use erp-core\Contracts\Repositories\EnderecoRepository;
use erp-core\Contracts\Repositories\FaturaRepository;
use erp-core\Contracts\Repositories\FornecedorRepository;
use erp-core\Contracts\Repositories\NotaFiscalItemRepository;
use erp-core\Contracts\Repositories\NotaFiscalRepository;
use erp-core\Contracts\Repositories\PessoaRepository;
use erp-core\Contracts\Repositories\ProdutoRepository;
use erp-core\Contracts\Repositories\UnidadeMedidaFatorRepository;
use erp-core\Contracts\Repositories\UnidadeMedidaFatorSinonimoRepository;
use erp-core\Contracts\Repositories\UnidadeMedidaRepository;
use erp-core\Exceptions\Handler;
use erp-core\Exceptions\WhoopsHandler;
use erp-core\Http\Middleware\SetupMiddleware;
use erp-core\Ordination\Facade;
use erp-core\Ordination\OrdinationServiceProvider;

class erp-coreServiceProvider extends ServiceProvider
{

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        /*
         * Publish migration's
         */
        $this->publishes([__DIR__.'/../../database/migrations/' => base_path('database/migrations')], 'migrations');

        /*
         * Publish seed's
         */
        $this->publishes([__DIR__.'/../../database/seeds/' => base_path('database/seeds')], 'migrations');

        /*
         * Publish config
         */
        $this->publishes([__DIR__.'/../../config/erp-core.php' => config_path('erp-core.php')], 'erp-core');

        /*
         * Merge config
         */
        $this->mergeConfigFrom(__DIR__.'/../../config/erp-core.php', 'erp-core');

        /*
         * erp-core Middlewares...
         */
        $this->app->router->middleware('setup', SetupMiddleware::class);

        /*
         * Bind Repositories
         */
        $this->app->bind(CidadeRepository::class, config('erp-core.repositories.CidadeRepository'));
        $this->app->bind(ClienteRepository::class, config('erp-core.repositories.ClienteRepository'));
        $this->app->bind(ContatoRepository::class, config('erp-core.repositories.ContatoRepository'));
        $this->app->bind(EmpresaRepository::class, config('erp-core.repositories.EmpresaRepository'));
        $this->app->bind(EnderecoRepository::class, config('erp-core.repositories.EnderecoRepository'));
        $this->app->bind(FornecedorRepository::class, config('erp-core.repositories.FornecedorRepository'));
        $this->app->bind(PessoaRepository::class, config('erp-core.repositories.PessoaRepository'));
        $this->app->bind(ProdutoRepository::class, config('erp-core.repositories.ProdutoRepository'));
        $this->app->bind(UnidadeMedidaRepository::class, config('erp-core.repositories.UnidadeMedidaRepository'));
        $this->app->bind(UnidadeMedidaFatorRepository::class, config('erp-core.repositories.UnidadeMedidaFatorRepository'));
        $this->app->bind(UnidadeMedidaFatorSinonimoRepository::class, config('erp-core.repositories.UnidadeMedidaFatorSinonimoRepository'));
        $this->app->bind(NotaFiscalRepository::class, config('erp-core.repositories.NotaFiscalRepository'));
        $this->app->bind(NotaFiscalItemRepository::class, config('erp-core.repositories.NotaFiscalItemRepository'));
        $this->app->bind(FaturaRepository::class, config('erp-core.repositories.FaturaRepository'));

        /*
         * Service Providers...
         */
        $this->app->register(\Barryvdh\Debugbar\ServiceProvider::class);
        $this->app->register(OrdinationServiceProvider::class);

        /*
         * Singletons
         */
        $this->app->singleton(ExceptionHandler::class, WhoopsHandler::class, Handler::class);

        /*
         * Removendo empresa_id da sessão caso efetue logout
         */
        Event::listen('auth.logout', function($user){
            Request::session()->forget('empresa_id');
        });

        /*
         * Register Aliases
         */
        $loader = AliasLoader::getInstance();
        $loader->alias('Utils', Utils::class);
        $loader->alias('Mask', Mask::class);
        $loader->alias('Order', Facade::class);

        /*
         * erp-core Routes...
         */
        include __DIR__ . '/../Http/routes.php';
    }

}
