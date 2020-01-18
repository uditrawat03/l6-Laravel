<?php
namespace App\Services;

use App\Models\User;
use Illuminate\Pipeline\Pipeline;

class UserService extends BaseService{

    public function __construct(User $user){
        $this->model = $user;
        $this->filters = [];
    }


    public function query()
    {
        $this->model =  app(Pipeline::class)
            ->send($this->model->query())
            ->through($this->filters)
            ->thenReturn();

        return $this->model;
    }

}