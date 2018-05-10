<?php
/**
 * Created by PhpStorm.
 * User: pfjia
 * Date: 2018/5/9
 * Time: 0:08
 */

namespace app\dao;

use baseDAO;

class adminDAO extends baseDAO
{
    protected $table = 't_admin';
    protected $_pk = 'id';
    protected $_pkCache = true;
}