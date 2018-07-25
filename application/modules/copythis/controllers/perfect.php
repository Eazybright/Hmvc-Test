<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Perfect extends MX_Controller{

        function __construct(){
            parent::__construct();
                $this->load->model('perfect_model');
        }

        function get($order_by){
            $query = $this->perfect_model->get($order_by);
        }

        function get_with_limit($limit, $offset, $order_by){
            $query = $this->db->get_with_limit($limit, $offset, $order_by);
            return $query;
        }
        function get_where($id){
            $query = $this->perfect_model->get_where($id);
            return $query;
        }

        function get_where_custom($col, $value){
            $query = $this->perfect_model->get_where_custom($col, $value);
            return $query;
        }

        function count_where($column, $value){
            $count = $this->perfect_model->count_where($column, $value);
            return $count;
        }

        function get_max(){
            $max_id = $this->perfect_model->get_max();
            return $imax_id;
        }

        function custom_query($mysql_query){
            $query = $this->perfect_model->custom_query($mysql_query);
            return $query;
        }

    }