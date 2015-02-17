<?php

/**
 * Nilai
 *
 */
class Nilai extends BaseModel {
    public $table = 'nilai';

    public function standarKompetensi()
    {
        return $this->belongsTo('StandarKompetensi', 'standar_kompetensi_id', 'id');
    }
    public function guru()
    {
        return $this->belongsTo('Guru', 'guru_id', 'id');
    }

    public function siswa()
    {
        return $this->belongsTo('Siswa', 'siswa_id', 'id');
    }
}