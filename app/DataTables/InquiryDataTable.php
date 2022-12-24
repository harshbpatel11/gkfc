<?php

namespace App\DataTables;

use App\Models\Inquiry;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class InquiryDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', function (Inquiry $inquiry) {
                return '<div class="row"> <a href="inquiry/edit/' . $inquiry->id . '" class="btn btn-sm btn-primary">Edit</a><a href="inquiry/delete/' . $inquiry->id . '" class="btn btn-sm btn-danger">Delete</a></div>';
            })
            ->rawColumns(['action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Inquiry $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Inquiry $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('inquiry-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
            ->buttons(
                // Button::make('create'),
                Button::make('export'),
                // Button::make('print'),
                // Button::make('reset'),
                // Button::make('reload')
            );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id'),
            Column::make('fullname'),
            Column::make('email'),
            Column::make('subject'),            
            Column::make('phone'),
            Column::make('message'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Inquiry_' . date('YmdHis');
    }
}
