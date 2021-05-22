<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $fillable = [
        'id', 'hoten', 'ngaysinh', 'diachi', 'sdt', 'dantoc',
         'CMND', 'gioitinh', 'trinhdo', 'maphongban','macapbac','mahopdong'
    ];
}
