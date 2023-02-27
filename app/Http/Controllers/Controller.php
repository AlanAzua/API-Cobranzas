<?php

namespace App\Http\Controllers;

use App\Cobranzas\EloquentCobranzaRepository;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function __construct(protected EloquentCobranzaRepository $cobranzaRepository){}
}
