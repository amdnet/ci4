<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class UserModel extends Model{
    protected $table = 'db_user';
    protected $allowedFields = ['user_nama','user_email','user_password','user_created'];
}