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
use DOMPDFModule\View\Model\PdfModel;

class PdfController extends AbstractActionController
{
    public function indexAction()
    {
        $pdf = new PdfModel();
        $pdf->setOption('filename', 'monthly-report'); // Triggers PDF download, automatically appends ".pdf"
        $pdf->setOption('paperSize', 'a4'); // Defaults to "8x11"
        //$pdf->setOption('paperOrientation', 'landscape'); // Defaults to "portrait"
        
        // To set view variables
        $pdf->setVariables(array(
          'message' => 'Hello'
        ));
        
       return $pdf;
        
        $view = new ViewModel();
        $view->setTerminal(true);
        //return $view;     
        
       
        
         
    }
    
    public function printAction()
    {
        $pdf = new PdfModel();
        $pdf->setOption('filename', 'monthly-report'); // Triggers PDF download, automatically appends ".pdf"
        $pdf->setOption('paperSize', 'a4'); // Defaults to "8x11"
         
        return $pdf;
    }
    
    
}
