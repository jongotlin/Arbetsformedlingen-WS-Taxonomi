<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllSUNField3Response
{

    /**
     * @var ArrayOfSUNField3 $GetAllSUNField3Result
     */
    protected $GetAllSUNField3Result = null;

    /**
     * @param ArrayOfSUNField3 $GetAllSUNField3Result
     */
    public function __construct($GetAllSUNField3Result)
    {
      $this->GetAllSUNField3Result = $GetAllSUNField3Result;
    }

    /**
     * @return ArrayOfSUNField3
     */
    public function getGetAllSUNField3Result()
    {
      return $this->GetAllSUNField3Result;
    }

    /**
     * @param ArrayOfSUNField3 $GetAllSUNField3Result
     * @return \ArbetsformedlingenWsTaxonomi\GetAllSUNField3Response
     */
    public function setGetAllSUNField3Result($GetAllSUNField3Result)
    {
      $this->GetAllSUNField3Result = $GetAllSUNField3Result;
      return $this;
    }

}
