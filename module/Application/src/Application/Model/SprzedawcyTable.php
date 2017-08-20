<?php

namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;

class SprzedawcyTable {
    
    protected $tableGateway;
    
    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }
    
    public function fetchAll()    {
        
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }
    
    public function getSprzedawcy($id)
    {
        $id  = (int) $id;
        $rowset = $this->tableGateway->select(array('id' => $id));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("Could not find row $id");
        }
        return $row;
    }
    
    
    

    public function addSprzedawcy(Sprzedawcy $sprzedawca)
    {
        
        $data = array(            
            'id'                =>      $sprzedawca->id,
            'name'              =>      $sprzedawca->name,
            'adres'             =>      $sprzedawca->adres,
            'kod_pocztowy'      =>      $sprzedawca->kod_pocztowy,
            'miejscowosc'       =>      $sprzedawca->miejscowosc,
            'pesel'             =>      $sprzedawca->pesel,
            'nip'               =>      $sprzedawca->nip,
            'dowod_numer'       =>      $sprzedawca->dowod_numer,
            'dowod_wydany'      =>      $sprzedawca->dowod_wydany,
            'dowod_przez'       =>      $sprzedawca->dowod_przez,
            'numer_rachunku'    =>      $sprzedawca->numer_rachunku
            
            
        );
        $this->tableGateway->insert($data);
    }
    public function deleteCharytatywnie($id)
    {
        $this->tableGateway->delete(array('id' => $id));
    }
    
    public function lastInsertId() {
        return $this->tableGateway->lastInsertValue;
    }
    
    
}

