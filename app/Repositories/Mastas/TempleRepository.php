<?php
namespace App\Repositories\Mastas;

use App\Models\Mastas\TempleModel;

class TempleRepository
{
    protected $model;


        public function __construct(TempleModel $model)
        {
            $this->model = $model;
        }
    

    // データベース操作に関するメソッドを追加
    public function getAll()
    {
        return $this->model->all();
    }

    public function getById($id)
    {
        return $this->model->find($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $model = $this->model->findOrFail($id);
        $model->update($data);
        return $model;
    }

    public function delete($id)
    {
        $model = $this->model->findOrFail($id);
        $model->delete();
    }
}