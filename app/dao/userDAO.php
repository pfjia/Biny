<?php
/**
 * 用户表
 */
class userDAO extends baseDAO
{
    protected $table = 't_user';
    protected $_pk = 'id';
    protected $_pkCache = true;
}