<?php
namespace App;

class ExampleFacade extends Facade //To be able to use as facade Example::method
{
    
    protected static function getFacadeAccessor()
    {
        return 'example';
    }
}