<?php


/**
 * Skeleton subclass for representing a row from the 'jobeet_job' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 05/29/16 02:33:02
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class JobeetJob extends BaseJobeetJob {

	/**
	 * Initializes internal state of JobeetJob object.
	 * @see        parent::__construct()
	 */
	public function __construct()
	{
		// Make sure that parent constructor is always invoked, since that
		// is where any default values for this object are set.
		parent::__construct();
	}

	public function __toString()
	{
		return sprintf('%s at %s (%s)', $this->getPosition(), $this->getCompany(), $this->getLocation());
	}

	public function getCompanySlug()
	{
		return Jobeet::slugify($this->getCompany());
	}

	public function getPositionSlug()
	{
		return Jobeet::slugify($this->getPosition());
	}

	public function getLocationSlug()
	{
		return Jobeet::slugify($this->getLocation());
	}
	
	public function save(PropelPDO $con = null)
	{
		if ($this->isNew() && !$this->getExpiresAt())
		{
			$now = $this->getCreatedAt() ? $this->getCreatedAt('U') : time();
			$this->setExpiresAt($now + 86400 * sfConfig::get('app_active_days'));
		}

		return parent::save($con);
	}




} // JobeetJob
