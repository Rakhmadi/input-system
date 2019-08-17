<?php

namespace App\Exports;

use App\model_cs;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;
    public function collection()
    {
        return model_cs::select('id','csname')->get();

    }
     public function headings(): array
    {
        return [
              	
'id',
'CS Name',
'Job_Number',
'BL_Number',
'PO Number',
'IBD Number',
'tglterimaibd',
'businesunit',
'descofgoods',
'pre_alert',
'city',
'docs_coml_date',
'inv_num',
'inv_date',
'branch',
'prtofdiscarge',
'shipper',
'consigne',
'notify',
'supplier',
'atd',
'eta',
'ata',
'lartas',
'type_permit',
'permit_star',
'permit_ready',
'jenisbl',
'softcopy',
'tglteimasoft',
'hardcopy',
'tgltrimahard',
'carier',
'pieces',
'pkg',
'grossweight',
'cubicmeter',
'texabeleweight',
'total_container_20',
'total_container_20ref',
'total_container_40',
'total_container_40h',
'total_container_40ref',
'total_container_45',
'sum_container',
'total_teus',
'type',
'coo',
'insurance',
'cipl',
'coa',
'hc',
'phyto',
'ls',
'rekombpom',
'kt2',
'kt9',
'responlartas',
'Recs_respon_lartas',
'tgl_create_pib',
'ajunumber',
'pibaprofdata',
'inputtglinftransfer',
'manifest',
'bc11',
'resc_sppb',
'lokasigudang',
'planpickupdo',
'pengantardo',
'actualdo',
'noa',
'finishstripinf',
'gateoutcy',
'level1',
'level2',
'jobstatus',
'remarkjob',
'departemen',
'a',
'b',
'created_at',
'updated_at',
        ];
    }
}
