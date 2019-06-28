<?php namespace GeneaLabs\NovaHorizon\Http\Controllers;


/**
 * Class HorizonController
 *
 * Description of class purpose...
 */
class HorizonController
{
    public function index()
    {
        return config("horizon.path");
    }
}
