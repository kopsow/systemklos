<?php
namespace Application\Model;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

class sprzedawcy  implements InputFilterAwareInterface {
    public $id;
    public $name;
    public $adres;
    public $kod_pocztowy;
    public $miejscowosc;
    public $pesel;
    public $nip;
    public $dowod_numer;
    public $dowod_wydany;
    public $dowod_przez;
    public $numer_rachunku;
    
    protected $inputFilter;
  
    
    public function exchangeArray($data) {
        $this->id               = (isset($data['id']))              ? $data['id']               : null;
        $this->name             = (isset($data['name']))            ? $data['name']             : null;
        $this->adres            = (isset($data['adres']))           ? $data['adres']            : null;
        $this->kod_pocztowy     = (isset($data['kod_pocztowy']))    ? $data['kod_pocztowy']     : null;
        $this->miejscowosc      = (isset($data['miejscowosc']))     ? $data['miejscowosc']      : null;    
        $this->pesel            = (isset($data['pesel']))           ? $data['pesel']            : null; 
        $this->nip              = (isset($data['nip']))             ? $data['nip']              : null;    
        $this->dodowd_numer     = (isset($data['dowod_numer']))     ? $data['dowod_numer']      : null;    
        $this->dodowd_wydany    = (isset($data['dowod_wydany']))    ? $data['dowod_wydany']     : null;    
        $this->dodowd_przez     = (isset($data['dowod_przez']))     ? $data['dowod_przez']      : null;    
        $this->numer_rachunkuku = (isset($data['numer_rachunku']))  ? $data['numer_rachunku']   : null;    
        
        
        }
    
    public function setInputFilter(InputFilterInterface $inputFilter)
     {
         throw new \Exception("Not used");
     }

    public function getInputFilter()
     {
         if (!$this->inputFilter) {
            $inputFilter = new InputFilter();
            
            
            
             $this->inputFilter = $inputFilter;
         }

         return $this->inputFilter;
     }
    
}

