<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllSUNLevel3Response
{

    /**
     * @var ArrayOfSUNLevel3 $GetAllSUNLevel3Result
     */
    protected $GetAllSUNLevel3Result = null;

    /**
     * @param ArrayOfSUNLevel3 $GetAllSUNLevel3Result
     */
    public function __construct($GetAllSUNLevel3Result)
    {
      $this->GetAllSUNLevel3Result = $GetAllSUNLevel3Result;
    }

    /**
     * @return ArrayOfSUNLevel3
     */
    public function getGetAllSUNLevel3Result()
    {
      return $this->GetAllSUNLevel3Result;
    }

    /**
     * @param ArrayOfSUNLevel3 $GetAllSUNLevel3Result
     * @return \ArbetsformedlingenWsTaxonomi\GetAllSUNLevel3Response
     */
    public function setGetAllSUNLevel3Result($GetAllSUNLevel3Result)
    {
      $this->GetAllSUNLevel3Result = $GetAllSUNLevel3Result;
      return $this;
    }

}
