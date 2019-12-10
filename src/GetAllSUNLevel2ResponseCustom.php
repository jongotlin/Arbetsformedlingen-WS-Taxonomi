<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllSUNLevel2ResponseCustom
{

    /**
     * @var ArrayOfSUNLevel2 $GetAllSUNLevel2Result
     */
    protected $GetAllSUNLevel2Result = null;

    /**
     * @param ArrayOfSUNLevel2 $GetAllSUNLevel2Result
     */
    public function __construct($GetAllSUNLevel2Result)
    {
      $this->GetAllSUNLevel2Result = $GetAllSUNLevel2Result;
    }

    /**
     * @return ArrayOfSUNLevel2
     */
    public function getGetAllSUNLevel2Result()
    {
      return $this->GetAllSUNLevel2Result;
    }

    /**
     * @param ArrayOfSUNLevel2 $GetAllSUNLevel2Result
     * @return \ArbetsformedlingenWsTaxonomi\GetAllSUNLevel2Response
     */
    public function setGetAllSUNLevel2Result($GetAllSUNLevel2Result)
    {
      $this->GetAllSUNLevel2Result = $GetAllSUNLevel2Result;
      return $this;
    }

}
