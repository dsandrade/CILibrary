<?php

defined('BASEPATH') or exit('No direct script access allowed');

use controllers\BaseController;

class AdminController extends BaseController
{

    /**
     * AdminController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Index Page for this controller.
     */
    public function index()
    {
        $this->view('admin.home');
    }
}
