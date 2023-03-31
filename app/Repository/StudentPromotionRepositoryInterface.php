<?php


namespace App\Repository;


interface StudentPromotionRepositoryInterface
{
    public function index();

    public function create();
    public function destroy($request);


    public function store($request);

}