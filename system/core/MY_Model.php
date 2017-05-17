<?php

    class MY_Model extends CI_Model {
        public $table = '';
        private $primary_key = 'id';
        private $filter = 'intval';
        private $_fields = '*';
        private $_order = 'id desc';
        private $_where = '';
        private $_limit = '';

        public function ____construct() {
            parent::__construct();
        }

        public function isMultiArray($array) {
            foreach ($array as $v)
                if (is_array($v))
                    return TRUE;
            return FALSE;
        }

        public function get($sid = NULL, $single = FALSE) {
            if (is_array($sid)) {
                $this->where($sid);
                $method = 'result';
            } elseif (is_numeric($sid)) {
                $filter = $this->filter;
                $this->where($sid);
                $method = 'row';
            } elseif ($single) {
                $method = 'row';
            } else {
                $method = 'result';
            }
            $this->order_by();
            return $this->db->get($this->table)->$method();
        }

        public function get_as_array($sid = NULL, $single = FALSE) {
            if (is_array($sid)) {
                $this->where($sid);
                $method = 'result_array';
            } elseif (is_numeric($sid)) {
                $filter = $this->filter;
                $this->where($sid);
                $method = 'row_array';
            } elseif ($single) {
                $method = 'row_array';
            } else {
                $method = 'result_array';
            }
            return $this->db->get($this->table)->$method();
        }

        public function save($data, $id = NULL) {
            if (isset( $id )) {
                if (is_array($id)) {
                    $this->where($id);
                    $this->db->update($this->table, $data);
                } elseif (is_numeric($id)) {
                    $filter = $this->filter;
                    $id = $filter($id);
                    $this->db->set($data);
                    $this->db->where($this->primary_key, $id);
                    $this->db->update($this->table);
                } else {
                    $column_value = ( is_object($data) ) ? $data->{$id} : $data[ $id ];
                    $this->db->where($id, $column_value);
                    $this->db->update($this->table, $data);
                }
            } else {
                if ($this->isMultiArray($data)) {
                    $this->db->insert_batch($this->table, $data);
                    $id = $this->db->affected_rows();
                } else {
                    $this->db->insert($this->table, $data);
                }
                $id = $this->db->insert_id();
            }
            return $id;
        }

        public function table($table){
            //$this->db->from($table);
            $this->table=$table;
            return $this;
        }
        public function _table($table){
            //$this->db->from($table);
            $this->table=$table;
            return $this;
        }
        public function delete($id=NULL, $single = FALSE,$filed=NULL) {
            $filter = $this->filter;
            if (is_array($id)) {
                if(isset($filed)){
                    $this->where_in($id,$filed);
                }else{
                    $this->where($id);
                }
            } elseif (is_numeric($id)) {
                $id = $filter($id);
                $this->db->where($this->primary_key, $id);
            }
            if ($single) {
                $this->limit(1);
            }
            $this->db->delete($this->table);
            return $this->db->affected_rows();
        }

        public function upPlus($field, $id) {
            $this->db->set($field, $field . '+1', FALSE);
            if (is_array($id)) {
                $this->where($id);
            } elseif (is_numeric($id)) {
                $filter = $this->filter;
                $id = $filter($id);
                $this->db->where($this->primary_key, $id);
            }
            $this->db->update($this->table);
            return $this->db->affected_rows();
        }

        public function down($field, $id) {
            $this->db->set($field, $field . '-1', FALSE);
            if (is_array($id)) {
                $this->where($id);
            } elseif (is_numeric($id)) {
                $filter = $this->filter;
                $id = $filter($id);
                $this->db->where($this->primary_key, $id);
            }
            $this->db->update($this->table);
            return $this->db->affected_rows();
        }

        public function where($where = NULL, $value = NULL) {
            if (isset( $where )) {
                $this->_where = FALSE;
                if (!is_array($where) && is_null($value)) {
                    $filter = $this->filter;
                    $this->db->where($this->primary_key, $filter($where));
                } elseif (isset( $value )) {
                    $this->db->where($where, $value);
                } elseif (is_array($where)) {
                    $this->db->where($where);
                }
            } else {
                if ($this->_where)
                    $this->db->where($this->_where);
            }
            return $this;
        }

        public function or_where($where = NULL, $value = NULL) {
            if (isset( $where )) {
                $this->_where = FALSE;
                if (!is_array($where) && is_null($value)) {
                    $filter = $this->filter;
                    $this->db->or_where($this->primary_key, $filter($where));
                } elseif (isset( $value )) {
                    $this->db->or_where($where, $value);
                } elseif (is_array($where)) {
                    $this->db->or_where($where);
                }
            }
            return $this;
        }

        public function limit($limit = '', $offset = 0) {
            if (!$limit) {
                if ($this->_limit)
                    $this->db->limit($this->_limit);
            } else {
                $this->db->limit($limit, $offset);
            }
            return $this;
        }

        public function select($fields = NULL) {
            if (isset( $fields )) {
                $this->_fields = FALSE;
                $fields = ( is_array($fields) ) ? implode(',', $fields) : $fields;
                $this->db->select($fields);
            } else {
                if ($this->_fields) {
                    $_fields = ( is_array($this->_fields) ) ? implode(',', $this->_fields) : $this->_fields;
                    $this->db->select($_fields);
                }
            }
            return $this;
        }

        public function order_by($order_by = '',$rand=false) {
            if($rand){
                $this->db->order_by($order_by, 'RANDOM');
            }else{
                if (!$order_by) {
                    if ($this->_order)
                        $this->db->order_by($this->_order);
                } else {
                    $this->_order = '';
                    $this->db->order_by($order_by);
                }
            }
            return $this;
        }

        public function where_in($fileds = '', $key = '') {
            if ($fileds) {
                if (!$key) {
                    $this->db->where_in($this->primary_key, $fileds);
                } else {
                    $this->db->where_in($key, $fileds);
                }
            }
            return $this;
        }

        public function like($value = '', $key = '', $match = 'both') {
            if ($value) {
                if (is_array($value) && !$key) {
                    $this->db->like($value);
                } else {
                    if (!$key) {
                        $this->db->like($this->primary_key, $value, $match);
                    } else {
                        $this->db->like($key, $value, $match);
                    }
                }
            }
            return $this;
        }

        public function group_by($group) {
            $this->db->group_by($group);
            return $this;
        }

        public function distinct($distinct) {
            $this->db->distinct($distinct);
            return $this;
        }

        public function count() {
            return $this->db->get($this->table)->num_rows();
        }

        public function max($filed,$as = '') {
            if ($as) {
                return $this->db->select_max($filed,$as)->get($this->table)->row();
            } else {
                return $this->db->select_max($filed)->get($this->table)->row();
            }
        }

        public function min($filed, $as = '', $object = TRUE) {
            if ($as) {
                if ($object) {
                    return $this->db->select_min($filed, $as)->get($this->table)->row();
                } else {
                    return $this->db->select_min($filed, $as)->get($this->table)->row_array();
                }
            } else {
                if ($object) {
                    return $this->db->select_min($filed)->get($this->table)->row();
                } else {
                    return $this->db->select_min($filed)->get($this->table)->row_array();
                }
            }
        }

        public function avg($filed, $as = '', $object = TRUE) {
            if ($as) {
                if ($object) {
                    return $this->db->select_avg($filed, $as)->get($this->table)->row();
                } else {
                    return $this->db->select_avg($filed, $as)->get($this->table)->row_array();
                }
            } else {
                if ($object) {
                    return $this->db->select_avg($filed)->get($this->table)->row();
                } else {
                    return $this->db->select_avg($filed)->get($this->table)->row_array();
                }
            }
        }

        public function sum($filed, $as = '', $object = TRUE) {
            if ($as) {
                if ($object) {
                    return $this->db->select_sum($filed, $as)->get($this->table)->row();
                } else {
                    return $this->db->select_sum($filed, $as)->get($this->table)->row_array();
                }
            } else {
                if ($object) {
                    return $this->db->select_sum($filed)->get($this->table)->row();
                } else {
                    return $this->db->select_sum($filed)->get($this->table)->row_array();
                }
            }
        }
    }