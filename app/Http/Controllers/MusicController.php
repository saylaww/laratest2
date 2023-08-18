<?php

namespace App\Http\Controllers;

use App\Interfaces\MusicRepositoryInterface;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;

class MusicController extends Controller
{

    protected $repository;

    public function __construct(MusicRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }


    public function basqa()
    {
        $user = auth()->user();
        try {
            $this->authorize('tekseriw');
        } catch (AuthorizationException $e) {
            return $e->getCode();
        }

        return "BASQA BET";

    }

    public function index()
    {
        return $this->repository->getAll();
//        return "111";
    }

}
