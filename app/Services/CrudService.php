<?php

namespace App\Services;

use App\Models\Crud;


class CrudService
{
    // this is constructor connect Crud Model
    protected $crudModel;
    public function __construct(Crud $crud)
    {
        $this->crudModel = $crud->query();
    }

    // this is method add Data
    public function storeCrudService($name, $type, $price): void
    {
        $this->crudModel->create([
            'name' => $name,
            'type' => $type,
            'price' => $price
        ]);
    }

    // this is method get all data
    public function indexCrudService()
    {
        return $this->crudModel->get();
    }

    // this method edit data
    public function editCrudService($dataId)
    {
        return $this->crudModel->where(['id' => $dataId])->get();
    }

    // this is method update data
    public function updateCrudService($name, $type, $price, $dataId): void
    {

        $this->crudModel->where(['id' => $dataId])->update([
            'name' => $name,
            'type' => $type,
            'price' => $price,
        ]);
    }

    // this method delete data
    public function destroyCrudService($dataId): void
    {
        $this->crudModel->where(['id' => $dataId])->delete();
    }
}
