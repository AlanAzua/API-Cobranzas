<?php

namespace App\Cobranzas;

use App\Cobranzas\Interfaces\CobranzaRepository;
use App\Models\Cobranza;
use App\Resources\CreditoSapResource;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class EloquentCobranzaRepository implements CobranzaRepository
{
    /**
     * @param Cobranza $cobranza
     */
    public function __construct(
        protected Cobranza $cobranza
    ){}

    public function findCobranzas(): object
    {
        return QueryBuilder::for($this->cobranza)
        ->firstOrFail();
    }
    /**
     *
     * @return LengthAwarePaginator
     */
    function getAll(): LengthAwarePaginator
    {
        return QueryBuilder::for(
            subject: $this->cobranza
        )->fastPaginate();
    }

     /**
     *
     * @return LengthAwarePaginator
     */
    function getAllWithCobranza(): LengthAwarePaginator
    {
        return QueryBuilder::for(
            subject: $this->cobranza
        )->cobranza()
            ->fastPaginate();
    }
}
