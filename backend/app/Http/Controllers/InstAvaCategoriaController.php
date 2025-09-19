<?php

namespace App\Http\Controllers;

use App\Services\InstAvaCategoriaService;
use Illuminate\Http\Request;

class InstAvaCategoriaController extends Controller
{
    private $instAvaCategoriaService;

    public function __construct(InstAvaCategoriaService $instAvaCategoriaService)
    {
        $this->instAvaCategoriaService = $instAvaCategoriaService;
    }

    // GET
    public function getInstAvaCategoria() 
    {

    }

    // GET - BY NAME
    public function getInstAvaCategoriaByName()
    {

    }

    // CREATE
    public function createInstAvaCategoria()
    {

    }

    // UPDATE
    public function updateInstAvaCategoria($id)
    {

    }

    // DELETE
    public function deleteInstAvaCategoria($id)
    {

    }
}
