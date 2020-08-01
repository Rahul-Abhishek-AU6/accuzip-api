<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class DataImport implements ToCollection
{
	private $rows = 0;
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {

        return $this->rows = $collection->count();
    }

    public function getRowCount(): int
    {
        return $this->rows;
    }
}
