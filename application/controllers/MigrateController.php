<?php

defined('BASEPATH') or exit('No direct script access allowed');

use controllers\BaseController;

class MigrateController extends BaseController
{

    /**
     * MigrateController constructor.
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
        try {
            $this->load->library('migration');

            if ($this->migration->current() === false) {
                show_error($this->migration->error_string());
            }
        } catch (\Exception $exception) {
            throw new \Exception('An error occurs while migrating');
        }
    }
}
