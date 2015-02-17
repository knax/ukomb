<?php

/**
 * Guru
 *
 */
class Guru extends BaseModel {
	public $table = 'guru';

	public function kompetensiKeahlian()
	{
		return $this->belongsTo('KompetensiKeahlian', 'kompetensi_keahlian_id', 'id');
	}
}