<?php
namespace App\Services\Mastas;

use App\Repositories\Mastas\TempleRepository;

class TempleService
{
    protected $repository;

    public function __construct(TempleRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAll()
    {
        return $this->repository->getAll();
    }
}
