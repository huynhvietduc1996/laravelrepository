<?php

namespace App\Repositories;

abstract class BaseRepository implements RepositoryInterface
{
    // Model muốn tương tác
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    // Lấy model
    abstract public function getModel();

    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }


    public function getAll()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    public function update($id, array $attributes)
    {
        $result = $this->model->find($id);

        if ($result) {
            $result->update($attributes);
            $result->save();

            return true;
        }

        return false;
    }

    public function delete($id)
    {
        $result = $this->model->find($id);

        if ($result) {
            $result->delete();

            return true;
        }

        return false;
    }
}


