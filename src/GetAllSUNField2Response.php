<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllSUNField2Response
{

    /**
     * @var ArrayOfSUNField2 $GetAllSUNField2Result
     */
    protected $GetAllSUNField2Result = null;

    /**
     * @param ArrayOfSUNField2 $GetAllSUNField2Result
     */
    public function __construct($GetAllSUNField2Result)
    {
      $this->GetAllSUNField2Result = $GetAllSUNField2Result;
    }

    /**
     * @return ArrayOfSUNField2
     */
    public function getGetAllSUNField2Result()
    {
      return $this->GetAllSUNField2Result;
    }

    /**
     * @param ArrayOfSUNField2 $GetAllSUNField2Result
     * @return \ArbetsformedlingenWsTaxonomi\GetAllSUNField2Response
     */
    public function setGetAllSUNField2Result($GetAllSUNField2Result)
    {
      $this->GetAllSUNField2Result = $GetAllSUNField2Result;
      return $this;
    }

}
