<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cobranza extends Model
{

    protected $table = 'estado_morosidad_en_base_cli_calculada';
    protected $primaryKey = 'numfac';

    public function scopeCobranza($query)
    {
        $cliente = request()->get('cliente');
        $equipo = request()->get('equipo');
        $vendedor = request()->get('vendedor');
        $cobrador = request()->get('cobrador');

        return $query->select([
            'estado_morosidad_en_base_cli_calculada.*'
    ])->where('estado_morosidad_en_base_cli_calculada.considerar', '=', 'SI')
        ->when(!is_null($cliente), function ($query) use ($cliente) {
            $query->whereRaw("estado_morosidad_en_base_cli_calculada.rutcli = '{$cliente}'");
        })->when(!is_null($equipo), function ($query) use ($equipo) {
            $query->whereRaw("estado_morosidad_en_base_cli_calculada.equipo = '{$equipo}'");
        })->when(!is_null($vendedor), function ($query) use ($vendedor) {
            $query->whereRaw("estado_morosidad_en_base_cli_calculada.vendedor = '{$vendedor}'");
        })->when(!is_null($cobrador), function ($query) use ($cobrador) {
            $query->whereRaw("estado_morosidad_en_base_cli_calculada.cobrador = '{$cobrador}'");
        });
    }


}
