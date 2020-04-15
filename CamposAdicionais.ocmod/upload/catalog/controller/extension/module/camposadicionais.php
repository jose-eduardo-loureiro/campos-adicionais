<?php

use Journal3\Opencart\Controller;

class ControllerExtensionModuleCamposAdicionais extends Controller {
	// como limpar
	public function Comolimpar() {		
		$this->load->model('catalog/product');		
		if (isset($this->request->get['product_id'])) {
			$product_id = (int)$this->request->get['product_id'];
		} else {
			$product_id = 0;
		}			
		$product_info = array();
		$product_info = $this->model_catalog_product->getProduct($product_id);	
		$comolimpar = html_entity_decode($product_info['comolimpar'], ENT_QUOTES, 'UTF-8');
		if ( $comolimpar <> '<p><br></p>' ) {
		    return $comolimpar;	
		}			
	}

	// embalagem
	public function Embalagem() {		
		$this->load->model('catalog/product');		
		if (isset($this->request->get['product_id'])) {
			$product_id = (int)$this->request->get['product_id'];
		} else {
			$product_id = 0;
		}			
		$product_info = array();
		$product_info = $this->model_catalog_product->getProduct($product_id);	
		$embalagem = html_entity_decode($product_info['embalagem'], ENT_QUOTES, 'UTF-8');
		if ( $embalagem <> '<p><br></p>' ) {
		    return $embalagem;	
		}
	}

	// informações especiais
	public function Informacoes() {		
		$this->load->model('catalog/product');		
		if (isset($this->request->get['product_id'])) {
			$product_id = (int)$this->request->get['product_id'];
		} else {
			$product_id = 0;
		}			
		$product_info = array();
		$product_info = $this->model_catalog_product->getProduct($product_id);	
		$infoesp = html_entity_decode($product_info['infoesp'], ENT_QUOTES, 'UTF-8');		
		if ( $infoesp <> '<p><br></p>' ) {
		    return $infoesp;	
		}			
	}	

	// Descrição da Marca
	public function MarcaDescricao() {		
		$this->load->model('catalog/manufacturer');		
		if (isset($this->request->get['manufacturer_id'])) {
			$manufacturer_id = (int)$this->request->get['manufacturer_id'];
		} else {
			$manufacturer_id = 0;
		}			
		$manufacturer_info = array();
		$manufacturer_info = $this->model_catalog_manufacturer->getManufacturer($manufacturer_id);	
		$MarcaDescricao = html_entity_decode($manufacturer_info['description'], ENT_QUOTES, 'UTF-8');		
		if ( $MarcaDescricao <> '<p><br></p>' ) {
		    return $MarcaDescricao;	
		}			
	}

}
