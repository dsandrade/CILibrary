<?php
defined('BASEPATH') or exit('No direct script access allowed');

use controllers\BaseController;

class Welcome extends BaseController
{
    /**
     * Index Page for this controller.
     */
    public function index()
    {
        $this->view('admin.home');
    }
}
