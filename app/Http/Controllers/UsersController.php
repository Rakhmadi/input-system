<?php
namespace App\Http\Controllers;

use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class UsersController extends Controller
{
    /**
     * @return BinaryFileResponse
     */
    public function export()
    {
        return Excel::download(new UsersExport(), 'Export_table.xlsx');
    }
}