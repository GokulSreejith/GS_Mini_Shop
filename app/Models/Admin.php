<?php namespace App\Models;
      use CodeIgniter\Model;

class Admin extends Model
{
    protected $table = "Admin";
    protected $primaryKey = "id";
    protected $allowedFields = [
        'name',
        'username',
        'email',
        'phone',
        'password',
        'is_deleted',
        // 'createdAt',
    ];
}
