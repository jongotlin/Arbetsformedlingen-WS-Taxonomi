<?php

namespace ArbetsformedlingenWsTaxonomi;

class OccupationExperienceLastCustom
{

    /**
     * @var int $OccupationExperienceLastID
     */
    protected $OccupationExperienceLastID = null;

    /**
     * @var string $Term
     */
    protected $Term = null;

    /**
     * @var int $SortOrder
     */
    protected $SortOrder = null;

    /**
     * @param int $OccupationExperienceLastID
     * @param int $SortOrder
     */
    public function __construct($OccupationExperienceLastID, $SortOrder)
    {
      $this->OccupationExperienceLastID = $OccupationExperienceLastID;
      $this->SortOrder = $SortOrder;
    }

    /**
     * @return int
     */
    public function getOccupationExperienceLastID()
    {
      return $this->OccupationExperienceLastID;
    }

    /**
     * @param int $OccupationExperienceLastID
     * @return \ArbetsformedlingenWsTaxonomi\OccupationExperienceLast
     */
    public function setOccupationExperienceLastID($OccupationExperienceLastID)
    {
      $this->OccupationExperienceLastID = $OccupationExperienceLastID;
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
     * @return \ArbetsformedlingenWsTaxonomi\OccupationExperienceLast
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
     * @return \ArbetsformedlingenWsTaxonomi\OccupationExperienceLast
     */
    public function setSortOrder($SortOrder)
    {
      $this->SortOrder = $SortOrder;
      return $this;
    }

}
