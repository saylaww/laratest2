<?php


namespace App\Interfaces;


use App\Models\Music;

interface MusicRepositoryInterface
{

    public function getAll();
    public function getOne($id);
    public function delete($id);
    public function edit(Music $music, $id);

}
