<h1>Your tasks</h1>

<?php

    echo anchor('tasks/create', '<p>Create a new task</p>');

    foreach($query->result() as $row){
        $edit_url = base_url().'tasks/create/'.$row->id;
        echo "<h2>".$row->title."  <a href=".$edit_url.">EDIT</a></h2>";
    }
    // $this->load->module('nofun');
    // $this->nofun->sayhello();
    
    $name = "Ezekiel";
    echo "<hr>";
    echo Modules::run('nofun/sayhello', $name);
?>