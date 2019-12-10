<?php

namespace ArbetsformedlingenWsTaxonomi;

class WageTypeCustom
{

    /**
     * @var int $WageTypeID
     */
    protected $WageTypeID = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    /**
     * @var int $SortOrder
     */
    protected $SortOrder = null;

    /**
     * @param int $WageTypeID
     * @param int $SortOrder
     */
    public function __construct($WageTypeID, $SortOrder)
    {
      $this->WageTypeID = $WageTypeID;
      $this->SortOrder = $SortOrder;
    }

    /**
     * @return int
     */
    public function getWageTypeID()
    {
      return $this->WageTypeID;
    }

    /**
     * @param int $WageTypeID
     * @return \ArbetsformedlingenWsTaxonomi\WageType
     */
    public function setWageTypeID($WageTypeID)
    {
      $this->WageTypeID = $WageTypeID;
      return $this;
    }

    /**
     * @return string
     */
    public function getTerm()
    {
      return $this->Term;
    }

    /**
     * @param string $Term
     * @return \ArbetsformedlingenWsTaxonomi\WageType
     */
    public function setTerm($Term)
    {
      $this->Term = $Term;
      return $this;
    }

    /**
     * @return int
     */
    public function getSortOrder()
    {
      return $this->SortOrder;
    }

    /**
     * @param int $SortOrder
     * @return \ArbetsformedlingenWsTaxonomi\WageType
     */
    public function setSortOrder($SortOrder)
    {
      $this->SortOrder = $SortOrder;
      return $this;
    }

}
