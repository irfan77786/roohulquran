<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class RoleFilter
{
    protected $builder;
    protected $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function apply(Builder $builder): Builder
    {
        $this->builder = $builder;

        foreach ($this->request->all() as $name => $value) {
            if (method_exists($this, $name) && !empty($value)) {
                call_user_func_array([$this, $name], [$value]);
            }
        }

        return $this->builder;
    }

    protected function search($value)
    {
        $this->builder->where('name', 'like', "%{$value}%");
    }

    protected function permission($value)
    {
        $this->builder->whereHas('permissions', function ($query) use ($value) {
            $query->where('permissions.id', $value);
        });
    }

    protected function sort($value)
    {
        $sortData = explode('|', $value);
        $sortBy = $sortData[0];
        $sortOrder = isset($sortData[1]) ? $sortData[1] : 'asc';

        $allowedSorts = ['id', 'name', 'created_at'];
        
        if (in_array($sortBy, $allowedSorts)) {
            $this->builder->orderBy($sortBy, $sortOrder);
        }
    }

    protected function date_from($value)
    {
        $this->builder->whereDate('created_at', '>=', $value);
    }

    protected function date_to($value)
    {
        $this->builder->whereDate('created_at', '<=', $value);
    }
}

