<?php

namespace App\Imports;

use App\Models\User;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $subPo = $row['sub_po_no'];
        $deliveryDate = null;
        if ($row['delivery_date'] != null) {
            $deliveryDate = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['delivery_date']))->format('d/m/Y');
        }
        $hitPo = $row['hit_po_no'];

        $deliveryHitPo = null;
        if ($row['delivery_date_hit_po'] != null) {
            $deliveryHitPo = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['delivery_date_hit_po']))->format('d/m/Y');
        }
        $color = $row['color'];
        $size = $row['size'];
        $ratio = $row['ratio'];
        $qty = $row['qty'];
        $totalQty = $row['total_qty'];
        return new User([
            'sub_po_no' => $subPo,
            'delivery_date' => $deliveryDate,
            'hit_po_no' => $hitPo,
            'delivery_hit_po' => $deliveryHitPo,
            'color' => $color,
            'size' => $size,
            'ratio' => $ratio,
            'qty' => $qty,
            'total_qty' => null,
        ]);
    }
}
