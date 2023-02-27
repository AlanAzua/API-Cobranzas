<?php

namespace App\Http\Controllers\Api\Cobranzas;

use App\Http\Controllers\Controller;
use App\Models\Cobranza;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * @group Administrador Cobranza
 **/
class IndexController extends Controller
{
      /**
         * Esta API tiene como finalidad mostrar la información de la base de datos, filtrada por 4 campos distintos, los cuales son:
         *  cliente, equipo, vendedor y cobrador. Estos filtros harán que se facilite la visualización y busqueda de estos datos.
         * @queryParam cliente string campo para filtrar por rut. No-example
         * @queryParam equipo int campo para filtrar por equipo del vendedor. No-example
         * @queryParam vendedor string campo para filtrar por nombre del vendedor. No-example
         * @queryParam cobrador string campo para filtrar por nombre del cobrador. No-example
         */

    public function __invoke(Request $request)
    {
        return new JsonResponse(
            data: $this->cobranzaRepository->getAllWithCobranza()
        );
    }
    
}
