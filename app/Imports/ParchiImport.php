<?php

namespace App\Imports;

use App\Models\Note;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;

class ParchiImport implements ToCollection
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function collection(Collection $collection)
    {

        foreach ($collection as $row) {

            $data = [
                'page' => $row[0] ?? 'null',
                'data' => $row[1] ?? 'null',
                's_no' => $row[2] ?? 'null',
                'loksabha_name' => $row[3] ?? 'null',
                'assembly_name' => $row[4] ?? 'null',
                'both' => $row[5] ?? 'null',
                'part' => $row[6] ?? 'null',
                'section' => $row[7] ?? 'null',
                'epic' => $row[8] ?? 'null',
                'nirwachan_name' => $row[9] ?? 'null',
                'relative_name' => $row[10] ?? 'null',
                'age' => $row[11] ?? 'null',
                'house' => $row[12] ?? 'null',
                'gender' => $row[13] ?? 'null',
                'nirvachan_name_eng' => $row[14] ?? 'null',
                'relative_name_eng' => $row[15] ?? 'null',
                // 'created_by' => auth()->user()->id
            ];
            DB::table('notes')->insert($data);
        }
        DB::table('notes')->where('page', 'null')->where('s_no', 'null')->delete();
    }
}
