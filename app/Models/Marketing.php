<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marketing extends Model
{
    use HasFactory;
    
    protected $table = 'm_user';
    protected $primaryKey = 'id_user';
    
    protected $fillable = [
        'id_akun',
        'nama',
        'alamat',
        'email',
        'nohp',
    ];
    
    public function akun_user(){
        return $this->belongsTo('App\Models\akun_user', 'id_akun', 'id_akun');
    }
    
    function image()
    {
        if ($this->image && file_exists(public_path('images/post/' . $this->image)))
            return asset('images/post/' . $this->image);
        else
            return asset('images/no_image.png');
    }
    
    function delete_image()
    {
        if ($this->image && file_exists(public_path('images/post/' . $this->image)))
            return unlink(public_path('images/post/' . $this->image));
    }
    }
    
