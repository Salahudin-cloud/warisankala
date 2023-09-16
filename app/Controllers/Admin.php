<?php

namespace App\Controllers;

use App\Models\BudayaModel;

class Admin extends BaseController
{
    protected $budayaModel;

    public function __construct()
    {
        $this->budayaModel = new BudayaModel();
    }

    public function index()
    {
        return view('admin_menu/dashboard');
    }


    public function budayaMenu()
    {
        $data = [
            'budaya' => $this->budayaModel->getAllBuddaya(),
            'pager' => $this->budayaModel->pager
        ];

        return view('admin_menu/budaya', $data);
    }


    public function tambahBudaya()
    {
        return view('admin_menu/add_budaya');
    }
}
