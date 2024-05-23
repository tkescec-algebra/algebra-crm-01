<?php

namespace App\Models;

class UserModel extends Model
{
    protected string $table = 'users';
    
    public function create(array $data): bool|int
    {
        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);

        return $this->db->table($this->table)->insert($data);
    }
}