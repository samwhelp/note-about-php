<?php

namespace Demo;


class View {


	protected $_Template = NULL;

	public function defTemplate()
	{
		return 'template.php';
	}

	public function getTemplate()
	{
		if ($this->_Template === NULL) {
			$this->setTemplate($this->defTemplate());
		}

		return $this->_Template;
	}

	public function setTemplate($val=array())
	{

		$this->_Template = $val;

		return $this;
	}




	protected $_Data = array();

	public function defData()
	{
		return array();
	}

	public function getData()
	{
		if ($this->_Data === NULL) {
			$this->setData($this->defData());
		}

		return $this->_Data;
	}

	public function setData($val=array())
	{

		$this->_Data = $val;

		return $this;
	}




	public function render()
	{

		$_Data_ = $this->getData();
		$_ScriptPath_ = $this->getTemplate();


		if (!file_exists($_ScriptPath_)) {
			throw new Exception("File Not Exists :" . $_ScriptPath_);

			return;
		}



		try {

			include($_ScriptPath_);

		} catch (Exception $e){

			throw $e;
		}

	}


	public function renderStr()
	{

		ob_start();
		ob_clean();
		$this->render();
		$str = ob_get_contents();
		ob_end_clean();
		return $str;

	}


}

/*

## Link

* https://www.php.net/manual/en/function.include.php
* https://www.php.net/manual/en/function.ob-get-contents.php
* https://www.php.net/manual/en/ref.outcontrol.php


*/
