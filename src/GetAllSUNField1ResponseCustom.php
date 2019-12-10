<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllSUNField1ResponseCustom
{

    /**
     * @var ArrayOfSUNField1 $GetAllSUNField1Result
     */
    protected $GetAllSUNField1Result = null;

    /**
     * @param ArrayOfSUNField1 $GetAllSUNField1Result
     */
    public function __construct($GetAllSUNField1Result)
    {
      $this->GetAllSUNField1Result = $GetAllSUNField1Result;
    }

    /**
     * @return ArrayOfSUNField1
     */
    public function getGetAllSUNField1Result()
    {
      return $this->GetAllSUNField1Result;
    }

    /**
     * @param ArrayOfSUNField1 $GetAllSUNField1Result
     * @return \ArbetsformedlingenWsTaxonomi\GetAllSUNField1Response
     */
    public function setGetAllSUNField1Result($GetAllSUNField1Result)
    {
      $this->GetAllSUNField1Result = $GetAllSUNField1Result;
      return $this;
    }

}
