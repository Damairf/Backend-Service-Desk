<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'ID_User';
    protected $fillable = ['Nama_Depan', 'Nama_Belakang', 'NIP', 'No_HP', 'Email', 'Password', 'Username', 'ID_Role', 'ID_Status','ID_Organisasi', 'ID_Jabatan' ];

    
}
