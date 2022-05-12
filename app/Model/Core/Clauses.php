<?php

namespace App\Model\Core;

use Illuminate\Http\Request;

trait Clauses
{
    protected $orderBy;
    protected $limit;
    protected $offset;

    public function clauses(Request $request, $limit = null, $offset = null, $sort = null, $order = 'asc')
    {
        $sort = $request->has('sort') ? $request->query('sort') : $sort;
        $order = $request->has('order') ? $request->query('order') : $order;

        $this->orderBy = $sort ? [$sort => $order] : null;
        $this->limit = $request->has('limit') ? $request->query('limit') : $limit;
        $this->offset = $request->has('offset') ? $request->query('offset') : $offset;
    }
}
