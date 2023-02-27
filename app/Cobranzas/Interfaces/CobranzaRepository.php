<?php

namespace App\Cobranzas\Interfaces;

use Illuminate\Pagination\LengthAwarePaginator;

interface CobranzaRepository
{
    /**
     * @return LengthAwarePaginator
     */
    function getAll(): LengthAwarePaginator;

 /**
     * @return LengthAwarePaginator
     */
    function getAllWithCobranza();

}
