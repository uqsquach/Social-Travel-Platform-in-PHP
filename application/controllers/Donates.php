<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Donates extends CI_Controller{ 
     
    function  __construct(){ 
        parent::__construct(); 
         
        // Load paypal library 
        $this->load->library('paypal_lib'); 
         
        // Load product model 
        $this->load->model('donate'); 
    } 
     
    function index(){ 
        $data = array(); 
         
        // Get donate from the database 
        $data['donates'] = $this->donate->getRows(); 
         
        // Pass product data to the view 
        $this->load->view('donate/index', $data); 
    } 
     
    function buy($id){ 
        // Set variables for paypal form 
        $returnURL = base_url().'paypal/success'; //payment success url 
        $cancelURL = base_url().'paypal/cancel'; //payment cancel url 
        $notifyURL = base_url().'paypal/ipn'; //ipn url 
         
        // Get product data from the database 
        $donate = $this->donate->getRows($id); 
         
        // Get current user ID from the session (optional) 
        $username = !empty($_SESSION['username'])?$_SESSION['username']:1; 
         
        // Add fields to paypal form 
        $this->paypal_lib->add_field('return', $returnURL); 
        $this->paypal_lib->add_field('cancel_return', $cancelURL); 
        $this->paypal_lib->add_field('notify_url', $notifyURL); 
        $this->paypal_lib->add_field('item_name', $donate['name']); 
        $this->paypal_lib->add_field('custom', $username); 
        $this->paypal_lib->add_field('item_number', $donate['id']); 
        $this->paypal_lib->add_field('amount',  $donate['price']); 
         
        // Render paypal form 
        $this->paypal_lib->paypal_auto_form(); 
    } 
}