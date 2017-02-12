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
     */
    public function index()
    {
        // this is the view we want shown
        $this->data['pagebody'] = 'parts';

        $inv_parts = $this->inventory->all_parts();
        /*
        usort($parts, function ($item1, $item2) {
            return $item2['id'] < $item1['id'];
        });
        */

        $print = '<div>';
        $print .= '<table class="table">';
        $print .= '<tr>';
        $print .= '<th>Model</th>';
        $print .= '<th>Line</th>';
        $print .= '<th>Image</th>';
        $print .= '</tr>';
        foreach ($inv_parts as $item) {
            $print .= '<tr>';
            $print .= '<td>' . 'ADD MODEL' . '</td>';
            $print .= '<td>' . 'ADD LINE' . '</td>';
            $print .= '<td>';
            $print .= '<a href="./part/';
            $print .= $item['id'];
            $print .= '">';
            $print .= '<img src="assets/images/parts/';
            $print .= $item['image'];
            $print .= '"></img>';
            $print .= '</br>details...';
            $print .= '</a>';
            $print .= '</td>';
            $print .= '</tr>';
        }
        $print .= '</table>';
        $print .= '</div>';

        $this->data['parts_table'] = $print;

        $this->render();
    }

    public function part($id) {
        $this->data['pagebody'] = 'part';

        $part = $this->inventory->get_part($id);
        /*
        ay('id' => '1',  'part'  => '1', 'CACode' => '1', 'buildLoc' => 'Downtown',
            'buildDate' => 'Feb 1st 2017', 'buildTime' => '12:00pm'
        */
        $print = '<div>';
        $print .=    '<table class ="table">';
        $print .=        '<tr>';
        $print .=            '<th>Unique ID</th><th>Part Code</th><th>CA Code</th>';
        $print .=            '<th>Build At</th><th>Build Date</th><th>Build Time</th>';
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

        $this->render();
    }
}