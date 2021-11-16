<?php

namespace App\Exports;

use App\models\t_b_fauna;
use Illuminate\Support\Facades\Date;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class faunasExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return t_b_fauna::all();
    }
      public function map($invoice): array
    {
        return [
            $invoice->ID_fauna,
            $invoice->nama_fauna,
            $invoice->jenis_fauna,
            $invoice->endemikdi,
            $invoice->jumlah_populasi,
        ];}
        public function headings(): array
    {
        return [
            '#',
            'Nama Fauna',
            'Jenis Fauna',
            'Endemik',
            'Jumlah Populasi',
        ];
    }
    
}
