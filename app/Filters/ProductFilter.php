<?php

namespace App\Filters;

class ProductFilter extends QueryFilter
{
    public function search_field($search_string = ''){
        return $this->builder
            ->where('name', 'LIKE', '%'.$search_string.'%');
    }
}
