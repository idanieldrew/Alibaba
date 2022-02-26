<?php

namespace Module\Panel\Repositories;

abstract class Repository
{
    protected $model;

    abstract  function  model();

    public function __construct()
    {
        $this->model = $this->model();
    }

    /*
     * paginate $this->model
     * @param number $number:
     * @return
     */
    public function paginate($number)
    {
        return $this->model->paginate($number);
    }

    /*
     * Delete field in db
     * @param string $slug
     * @return
     */
    public function delete($slug)
    {
        return $this->model->firstOrFail($slug);
    }
}