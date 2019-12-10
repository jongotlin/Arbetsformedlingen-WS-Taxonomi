<?php

namespace ArbetsformedlingenWsTaxonomi;

class OccupationExperienceYearCustom
{

    /**
     * @var int $OccupationExperienceYearID
     */
    protected $OccupationExperienceYearID = null;

    /**
     * @var string $ExperienceYearContact
     */
    protected $ExperienceYearContact = null;

    /**
     * @var string $ExperienceYearCandidate
     */
    protected $ExperienceYearCandidate = null;

    /**
     * @param int $OccupationExperienceYearID
     */
    public function __construct($OccupationExperienceYearID)
    {
      $this->OccupationExperienceYearID = $OccupationExperienceYearID;
    }

    /**
     * @return int
     */
    public function getOccupationExperienceYearID()
    {
      return $this->OccupationExperienceYearID;
    }

    /**
     * @param int $OccupationExperienceYearID
     * @return \ArbetsformedlingenWsTaxonomi\OccupationExperienceYear
     */
    public function setOccupationExperienceYearID($OccupationExperienceYearID)
    {
      $this->OccupationExperienceYearID = $OccupationExperienceYearID;
      return $this;
    }

    /**
     * @return string
     */
    public function getExperienceYearContact()
    {
      return $this->ExperienceYearContact;
    }

    /**
     * @param string $ExperienceYearContact
     * @return \ArbetsformedlingenWsTaxonomi\OccupationExperienceYear
     */
    public function setExperienceYearContact($ExperienceYearContact)
    {
      $this->ExperienceYearContact = $ExperienceYearContact;
      return $this;
    }

    /**
     * @return string
     */
    public function getExperienceYearCandidate()
    {
      return $this->ExperienceYearCandidate;
    }

    /**
     * @param string $ExperienceYearCandidate
     * @return \ArbetsformedlingenWsTaxonomi\OccupationExperienceYear
     */
    public function setExperienceYearCandidate($ExperienceYearCandidate)
    {
      $this->ExperienceYearCandidate = $ExperienceYearCandidate;
      return $this;
    }

}
