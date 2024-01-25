<?php

namespace App\Interfaces\admin;

interface UserInterface
{
    public function paginate();
    public function storeValidation();
    public function store();
    public function findById(string $id);
    public function updateValidation(string $id);
    public function update( string $id);
    public function deleteUser( string $id);

}
