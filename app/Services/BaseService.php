<?php

namespace App\Services;

use Illuminate\Pipeline\Pipeline;

class BaseService
{
    protected $model;
    protected $filters = [];

    public function __construct()
    { }


    public function get()
    {
        return $this->model->get();
    }


    public function find($id)
    {
        return $this->model->find($id);
    }


    public function paginate($limit = 10)
    {
        return $this->model->paginate($limit);
    }


    public function create($data)
    {
        return $this->model->create($data);
    }


    public function query()
    {
        return $this->model->query();
    }
}
