<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Organisasi extends Model
{
    use HasFactory;
    protected $table = 'reff_organisasi';
    protected $primaryKey = 'ID_Organisasi';
    protected $fillable = ['Nama_OPD', 'Induk_OPD', 'Nama_Pengelola', 'No_HP_Pengelola', 'Email', 'ID_Status'];

    public function status(): BelongsTo{
        return $this -> belongsTo(Status::class, "ID_Status", 'ID_Status');
    }
}
