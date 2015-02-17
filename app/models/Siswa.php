<?php

/**
 * Siswa
 *
 */
class Siswa extends BaseModel
{
    public $table = 'siswa';

    public function nilai()
    {
        return $this->hasMany('Nilai', 'siswa_id', 'id');
    }
}