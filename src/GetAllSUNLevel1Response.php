<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllSUNLevel1Response
{

    /**
     * @var ArrayOfSUNLevel1 $GetAllSUNLevel1Result
     */
    protected $GetAllSUNLevel1Result = null;

    /**
     * @param ArrayOfSUNLevel1 $GetAllSUNLevel1Result
     */
    public function __construct($GetAllSUNLevel1Result)
    {
      $this->GetAllSUNLevel1Result = $GetAllSUNLevel1Result;
    }

    /**
     * @return ArrayOfSUNLevel1
     */
    public function getGetAllSUNLevel1Result()
    {
      return $this->GetAllSUNLevel1Result;
    }

    /**
     * @param ArrayOfSUNLevel1 $GetAllSUNLevel1Result
     * @return \ArbetsformedlingenWsTaxonomi\GetAllSUNLevel1Response
     */
    public function setGetAllSUNLevel1Result($GetAllSUNLevel1Result)
    {
      $this->GetAllSUNLevel1Result = $GetAllSUNLevel1Result;
      return $this;
    }

}
