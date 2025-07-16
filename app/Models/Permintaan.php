<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Permintaan extends Model
{
    protected $table = 'Permintaan';
    protected $primaryKey = 'ID_Permintaan';
    protected $fillable = ['Perihal', 'Deskripsi', 'PIC', 'Lampiran', 'Progress', 'Lampiran_Path', 'Surat_Dinas_Path', 'ID_User', 'ID_Survey0', 'ID_Jenis_Pelayanan'];

    public function User(): BelongsTo{
        return $this -> belongsTo( Organisasi::class, 'ID_User','ID_User');
    }
    public function Jenis_Pelayanan(): HasMany{
        return $this -> hasMany( Organisasi::class, 'ID_Jenis_Pelayanan','ID_Jenis_Pelayanan');
    }

}
