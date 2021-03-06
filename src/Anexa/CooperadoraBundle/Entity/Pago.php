<?php

namespace Anexa\CooperadoraBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
* Pago
* @ORM\Table()
* @ORM\Entity(repositoryClass="Anexa\CooperadoraBundle\Repository\PagoRepository")
*/

class Pago {

	/**
	* @var integer
	* @ORM\Column (name="id", type="integer")
	* @ORM\Id
	* @ORM\GeneratedValue (strategy="AUTO")
	*/
	protected $id;

	/**
	* @var boolean
	* @ORM\Column(name="borrado", type="boolean")
	*/
	protected $borrado = false;

	/**
	* @var datetime
	* @ORM\Column (name="fecha", type="datetime")
	*/
	protected $fecha;

	/**
	* @ORM\ManyToOne(targetEntity="Alumno", inversedBy="pagos")
	* @ORM\JoinColumn(name="alumno_id", referencedColumnName="id")
	*/
	protected $alumno;

	/**
	* @ORM\ManyToOne(targetEntity="User", inversedBy="pagos")
	* @ORM\JoinColumn(name="user_id", referencedColumnName="id")
	*/
	protected $user;


	/**
	* @ORM\ManyToOne(targetEntity="Cuota", inversedBy="pagos")
	* @ORM\JoinColumn(name="cuota_id", referencedColumnName="id")
	*/
	protected $cuota;

	/**
	* @var boolean
	* @ORM\Column(name="becado", type="boolean")
	*/
	protected $becado;


/**
*@ORM\ManyToOne(targetEntity="Balance", inversedBy="pagos")
*/
protected $balance;

/**
* @var decimal
* @ORM\Column(name="monto", type="decimal")
*/
protected $monto;


/** ************************ GETTERS ******************************** */


	/**
	* Get id
	* @return integer
	*/

	public function getId()
	{
		return $this->id;
	}

	/**
	* Get borrado
	* @return boolean
	*/
	public function getBorrado()
	{
		return $this->borrado;
	}

	/**
	* Get becado
	* @return boolean
	*/
	public function getBecado()
	{
		return $this->becado;
	}

	/**
	* Get fecha
	* @return datetime
	*/
	public function getFecha()
	{
		return $this->fecha;
	}

	/**
	* Get alumno
	* @return Alumno
	*/
	public function getAlumno()
	{
		return $this->alumno;
	}

	/**
	* Get user
	* @return User
	*/
	public function getUser()
	{
		return $this->user;
	}

	/**
	* Get cuota
	* @return Cuota
	*/
	public function getCuota()
	{
		return $this->cuota;
	}

	/**
	* Get Balance
	* @return Balance
	*/
	public function getBalance()
	{
		return $this->balance;
	}


	/** ****************************** SETTERS ***********************************+ */

	/**
	* Set fecha
	* @param datetime $fecha
	* @return Pago
	*/
	public function setFecha($fecha)
	{
		$this->fecha = $fecha;
		return $this;
	}

	/**
	* Set cuota
	* @param integer $cuotaId
	* @return Pago
	*/
	public function setCuota($cuotaId)
	{
		$this->cuota = $cuotaId;
		return $this;
	}

	/** Set alumno
	* @param $alumno
	* @return Pago
	*/
	public function setAlumno($alumno)
	{
		$this->alumno = $alumno;
		return $this;
	}

	/** Set user
	* @param $user
	* @return Pago
	*/
	public function setUser($user)
	{
		$this->user = $user;
		return $this;
	}

	/** Set becado
	* @param boolean $becado
	* @return Pago
	*/
	public function setBecado($becado)
	{
		$this->becado = $becado;
		return $this;
	}


	/** Set borrado
	* @param boolean $borrado
	* @return Pago
	*/
	public function setBorrado($borrado)
	{
		$this->borrado = $borrado;
		return $this;
	}

	/** Set balance
	* @param boolean $balance
	* @return Pago
	*/
	public function setBalance($balance)
	{
		$this->balance = $balance;
		return $this;
	}

	/**
	*Get monto
	* @return decimal
	*/
	public function getMonto()
	{
		return $this->monto;
	}

	/**
	*set monto
	* @param decimal $monto
	* @return Cuota
	*/
	public function setMonto($monto)
	{
		$this->monto = $monto;
		return $this;
	}

}
