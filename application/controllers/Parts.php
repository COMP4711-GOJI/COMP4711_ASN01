<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Parts extends Application
{

	function __construct()
	{
		parent::__construct();
	}


    /**
     * Parts page for our app
     *
     * Displays images of all parts in a 3 x N/3 table where N is the number
     * of parts. Also displays the model and line of each part, and links
     * the image to a page with more detailed info on that part.
     */
    public function index()
    {
        // this is the view we want shown
        $this->data['pagebody'] = 'parts';

/*
        $inv_parts = $this->inventory->all_parts();
        
        // usort($parts, function ($item1, $item2) {
        //     return $item2['id'] < $item1['id'];
        // });
        
        $colCount = 0;
        $print = '<div class="row">';
        foreach ($inv_parts as $item) {
            if($colCount == 3) {
                $print .= '</div><div class="row">';
                $colCount = 0;
            }
            $print .= '<div class="col-lg-4 col-sm-6 col-xs-12">';
            $print .= '<a href="./part/';
            $print .= $item['id'];
            $print .= '">';
            $print .= '<img src="assets/images/parts/';
            $print .= $item['image'];
            $print .= '"></img>';
            $print .= '</a>';
            $print .= '</br>Model: ' . $this->inventory->get_part_modelline($item['part'])['model'];
            $print .= '</br>Line: ' . $this->inventory->get_part_modelline($item['part'])['line'];
            $print .= '</br></td>';
            $print .= '</div>';

            $colCount++;
        }
        $print .= '</div>';

        $this->data['parts_table'] = $print;
*/

        $this->render();
    }




    /**
     * @param $id The id of the part you want to display info for.
     *
     * Displays details of part specified by id paramater. Displays
     * details in a single row table. Details include id, part code,
     * Certificate of authenticity code, build location, and
     * build time.
     */
    public function part($id) {
        $this->data['pagebody'] = 'part';

        /*

        $part = $this->inventory->get_part($id);
        
        // ay('id' => '1',  'part'  => '1', 'CACode' => '1', 'buildLoc' => 'Downtown',
        //     'buildDate' => 'Feb 1st 2017', 'buildTime' => '12:00pm'
       
        $print = '<div>';
        $print .=    '<table class ="table">';
        $print .=        '<tr>';
        $print .=            '<th>Unique ID</th><th>Part Code</th><th>CA Code</th>';
        $print .=            '<th>Built At</th><th>Build Date</th><th>Build Time</th>';
        $print .=        '</tr>';
        $print .=        '<tr>';
        $print .=            '<td>' . $part["id"] . '</td>';
        $print .=            '<td>' . $part["part"] . '</td>';
        $print .=            '<td>' . $part["CACode"] . '</td>';
        $print .=            '<td>' . $part["buildLoc"] . '</td>';
        $print .=            '<td>' . $part["buildDate"] . '</td>';
        $print .=            '<td>' . $part["buildTime"] . '</td>';
        $print .=        '</tr>';
        $print .=    '</table>';
        $print .= '</div>';


        $this->data['part_table'] = $print;

*/
        $this->render();
    }
}