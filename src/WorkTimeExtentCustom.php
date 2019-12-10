<?php

namespace ArbetsformedlingenWsTaxonomi;

class WorkTimeExtentCustom
{

    /**
     * @var int $WorkTimeExtentID
     */
    protected $WorkTimeExtentID = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    /**
     * @var int $SortOrder
     */
    protected $SortOrder = null;

    /**
     * @param int $WorkTimeExtentID
     * @param int $SortOrder
     */
    public function __construct($WorkTimeExtentID, $SortOrder)
    {
      $this->WorkTimeExtentID = $WorkTimeExtentID;
      $this->SortOrder = $SortOrder;
    }

    /**
     * @return int
     */
    public function getWorkTimeExtentID()
    {
      return $this->WorkTimeExtentID;
    }

    /**
     * @param int $WorkTimeExtentID
     * @return \ArbetsformedlingenWsTaxonomi\WorkTimeExtent
     */
    public function setWorkTimeExtentID($WorkTimeExtentID)
    {
      $this->WorkTimeExtentID = $WorkTimeExtentID;
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
     * @return \ArbetsformedlingenWsTaxonomi\WorkTimeExtent
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
     * @return \ArbetsformedlingenWsTaxonomi\WorkTimeExtent
     */
    public function setSortOrder($SortOrder)
    {
      $this->SortOrder = $SortOrder;
      return $this;
    }

}
