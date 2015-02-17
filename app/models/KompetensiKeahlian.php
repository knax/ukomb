<?php

/**
 * KompetensiKeahlian
 *
 */
class KompetensiKeahlian extends BaseModel
{
    public $table = 'kompetensi_keahlian';

    public function siswa()
    {
        return $this->hasMany('Siswa', 'kompetensi_keahlian_id', 'id');
    }

    public function standarKompetensi()
    {
        return $this->hasMany('StandarKompetensi', 'kompetensi_keahlian_id', 'id');
    }
}