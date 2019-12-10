<?php

namespace ArbetsformedlingenWsTaxonomi;

class TaxonomiServiceCustom extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'GetAllContinents' => 'ArbetsformedlingenWsTaxonomi\\GetAllContinentsCustom',
      'GetAllContinentsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllContinentsResponseCustom',
      'ArrayOfContinent' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfContinentCustom',
      'Continent' => 'ArbetsformedlingenWsTaxonomi\\ContinentCustom',
      'GetAllCountries' => 'ArbetsformedlingenWsTaxonomi\\GetAllCountriesCustom',
      'GetAllCountriesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllCountriesResponseCustom',
      'ArrayOfCountry' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfCountryCustom',
      'Country' => 'ArbetsformedlingenWsTaxonomi\\CountryCustom',
      'GetAllEURegions' => 'ArbetsformedlingenWsTaxonomi\\GetAllEURegionsCustom',
      'GetAllEURegionsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllEURegionsResponseCustom',
      'ArrayOfEURegion' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfEURegionCustom',
      'EURegion' => 'ArbetsformedlingenWsTaxonomi\\EURegionCustom',
      'GetEURegionsByCountryID' => 'ArbetsformedlingenWsTaxonomi\\GetEURegionsByCountryIDCustom',
      'GetEURegionsByCountryIDResponse' => 'ArbetsformedlingenWsTaxonomi\\GetEURegionsByCountryIDResponseCustom',
      'GetAllMunicipalities' => 'ArbetsformedlingenWsTaxonomi\\GetAllMunicipalitiesCustom',
      'GetAllMunicipalitiesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllMunicipalitiesResponseCustom',
      'ArrayOfMunicipality' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfMunicipalityCustom',
      'Municipality' => 'ArbetsformedlingenWsTaxonomi\\MunicipalityCustom',
      'GetAllPostLocalities' => 'ArbetsformedlingenWsTaxonomi\\GetAllPostLocalitiesCustom',
      'GetAllPostLocalitiesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllPostLocalitiesResponseCustom',
      'ArrayOfPostLocality' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfPostLocalityCustom',
      'PostLocality' => 'ArbetsformedlingenWsTaxonomi\\PostLocalityCustom',
      'GetAllPostCodes' => 'ArbetsformedlingenWsTaxonomi\\GetAllPostCodesCustom',
      'GetAllPostCodesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllPostCodesResponseCustom',
      'ArrayOfPostCode' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfPostCodeCustom',
      'PostCode' => 'ArbetsformedlingenWsTaxonomi\\PostCodeCustom',
      'GetPostCodesByPostLocality' => 'ArbetsformedlingenWsTaxonomi\\GetPostCodesByPostLocalityCustom',
      'GetPostCodesByPostLocalityResponse' => 'ArbetsformedlingenWsTaxonomi\\GetPostCodesByPostLocalityResponseCustom',
      'GetPostCodesByNationalNUTSLAU2Code' => 'ArbetsformedlingenWsTaxonomi\\GetPostCodesByNationalNUTSLAU2CodeCustom',
      'GetPostCodesByNationalNUTSLAU2CodeResponse' => 'ArbetsformedlingenWsTaxonomi\\GetPostCodesByNationalNUTSLAU2CodeResponseCustom',
      'GetPostCodesByPostCode' => 'ArbetsformedlingenWsTaxonomi\\GetPostCodesByPostCodeCustom',
      'GetPostCodesByPostCodeResponse' => 'ArbetsformedlingenWsTaxonomi\\GetPostCodesByPostCodeResponseCustom',
      'GetLocaleCodeByISCO' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleCodeByISCOCustom',
      'GetLocaleCodeByISCOResponse' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleCodeByISCOResponseCustom',
      'ArrayOfString' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfStringCustom',
      'GetISCOByLocaleCode' => 'ArbetsformedlingenWsTaxonomi\\GetISCOByLocaleCodeCustom',
      'GetISCOByLocaleCodeResponse' => 'ArbetsformedlingenWsTaxonomi\\GetISCOByLocaleCodeResponseCustom',
      'GetAllLocaleLevel3' => 'ArbetsformedlingenWsTaxonomi\\GetAllLocaleLevel3Custom',
      'GetAllLocaleLevel3Response' => 'ArbetsformedlingenWsTaxonomi\\GetAllLocaleLevel3ResponseCustom',
      'ArrayOfLocaleLevel3' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfLocaleLevel3Custom',
      'LocaleLevel3' => 'ArbetsformedlingenWsTaxonomi\\LocaleLevel3Custom',
      'GetAllLocaleGroups' => 'ArbetsformedlingenWsTaxonomi\\GetAllLocaleGroupsCustom',
      'GetAllLocaleGroupsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllLocaleGroupsResponseCustom',
      'ArrayOfLocaleGroup' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfLocaleGroupCustom',
      'LocaleGroup' => 'ArbetsformedlingenWsTaxonomi\\LocaleGroupCustom',
      'GetLocaleGroupsByLocaleCodes' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleGroupsByLocaleCodesCustom',
      'GetLocaleGroupsByLocaleCodesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleGroupsByLocaleCodesResponseCustom',
      'GetLocaleGroupsByLocaleFieldId' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleGroupsByLocaleFieldIdCustom',
      'GetLocaleGroupsByLocaleFieldIdResponse' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleGroupsByLocaleFieldIdResponseCustom',
      'GetLocaleGroupByOccupationNameId' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleGroupByOccupationNameIdCustom',
      'GetLocaleGroupByOccupationNameIdResponse' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleGroupByOccupationNameIdResponseCustom',
      'GetLocaleGroupsByText' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleGroupsByTextCustom',
      'GetLocaleGroupsByTextResponse' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleGroupsByTextResponseCustom',
      'GetAllOccupationNames' => 'ArbetsformedlingenWsTaxonomi\\GetAllOccupationNamesCustom',
      'GetAllOccupationNamesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllOccupationNamesResponseCustom',
      'ArrayOfOccupationName' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfOccupationNameCustom',
      'OccupationName' => 'ArbetsformedlingenWsTaxonomi\\OccupationNameCustom',
      'GetAllOccupationNameSynonyms' => 'ArbetsformedlingenWsTaxonomi\\GetAllOccupationNameSynonymsCustom',
      'GetAllOccupationNameSynonymsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllOccupationNameSynonymsResponseCustom',
      'ArrayOfOccupationNameSynonym' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfOccupationNameSynonymCustom',
      'OccupationNameSynonym' => 'ArbetsformedlingenWsTaxonomi\\OccupationNameSynonymCustom',
      'GetAllOccupationNamesVersion' => 'ArbetsformedlingenWsTaxonomi\\GetAllOccupationNamesVersionCustom',
      'GetAllOccupationNamesVersionResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllOccupationNamesVersionResponseCustom',
      'ArrayOfOccupationNameExt' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfOccupationNameExtCustom',
      'OccupationNameExt' => 'ArbetsformedlingenWsTaxonomi\\OccupationNameExtCustom',
      'GetOccupationNamesByLocaleCode' => 'ArbetsformedlingenWsTaxonomi\\GetOccupationNamesByLocaleCodeCustom',
      'GetOccupationNamesByLocaleCodeResponse' => 'ArbetsformedlingenWsTaxonomi\\GetOccupationNamesByLocaleCodeResponseCustom',
      'GetOccupationNamesByOccupationNameIds' => 'ArbetsformedlingenWsTaxonomi\\GetOccupationNamesByOccupationNameIdsCustom',
      'ArrayOfInt' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfIntCustom',
      'GetOccupationNamesByOccupationNameIdsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetOccupationNamesByOccupationNameIdsResponseCustom',
      'GetOccupationNamesByOccupationNameIdsVersion' => 'ArbetsformedlingenWsTaxonomi\\GetOccupationNamesByOccupationNameIdsVersionCustom',
      'GetOccupationNamesByOccupationNameIdsVersionResponse' => 'ArbetsformedlingenWsTaxonomi\\GetOccupationNamesByOccupationNameIdsVersionResponseCustom',
      'GetOccupationNamesByText' => 'ArbetsformedlingenWsTaxonomi\\GetOccupationNamesByTextCustom',
      'GetOccupationNamesByTextResponse' => 'ArbetsformedlingenWsTaxonomi\\GetOccupationNamesByTextResponseCustom',
      'GetOccupationNamesArt' => 'ArbetsformedlingenWsTaxonomi\\GetOccupationNamesArtCustom',
      'GetOccupationNamesArtResponse' => 'ArbetsformedlingenWsTaxonomi\\GetOccupationNamesArtResponseCustom',
      'GetOccupationNamesConstruction' => 'ArbetsformedlingenWsTaxonomi\\GetOccupationNamesConstructionCustom',
      'GetOccupationNamesConstructionResponse' => 'ArbetsformedlingenWsTaxonomi\\GetOccupationNamesConstructionResponseCustom',
      'GetOccupationNamesNavigation' => 'ArbetsformedlingenWsTaxonomi\\GetOccupationNamesNavigationCustom',
      'GetOccupationNamesNavigationResponse' => 'ArbetsformedlingenWsTaxonomi\\GetOccupationNamesNavigationResponseCustom',
      'GetAllLocaleFields' => 'ArbetsformedlingenWsTaxonomi\\GetAllLocaleFieldsCustom',
      'GetAllLocaleFieldsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllLocaleFieldsResponseCustom',
      'ArrayOfLocaleField' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfLocaleFieldCustom',
      'LocaleField' => 'ArbetsformedlingenWsTaxonomi\\LocaleFieldCustom',
      'GetLocaleFieldsByLocaleCode' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleFieldsByLocaleCodeCustom',
      'GetLocaleFieldsByLocaleCodeResponse' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleFieldsByLocaleCodeResponseCustom',
      'GetLocaleFieldsByLocaleFieldIds' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleFieldsByLocaleFieldIdsCustom',
      'GetLocaleFieldsByLocaleFieldIdsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleFieldsByLocaleFieldIdsResponseCustom',
      'GetLocaleFieldsByText' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleFieldsByTextCustom',
      'GetLocaleFieldsByTextResponse' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleFieldsByTextResponseCustom',
      'GetAllSkills' => 'ArbetsformedlingenWsTaxonomi\\GetAllSkillsCustom',
      'GetAllSkillsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllSkillsResponseCustom',
      'ArrayOfSkill' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfSkillCustom',
      'Skill' => 'ArbetsformedlingenWsTaxonomi\\SkillCustom',
      'SkillHeadline' => 'ArbetsformedlingenWsTaxonomi\\SkillHeadlineCustom',
      'SkillMainHeadline' => 'ArbetsformedlingenWsTaxonomi\\SkillMainHeadlineCustom',
      'GetAllSkillsVersion' => 'ArbetsformedlingenWsTaxonomi\\GetAllSkillsVersionCustom',
      'GetAllSkillsVersionResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllSkillsVersionResponseCustom',
      'ArrayOfSkillVersion' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfSkillVersionCustom',
      'SkillVersion' => 'ArbetsformedlingenWsTaxonomi\\SkillVersionCustom',
      'GetSkillsBySkillIdsVersion' => 'ArbetsformedlingenWsTaxonomi\\GetSkillsBySkillIdsVersionCustom',
      'GetSkillsBySkillIdsVersionResponse' => 'ArbetsformedlingenWsTaxonomi\\GetSkillsBySkillIdsVersionResponseCustom',
      'GetSkillsByLocaleCode' => 'ArbetsformedlingenWsTaxonomi\\GetSkillsByLocaleCodeCustom',
      'GetSkillsByLocaleCodeResponse' => 'ArbetsformedlingenWsTaxonomi\\GetSkillsByLocaleCodeResponseCustom',
      'GetSkillsBySkillHeadlineId' => 'ArbetsformedlingenWsTaxonomi\\GetSkillsBySkillHeadlineIdCustom',
      'GetSkillsBySkillHeadlineIdResponse' => 'ArbetsformedlingenWsTaxonomi\\GetSkillsBySkillHeadlineIdResponseCustom',
      'GetSkillsBySkillIds' => 'ArbetsformedlingenWsTaxonomi\\GetSkillsBySkillIdsCustom',
      'GetSkillsBySkillIdsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetSkillsBySkillIdsResponseCustom',
      'GetSkillsBySkillMainHeadlineId' => 'ArbetsformedlingenWsTaxonomi\\GetSkillsBySkillMainHeadlineIdCustom',
      'GetSkillsBySkillMainHeadlineIdResponse' => 'ArbetsformedlingenWsTaxonomi\\GetSkillsBySkillMainHeadlineIdResponseCustom',
      'GetSkillsByText' => 'ArbetsformedlingenWsTaxonomi\\GetSkillsByTextCustom',
      'GetSkillsByTextResponse' => 'ArbetsformedlingenWsTaxonomi\\GetSkillsByTextResponseCustom',
      'GetAllLocaleGroupSkills' => 'ArbetsformedlingenWsTaxonomi\\GetAllLocaleGroupSkillsCustom',
      'GetAllLocaleGroupSkillsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllLocaleGroupSkillsResponseCustom',
      'ArrayOfLocaleGroupSkill' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfLocaleGroupSkillCustom',
      'LocaleGroupSkill' => 'ArbetsformedlingenWsTaxonomi\\LocaleGroupSkillCustom',
      'GetLocaleGroupSkillsByLocaleCode' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleGroupSkillsByLocaleCodeCustom',
      'GetLocaleGroupSkillsByLocaleCodeResponse' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleGroupSkillsByLocaleCodeResponseCustom',
      'GetAllSkillHeadlines' => 'ArbetsformedlingenWsTaxonomi\\GetAllSkillHeadlinesCustom',
      'GetAllSkillHeadlinesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllSkillHeadlinesResponseCustom',
      'ArrayOfSkillHeadline' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfSkillHeadlineCustom',
      'GetSkillHeadlinesBySkillHeadlineIds' => 'ArbetsformedlingenWsTaxonomi\\GetSkillHeadlinesBySkillHeadlineIdsCustom',
      'GetSkillHeadlinesBySkillHeadlineIdsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetSkillHeadlinesBySkillHeadlineIdsResponseCustom',
      'GetSkillHeadlinesBySkillMainHeadlineId' => 'ArbetsformedlingenWsTaxonomi\\GetSkillHeadlinesBySkillMainHeadlineIdCustom',
      'GetSkillHeadlinesBySkillMainHeadlineIdResponse' => 'ArbetsformedlingenWsTaxonomi\\GetSkillHeadlinesBySkillMainHeadlineIdResponseCustom',
      'GetSkillHeadlinesByText' => 'ArbetsformedlingenWsTaxonomi\\GetSkillHeadlinesByTextCustom',
      'GetSkillHeadlinesByTextResponse' => 'ArbetsformedlingenWsTaxonomi\\GetSkillHeadlinesByTextResponseCustom',
      'GetAllSkillMainHeadlines' => 'ArbetsformedlingenWsTaxonomi\\GetAllSkillMainHeadlinesCustom',
      'GetAllSkillMainHeadlinesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllSkillMainHeadlinesResponseCustom',
      'ArrayOfSkillMainHeadline' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfSkillMainHeadlineCustom',
      'GetSkillMainHeadlinesBySkillMainHeadlineIds' => 'ArbetsformedlingenWsTaxonomi\\GetSkillMainHeadlinesBySkillMainHeadlineIdsCustom',
      'GetSkillMainHeadlinesBySkillMainHeadlineIdsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetSkillMainHeadlinesBySkillMainHeadlineIdsResponseCustom',
      'GetSkillMainHeadlinesByText' => 'ArbetsformedlingenWsTaxonomi\\GetSkillMainHeadlinesByTextCustom',
      'GetSkillMainHeadlinesByTextResponse' => 'ArbetsformedlingenWsTaxonomi\\GetSkillMainHeadlinesByTextResponseCustom',
      'GetAllDrivingLicences' => 'ArbetsformedlingenWsTaxonomi\\GetAllDrivingLicencesCustom',
      'GetAllDrivingLicencesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllDrivingLicencesResponseCustom',
      'ArrayOfDrivingLicence' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfDrivingLicenceCustom',
      'DrivingLicence' => 'ArbetsformedlingenWsTaxonomi\\DrivingLicenceCustom',
      'GetAllLanguages' => 'ArbetsformedlingenWsTaxonomi\\GetAllLanguagesCustom',
      'GetAllLanguagesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllLanguagesResponseCustom',
      'ArrayOfLanguage' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfLanguageCustom',
      'Language' => 'ArbetsformedlingenWsTaxonomi\\LanguageCustom',
      'GetAllLanguagesWithISO' => 'ArbetsformedlingenWsTaxonomi\\GetAllLanguagesWithISOCustom',
      'GetAllLanguagesWithISOResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllLanguagesWithISOResponseCustom',
      'ArrayOfLanguageISO' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfLanguageISOCustom',
      'LanguageISO' => 'ArbetsformedlingenWsTaxonomi\\LanguageISOCustom',
      'GetLanguageIDByISO2Code' => 'ArbetsformedlingenWsTaxonomi\\GetLanguageIDByISO2CodeCustom',
      'GetLanguageIDByISO2CodeResponse' => 'ArbetsformedlingenWsTaxonomi\\GetLanguageIDByISO2CodeResponseCustom',
      'GetAllLanguageLevels' => 'ArbetsformedlingenWsTaxonomi\\GetAllLanguageLevelsCustom',
      'GetAllLanguageLevelsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllLanguageLevelsResponseCustom',
      'ArrayOfLanguageLevel' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfLanguageLevelCustom',
      'LanguageLevel' => 'ArbetsformedlingenWsTaxonomi\\LanguageLevelCustom',
      'GetAllEducationLevels' => 'ArbetsformedlingenWsTaxonomi\\GetAllEducationLevelsCustom',
      'GetAllEducationLevelsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllEducationLevelsResponseCustom',
      'ArrayOfEducationLevel' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfEducationLevelCustom',
      'EducationLevel' => 'ArbetsformedlingenWsTaxonomi\\EducationLevelCustom',
      'GetAllEducationFields' => 'ArbetsformedlingenWsTaxonomi\\GetAllEducationFieldsCustom',
      'GetAllEducationFieldsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllEducationFieldsResponseCustom',
      'ArrayOfEducationField' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfEducationFieldCustom',
      'EducationField' => 'ArbetsformedlingenWsTaxonomi\\EducationFieldCustom',
      'GetAllExperiencesYear' => 'ArbetsformedlingenWsTaxonomi\\GetAllExperiencesYearCustom',
      'GetAllExperiencesYearResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllExperiencesYearResponseCustom',
      'ArrayOfOccupationExperienceYear' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfOccupationExperienceYearCustom',
      'OccupationExperienceYear' => 'ArbetsformedlingenWsTaxonomi\\OccupationExperienceYearCustom',
      'GetAllExperiencesLast' => 'ArbetsformedlingenWsTaxonomi\\GetAllExperiencesLastCustom',
      'GetAllExperiencesLastResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllExperiencesLastResponseCustom',
      'ArrayOfOccupationExperienceLast' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfOccupationExperienceLastCustom',
      'OccupationExperienceLast' => 'ArbetsformedlingenWsTaxonomi\\OccupationExperienceLastCustom',
      'GetAllSUNLevel1' => 'ArbetsformedlingenWsTaxonomi\\GetAllSUNLevel1Custom',
      'GetAllSUNLevel1Response' => 'ArbetsformedlingenWsTaxonomi\\GetAllSUNLevel1ResponseCustom',
      'ArrayOfSUNLevel1' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfSUNLevel1Custom',
      'SUNLevel1' => 'ArbetsformedlingenWsTaxonomi\\SUNLevel1Custom',
      'GetAllSUNLevel2' => 'ArbetsformedlingenWsTaxonomi\\GetAllSUNLevel2Custom',
      'GetAllSUNLevel2Response' => 'ArbetsformedlingenWsTaxonomi\\GetAllSUNLevel2ResponseCustom',
      'ArrayOfSUNLevel2' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfSUNLevel2Custom',
      'SUNLevel2' => 'ArbetsformedlingenWsTaxonomi\\SUNLevel2Custom',
      'GetAllSUNLevel3' => 'ArbetsformedlingenWsTaxonomi\\GetAllSUNLevel3Custom',
      'GetAllSUNLevel3Response' => 'ArbetsformedlingenWsTaxonomi\\GetAllSUNLevel3ResponseCustom',
      'ArrayOfSUNLevel3' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfSUNLevel3Custom',
      'SUNLevel3' => 'ArbetsformedlingenWsTaxonomi\\SUNLevel3Custom',
      'GetAllSUNField1' => 'ArbetsformedlingenWsTaxonomi\\GetAllSUNField1Custom',
      'GetAllSUNField1Response' => 'ArbetsformedlingenWsTaxonomi\\GetAllSUNField1ResponseCustom',
      'ArrayOfSUNField1' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfSUNField1Custom',
      'SUNField1' => 'ArbetsformedlingenWsTaxonomi\\SUNField1Custom',
      'GetAllSUNField2' => 'ArbetsformedlingenWsTaxonomi\\GetAllSUNField2Custom',
      'GetAllSUNField2Response' => 'ArbetsformedlingenWsTaxonomi\\GetAllSUNField2ResponseCustom',
      'ArrayOfSUNField2' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfSUNField2Custom',
      'SUNField2' => 'ArbetsformedlingenWsTaxonomi\\SUNField2Custom',
      'GetAllSUNField3' => 'ArbetsformedlingenWsTaxonomi\\GetAllSUNField3Custom',
      'GetAllSUNField3Response' => 'ArbetsformedlingenWsTaxonomi\\GetAllSUNField3ResponseCustom',
      'ArrayOfSUNField3' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfSUNField3Custom',
      'SUNField3' => 'ArbetsformedlingenWsTaxonomi\\SUNField3Custom',
      'GetSUNField3ByGuide' => 'ArbetsformedlingenWsTaxonomi\\GetSUNField3ByGuideCustom',
      'GetSUNField3ByGuideResponse' => 'ArbetsformedlingenWsTaxonomi\\GetSUNField3ByGuideResponseCustom',
      'GetSUNGuideTree' => 'ArbetsformedlingenWsTaxonomi\\GetSUNGuideTreeCustom',
      'GetSUNGuideTreeResponse' => 'ArbetsformedlingenWsTaxonomi\\GetSUNGuideTreeResponseCustom',
      'ArrayOfSUNGuideBranch' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfSUNGuideBranchCustom',
      'SUNGuideBranch' => 'ArbetsformedlingenWsTaxonomi\\SUNGuideBranchCustom',
      'ArrayOfSUNGuideLeaf' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfSUNGuideLeafCustom',
      'SUNGuideLeaf' => 'ArbetsformedlingenWsTaxonomi\\SUNGuideLeafCustom',
      'GetAllAIDOccupationNames' => 'ArbetsformedlingenWsTaxonomi\\GetAllAIDOccupationNamesCustom',
      'GetAllAIDOccupationNamesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllAIDOccupationNamesResponseCustom',
      'ArrayOfAIDOccupationName' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfAIDOccupationNameCustom',
      'AIDOccupationName' => 'ArbetsformedlingenWsTaxonomi\\AIDOccupationNameCustom',
      'GetAIDOccupationNameByLabel' => 'ArbetsformedlingenWsTaxonomi\\GetAIDOccupationNameByLabelCustom',
      'GetAIDOccupationNameByLabelResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAIDOccupationNameByLabelResponseCustom',
      'GetAllBEFOccupationNames' => 'ArbetsformedlingenWsTaxonomi\\GetAllBEFOccupationNamesCustom',
      'GetAllBEFOccupationNamesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllBEFOccupationNamesResponseCustom',
      'ArrayOfBEFOccupationName' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfBEFOccupationNameCustom',
      'BEFOccupationName' => 'ArbetsformedlingenWsTaxonomi\\BEFOccupationNameCustom',
      'GetBEFOccupationNameByLabel' => 'ArbetsformedlingenWsTaxonomi\\GetBEFOccupationNameByLabelCustom',
      'GetBEFOccupationNameByLabelResponse' => 'ArbetsformedlingenWsTaxonomi\\GetBEFOccupationNameByLabelResponseCustom',
      'GetAllBSKOccupationNames' => 'ArbetsformedlingenWsTaxonomi\\GetAllBSKOccupationNamesCustom',
      'GetAllBSKOccupationNamesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllBSKOccupationNamesResponseCustom',
      'ArrayOfBSKOccupationName' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfBSKOccupationNameCustom',
      'BSKOccupationName' => 'ArbetsformedlingenWsTaxonomi\\BSKOccupationNameCustom',
      'GetBSKOccupationNameByLabel' => 'ArbetsformedlingenWsTaxonomi\\GetBSKOccupationNameByLabelCustom',
      'GetBSKOccupationNameByLabelResponse' => 'ArbetsformedlingenWsTaxonomi\\GetBSKOccupationNameByLabelResponseCustom',
      'GetVersionInformations' => 'ArbetsformedlingenWsTaxonomi\\GetVersionInformationsCustom',
      'GetVersionInformationsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetVersionInformationsResponseCustom',
      'ArrayOfVersionInformation' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfVersionInformationCustom',
      'VersionInformation' => 'ArbetsformedlingenWsTaxonomi\\VersionInformationCustom',
      'GetAllEmploymentTypes' => 'ArbetsformedlingenWsTaxonomi\\GetAllEmploymentTypesCustom',
      'GetAllEmploymentTypesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllEmploymentTypesResponseCustom',
      'ArrayOfEmploymentType' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfEmploymentTypeCustom',
      'EmploymentType' => 'ArbetsformedlingenWsTaxonomi\\EmploymentTypeCustom',
      'GetAllWorkTimeExtents' => 'ArbetsformedlingenWsTaxonomi\\GetAllWorkTimeExtentsCustom',
      'GetAllWorkTimeExtentsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllWorkTimeExtentsResponseCustom',
      'ArrayOfWorkTimeExtent' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfWorkTimeExtentCustom',
      'WorkTimeExtent' => 'ArbetsformedlingenWsTaxonomi\\WorkTimeExtentCustom',
      'GetAllWageTypes' => 'ArbetsformedlingenWsTaxonomi\\GetAllWageTypesCustom',
      'GetAllWageTypesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllWageTypesResponseCustom',
      'ArrayOfWageType' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfWageTypeCustom',
      'WageType' => 'ArbetsformedlingenWsTaxonomi\\WageTypeCustom',
      'GetAllEmploymentDurations' => 'ArbetsformedlingenWsTaxonomi\\GetAllEmploymentDurationsCustom',
      'GetAllEmploymentDurationsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllEmploymentDurationsResponseCustom',
      'ArrayOfEmploymentDuration' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfEmploymentDurationCustom',
      'EmploymentDuration' => 'ArbetsformedlingenWsTaxonomi\\EmploymentDurationCustom',
      'GetAllJobSituations' => 'ArbetsformedlingenWsTaxonomi\\GetAllJobSituationsCustom',
      'GetAllJobSituationsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllJobSituationsResponseCustom',
      'ArrayOfJobSituation' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfJobSituationCustom',
      'JobSituation' => 'ArbetsformedlingenWsTaxonomi\\JobSituationCustom',
      'GetAllInternalJobSituations' => 'ArbetsformedlingenWsTaxonomi\\GetAllInternalJobSituationsCustom',
      'GetAllInternalJobSituationsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllInternalJobSituationsResponseCustom',
      'GetAllAFOffices' => 'ArbetsformedlingenWsTaxonomi\\GetAllAFOfficesCustom',
      'GetAllAFOfficesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllAFOfficesResponseCustom',
      'ArrayOfAFOffice' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfAFOfficeCustom',
      'AFOffice' => 'ArbetsformedlingenWsTaxonomi\\AFOfficeCustom',
      'GetAllUnemploymentBenefitSocieties' => 'ArbetsformedlingenWsTaxonomi\\GetAllUnemploymentBenefitSocietiesCustom',
      'GetAllUnemploymentBenefitSocietiesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllUnemploymentBenefitSocietiesResponseCustom',
      'ArrayOfUnemploymentBenefitSociety' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfUnemploymentBenefitSocietyCustom',
      'UnemploymentBenefitSociety' => 'ArbetsformedlingenWsTaxonomi\\UnemploymentBenefitSocietyCustom',
      'GetAllMunicipalityHomePages' => 'ArbetsformedlingenWsTaxonomi\\GetAllMunicipalityHomePagesCustom',
      'GetAllMunicipalityHomePagesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllMunicipalityHomePagesResponseCustom',
      'ArrayOfMunicipalityHomePage' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfMunicipalityHomePageCustom',
      'MunicipalityHomePage' => 'ArbetsformedlingenWsTaxonomi\\MunicipalityHomePageCustom',
      'GetAllSNILevel1' => 'ArbetsformedlingenWsTaxonomi\\GetAllSNILevel1Custom',
      'GetAllSNILevel1Response' => 'ArbetsformedlingenWsTaxonomi\\GetAllSNILevel1ResponseCustom',
      'ArrayOfSNILevel1' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfSNILevel1Custom',
      'SNILevel1' => 'ArbetsformedlingenWsTaxonomi\\SNILevel1Custom',
      'GetAllSNILevel2' => 'ArbetsformedlingenWsTaxonomi\\GetAllSNILevel2Custom',
      'GetAllSNILevel2Response' => 'ArbetsformedlingenWsTaxonomi\\GetAllSNILevel2ResponseCustom',
      'ArrayOfSNILevel2' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfSNILevel2Custom',
      'SNILevel2' => 'ArbetsformedlingenWsTaxonomi\\SNILevel2Custom',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'http://api.arbetsformedlingen.se/taxonomi/v0/TaxonomiService.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Hämtar en lista med alla världsdelar för angivet språk
     *
     * @param GetAllContinentsCustom $parameters
     * @return GetAllContinentsResponse
     */
    public function GetAllContinents($parameters)
    {
      return $this->__soapCall('GetAllContinents', array($parameters));
    }

    /**
     * Hämtar en lista med alla länder för angivet språk
     *
     * @param GetAllCountriesCustom $parameters
     * @return GetAllCountriesResponse
     */
    public function GetAllCountries($parameters)
    {
      return $this->__soapCall('GetAllCountries', array($parameters));
    }

    /**
     * Hämtar en lista med alla EU-regioner för angivet språk
     *
     * @param GetAllEURegionsCustom $parameters
     * @return GetAllEURegionsResponse
     */
    public function GetAllEURegions($parameters)
    {
      return $this->__soapCall('GetAllEURegions', array($parameters));
    }

    /**
     * Hämtar en lista med alla EU-regioner för angivet land och språk
     *
     * @param GetEURegionsByCountryIDCustom $parameters
     * @return GetEURegionsByCountryIDResponse
     */
    public function GetEURegionsByCountryID($parameters)
    {
      return $this->__soapCall('GetEURegionsByCountryID', array($parameters));
    }

    /**
     * Hämtar en lista med alla kommuner för angivet språk
     *
     * @param GetAllMunicipalitiesCustom $parameters
     * @return GetAllMunicipalitiesResponse
     */
    public function GetAllMunicipalities($parameters)
    {
      return $this->__soapCall('GetAllMunicipalities', array($parameters));
    }

    /**
     * Hämtar en lista med alla postorter för angivet språk
     *
     * @param GetAllPostLocalitiesCustom $parameters
     * @return GetAllPostLocalitiesResponse
     */
    public function GetAllPostLocalities($parameters)
    {
      return $this->__soapCall('GetAllPostLocalities', array($parameters));
    }

    /**
     * Hämtar en lista med alla postnummer för angivet språk
     *
     * @param GetAllPostCodesCustom $parameters
     * @return GetAllPostCodesResponse
     */
    public function GetAllPostCodes($parameters)
    {
      return $this->__soapCall('GetAllPostCodes', array($parameters));
    }

    /**
     * Hämtar en lista med alla posnummer för angivet språk och postort
     *
     * @param GetPostCodesByPostLocalityCustom $parameters
     * @return GetPostCodesByPostLocalityResponse
     */
    public function GetPostCodesByPostLocality($parameters)
    {
      return $this->__soapCall('GetPostCodesByPostLocality', array($parameters));
    }

    /**
     * Hämtar en lista med alla postnummer för angivet språk och kommunkod
     *
     * @param GetPostCodesByNationalNUTSLAU2CodeCustom $parameters
     * @return GetPostCodesByNationalNUTSLAU2CodeResponse
     */
    public function GetPostCodesByNationalNUTSLAU2Code($parameters)
    {
      return $this->__soapCall('GetPostCodesByNationalNUTSLAU2Code', array($parameters));
    }

    /**
     * Hämtar en lista med alla postnummer för angivet språk och postnummer
     *
     * @param GetPostCodesByPostCodeCustom $parameters
     * @return GetPostCodesByPostCodeResponse
     */
    public function GetPostCodesByPostCode($parameters)
    {
      return $this->__soapCall('GetPostCodesByPostCode', array($parameters));
    }

    /**
     * Hämtar en lista med LocaleCodes som matchar angiven ISCO-kod.
     *
     * @param GetLocaleCodeByISCOCustom $parameters
     * @return GetLocaleCodeByISCOResponse
     */
    public function GetLocaleCodeByISCO($parameters)
    {
      return $this->__soapCall('GetLocaleCodeByISCO', array($parameters));
    }

    /**
     * Hämtar en lista med ISCO-koder som matchar angiven SSYK-kod
     *
     * @param GetISCOByLocaleCodeCustom $parameters
     * @return GetISCOByLocaleCodeResponse
     */
    public function GetISCOByLocaleCode($parameters)
    {
      return $this->__soapCall('GetISCOByLocaleCode', array($parameters));
    }

    /**
     * Hämtar en lista med alla SSYK, nivå 3 för angivet språk
     *
     * @param GetAllLocaleLevel3Custom $parameters
     * @return GetAllLocaleLevel3Response
     */
    public function GetAllLocaleLevel3($parameters)
    {
      return $this->__soapCall('GetAllLocaleLevel3', array($parameters));
    }

    /**
     * Hämtar en lista med alla SSYK för angivet språk
     *
     * @param GetAllLocaleGroupsCustom $parameters
     * @return GetAllLocaleGroupsResponse
     */
    public function GetAllLocaleGroups($parameters)
    {
      return $this->__soapCall('GetAllLocaleGroups', array($parameters));
    }

    /**
     * Hämtar en lista med SSYK för angivna koder och språk
     *
     * @param GetLocaleGroupsByLocaleCodesCustom $parameters
     * @return GetLocaleGroupsByLocaleCodesResponse
     */
    public function GetLocaleGroupsByLocaleCodes($parameters)
    {
      return $this->__soapCall('GetLocaleGroupsByLocaleCodes', array($parameters));
    }

    /**
     * Hämtar en lista med SSYK för angivet yrkesområde och språk
     *
     * @param GetLocaleGroupsByLocaleFieldIdCustom $parameters
     * @return GetLocaleGroupsByLocaleFieldIdResponse
     */
    public function GetLocaleGroupsByLocaleFieldId($parameters)
    {
      return $this->__soapCall('GetLocaleGroupsByLocaleFieldId', array($parameters));
    }

    /**
     * Hämtar en SSYK för angiven yrkesbenämning och språk
     *
     * @param GetLocaleGroupByOccupationNameIdCustom $parameters
     * @return GetLocaleGroupByOccupationNameIdResponse
     */
    public function GetLocaleGroupByOccupationNameId($parameters)
    {
      return $this->__soapCall('GetLocaleGroupByOccupationNameId', array($parameters));
    }

    /**
     * Hämtar en lista med SSYK för angiven beteckning och språk,  exactMatch: true=exakt,  false=mönstermatchning
     *
     * @param GetLocaleGroupsByTextCustom $parameters
     * @return GetLocaleGroupsByTextResponse
     */
    public function GetLocaleGroupsByText($parameters)
    {
      return $this->__soapCall('GetLocaleGroupsByText', array($parameters));
    }

    /**
     * Hämtar en lista med alla yrkesbenämningar för angivet språk
     *
     * @param GetAllOccupationNamesCustom $parameters
     * @return GetAllOccupationNamesResponse
     */
    public function GetAllOccupationNames($parameters)
    {
      return $this->__soapCall('GetAllOccupationNames', array($parameters));
    }

    /**
     * Hämtar en lista med alla synonymer för angivet språk
     *
     * @param GetAllOccupationNameSynonymsCustom $parameters
     * @return GetAllOccupationNameSynonymsResponse
     */
    public function GetAllOccupationNameSynonyms($parameters)
    {
      return $this->__soapCall('GetAllOccupationNameSynonyms', array($parameters));
    }

    /**
     * Hämtar en lista med alla yrkesbenämningar för angivet språk, inklusive historiska rader
     *
     * @param GetAllOccupationNamesVersionCustom $parameters
     * @return GetAllOccupationNamesVersionResponse
     */
    public function GetAllOccupationNamesVersion($parameters)
    {
      return $this->__soapCall('GetAllOccupationNamesVersion', array($parameters));
    }

    /**
     * Hämtar en lista av yrkesbenämningar för angivet SSYK (kod) och språk
     *
     * @param GetOccupationNamesByLocaleCodeCustom $parameters
     * @return GetOccupationNamesByLocaleCodeResponse
     */
    public function GetOccupationNamesByLocaleCode($parameters)
    {
      return $this->__soapCall('GetOccupationNamesByLocaleCode', array($parameters));
    }

    /**
     * Hämtar en lista med yrkesbenämningar för angivna ID och språk
     *
     * @param GetOccupationNamesByOccupationNameIdsCustom $parameters
     * @return GetOccupationNamesByOccupationNameIdsResponse
     */
    public function GetOccupationNamesByOccupationNameIds($parameters)
    {
      return $this->__soapCall('GetOccupationNamesByOccupationNameIds', array($parameters));
    }

    /**
     * Hämtar en lista med yrkesbenämningar för angivna ID och språk, inklusive historiska benämningar
     *
     * @param GetOccupationNamesByOccupationNameIdsVersionCustom $parameters
     * @return GetOccupationNamesByOccupationNameIdsVersionResponse
     */
    public function GetOccupationNamesByOccupationNameIdsVersion($parameters)
    {
      return $this->__soapCall('GetOccupationNamesByOccupationNameIdsVersion', array($parameters));
    }

    /**
     * Hämtar en lista med yrkesbenämningar som matchar angiven beteckning och språk,  exactMatch: true=exakt,  false=mönstermatchning
     *
     * @param GetOccupationNamesByTextCustom $parameters
     * @return GetOccupationNamesByTextResponse
     */
    public function GetOccupationNamesByText($parameters)
    {
      return $this->__soapCall('GetOccupationNamesByText', array($parameters));
    }

    /**
     * Hämtar en lista av yrkesbenämningar för kulturyrken
     *
     * @param GetOccupationNamesArtCustom $parameters
     * @return GetOccupationNamesArtResponse
     */
    public function GetOccupationNamesArt($parameters)
    {
      return $this->__soapCall('GetOccupationNamesArt', array($parameters));
    }

    /**
     * Hämtar en lista av yrkesbenämningar för byggyrken
     *
     * @param GetOccupationNamesConstructionCustom $parameters
     * @return GetOccupationNamesConstructionResponse
     */
    public function GetOccupationNamesConstruction($parameters)
    {
      return $this->__soapCall('GetOccupationNamesConstruction', array($parameters));
    }

    /**
     * Hämtar en lista av yrkesbenämningar för sjöfartsyrken
     *
     * @param GetOccupationNamesNavigationCustom $parameters
     * @return GetOccupationNamesNavigationResponse
     */
    public function GetOccupationNamesNavigation($parameters)
    {
      return $this->__soapCall('GetOccupationNamesNavigation', array($parameters));
    }

    /**
     * Hämtar en lista med alla yrkesområden för angivet språk
     *
     * @param GetAllLocaleFieldsCustom $parameters
     * @return GetAllLocaleFieldsResponse
     */
    public function GetAllLocaleFields($parameters)
    {
      return $this->__soapCall('GetAllLocaleFields', array($parameters));
    }

    /**
     * Hämtar en lista med yrkesområden för angivet SSYK (kod) och språk
     *
     * @param GetLocaleFieldsByLocaleCodeCustom $parameters
     * @return GetLocaleFieldsByLocaleCodeResponse
     */
    public function GetLocaleFieldsByLocaleCode($parameters)
    {
      return $this->__soapCall('GetLocaleFieldsByLocaleCode', array($parameters));
    }

    /**
     * Hämtar en lista med yrkesområden för angiven lista av ID och språk
     *
     * @param GetLocaleFieldsByLocaleFieldIdsCustom $parameters
     * @return GetLocaleFieldsByLocaleFieldIdsResponse
     */
    public function GetLocaleFieldsByLocaleFieldIds($parameters)
    {
      return $this->__soapCall('GetLocaleFieldsByLocaleFieldIds', array($parameters));
    }

    /**
     * Hämtar en lista med yrkesområden som matchar angiven beteckning och språk,  exactMatch: true=exakt,  false=mönstermatchning
     *
     * @param GetLocaleFieldsByTextCustom $parameters
     * @return GetLocaleFieldsByTextResponse
     */
    public function GetLocaleFieldsByText($parameters)
    {
      return $this->__soapCall('GetLocaleFieldsByText', array($parameters));
    }

    /**
     * Hämtar en lista med alla kompetenser för angivet språk
     *
     * @param GetAllSkillsCustom $parameters
     * @return GetAllSkillsResponse
     */
    public function GetAllSkills($parameters)
    {
      return $this->__soapCall('GetAllSkills', array($parameters));
    }

    /**
     * Hämtar en lista med alla versioner för angivet språk
     *
     * @param GetAllSkillsVersionCustom $parameters
     * @return GetAllSkillsVersionResponse
     */
    public function GetAllSkillsVersion($parameters)
    {
      return $this->__soapCall('GetAllSkillsVersion', array($parameters));
    }

    /**
     * Hämtar en lista med kompetenser för angivna ids och angivet språk
     *
     * @param GetSkillsBySkillIdsVersionCustom $parameters
     * @return GetSkillsBySkillIdsVersionResponse
     */
    public function GetSkillsBySkillIdsVersion($parameters)
    {
      return $this->__soapCall('GetSkillsBySkillIdsVersion', array($parameters));
    }

    /**
     * Hämtar en lista med kompetenser för angivet SSYK (kod) och språk
     *
     * @param GetSkillsByLocaleCodeCustom $parameters
     * @return GetSkillsByLocaleCodeResponse
     */
    public function GetSkillsByLocaleCode($parameters)
    {
      return $this->__soapCall('GetSkillsByLocaleCode', array($parameters));
    }

    /**
     * Hämtar en lista med kompetenser för angiven rubrik och språk
     *
     * @param GetSkillsBySkillHeadlineIdCustom $parameters
     * @return GetSkillsBySkillHeadlineIdResponse
     */
    public function GetSkillsBySkillHeadlineId($parameters)
    {
      return $this->__soapCall('GetSkillsBySkillHeadlineId', array($parameters));
    }

    /**
     * Hämtar en lista med kompetenser för angiven lista av ID och språk
     *
     * @param GetSkillsBySkillIdsCustom $parameters
     * @return GetSkillsBySkillIdsResponse
     */
    public function GetSkillsBySkillIds($parameters)
    {
      return $this->__soapCall('GetSkillsBySkillIds', array($parameters));
    }

    /**
     * Hämtar en lista med kompetenser för angiven huvudrubrik och språk
     *
     * @param GetSkillsBySkillMainHeadlineIdCustom $parameters
     * @return GetSkillsBySkillMainHeadlineIdResponse
     */
    public function GetSkillsBySkillMainHeadlineId($parameters)
    {
      return $this->__soapCall('GetSkillsBySkillMainHeadlineId', array($parameters));
    }

    /**
     * Hämtar alla kompetenser som matchar angivna beteckning och språk,  exactMatch: true=exakt,  false=mönstermatchning
     *
     * @param GetSkillsByTextCustom $parameters
     * @return GetSkillsByTextResponse
     */
    public function GetSkillsByText($parameters)
    {
      return $this->__soapCall('GetSkillsByText', array($parameters));
    }

    /**
     * Hämtar en lista med alla yrkeskompetenser, SSYK-kod och kompetensId
     *
     * @param GetAllLocaleGroupSkillsCustom $parameters
     * @return GetAllLocaleGroupSkillsResponse
     */
    public function GetAllLocaleGroupSkills($parameters)
    {
      return $this->__soapCall('GetAllLocaleGroupSkills', array($parameters));
    }

    /**
     * Hämtar en lista med alla yrkeskompetenser för angivet SSYK
     *
     * @param GetLocaleGroupSkillsByLocaleCodeCustom $parameters
     * @return GetLocaleGroupSkillsByLocaleCodeResponse
     */
    public function GetLocaleGroupSkillsByLocaleCode($parameters)
    {
      return $this->__soapCall('GetLocaleGroupSkillsByLocaleCode', array($parameters));
    }

    /**
     * Hämtar en lista med alla kompetensrubriker för angivet språk
     *
     * @param GetAllSkillHeadlinesCustom $parameters
     * @return GetAllSkillHeadlinesResponse
     */
    public function GetAllSkillHeadlines($parameters)
    {
      return $this->__soapCall('GetAllSkillHeadlines', array($parameters));
    }

    /**
     * Hämtar en lista med kompetensrubriker för angiven lista med rubriker och språk
     *
     * @param GetSkillHeadlinesBySkillHeadlineIdsCustom $parameters
     * @return GetSkillHeadlinesBySkillHeadlineIdsResponse
     */
    public function GetSkillHeadlinesBySkillHeadlineIds($parameters)
    {
      return $this->__soapCall('GetSkillHeadlinesBySkillHeadlineIds', array($parameters));
    }

    /**
     * Hämtar en lista med kompetensrubriker för angiven huvudrubrik och språk
     *
     * @param GetSkillHeadlinesBySkillMainHeadlineIdCustom $parameters
     * @return GetSkillHeadlinesBySkillMainHeadlineIdResponse
     */
    public function GetSkillHeadlinesBySkillMainHeadlineId($parameters)
    {
      return $this->__soapCall('GetSkillHeadlinesBySkillMainHeadlineId', array($parameters));
    }

    /**
     * Hämtar en lista med SkillHeadlines som matchar angiven text (term) och languageId, exactMatch: true=exakt,  false=mönstermatchning
     *
     * @param GetSkillHeadlinesByTextCustom $parameters
     * @return GetSkillHeadlinesByTextResponse
     */
    public function GetSkillHeadlinesByText($parameters)
    {
      return $this->__soapCall('GetSkillHeadlinesByText', array($parameters));
    }

    /**
     * Hämtar en lista med alla kompetenshuvudrubriker för angivet språk
     *
     * @param GetAllSkillMainHeadlinesCustom $parameters
     * @return GetAllSkillMainHeadlinesResponse
     */
    public function GetAllSkillMainHeadlines($parameters)
    {
      return $this->__soapCall('GetAllSkillMainHeadlines', array($parameters));
    }

    /**
     * Hämtar en lista med kompetenshuvudrubriker för angiven lista av ID och språk
     *
     * @param GetSkillMainHeadlinesBySkillMainHeadlineIdsCustom $parameters
     * @return GetSkillMainHeadlinesBySkillMainHeadlineIdsResponse
     */
    public function GetSkillMainHeadlinesBySkillMainHeadlineIds($parameters)
    {
      return $this->__soapCall('GetSkillMainHeadlinesBySkillMainHeadlineIds', array($parameters));
    }

    /**
     * Hämtar en lista med kompetenshuvudrubriker som matchar angiven beteckning och språk, exactMatch: true=exakt,  false=mönstermatchning
     *
     * @param GetSkillMainHeadlinesByTextCustom $parameters
     * @return GetSkillMainHeadlinesByTextResponse
     */
    public function GetSkillMainHeadlinesByText($parameters)
    {
      return $this->__soapCall('GetSkillMainHeadlinesByText', array($parameters));
    }

    /**
     * Hämtar en lista med alla körkort för angivet språk
     *
     * @param GetAllDrivingLicencesCustom $parameters
     * @return GetAllDrivingLicencesResponse
     */
    public function GetAllDrivingLicences($parameters)
    {
      return $this->__soapCall('GetAllDrivingLicences', array($parameters));
    }

    /**
     * Hämtar en lista med alla språk för angivet språk
     *
     * @param GetAllLanguagesCustom $parameters
     * @return GetAllLanguagesResponse
     */
    public function GetAllLanguages($parameters)
    {
      return $this->__soapCall('GetAllLanguages', array($parameters));
    }

    /**
     * Hämtar en lista med alla språk för angivet språk, inklusive ISO-kod
     *
     * @param GetAllLanguagesWithISOCustom $parameters
     * @return GetAllLanguagesWithISOResponse
     */
    public function GetAllLanguagesWithISO($parameters)
    {
      return $this->__soapCall('GetAllLanguagesWithISO', array($parameters));
    }

    /**
     * Hämtar språkID, motsvarande angiven ISO2-kod
     *
     * @param GetLanguageIDByISO2CodeCustom $parameters
     * @return GetLanguageIDByISO2CodeResponse
     */
    public function GetLanguageIDByISO2Code($parameters)
    {
      return $this->__soapCall('GetLanguageIDByISO2Code', array($parameters));
    }

    /**
     * Hämtar en lista med alla språknivåer för angivet språk
     *
     * @param GetAllLanguageLevelsCustom $parameters
     * @return GetAllLanguageLevelsResponse
     */
    public function GetAllLanguageLevels($parameters)
    {
      return $this->__soapCall('GetAllLanguageLevels', array($parameters));
    }

    /**
     * DEPRECATED - Gammalt värdeförråd, använd SUN-metoderna istället - Hämtar en lista med alla utbildningsnivåer (ej SUN) för angivet språk
     *
     * @param GetAllEducationLevelsCustom $parameters
     * @return GetAllEducationLevelsResponse
     */
    public function GetAllEducationLevels($parameters)
    {
      return $this->__soapCall('GetAllEducationLevels', array($parameters));
    }

    /**
     * DEPRECATED - Gammalt värdeförråd, använd SUN-metoderna istället - Hämtar en lista med alla utbildningsområden (ej SUN) för angivet språk
     *
     * @param GetAllEducationFieldsCustom $parameters
     * @return GetAllEducationFieldsResponse
     */
    public function GetAllEducationFields($parameters)
    {
      return $this->__soapCall('GetAllEducationFields', array($parameters));
    }

    /**
     * Hämtar en lista med tidslängder för hur lång erfarenhet man har i exempelvis ett yrke, för angivet språk
     *
     * @param GetAllExperiencesYearCustom $parameters
     * @return GetAllExperiencesYearResponse
     */
    public function GetAllExperiencesYear($parameters)
    {
      return $this->__soapCall('GetAllExperiencesYear', array($parameters));
    }

    /**
     * Hämtar en lista med förslag på tidsangivelser när du senast arbetade med ett yrke (erfarenhet senast) för angivet språk
     *
     * @param GetAllExperiencesLastCustom $parameters
     * @return GetAllExperiencesLastResponse
     */
    public function GetAllExperiencesLast($parameters)
    {
      return $this->__soapCall('GetAllExperiencesLast', array($parameters));
    }

    /**
     * Hämtar en lista med alla SUN-poster (utbildningsnivå 1) för angivet språk
     *
     * @param GetAllSUNLevel1Custom $parameters
     * @return GetAllSUNLevel1Response
     */
    public function GetAllSUNLevel1($parameters)
    {
      return $this->__soapCall('GetAllSUNLevel1', array($parameters));
    }

    /**
     * Hämtar en lista med alla SUN-poster (utbildningsnivå 2) för angivet språk
     *
     * @param GetAllSUNLevel2Custom $parameters
     * @return GetAllSUNLevel2Response
     */
    public function GetAllSUNLevel2($parameters)
    {
      return $this->__soapCall('GetAllSUNLevel2', array($parameters));
    }

    /**
     * Hämtar en lista med alla SUN-poster (utbildningsnivå 3) för angivet språk
     *
     * @param GetAllSUNLevel3Custom $parameters
     * @return GetAllSUNLevel3Response
     */
    public function GetAllSUNLevel3($parameters)
    {
      return $this->__soapCall('GetAllSUNLevel3', array($parameters));
    }

    /**
     * Hämtar en lista med alla SUN-poster (utbildningsinriktning 1) för angivet språk
     *
     * @param GetAllSUNField1Custom $parameters
     * @return GetAllSUNField1Response
     */
    public function GetAllSUNField1($parameters)
    {
      return $this->__soapCall('GetAllSUNField1', array($parameters));
    }

    /**
     * Hämtar en lista med alla SUN-poster (utbildningsinriktning 2) för angivet språk
     *
     * @param GetAllSUNField2Custom $parameters
     * @return GetAllSUNField2Response
     */
    public function GetAllSUNField2($parameters)
    {
      return $this->__soapCall('GetAllSUNField2', array($parameters));
    }

    /**
     * Hämtar en lista med alla SUN-poster (utbildningsinriktning 3) för angivet språk
     *
     * @param GetAllSUNField3Custom $parameters
     * @return GetAllSUNField3Response
     */
    public function GetAllSUNField3($parameters)
    {
      return $this->__soapCall('GetAllSUNField3', array($parameters));
    }

    /**
     * Hämtar en lista med alla SUN-poster (utbildningsinriktning 3) för angivet språk och nivå 1 enligt AF:s guide
     *
     * @param GetSUNField3ByGuideCustom $parameters
     * @return GetSUNField3ByGuideResponse
     */
    public function GetSUNField3ByGuide($parameters)
    {
      return $this->__soapCall('GetSUNField3ByGuide', array($parameters));
    }

    /**
     * Hämtar ett träd (utbildningsnivå 1, utbildningsinriktning 2 och utbildningsinriktning 3) uppbyggt enligt den guidetabell som AF skapat för kopplingar mellan nivå 1 och inriktning 3
     *
     * @param GetSUNGuideTreeCustom $parameters
     * @return GetSUNGuideTreeResponse
     */
    public function GetSUNGuideTree($parameters)
    {
      return $this->__soapCall('GetSUNGuideTree', array($parameters));
    }

    /**
     * Hämtar en lista med alla AID-poster
     *
     * @param GetAllAIDOccupationNamesCustom $parameters
     * @return GetAllAIDOccupationNamesResponse
     */
    public function GetAllAIDOccupationNames($parameters)
    {
      return $this->__soapCall('GetAllAIDOccupationNames', array($parameters));
    }

    /**
     * Hämtar en lista med alla AID-poster för angiven etikett
     *
     * @param GetAIDOccupationNameByLabelCustom $parameters
     * @return GetAIDOccupationNameByLabelResponse
     */
    public function GetAIDOccupationNameByLabel($parameters)
    {
      return $this->__soapCall('GetAIDOccupationNameByLabel', array($parameters));
    }

    /**
     * DEPRECATED - Använd GetAllAIDOccupationNames istället - Hämtar en lista med alla BEF-poster
     *
     * @param GetAllBEFOccupationNamesCustom $parameters
     * @return GetAllBEFOccupationNamesResponse
     */
    public function GetAllBEFOccupationNames($parameters)
    {
      return $this->__soapCall('GetAllBEFOccupationNames', array($parameters));
    }

    /**
     * DEPRECATED - Använd GetAIDOccupationNameByLabel istället - Hämtar en lista med alla BEF-poster för angiven etikett
     *
     * @param GetBEFOccupationNameByLabelCustom $parameters
     * @return GetBEFOccupationNameByLabelResponse
     */
    public function GetBEFOccupationNameByLabel($parameters)
    {
      return $this->__soapCall('GetBEFOccupationNameByLabel', array($parameters));
    }

    /**
     * DEPRECATED - Använd GetAllAIDOccupationNames istället - Hämtar en lista med alla BSK-poster
     *
     * @param GetAllBSKOccupationNamesCustom $parameters
     * @return GetAllBSKOccupationNamesResponse
     */
    public function GetAllBSKOccupationNames($parameters)
    {
      return $this->__soapCall('GetAllBSKOccupationNames', array($parameters));
    }

    /**
     * DEPRECATED - Använd GetAIDOccupationNameByLabel istället - Hämtar en lista med alla BSK-poster för angiven etikett
     *
     * @param GetBSKOccupationNameByLabelCustom $parameters
     * @return GetBSKOccupationNameByLabelResponse
     */
    public function GetBSKOccupationNameByLabel($parameters)
    {
      return $this->__soapCall('GetBSKOccupationNameByLabel', array($parameters));
    }

    /**
     * Hämtar version information. Vilka versioner som är tillgängliga
     *
     * @param GetVersionInformationsCustom $parameters
     * @return GetVersionInformationsResponse
     */
    public function GetVersionInformations($parameters)
    {
      return $this->__soapCall('GetVersionInformations', array($parameters));
    }

    /**
     * Hämtar en lista med alla anställningsformer för angivet språk
     *
     * @param GetAllEmploymentTypesCustom $parameters
     * @return GetAllEmploymentTypesResponse
     */
    public function GetAllEmploymentTypes($parameters)
    {
      return $this->__soapCall('GetAllEmploymentTypes', array($parameters));
    }

    /**
     * Hämtar en lista med alla arbetstidsomfattningar för angivet språk
     *
     * @param GetAllWorkTimeExtentsCustom $parameters
     * @return GetAllWorkTimeExtentsResponse
     */
    public function GetAllWorkTimeExtents($parameters)
    {
      return $this->__soapCall('GetAllWorkTimeExtents', array($parameters));
    }

    /**
     * Hämtar en lista med alla löneformer för angivet språk
     *
     * @param GetAllWageTypesCustom $parameters
     * @return GetAllWageTypesResponse
     */
    public function GetAllWageTypes($parameters)
    {
      return $this->__soapCall('GetAllWageTypes', array($parameters));
    }

    /**
     * Hämtar en lista med alla anställningsvaraktigheter för angivet språk
     *
     * @param GetAllEmploymentDurationsCustom $parameters
     * @return GetAllEmploymentDurationsResponse
     */
    public function GetAllEmploymentDurations($parameters)
    {
      return $this->__soapCall('GetAllEmploymentDurations', array($parameters));
    }

    /**
     * Hämtar en lista med alla arbetssituationer, externt bruk, för angivet språk
     *
     * @param GetAllJobSituationsCustom $parameters
     * @return GetAllJobSituationsResponse
     */
    public function GetAllJobSituations($parameters)
    {
      return $this->__soapCall('GetAllJobSituations', array($parameters));
    }

    /**
     * Hämtar en lista med alla arbetssituationer för angivet språk som handläggare kan behöva, internt bruk
     *
     * @param GetAllInternalJobSituationsCustom $parameters
     * @return GetAllInternalJobSituationsResponse
     */
    public function GetAllInternalJobSituations($parameters)
    {
      return $this->__soapCall('GetAllInternalJobSituations', array($parameters));
    }

    /**
     * DEPRECATED - Använd CPR som källa, denna lista uppdateras inte - Hämtar en lista med alla arbetsförmedlingar för angivet språk
     *
     * @param GetAllAFOfficesCustom $parameters
     * @return GetAllAFOfficesResponse
     */
    public function GetAllAFOffices($parameters)
    {
      return $this->__soapCall('GetAllAFOffices', array($parameters));
    }

    /**
     * Hämtar en lista med alla A-kassor för angivet språk
     *
     * @param GetAllUnemploymentBenefitSocietiesCustom $parameters
     * @return GetAllUnemploymentBenefitSocietiesResponse
     */
    public function GetAllUnemploymentBenefitSocieties($parameters)
    {
      return $this->__soapCall('GetAllUnemploymentBenefitSocieties', array($parameters));
    }

    /**
     * Hämtar en lista med alla kommunhemsidor
     *
     * @param GetAllMunicipalityHomePagesCustom $parameters
     * @return GetAllMunicipalityHomePagesResponse
     */
    public function GetAllMunicipalityHomePages($parameters)
    {
      return $this->__soapCall('GetAllMunicipalityHomePages', array($parameters));
    }

    /**
     * Hämtar en lista med alla SNI-poster (nivå 1) för angivet språk
     *
     * @param GetAllSNILevel1Custom $parameters
     * @return GetAllSNILevel1Response
     */
    public function GetAllSNILevel1($parameters)
    {
      return $this->__soapCall('GetAllSNILevel1', array($parameters));
    }

    /**
     * Hämtar en lista med alla SNI-poster (nivå 2) för angivet språk
     *
     * @param GetAllSNILevel2Custom $parameters
     * @return GetAllSNILevel2Response
     */
    public function GetAllSNILevel2($parameters)
    {
      return $this->__soapCall('GetAllSNILevel2', array($parameters));
    }

}
