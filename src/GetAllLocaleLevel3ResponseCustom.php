<?php

namespace ArbetsformedlingenWsTaxonomi;

class GetAllLocaleLevel3ResponseCustom
{

    /**
     * @var ArrayOfLocaleLevel3 $GetAllLocaleLevel3Result
     */
    protected $GetAllLocaleLevel3Result = null;

    /**
     * @param ArrayOfLocaleLevel3 $GetAllLocaleLevel3Result
     */
    public function __construct($GetAllLocaleLevel3Result)
    {
      $this->GetAllLocaleLevel3Result = $GetAllLocaleLevel3Result;
    }

    /**
     * @return ArrayOfLocaleLevel3
     */
    public function getGetAllLocaleLevel3Result()
    {
      return $this->GetAllLocaleLevel3Result;
    }

    /**
     * @param ArrayOfLocaleLevel3 $GetAllLocaleLevel3Result
     * @return \ArbetsformedlingenWsTaxonomi\GetAllLocaleLevel3Response
     */
    public function setGetAllLocaleLevel3Result($GetAllLocaleLevel3Result)
    {
      $this->GetAllLocaleLevel3Result = $GetAllLocaleLevel3Result;
      return $this;
    }

}
