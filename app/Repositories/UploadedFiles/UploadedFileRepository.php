<?php
/**
 * Created by PhpStorm.
 * User: Nabijon
 * Date: 30.07.2021
 * Time: 8:34
 */

namespace App\Repositories\UploadedFiles;


use App\Models\UploadedFile;
use App\Repositories\BaseRepository;

class UploadedFileRepository extends BaseRepository
{

    const PAGINATE_ITEMS_COUNT = 10;

    public function __construct()
    {
        $this->model = UploadedFile::class;
    }

    public function create($data)
    {
        return $this->model::create($data);
    }

    public function paginate($itemsCount = self::PAGINATE_ITEMS_COUNT)
    {
        return $this->model::paginate($itemsCount);
    }

    public function sortBy($files,$field,$dir = 'asc')
    {
        return $files->sortBy($field, $dir);
    }
}