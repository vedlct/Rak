<?php


foreach ($header  as $s){

    echo $s->header."<br>";
//    foreach ($subheaderr as $b){
//
//    echo $b->subheder."<br>";
//}

    $sql="SELECT * FROM faq where `header`= '$s->header' ";
    $query = $this->db->query($sql);

    foreach ($query->result() as $row)
    {
        echo $row->sub_header."<br>";
        echo $row->details."<br>";

    }

}

?>