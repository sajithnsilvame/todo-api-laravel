<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputArgument;
use Illuminate\Support\Str;

class MakeApiController extends GeneratorCommand
{
    protected $name = 'make:api-controller';
    protected $description = 'Create a new API controller with Swagger annotations';
    protected $type = 'Controller';

    protected function getStub()
    {
        return __DIR__ . '/stubs/api-controller.stub';
    }

    protected function getArguments()
    {
        return [
            ['name', InputArgument::REQUIRED, 'The name of the controller'],
        ];
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Http\Controllers\Api';
    }

    protected function buildClass($name)
    {
        $controllerName = class_basename($name); // Gets "CategoryController"
        $modelName = Str::replaceLast('Controller', '', $controllerName); // Extracts "Category"
        $routeName = Str::kebab(Str::lower($modelName)); // Converts "Category" to "category"

        $stub = parent::buildClass($name);

        return str_replace(
            ['{{CONTROLLER_NAME}}', '{{CONTROLLER_ROUTE}}'],
            [$modelName, $routeName],
            $stub
        );
    }
}
