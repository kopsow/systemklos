<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class FakturaController extends AbstractActionController
{
    public function indexAction()
    {
        
        $towar = array();
        $towar[0] = array(
                    'lp'        =>  1,
                    'nazwa'     =>  'Pszenica - ziarno',
                    'klasa'     =>  '1',
                    'jm'        =>  'dt',
                    'ilosc'     =>  '30',
                    'cena_jed'  =>  '80',
                    'wartosc_bez_podatku'   =>  '2400',
                    'stawka_podatku'        =>  '7%',
                    'kwota_zwrotu_podatku'  =>  '168',
                    'wartosc_z_podatkiem'   =>  '2568'
                );
        $towar[1] = array(
                    'lp'        =>  1,
                    'nazwa'     =>  'Pszenica - ziarno',
                    'klasa'     =>  '1',
                    'jm'        =>  'dt',
                    'ilosc'     =>  '30',
                    'cena_jed'  =>  '80',
                    'wartosc_bez_podatku'   =>  '2400',
                    'stawka_podatku'        =>  '7%',
                    'kwota_zwrotu_podatku'  =>  '168',
                    'wartosc_z_podatkiem'   =>  '2568'
                );
        $towar[2] = array(
                    'lp'        =>  1,
                    'nazwa'     =>  'Pszenica - ziarno',
                    'klasa'     =>  '1',
                    'jm'        =>  'dt',
                    'ilosc'     =>  '30',
                    'cena_jed'  =>  '80',
                    'wartosc_bez_podatku'   =>  '2400',
                    'stawka_podatku'        =>  '7%',
                    'kwota_zwrotu_podatku'  =>  '168',
                    'wartosc_z_podatkiem'   =>  '2568'
                );
        $towar[3] = array(
                    'lp'        =>  1,
                    'nazwa'     =>  'Pszenica - ziarno',
                    'klasa'     =>  '1',
                    'jm'        =>  'dt',
                    'ilosc'     =>  '30',
                    'cena_jed'  =>  '80',
                    'wartosc_bez_podatku'   =>  '2400',
                    'stawka_podatku'        =>  '7%',
                    'kwota_zwrotu_podatku'  =>  '168',
                    'wartosc_z_podatkiem'   =>  '2568'
                );
        $towar[4] = array(
                    'lp'        =>  1,
                    'nazwa'     =>  'Pszenica - ziarno',
                    'klasa'     =>  '1',
                    'jm'        =>  'dt',
                    'ilosc'     =>  '30',
                    'cena_jed'  =>  '80',
                    'wartosc_bez_podatku'   =>  '2400',
                    'stawka_podatku'        =>  '7%',
                    'kwota_zwrotu_podatku'  =>  '168',
                    'wartosc_z_podatkiem'   =>  '2568'
                );
        
        $viewModel = new ViewModel(array(
            'numer_faktury'         =>  '1/08/2017',
            'data_wystawienia'      =>  'Popów '.date('Y-m-d'),
            'termin_zaplaty'        =>  '14 dni',
            'data_zakupu'           =>  date('Y-m-d', strtotime(date('Y-m-d').' -1 day')),
            'sprzedawca_nazwa'      =>  'Wojciech Koperski',
            'sprzedawca_adres'      =>  'Siedlec, Pajęczańska 160',
            'sprzedawca_kod_pocztowy'        =>  '98-330 Pajęczno',
            'sprzedawca_nip_pesel'  =>  '772-215-39-46',
            'sprzedawca_dowod_numer'    =>  'AZN082088',
            'sprzedawca_dowod_wydany'   =>  '2010-05-05',
            'sprzedawca_dowod_przez'    =>  'Burmistrz Miasta i Gminy Pajęczno',
            'sprzedawca_nr_rachunku'    =>  '41105000023268315579159423',
            'towar' => array($towar),
            'slownie'               =>  ''
            
            
        ));
        $viewModel->setTerminal(true);
        return $viewModel;
    }
    
    public function szablonAction(){
        $viewModel = new ViewModel();
        $viewModel->setTerminal(true);
        return $viewModel;
    }
    
    public function wydrukAction() {
        
        $towar = array();
        $towar[0] = array(
                    'lp'        =>  1,
                    'nazwa'     =>  'Pszenica - ziarno',
                    'klasa'     =>  '1',
                    'jm'        =>  'dt',
                    'ilosc'     =>  '30',
                    'cena_jed'  =>  '80',
                    'wartosc_bez_podatku'   =>  '2400',
                    'stawka_podatku'        =>  '7%',
                    'kwota_zwrotu_podatku'  =>  '168',
                    'wartosc_z_podatkiem'   =>  '2568'
                );
        $towar[1] = array(
                    'lp'        =>  1,
                    'nazwa'     =>  'Pszenica - ziarno',
                    'klasa'     =>  '1',
                    'jm'        =>  'dt',
                    'ilosc'     =>  '30',
                    'cena_jed'  =>  '80',
                    'wartosc_bez_podatku'   =>  '2400',
                    'stawka_podatku'        =>  '7%',
                    'kwota_zwrotu_podatku'  =>  '168',
                    'wartosc_z_podatkiem'   =>  '2568'
                );
        $towar[2] = array(
                    'lp'        =>  1,
                    'nazwa'     =>  'Pszenica - ziarno',
                    'klasa'     =>  '1',
                    'jm'        =>  'dt',
                    'ilosc'     =>  '30',
                    'cena_jed'  =>  '80',
                    'wartosc_bez_podatku'   =>  '2400',
                    'stawka_podatku'        =>  '7%',
                    'kwota_zwrotu_podatku'  =>  '168',
                    'wartosc_z_podatkiem'   =>  '2568'
                );
        $towar[3] = array(
                    'lp'        =>  1,
                    'nazwa'     =>  'Pszenica - ziarno',
                    'klasa'     =>  '1',
                    'jm'        =>  'dt',
                    'ilosc'     =>  '30',
                    'cena_jed'  =>  '80',
                    'wartosc_bez_podatku'   =>  '2400',
                    'stawka_podatku'        =>  '7%',
                    'kwota_zwrotu_podatku'  =>  '168',
                    'wartosc_z_podatkiem'   =>  '2568'
                );
        $towar[4] = array(
                    'lp'        =>  1,
                    'nazwa'     =>  'Pszenica - ziarno',
                    'klasa'     =>  '1',
                    'jm'        =>  'dt',
                    'ilosc'     =>  '30',
                    'cena_jed'  =>  '80',
                    'wartosc_bez_podatku'   =>  '2400',
                    'stawka_podatku'        =>  '7%',
                    'kwota_zwrotu_podatku'  =>  '168',
                    'wartosc_z_podatkiem'   =>  '2568'
                );
        
        $viewModel = new ViewModel(array(
            'numer_faktury'         =>  '1/08/2017',
            'data_wystawienia'      =>  'Popów '.date('Y-m-d'),
            'termin_zaplaty'        =>  '14 dni',
            'data_zakupu'           =>  date('Y-m-d', strtotime(date('Y-m-d').' -1 day')),
            'sprzedawca_nazwa'      =>  'Wojciech Koperski',
            'sprzedawca_adres'      =>  'Siedlec, Pajęczańska 160',
            'sprzedawca_kod_pocztowy'        =>  '98-330 Pajęczno',
            'sprzedawca_nip_pesel'  =>  '772-215-39-46',
            'sprzedawca_dowod_numer'    =>  'AZN082088',
            'sprzedawca_dowod_wydany'   =>  '2010-05-05',
            'sprzedawca_dowod_przez'    =>  'Burmistrz Miasta i Gminy Pajęczno',
            'sprzedawca_nr_rachunku'    =>  '41105000023268315579159423',
            'towar' => array($towar),
            'slownie'               =>  ''
            
            
        ));
        $viewModel->setTerminal(true);
        return $viewModel;
    }
}
