<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Faq;

class FaqController extends Controller
{
    protected $_faqModel;
    public $faq1;
    
    public function __construct() {
        $this->_faqModel = new Faq;
        $this->faq1=Faq::where('id', 1)->get();
    }
    
    public function prova() {
        return view('provafaq')
            ->with('faq1', $this->faq1);
    }
}
