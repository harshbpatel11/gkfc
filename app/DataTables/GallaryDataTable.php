<?php

namespace App\DataTables;

use App\Models\Gallary;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class GallaryDataTable extends DataTable
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
            ->addColumn('action', function (Gallary $gallary) {
                return '<div class="row"> <a href="gallary/edit/' . $gallary->id . '" class="btn btn-sm btn-primary">Edit</a><a href="gallary/delete/' . $gallary->id . '" class="btn btn-sm btn-danger">Delete</a></div>';
            })
            ->addColumn('image', function (Gallary $gallary) {
                return '<img width="100" height="100" src="' . asset('uploads/' . $gallary->gallaryimage) . '" />';
            })
            ->rawColumns(['image', 'action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Gallary $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Gallary $model)
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
            ->setTableId('gallary-table')
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
            Column::make('gallaryname'),
            Column::computed('image')
                ->exportable(false)
                ->printable(false),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->addClass('text-center')
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Gallary_' . date('YmdHis');
    }
}
