<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllSNILevel1Response
{

    /**
     * @var ArrayOfSNILevel1 $GetAllSNILevel1Result
     */
    protected $GetAllSNILevel1Result = null;

    /**
     * @param ArrayOfSNILevel1 $GetAllSNILevel1Result
     */
    public function __construct($GetAllSNILevel1Result)
    {
      $this->GetAllSNILevel1Result = $GetAllSNILevel1Result;
    }

    /**
     * @return ArrayOfSNILevel1
     */
    public function getGetAllSNILevel1Result()
    {
      return $this->GetAllSNILevel1Result;
    }

    /**
     * @param ArrayOfSNILevel1 $GetAllSNILevel1Result
     * @return \ArbetsformedlingenWsTaxonomi\GetAllSNILevel1Response
     */
    public function setGetAllSNILevel1Result($GetAllSNILevel1Result)
    {
      $this->GetAllSNILevel1Result = $GetAllSNILevel1Result;
      return $this;
    }

}
