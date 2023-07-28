<?php

namespace App\Exports;

use App\Models\Plan;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PlansExport implements FromCollection,ShouldAutoSize,WithMapping,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Plan::with('user')->get();
    }
    public function headings(): array
    {
        return [
            'id',
            'Title',
            'Description',
            'User Name',
            'Email User',
            'Phone',

        ];
    }
    public function map($plan): array
    {
        return [
            $plan->id,
            $plan->title,
            $plan->description,
            $plan->user->name,
            $plan->user->email,
            $plan->user->phone,


        ];
    }
}
