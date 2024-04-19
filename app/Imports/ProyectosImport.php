<?php

namespace App\Imports;

use App\Models\Proyecto;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProyectosImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Proyecto([
            'proyecto' => $row['nombre'],
            'matricula' => $row['matricula'],
            'director' => $row['director']
        ]);
    }
}
