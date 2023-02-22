<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return User::select("id", "sub_po_no", "delivery_date", "hit_po_no", "delivery_hit_po", "color", "size", "ratio", "qty", "total_qty")->get();
    }

    public function headings(): array
    {
        return ["ID", "Sup Po No", "Delivery Date", "Hit Po No", "Delivery Hit Po", "Color", "Size", "Ratio", "Qty", "Total Qty"];
    }
}
