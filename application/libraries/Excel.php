<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/*
 *	@author : CodesLab
 *  @support: support@codeslab.net
 *	date	: 05 June, 2015
 *	Git Inventarios
 *	http://www.codeslab.net
 *  version: 1.0
 */

require_once APPPATH.'/third_party/PHPExcel.php';

class Excel extends PHPExcel
{
    public function __construct()
    {
        parent::__construct();
    }
}
