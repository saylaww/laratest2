<?php


namespace App\Repositories;


use App\Interfaces\MusicRepositoryInterface;
use App\Models\Music;

class MusicRepository implements MusicRepositoryInterface
{


    public function getAll()
    {
        return "GET ALL";
    }

    public function getOne($id)
    {
        // TODO: Implement getOne() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function edit(Music $music, $id)
    {
        // TODO: Implement edit() method.
    }
}
