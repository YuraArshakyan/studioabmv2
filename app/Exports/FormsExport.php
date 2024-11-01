<?php

namespace App\Exports;

use App\Models\submited_forms;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class FormsExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $data;
    public function __construct()
    {
        $this->data = submited_forms::all()->sortByDesc("created_at");;
    }
    public function view():View{
        return view('exports.forms_export', [
            'forms' => $this->data
        ]);
    }
}
