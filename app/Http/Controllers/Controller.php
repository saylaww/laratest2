<?php

namespace App\Http\Controllers;

use App\Interfaces\UserRepositoryInterface;
use App\Models\Author;
use App\Models\Cinema;
use App\Models\Phone;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use function Ramsey\Collection\add;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected $repository;

    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
//        $this->middleware('')
    }

    public function set()
    {
        $cinema = Cinema::find(1);
//        $cinema->movies()->detach(3);
        $t = [];
        $index = 0;
        foreach ($cinema->movies as $cin){
            $t[$index] = ($cin->name);
            $index++;
        }
//        dd($cinema->movies);
        return $t;
    }

    public function test()
    {
//        $test = Author::find(1);

//        $shop = Shop::find($shop_id);
//        $shop->products()->attach($product_id);

//        $phones = Phone::find([1,2]);
//        dd($phones);

//        $test->phones()->attach($phones);

//        $cinemas = Cinema::find(1);
//        dd($cinemas->movies->name);



        return "123";
    }

    public function all()
    {
//        return "5555";
        return $this->repository->getAllUser();
    }

}
