<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $table = 'faqs';
    protected $primaryKey = 'id';
    public $timestamps = false;
    
    public function getDomanda() {
        return $this->domanda;
    }
}
