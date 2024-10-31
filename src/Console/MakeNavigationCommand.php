<?php

namespace Tdwesten\StatamicBuilder\Console;

use Illuminate\Console\GeneratorCommand as BaseGeneratorCommand;

class MakeNavigationCommand extends BaseGeneratorCommand
{
    /**
     * @var string
     */
    protected $name = 'make:navigation';

    /**
     * @var string
     */
    protected $description = 'Create a new Statamic Builder navigation';

    /**
     * @var string
     */
    protected $type = 'Statamic Builder Navigation';

    /**
     * {@inheritDoc}
     */
    protected function getStub()
    {
        return __DIR__.'/../../stubs/navigation.stub';
    }

    /**
     * {@inheritDoc}
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\\Navigations';
    }
}
