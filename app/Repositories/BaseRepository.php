<?php
/**
 * Created by PhpStorm.
 * User: Nabijon
 * Date: 16.07.2021
 * Time: 5:43
 */

namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;

class BaseRepository
{
    /**
     * @var Builder $query
     */
    public $query;

    /**
     * @var Model $model
     */
    public $model;

    public function findAll()
    {
       return $this->model::all();
    }

    public function findById($id)
    {
        return $this->model::find($id);
    }

    public function getQuery()
    {
        return $this->query = $this->model::query();
    }
}