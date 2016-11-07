<?php
namespace Grav\Plugin;

class RomanTwigExtension extends \Twig_Extension
{

  /**
  * returns the name of the class if required
  *
  * @return string the name of the class
  */
  public function getName()
  {
      return 'RomanTwigExtension';
  }

  /**
   * Return a list of all functions.
   *
   * @return array
   */
  public function getFunctions()
  {
      return [
          new \Twig_SimpleFunction('getRoman', [$this, 'getRoman']),
          new \Twig_SimpleFunction('getNumber', [$this, 'getNumber']),
      ];
  }

  /**
   * [__construct description]
   */
  public function __construct()
  	{
  		$this->result = "";

  		$this->romans = array(
  		'M' => 1000,
  		'CM' => 900,
  		'D' => 500,
  		'CD' => 400,
  		'C' => 100,
  		'XC' => 90,
  		'L' => 50,
  		'XL' => 40,
  		'X' => 10,
  		'IX' => 9,
  		'V' => 5,
  		'IV' => 4,
  		'I' => 1
  		);
  	}

  /**
   * Get Roman Numeral from Number
   *
   * @param  int   $number
   * @return string
   */
  public function getRoman($number)
  {
    $this->result = null;
		foreach($this->romans as $key => $value)
		{
			$matches = intval($number / $value);
			$this->result .= str_repeat($key, $matches);
			$number = $number % $value;
		}
		return $this->result;
  }

  /**
  * Get Number from Roman Numeral
  *
  * @param  string   $roman
  * @return int
  */
  function getNumber($roman)
  {
    $this->result = null;
    foreach($this->romans as $key => $value)
    {
      while (strpos($roman, $key) === 0)
      {
        $this->result += $value;
        $roman = substr($roman, strlen($key));
      }
    }
    return $this->result;
  }


}
