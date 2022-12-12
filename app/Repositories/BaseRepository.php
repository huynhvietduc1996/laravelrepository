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
    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }

    // Hàm sẽ đc các class con định nghĩa
    abstract public function getModel();

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    public function update(array $attributes, $id)
    {
        $object = $this->model->find($id);

        return $result->update($attributes);
    }

    public function delete($id)
    {
        $object = $this->model->find($id);

        return $object->delete();
    }
}
