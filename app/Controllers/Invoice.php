<?php

namespace App\Controllers;
use CodeIgniter\CodeIgniter;
use CodeIgniter\View\Table;



class Invoice extends BaseController{

    // new invoice ----------------------------------------------
    public function new_invoice()
    {
      
        return view('invoice/new_invoice');
        
    }

    // all invoice ---------------------------------------------
    public function all_invoices()
    {

        // new table
        $table = new Table();

        // table data
        $data = [
            ['Invoice Number', 'Client', 'Status', 'Total LKR','Date'],
            ['1882789', 'Sutotrims PVT LTD', 'Paid', '5000.00', '2022/09/10'],
            ['1882789', 'C & D International PVT LTD', 'Paid', '5000.00', '2022/09/10'],
            ['1882789', 'Sutospices PVT LTD', 'Paid', '5000.00', '2022/09/10']
        ];

        // table template
        $template = [
            'table_open' => '<table id="example1" class="table table-bordered table-hover">',
        
            'thead_open'  => '<thead>',
            'thead_close' => '</thead>',
        
            'heading_row_start'  => '<tr>',
            'heading_row_end'    => '</tr>',
            'heading_cell_start' => '<th>',
            'heading_cell_end'   => '</th>',
        
            'tfoot_open'  => '<tfoot>',
            'tfoot_close' => '</tfoot>',
        
            'footing_row_start'  => '<tr>',
            'footing_row_end'    => '</tr>',
            'footing_cell_start' => '<td>',
            'footing_cell_end'   => '</td>',
        
            'tbody_open'  => '<tbody>',
            'tbody_close' => '</tbody>',
        
            'row_start'  => '<tr>',
            'row_end'    => '</tr>',
            'cell_start' => '<td>',
            'cell_end'   => '</td>',
        
            'row_alt_start'  => '<tr>',
            'row_alt_end'    => '</tr>',
            'cell_alt_start' => '<td>',
            'cell_alt_end'   => '</td>',
        
            'table_close' => '</table>',
        ];
        
        $table->setTemplate($template);
       
        // generating recodes
        $recodes['users'] = $table->generate($data);

        // return view
        return view('invoice/all_invoices', $recodes);
        
    }
}

?>