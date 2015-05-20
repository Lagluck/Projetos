<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Desafio extends Model
{
    
        public function __construct($db = NULL)
    {
        if ($db)
        {
            // Set the instance or name
            $this->_db = $db;
        }
        elseif (!$this->_db)
        {
            // Use the default name
            $this->_db = Database::$default;
        }

        if (is_string($this->_db))
        {
            // Load the database
            $this->_db = Database::instance($this->_db);
        }
    }
    
    public function insert_item($campo,$preco)
    {
        //insere itens
        $colunas = array(
            'item_description','item_price'
        );
        
        $values = array(
            $campo,$preco
        );
        $returned_id = DB::insert('item', $colunas)
                ->values($values)
                ->execute($this->_db);
    
        return $returned_id;
    }
    
    public function insert_purchaser($campo)
    {
        //insere comprador
        $colunas = array(
            'purchaser_name'
        );
        $values = array(
            $campo
        );
        $returned_id = DB::insert('purchaser', $colunas)
                ->values($values)
                ->execute($this->_db);
    
        return $returned_id;
    }
    
    public function insert_merchant($campo,$id_End)
    {
        //insere o comerciante
        $colunas = array(
            'merchant_name',
            'adress_ID'
        );
        $values = array(
            $campo,$id_End
        );
        $returned_id = DB::insert('merchant', $colunas)
                ->values($values)
                ->execute($this->_db);
    
        return $returned_id;
    }

    public function insert_adress($campo)
    {
        //insere o endereco, que pode ser tanto do comerciante qto do comprador
        $colunas = array(
            'description'
        );
        $values = array(
            $campo
        );
        $returned_id = DB::insert('adresses', $colunas)
                ->values($values)
                ->execute($this->_db);
    
        return $returned_id;
    }
    
        public function insert_purchase($campo,$id_item,$id_merchant,$id_purchaser)
    {
        //insere o endereco, que pode ser tanto do comerciante qto do comprador
        $colunas = array(
            'purchase_count','item_ID','merchant_ID','purchaser_ID'
        );
        $values = array(
            $campo, $id_item, $id_merchant, $id_purchaser
        );
        $returned_id = DB::insert('purchase', $colunas)
                ->values($values)
                ->execute($this->_db);
    
        return $returned_id;
    }
    
    public function select_todos(){
        
        
        $lista = DB::select('merchant.merchant_name','merchant.merchant_ID','purchase_count','purchase_ID','adresses.adress_ID','adresses.description','purchaser_name','purchaser.purchaser_ID','item_description','item_price')
                ->from('merchant')
                ->join('purchase')
                ->on('merchant.merchant_ID','=','purchase.merchant_ID')
                ->join('adresses')
                ->on('merchant.adress_ID','=','adresses.adress_ID')
                ->join('purchaser')
                ->on('purchaser.purchaser_ID','=','purchase.purchase_ID')
                ->join('item')
                ->on('purchase.item_ID','=','item.item_ID')
                ->execute($this->_db);

        return $lista;
    }
}