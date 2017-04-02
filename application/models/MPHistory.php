<?php
class MPHistory extends MY_Model {

    public function __construct()
    {
        parent::__construct('p_history', 'h_id');
    }

}
