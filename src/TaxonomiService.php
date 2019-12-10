<?php

namespace ArbetsformedlingenWsTaxonomi;

class TaxonomiService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'GetAllContinents' => 'ArbetsformedlingenWsTaxonomi\\GetAllContinents',
      'GetAllContinentsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllContinentsResponse',
      'ArrayOfContinent' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfContinent',
      'Continent' => 'ArbetsformedlingenWsTaxonomi\\Continent',
      'GetAllCountries' => 'ArbetsformedlingenWsTaxonomi\\GetAllCountries',
      'GetAllCountriesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllCountriesResponse',
      'ArrayOfCountry' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfCountry',
      'Country' => 'ArbetsformedlingenWsTaxonomi\\Country',
      'GetAllEURegions' => 'ArbetsformedlingenWsTaxonomi\\GetAllEURegions',
      'GetAllEURegionsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllEURegionsResponse',
      'ArrayOfEURegion' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfEURegion',
      'EURegion' => 'ArbetsformedlingenWsTaxonomi\\EURegion',
      'GetEURegionsByCountryID' => 'ArbetsformedlingenWsTaxonomi\\GetEURegionsByCountryID',
      'GetEURegionsByCountryIDResponse' => 'ArbetsformedlingenWsTaxonomi\\GetEURegionsByCountryIDResponse',
      'GetAllMunicipalities' => 'ArbetsformedlingenWsTaxonomi\\GetAllMunicipalities',
      'GetAllMunicipalitiesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllMunicipalitiesResponse',
      'ArrayOfMunicipality' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfMunicipality',
      'Municipality' => 'ArbetsformedlingenWsTaxonomi\\Municipality',
      'GetAllPostLocalities' => 'ArbetsformedlingenWsTaxonomi\\GetAllPostLocalities',
      'GetAllPostLocalitiesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllPostLocalitiesResponse',
      'ArrayOfPostLocality' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfPostLocality',
      'PostLocality' => 'ArbetsformedlingenWsTaxonomi\\PostLocality',
      'GetAllPostCodes' => 'ArbetsformedlingenWsTaxonomi\\GetAllPostCodes',
      'GetAllPostCodesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllPostCodesResponse',
      'ArrayOfPostCode' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfPostCode',
      'PostCode' => 'ArbetsformedlingenWsTaxonomi\\PostCode',
      'GetPostCodesByPostLocality' => 'ArbetsformedlingenWsTaxonomi\\GetPostCodesByPostLocality',
      'GetPostCodesByPostLocalityResponse' => 'ArbetsformedlingenWsTaxonomi\\GetPostCodesByPostLocalityResponse',
      'GetPostCodesByNationalNUTSLAU2Code' => 'ArbetsformedlingenWsTaxonomi\\GetPostCodesByNationalNUTSLAU2Code',
      'GetPostCodesByNationalNUTSLAU2CodeResponse' => 'ArbetsformedlingenWsTaxonomi\\GetPostCodesByNationalNUTSLAU2CodeResponse',
      'GetPostCodesByPostCode' => 'ArbetsformedlingenWsTaxonomi\\GetPostCodesByPostCode',
      'GetPostCodesByPostCodeResponse' => 'ArbetsformedlingenWsTaxonomi\\GetPostCodesByPostCodeResponse',
      'GetLocaleCodeByISCO' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleCodeByISCO',
      'GetLocaleCodeByISCOResponse' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleCodeByISCOResponse',
      'ArrayOfString' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfString',
      'GetISCOByLocaleCode' => 'ArbetsformedlingenWsTaxonomi\\GetISCOByLocaleCode',
      'GetISCOByLocaleCodeResponse' => 'ArbetsformedlingenWsTaxonomi\\GetISCOByLocaleCodeResponse',
      'GetAllLocaleLevel3' => 'ArbetsformedlingenWsTaxonomi\\GetAllLocaleLevel3',
      'GetAllLocaleLevel3Response' => 'ArbetsformedlingenWsTaxonomi\\GetAllLocaleLevel3Response',
      'ArrayOfLocaleLevel3' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfLocaleLevel3',
      'LocaleLevel3' => 'ArbetsformedlingenWsTaxonomi\\LocaleLevel3',
      'GetAllLocaleGroups' => 'ArbetsformedlingenWsTaxonomi\\GetAllLocaleGroups',
      'GetAllLocaleGroupsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllLocaleGroupsResponse',
      'ArrayOfLocaleGroup' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfLocaleGroup',
      'LocaleGroup' => 'ArbetsformedlingenWsTaxonomi\\LocaleGroup',
      'GetLocaleGroupsByLocaleCodes' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleGroupsByLocaleCodes',
      'GetLocaleGroupsByLocaleCodesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleGroupsByLocaleCodesResponse',
      'GetLocaleGroupsByLocaleFieldId' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleGroupsByLocaleFieldId',
      'GetLocaleGroupsByLocaleFieldIdResponse' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleGroupsByLocaleFieldIdResponse',
      'GetLocaleGroupByOccupationNameId' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleGroupByOccupationNameId',
      'GetLocaleGroupByOccupationNameIdResponse' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleGroupByOccupationNameIdResponse',
      'GetLocaleGroupsByText' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleGroupsByText',
      'GetLocaleGroupsByTextResponse' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleGroupsByTextResponse',
      'GetAllOccupationNames' => 'ArbetsformedlingenWsTaxonomi\\GetAllOccupationNames',
      'GetAllOccupationNamesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllOccupationNamesResponse',
      'ArrayOfOccupationName' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfOccupationName',
      'OccupationName' => 'ArbetsformedlingenWsTaxonomi\\OccupationName',
      'GetAllOccupationNameSynonyms' => 'ArbetsformedlingenWsTaxonomi\\GetAllOccupationNameSynonyms',
      'GetAllOccupationNameSynonymsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllOccupationNameSynonymsResponse',
      'ArrayOfOccupationNameSynonym' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfOccupationNameSynonym',
      'OccupationNameSynonym' => 'ArbetsformedlingenWsTaxonomi\\OccupationNameSynonym',
      'GetAllOccupationNamesVersion' => 'ArbetsformedlingenWsTaxonomi\\GetAllOccupationNamesVersion',
      'GetAllOccupationNamesVersionResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllOccupationNamesVersionResponse',
      'ArrayOfOccupationNameExt' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfOccupationNameExt',
      'OccupationNameExt' => 'ArbetsformedlingenWsTaxonomi\\OccupationNameExt',
      'GetOccupationNamesByLocaleCode' => 'ArbetsformedlingenWsTaxonomi\\GetOccupationNamesByLocaleCode',
      'GetOccupationNamesByLocaleCodeResponse' => 'ArbetsformedlingenWsTaxonomi\\GetOccupationNamesByLocaleCodeResponse',
      'GetOccupationNamesByOccupationNameIds' => 'ArbetsformedlingenWsTaxonomi\\GetOccupationNamesByOccupationNameIds',
      'ArrayOfInt' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfInt',
      'GetOccupationNamesByOccupationNameIdsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetOccupationNamesByOccupationNameIdsResponse',
      'GetOccupationNamesByOccupationNameIdsVersion' => 'ArbetsformedlingenWsTaxonomi\\GetOccupationNamesByOccupationNameIdsVersion',
      'GetOccupationNamesByOccupationNameIdsVersionResponse' => 'ArbetsformedlingenWsTaxonomi\\GetOccupationNamesByOccupationNameIdsVersionResponse',
      'GetOccupationNamesByText' => 'ArbetsformedlingenWsTaxonomi\\GetOccupationNamesByText',
      'GetOccupationNamesByTextResponse' => 'ArbetsformedlingenWsTaxonomi\\GetOccupationNamesByTextResponse',
      'GetOccupationNamesArt' => 'ArbetsformedlingenWsTaxonomi\\GetOccupationNamesArt',
      'GetOccupationNamesArtResponse' => 'ArbetsformedlingenWsTaxonomi\\GetOccupationNamesArtResponse',
      'GetOccupationNamesConstruction' => 'ArbetsformedlingenWsTaxonomi\\GetOccupationNamesConstruction',
      'GetOccupationNamesConstructionResponse' => 'ArbetsformedlingenWsTaxonomi\\GetOccupationNamesConstructionResponse',
      'GetOccupationNamesNavigation' => 'ArbetsformedlingenWsTaxonomi\\GetOccupationNamesNavigation',
      'GetOccupationNamesNavigationResponse' => 'ArbetsformedlingenWsTaxonomi\\GetOccupationNamesNavigationResponse',
      'GetAllLocaleFields' => 'ArbetsformedlingenWsTaxonomi\\GetAllLocaleFields',
      'GetAllLocaleFieldsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllLocaleFieldsResponse',
      'ArrayOfLocaleField' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfLocaleField',
      'LocaleField' => 'ArbetsformedlingenWsTaxonomi\\LocaleField',
      'GetLocaleFieldsByLocaleCode' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleFieldsByLocaleCode',
      'GetLocaleFieldsByLocaleCodeResponse' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleFieldsByLocaleCodeResponse',
      'GetLocaleFieldsByLocaleFieldIds' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleFieldsByLocaleFieldIds',
      'GetLocaleFieldsByLocaleFieldIdsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleFieldsByLocaleFieldIdsResponse',
      'GetLocaleFieldsByText' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleFieldsByText',
      'GetLocaleFieldsByTextResponse' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleFieldsByTextResponse',
      'GetAllSkills' => 'ArbetsformedlingenWsTaxonomi\\GetAllSkills',
      'GetAllSkillsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllSkillsResponse',
      'ArrayOfSkill' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfSkill',
      'Skill' => 'ArbetsformedlingenWsTaxonomi\\Skill',
      'SkillHeadline' => 'ArbetsformedlingenWsTaxonomi\\SkillHeadline',
      'SkillMainHeadline' => 'ArbetsformedlingenWsTaxonomi\\SkillMainHeadline',
      'GetAllSkillsVersion' => 'ArbetsformedlingenWsTaxonomi\\GetAllSkillsVersion',
      'GetAllSkillsVersionResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllSkillsVersionResponse',
      'ArrayOfSkillVersion' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfSkillVersion',
      'SkillVersion' => 'ArbetsformedlingenWsTaxonomi\\SkillVersion',
      'GetSkillsBySkillIdsVersion' => 'ArbetsformedlingenWsTaxonomi\\GetSkillsBySkillIdsVersion',
      'GetSkillsBySkillIdsVersionResponse' => 'ArbetsformedlingenWsTaxonomi\\GetSkillsBySkillIdsVersionResponse',
      'GetSkillsByLocaleCode' => 'ArbetsformedlingenWsTaxonomi\\GetSkillsByLocaleCode',
      'GetSkillsByLocaleCodeResponse' => 'ArbetsformedlingenWsTaxonomi\\GetSkillsByLocaleCodeResponse',
      'GetSkillsBySkillHeadlineId' => 'ArbetsformedlingenWsTaxonomi\\GetSkillsBySkillHeadlineId',
      'GetSkillsBySkillHeadlineIdResponse' => 'ArbetsformedlingenWsTaxonomi\\GetSkillsBySkillHeadlineIdResponse',
      'GetSkillsBySkillIds' => 'ArbetsformedlingenWsTaxonomi\\GetSkillsBySkillIds',
      'GetSkillsBySkillIdsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetSkillsBySkillIdsResponse',
      'GetSkillsBySkillMainHeadlineId' => 'ArbetsformedlingenWsTaxonomi\\GetSkillsBySkillMainHeadlineId',
      'GetSkillsBySkillMainHeadlineIdResponse' => 'ArbetsformedlingenWsTaxonomi\\GetSkillsBySkillMainHeadlineIdResponse',
      'GetSkillsByText' => 'ArbetsformedlingenWsTaxonomi\\GetSkillsByText',
      'GetSkillsByTextResponse' => 'ArbetsformedlingenWsTaxonomi\\GetSkillsByTextResponse',
      'GetAllLocaleGroupSkills' => 'ArbetsformedlingenWsTaxonomi\\GetAllLocaleGroupSkills',
      'GetAllLocaleGroupSkillsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllLocaleGroupSkillsResponse',
      'ArrayOfLocaleGroupSkill' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfLocaleGroupSkill',
      'LocaleGroupSkill' => 'ArbetsformedlingenWsTaxonomi\\LocaleGroupSkill',
      'GetLocaleGroupSkillsByLocaleCode' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleGroupSkillsByLocaleCode',
      'GetLocaleGroupSkillsByLocaleCodeResponse' => 'ArbetsformedlingenWsTaxonomi\\GetLocaleGroupSkillsByLocaleCodeResponse',
      'GetAllSkillHeadlines' => 'ArbetsformedlingenWsTaxonomi\\GetAllSkillHeadlines',
      'GetAllSkillHeadlinesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllSkillHeadlinesResponse',
      'ArrayOfSkillHeadline' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfSkillHeadline',
      'GetSkillHeadlinesBySkillHeadlineIds' => 'ArbetsformedlingenWsTaxonomi\\GetSkillHeadlinesBySkillHeadlineIds',
      'GetSkillHeadlinesBySkillHeadlineIdsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetSkillHeadlinesBySkillHeadlineIdsResponse',
      'GetSkillHeadlinesBySkillMainHeadlineId' => 'ArbetsformedlingenWsTaxonomi\\GetSkillHeadlinesBySkillMainHeadlineId',
      'GetSkillHeadlinesBySkillMainHeadlineIdResponse' => 'ArbetsformedlingenWsTaxonomi\\GetSkillHeadlinesBySkillMainHeadlineIdResponse',
      'GetSkillHeadlinesByText' => 'ArbetsformedlingenWsTaxonomi\\GetSkillHeadlinesByText',
      'GetSkillHeadlinesByTextResponse' => 'ArbetsformedlingenWsTaxonomi\\GetSkillHeadlinesByTextResponse',
      'GetAllSkillMainHeadlines' => 'ArbetsformedlingenWsTaxonomi\\GetAllSkillMainHeadlines',
      'GetAllSkillMainHeadlinesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllSkillMainHeadlinesResponse',
      'ArrayOfSkillMainHeadline' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfSkillMainHeadline',
      'GetSkillMainHeadlinesBySkillMainHeadlineIds' => 'ArbetsformedlingenWsTaxonomi\\GetSkillMainHeadlinesBySkillMainHeadlineIds',
      'GetSkillMainHeadlinesBySkillMainHeadlineIdsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetSkillMainHeadlinesBySkillMainHeadlineIdsResponse',
      'GetSkillMainHeadlinesByText' => 'ArbetsformedlingenWsTaxonomi\\GetSkillMainHeadlinesByText',
      'GetSkillMainHeadlinesByTextResponse' => 'ArbetsformedlingenWsTaxonomi\\GetSkillMainHeadlinesByTextResponse',
      'GetAllDrivingLicences' => 'ArbetsformedlingenWsTaxonomi\\GetAllDrivingLicences',
      'GetAllDrivingLicencesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllDrivingLicencesResponse',
      'ArrayOfDrivingLicence' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfDrivingLicence',
      'DrivingLicence' => 'ArbetsformedlingenWsTaxonomi\\DrivingLicence',
      'GetAllLanguages' => 'ArbetsformedlingenWsTaxonomi\\GetAllLanguages',
      'GetAllLanguagesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllLanguagesResponse',
      'ArrayOfLanguage' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfLanguage',
      'Language' => 'ArbetsformedlingenWsTaxonomi\\Language',
      'GetAllLanguagesWithISO' => 'ArbetsformedlingenWsTaxonomi\\GetAllLanguagesWithISO',
      'GetAllLanguagesWithISOResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllLanguagesWithISOResponse',
      'ArrayOfLanguageISO' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfLanguageISO',
      'LanguageISO' => 'ArbetsformedlingenWsTaxonomi\\LanguageISO',
      'GetLanguageIDByISO2Code' => 'ArbetsformedlingenWsTaxonomi\\GetLanguageIDByISO2Code',
      'GetLanguageIDByISO2CodeResponse' => 'ArbetsformedlingenWsTaxonomi\\GetLanguageIDByISO2CodeResponse',
      'GetAllLanguageLevels' => 'ArbetsformedlingenWsTaxonomi\\GetAllLanguageLevels',
      'GetAllLanguageLevelsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllLanguageLevelsResponse',
      'ArrayOfLanguageLevel' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfLanguageLevel',
      'LanguageLevel' => 'ArbetsformedlingenWsTaxonomi\\LanguageLevel',
      'GetAllEducationLevels' => 'ArbetsformedlingenWsTaxonomi\\GetAllEducationLevels',
      'GetAllEducationLevelsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllEducationLevelsResponse',
      'ArrayOfEducationLevel' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfEducationLevel',
      'EducationLevel' => 'ArbetsformedlingenWsTaxonomi\\EducationLevel',
      'GetAllEducationFields' => 'ArbetsformedlingenWsTaxonomi\\GetAllEducationFields',
      'GetAllEducationFieldsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllEducationFieldsResponse',
      'ArrayOfEducationField' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfEducationField',
      'EducationField' => 'ArbetsformedlingenWsTaxonomi\\EducationField',
      'GetAllExperiencesYear' => 'ArbetsformedlingenWsTaxonomi\\GetAllExperiencesYear',
      'GetAllExperiencesYearResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllExperiencesYearResponse',
      'ArrayOfOccupationExperienceYear' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfOccupationExperienceYear',
      'OccupationExperienceYear' => 'ArbetsformedlingenWsTaxonomi\\OccupationExperienceYear',
      'GetAllExperiencesLast' => 'ArbetsformedlingenWsTaxonomi\\GetAllExperiencesLast',
      'GetAllExperiencesLastResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllExperiencesLastResponse',
      'ArrayOfOccupationExperienceLast' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfOccupationExperienceLast',
      'OccupationExperienceLast' => 'ArbetsformedlingenWsTaxonomi\\OccupationExperienceLast',
      'GetAllSUNLevel1' => 'ArbetsformedlingenWsTaxonomi\\GetAllSUNLevel1',
      'GetAllSUNLevel1Response' => 'ArbetsformedlingenWsTaxonomi\\GetAllSUNLevel1Response',
      'ArrayOfSUNLevel1' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfSUNLevel1',
      'SUNLevel1' => 'ArbetsformedlingenWsTaxonomi\\SUNLevel1',
      'GetAllSUNLevel2' => 'ArbetsformedlingenWsTaxonomi\\GetAllSUNLevel2',
      'GetAllSUNLevel2Response' => 'ArbetsformedlingenWsTaxonomi\\GetAllSUNLevel2Response',
      'ArrayOfSUNLevel2' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfSUNLevel2',
      'SUNLevel2' => 'ArbetsformedlingenWsTaxonomi\\SUNLevel2',
      'GetAllSUNLevel3' => 'ArbetsformedlingenWsTaxonomi\\GetAllSUNLevel3',
      'GetAllSUNLevel3Response' => 'ArbetsformedlingenWsTaxonomi\\GetAllSUNLevel3Response',
      'ArrayOfSUNLevel3' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfSUNLevel3',
      'SUNLevel3' => 'ArbetsformedlingenWsTaxonomi\\SUNLevel3',
      'GetAllSUNField1' => 'ArbetsformedlingenWsTaxonomi\\GetAllSUNField1',
      'GetAllSUNField1Response' => 'ArbetsformedlingenWsTaxonomi\\GetAllSUNField1Response',
      'ArrayOfSUNField1' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfSUNField1',
      'SUNField1' => 'ArbetsformedlingenWsTaxonomi\\SUNField1',
      'GetAllSUNField2' => 'ArbetsformedlingenWsTaxonomi\\GetAllSUNField2',
      'GetAllSUNField2Response' => 'ArbetsformedlingenWsTaxonomi\\GetAllSUNField2Response',
      'ArrayOfSUNField2' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfSUNField2',
      'SUNField2' => 'ArbetsformedlingenWsTaxonomi\\SUNField2',
      'GetAllSUNField3' => 'ArbetsformedlingenWsTaxonomi\\GetAllSUNField3',
      'GetAllSUNField3Response' => 'ArbetsformedlingenWsTaxonomi\\GetAllSUNField3Response',
      'ArrayOfSUNField3' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfSUNField3',
      'SUNField3' => 'ArbetsformedlingenWsTaxonomi\\SUNField3',
      'GetSUNField3ByGuide' => 'ArbetsformedlingenWsTaxonomi\\GetSUNField3ByGuide',
      'GetSUNField3ByGuideResponse' => 'ArbetsformedlingenWsTaxonomi\\GetSUNField3ByGuideResponse',
      'GetSUNGuideTree' => 'ArbetsformedlingenWsTaxonomi\\GetSUNGuideTree',
      'GetSUNGuideTreeResponse' => 'ArbetsformedlingenWsTaxonomi\\GetSUNGuideTreeResponse',
      'ArrayOfSUNGuideBranch' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfSUNGuideBranch',
      'SUNGuideBranch' => 'ArbetsformedlingenWsTaxonomi\\SUNGuideBranch',
      'ArrayOfSUNGuideLeaf' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfSUNGuideLeaf',
      'SUNGuideLeaf' => 'ArbetsformedlingenWsTaxonomi\\SUNGuideLeaf',
      'GetAllAIDOccupationNames' => 'ArbetsformedlingenWsTaxonomi\\GetAllAIDOccupationNames',
      'GetAllAIDOccupationNamesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllAIDOccupationNamesResponse',
      'ArrayOfAIDOccupationName' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfAIDOccupationName',
      'AIDOccupationName' => 'ArbetsformedlingenWsTaxonomi\\AIDOccupationName',
      'GetAIDOccupationNameByLabel' => 'ArbetsformedlingenWsTaxonomi\\GetAIDOccupationNameByLabel',
      'GetAIDOccupationNameByLabelResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAIDOccupationNameByLabelResponse',
      'GetAllBEFOccupationNames' => 'ArbetsformedlingenWsTaxonomi\\GetAllBEFOccupationNames',
      'GetAllBEFOccupationNamesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllBEFOccupationNamesResponse',
      'ArrayOfBEFOccupationName' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfBEFOccupationName',
      'BEFOccupationName' => 'ArbetsformedlingenWsTaxonomi\\BEFOccupationName',
      'GetBEFOccupationNameByLabel' => 'ArbetsformedlingenWsTaxonomi\\GetBEFOccupationNameByLabel',
      'GetBEFOccupationNameByLabelResponse' => 'ArbetsformedlingenWsTaxonomi\\GetBEFOccupationNameByLabelResponse',
      'GetAllBSKOccupationNames' => 'ArbetsformedlingenWsTaxonomi\\GetAllBSKOccupationNames',
      'GetAllBSKOccupationNamesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllBSKOccupationNamesResponse',
      'ArrayOfBSKOccupationName' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfBSKOccupationName',
      'BSKOccupationName' => 'ArbetsformedlingenWsTaxonomi\\BSKOccupationName',
      'GetBSKOccupationNameByLabel' => 'ArbetsformedlingenWsTaxonomi\\GetBSKOccupationNameByLabel',
      'GetBSKOccupationNameByLabelResponse' => 'ArbetsformedlingenWsTaxonomi\\GetBSKOccupationNameByLabelResponse',
      'GetVersionInformations' => 'ArbetsformedlingenWsTaxonomi\\GetVersionInformations',
      'GetVersionInformationsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetVersionInformationsResponse',
      'ArrayOfVersionInformation' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfVersionInformation',
      'VersionInformation' => 'ArbetsformedlingenWsTaxonomi\\VersionInformation',
      'GetAllEmploymentTypes' => 'ArbetsformedlingenWsTaxonomi\\GetAllEmploymentTypes',
      'GetAllEmploymentTypesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllEmploymentTypesResponse',
      'ArrayOfEmploymentType' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfEmploymentType',
      'EmploymentType' => 'ArbetsformedlingenWsTaxonomi\\EmploymentType',
      'GetAllWorkTimeExtents' => 'ArbetsformedlingenWsTaxonomi\\GetAllWorkTimeExtents',
      'GetAllWorkTimeExtentsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllWorkTimeExtentsResponse',
      'ArrayOfWorkTimeExtent' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfWorkTimeExtent',
      'WorkTimeExtent' => 'ArbetsformedlingenWsTaxonomi\\WorkTimeExtent',
      'GetAllWageTypes' => 'ArbetsformedlingenWsTaxonomi\\GetAllWageTypes',
      'GetAllWageTypesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllWageTypesResponse',
      'ArrayOfWageType' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfWageType',
      'WageType' => 'ArbetsformedlingenWsTaxonomi\\WageType',
      'GetAllEmploymentDurations' => 'ArbetsformedlingenWsTaxonomi\\GetAllEmploymentDurations',
      'GetAllEmploymentDurationsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllEmploymentDurationsResponse',
      'ArrayOfEmploymentDuration' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfEmploymentDuration',
      'EmploymentDuration' => 'ArbetsformedlingenWsTaxonomi\\EmploymentDuration',
      'GetAllJobSituations' => 'ArbetsformedlingenWsTaxonomi\\GetAllJobSituations',
      'GetAllJobSituationsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllJobSituationsResponse',
      'ArrayOfJobSituation' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfJobSituation',
      'JobSituation' => 'ArbetsformedlingenWsTaxonomi\\JobSituation',
      'GetAllInternalJobSituations' => 'ArbetsformedlingenWsTaxonomi\\GetAllInternalJobSituations',
      'GetAllInternalJobSituationsResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllInternalJobSituationsResponse',
      'GetAllAFOffices' => 'ArbetsformedlingenWsTaxonomi\\GetAllAFOffices',
      'GetAllAFOfficesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllAFOfficesResponse',
      'ArrayOfAFOffice' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfAFOffice',
      'AFOffice' => 'ArbetsformedlingenWsTaxonomi\\AFOffice',
      'GetAllUnemploymentBenefitSocieties' => 'ArbetsformedlingenWsTaxonomi\\GetAllUnemploymentBenefitSocieties',
      'GetAllUnemploymentBenefitSocietiesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllUnemploymentBenefitSocietiesResponse',
      'ArrayOfUnemploymentBenefitSociety' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfUnemploymentBenefitSociety',
      'UnemploymentBenefitSociety' => 'ArbetsformedlingenWsTaxonomi\\UnemploymentBenefitSociety',
      'GetAllMunicipalityHomePages' => 'ArbetsformedlingenWsTaxonomi\\GetAllMunicipalityHomePages',
      'GetAllMunicipalityHomePagesResponse' => 'ArbetsformedlingenWsTaxonomi\\GetAllMunicipalityHomePagesResponse',
      'ArrayOfMunicipalityHomePage' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfMunicipalityHomePage',
      'MunicipalityHomePage' => 'ArbetsformedlingenWsTaxonomi\\MunicipalityHomePage',
      'GetAllSNILevel1' => 'ArbetsformedlingenWsTaxonomi\\GetAllSNILevel1',
      'GetAllSNILevel1Response' => 'ArbetsformedlingenWsTaxonomi\\GetAllSNILevel1Response',
      'ArrayOfSNILevel1' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfSNILevel1',
      'SNILevel1' => 'ArbetsformedlingenWsTaxonomi\\SNILevel1',
      'GetAllSNILevel2' => 'ArbetsformedlingenWsTaxonomi\\GetAllSNILevel2',
      'GetAllSNILevel2Response' => 'ArbetsformedlingenWsTaxonomi\\GetAllSNILevel2Response',
      'ArrayOfSNILevel2' => 'ArbetsformedlingenWsTaxonomi\\ArrayOfSNILevel2',
      'SNILevel2' => 'ArbetsformedlingenWsTaxonomi\\SNILevel2',
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
        $wsdl = '';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Hämtar en lista med alla världsdelar för angivet språk
     *
     * @param GetAllContinents $parameters
     * @return GetAllContinentsResponse
     */
    public function GetAllContinents(GetAllContinents $parameters)
    {
      return $this->__soapCall('GetAllContinents', array($parameters));
    }

    /**
     * Hämtar en lista med alla länder för angivet språk
     *
     * @param GetAllCountries $parameters
     * @return GetAllCountriesResponse
     */
    public function GetAllCountries(GetAllCountries $parameters)
    {
      return $this->__soapCall('GetAllCountries', array($parameters));
    }

    /**
     * Hämtar en lista med alla EU-regioner för angivet språk
     *
     * @param GetAllEURegions $parameters
     * @return GetAllEURegionsResponse
     */
    public function GetAllEURegions(GetAllEURegions $parameters)
    {
      return $this->__soapCall('GetAllEURegions', array($parameters));
    }

    /**
     * Hämtar en lista med alla EU-regioner för angivet land och språk
     *
     * @param GetEURegionsByCountryID $parameters
     * @return GetEURegionsByCountryIDResponse
     */
    public function GetEURegionsByCountryID(GetEURegionsByCountryID $parameters)
    {
      return $this->__soapCall('GetEURegionsByCountryID', array($parameters));
    }

    /**
     * Hämtar en lista med alla kommuner för angivet språk
     *
     * @param GetAllMunicipalities $parameters
     * @return GetAllMunicipalitiesResponse
     */
    public function GetAllMunicipalities(GetAllMunicipalities $parameters)
    {
      return $this->__soapCall('GetAllMunicipalities', array($parameters));
    }

    /**
     * Hämtar en lista med alla postorter för angivet språk
     *
     * @param GetAllPostLocalities $parameters
     * @return GetAllPostLocalitiesResponse
     */
    public function GetAllPostLocalities(GetAllPostLocalities $parameters)
    {
      return $this->__soapCall('GetAllPostLocalities', array($parameters));
    }

    /**
     * Hämtar en lista med alla postnummer för angivet språk
     *
     * @param GetAllPostCodes $parameters
     * @return GetAllPostCodesResponse
     */
    public function GetAllPostCodes(GetAllPostCodes $parameters)
    {
      return $this->__soapCall('GetAllPostCodes', array($parameters));
    }

    /**
     * Hämtar en lista med alla posnummer för angivet språk och postort
     *
     * @param GetPostCodesByPostLocality $parameters
     * @return GetPostCodesByPostLocalityResponse
     */
    public function GetPostCodesByPostLocality(GetPostCodesByPostLocality $parameters)
    {
      return $this->__soapCall('GetPostCodesByPostLocality', array($parameters));
    }

    /**
     * Hämtar en lista med alla postnummer för angivet språk och kommunkod
     *
     * @param GetPostCodesByNationalNUTSLAU2Code $parameters
     * @return GetPostCodesByNationalNUTSLAU2CodeResponse
     */
    public function GetPostCodesByNationalNUTSLAU2Code(GetPostCodesByNationalNUTSLAU2Code $parameters)
    {
      return $this->__soapCall('GetPostCodesByNationalNUTSLAU2Code', array($parameters));
    }

    /**
     * Hämtar en lista med alla postnummer för angivet språk och postnummer
     *
     * @param GetPostCodesByPostCode $parameters
     * @return GetPostCodesByPostCodeResponse
     */
    public function GetPostCodesByPostCode(GetPostCodesByPostCode $parameters)
    {
      return $this->__soapCall('GetPostCodesByPostCode', array($parameters));
    }

    /**
     * Hämtar en lista med LocaleCodes som matchar angiven ISCO-kod.
     *
     * @param GetLocaleCodeByISCO $parameters
     * @return GetLocaleCodeByISCOResponse
     */
    public function GetLocaleCodeByISCO(GetLocaleCodeByISCO $parameters)
    {
      return $this->__soapCall('GetLocaleCodeByISCO', array($parameters));
    }

    /**
     * Hämtar en lista med ISCO-koder som matchar angiven SSYK-kod
     *
     * @param GetISCOByLocaleCode $parameters
     * @return GetISCOByLocaleCodeResponse
     */
    public function GetISCOByLocaleCode(GetISCOByLocaleCode $parameters)
    {
      return $this->__soapCall('GetISCOByLocaleCode', array($parameters));
    }

    /**
     * Hämtar en lista med alla SSYK, nivå 3 för angivet språk
     *
     * @param GetAllLocaleLevel3 $parameters
     * @return GetAllLocaleLevel3Response
     */
    public function GetAllLocaleLevel3(GetAllLocaleLevel3 $parameters)
    {
      return $this->__soapCall('GetAllLocaleLevel3', array($parameters));
    }

    /**
     * Hämtar en lista med alla SSYK för angivet språk
     *
     * @param GetAllLocaleGroups $parameters
     * @return GetAllLocaleGroupsResponse
     */
    public function GetAllLocaleGroups(GetAllLocaleGroups $parameters)
    {
      return $this->__soapCall('GetAllLocaleGroups', array($parameters));
    }

    /**
     * Hämtar en lista med SSYK för angivna koder och språk
     *
     * @param GetLocaleGroupsByLocaleCodes $parameters
     * @return GetLocaleGroupsByLocaleCodesResponse
     */
    public function GetLocaleGroupsByLocaleCodes(GetLocaleGroupsByLocaleCodes $parameters)
    {
      return $this->__soapCall('GetLocaleGroupsByLocaleCodes', array($parameters));
    }

    /**
     * Hämtar en lista med SSYK för angivet yrkesområde och språk
     *
     * @param GetLocaleGroupsByLocaleFieldId $parameters
     * @return GetLocaleGroupsByLocaleFieldIdResponse
     */
    public function GetLocaleGroupsByLocaleFieldId(GetLocaleGroupsByLocaleFieldId $parameters)
    {
      return $this->__soapCall('GetLocaleGroupsByLocaleFieldId', array($parameters));
    }

    /**
     * Hämtar en SSYK för angiven yrkesbenämning och språk
     *
     * @param GetLocaleGroupByOccupationNameId $parameters
     * @return GetLocaleGroupByOccupationNameIdResponse
     */
    public function GetLocaleGroupByOccupationNameId(GetLocaleGroupByOccupationNameId $parameters)
    {
      return $this->__soapCall('GetLocaleGroupByOccupationNameId', array($parameters));
    }

    /**
     * Hämtar en lista med SSYK för angiven beteckning och språk,  exactMatch: true=exakt,  false=mönstermatchning
     *
     * @param GetLocaleGroupsByText $parameters
     * @return GetLocaleGroupsByTextResponse
     */
    public function GetLocaleGroupsByText(GetLocaleGroupsByText $parameters)
    {
      return $this->__soapCall('GetLocaleGroupsByText', array($parameters));
    }

    /**
     * Hämtar en lista med alla yrkesbenämningar för angivet språk
     *
     * @param GetAllOccupationNames $parameters
     * @return GetAllOccupationNamesResponse
     */
    public function GetAllOccupationNames(GetAllOccupationNames $parameters)
    {
      return $this->__soapCall('GetAllOccupationNames', array($parameters));
    }

    /**
     * Hämtar en lista med alla synonymer för angivet språk
     *
     * @param GetAllOccupationNameSynonyms $parameters
     * @return GetAllOccupationNameSynonymsResponse
     */
    public function GetAllOccupationNameSynonyms(GetAllOccupationNameSynonyms $parameters)
    {
      return $this->__soapCall('GetAllOccupationNameSynonyms', array($parameters));
    }

    /**
     * Hämtar en lista med alla yrkesbenämningar för angivet språk, inklusive historiska rader
     *
     * @param GetAllOccupationNamesVersion $parameters
     * @return GetAllOccupationNamesVersionResponse
     */
    public function GetAllOccupationNamesVersion(GetAllOccupationNamesVersion $parameters)
    {
      return $this->__soapCall('GetAllOccupationNamesVersion', array($parameters));
    }

    /**
     * Hämtar en lista av yrkesbenämningar för angivet SSYK (kod) och språk
     *
     * @param GetOccupationNamesByLocaleCode $parameters
     * @return GetOccupationNamesByLocaleCodeResponse
     */
    public function GetOccupationNamesByLocaleCode(GetOccupationNamesByLocaleCode $parameters)
    {
      return $this->__soapCall('GetOccupationNamesByLocaleCode', array($parameters));
    }

    /**
     * Hämtar en lista med yrkesbenämningar för angivna ID och språk
     *
     * @param GetOccupationNamesByOccupationNameIds $parameters
     * @return GetOccupationNamesByOccupationNameIdsResponse
     */
    public function GetOccupationNamesByOccupationNameIds(GetOccupationNamesByOccupationNameIds $parameters)
    {
      return $this->__soapCall('GetOccupationNamesByOccupationNameIds', array($parameters));
    }

    /**
     * Hämtar en lista med yrkesbenämningar för angivna ID och språk, inklusive historiska benämningar
     *
     * @param GetOccupationNamesByOccupationNameIdsVersion $parameters
     * @return GetOccupationNamesByOccupationNameIdsVersionResponse
     */
    public function GetOccupationNamesByOccupationNameIdsVersion(GetOccupationNamesByOccupationNameIdsVersion $parameters)
    {
      return $this->__soapCall('GetOccupationNamesByOccupationNameIdsVersion', array($parameters));
    }

    /**
     * Hämtar en lista med yrkesbenämningar som matchar angiven beteckning och språk,  exactMatch: true=exakt,  false=mönstermatchning
     *
     * @param GetOccupationNamesByText $parameters
     * @return GetOccupationNamesByTextResponse
     */
    public function GetOccupationNamesByText(GetOccupationNamesByText $parameters)
    {
      return $this->__soapCall('GetOccupationNamesByText', array($parameters));
    }

    /**
     * Hämtar en lista av yrkesbenämningar för kulturyrken
     *
     * @param GetOccupationNamesArt $parameters
     * @return GetOccupationNamesArtResponse
     */
    public function GetOccupationNamesArt(GetOccupationNamesArt $parameters)
    {
      return $this->__soapCall('GetOccupationNamesArt', array($parameters));
    }

    /**
     * Hämtar en lista av yrkesbenämningar för byggyrken
     *
     * @param GetOccupationNamesConstruction $parameters
     * @return GetOccupationNamesConstructionResponse
     */
    public function GetOccupationNamesConstruction(GetOccupationNamesConstruction $parameters)
    {
      return $this->__soapCall('GetOccupationNamesConstruction', array($parameters));
    }

    /**
     * Hämtar en lista av yrkesbenämningar för sjöfartsyrken
     *
     * @param GetOccupationNamesNavigation $parameters
     * @return GetOccupationNamesNavigationResponse
     */
    public function GetOccupationNamesNavigation(GetOccupationNamesNavigation $parameters)
    {
      return $this->__soapCall('GetOccupationNamesNavigation', array($parameters));
    }

    /**
     * Hämtar en lista med alla yrkesområden för angivet språk
     *
     * @param GetAllLocaleFields $parameters
     * @return GetAllLocaleFieldsResponse
     */
    public function GetAllLocaleFields(GetAllLocaleFields $parameters)
    {
      return $this->__soapCall('GetAllLocaleFields', array($parameters));
    }

    /**
     * Hämtar en lista med yrkesområden för angivet SSYK (kod) och språk
     *
     * @param GetLocaleFieldsByLocaleCode $parameters
     * @return GetLocaleFieldsByLocaleCodeResponse
     */
    public function GetLocaleFieldsByLocaleCode(GetLocaleFieldsByLocaleCode $parameters)
    {
      return $this->__soapCall('GetLocaleFieldsByLocaleCode', array($parameters));
    }

    /**
     * Hämtar en lista med yrkesområden för angiven lista av ID och språk
     *
     * @param GetLocaleFieldsByLocaleFieldIds $parameters
     * @return GetLocaleFieldsByLocaleFieldIdsResponse
     */
    public function GetLocaleFieldsByLocaleFieldIds(GetLocaleFieldsByLocaleFieldIds $parameters)
    {
      return $this->__soapCall('GetLocaleFieldsByLocaleFieldIds', array($parameters));
    }

    /**
     * Hämtar en lista med yrkesområden som matchar angiven beteckning och språk,  exactMatch: true=exakt,  false=mönstermatchning
     *
     * @param GetLocaleFieldsByText $parameters
     * @return GetLocaleFieldsByTextResponse
     */
    public function GetLocaleFieldsByText(GetLocaleFieldsByText $parameters)
    {
      return $this->__soapCall('GetLocaleFieldsByText', array($parameters));
    }

    /**
     * Hämtar en lista med alla kompetenser för angivet språk
     *
     * @param GetAllSkills $parameters
     * @return GetAllSkillsResponse
     */
    public function GetAllSkills(GetAllSkills $parameters)
    {
      return $this->__soapCall('GetAllSkills', array($parameters));
    }

    /**
     * Hämtar en lista med alla versioner för angivet språk
     *
     * @param GetAllSkillsVersion $parameters
     * @return GetAllSkillsVersionResponse
     */
    public function GetAllSkillsVersion(GetAllSkillsVersion $parameters)
    {
      return $this->__soapCall('GetAllSkillsVersion', array($parameters));
    }

    /**
     * Hämtar en lista med kompetenser för angivna ids och angivet språk
     *
     * @param GetSkillsBySkillIdsVersion $parameters
     * @return GetSkillsBySkillIdsVersionResponse
     */
    public function GetSkillsBySkillIdsVersion(GetSkillsBySkillIdsVersion $parameters)
    {
      return $this->__soapCall('GetSkillsBySkillIdsVersion', array($parameters));
    }

    /**
     * Hämtar en lista med kompetenser för angivet SSYK (kod) och språk
     *
     * @param GetSkillsByLocaleCode $parameters
     * @return GetSkillsByLocaleCodeResponse
     */
    public function GetSkillsByLocaleCode(GetSkillsByLocaleCode $parameters)
    {
      return $this->__soapCall('GetSkillsByLocaleCode', array($parameters));
    }

    /**
     * Hämtar en lista med kompetenser för angiven rubrik och språk
     *
     * @param GetSkillsBySkillHeadlineId $parameters
     * @return GetSkillsBySkillHeadlineIdResponse
     */
    public function GetSkillsBySkillHeadlineId(GetSkillsBySkillHeadlineId $parameters)
    {
      return $this->__soapCall('GetSkillsBySkillHeadlineId', array($parameters));
    }

    /**
     * Hämtar en lista med kompetenser för angiven lista av ID och språk
     *
     * @param GetSkillsBySkillIds $parameters
     * @return GetSkillsBySkillIdsResponse
     */
    public function GetSkillsBySkillIds(GetSkillsBySkillIds $parameters)
    {
      return $this->__soapCall('GetSkillsBySkillIds', array($parameters));
    }

    /**
     * Hämtar en lista med kompetenser för angiven huvudrubrik och språk
     *
     * @param GetSkillsBySkillMainHeadlineId $parameters
     * @return GetSkillsBySkillMainHeadlineIdResponse
     */
    public function GetSkillsBySkillMainHeadlineId(GetSkillsBySkillMainHeadlineId $parameters)
    {
      return $this->__soapCall('GetSkillsBySkillMainHeadlineId', array($parameters));
    }

    /**
     * Hämtar alla kompetenser som matchar angivna beteckning och språk,  exactMatch: true=exakt,  false=mönstermatchning
     *
     * @param GetSkillsByText $parameters
     * @return GetSkillsByTextResponse
     */
    public function GetSkillsByText(GetSkillsByText $parameters)
    {
      return $this->__soapCall('GetSkillsByText', array($parameters));
    }

    /**
     * Hämtar en lista med alla yrkeskompetenser, SSYK-kod och kompetensId
     *
     * @param GetAllLocaleGroupSkills $parameters
     * @return GetAllLocaleGroupSkillsResponse
     */
    public function GetAllLocaleGroupSkills(GetAllLocaleGroupSkills $parameters)
    {
      return $this->__soapCall('GetAllLocaleGroupSkills', array($parameters));
    }

    /**
     * Hämtar en lista med alla yrkeskompetenser för angivet SSYK
     *
     * @param GetLocaleGroupSkillsByLocaleCode $parameters
     * @return GetLocaleGroupSkillsByLocaleCodeResponse
     */
    public function GetLocaleGroupSkillsByLocaleCode(GetLocaleGroupSkillsByLocaleCode $parameters)
    {
      return $this->__soapCall('GetLocaleGroupSkillsByLocaleCode', array($parameters));
    }

    /**
     * Hämtar en lista med alla kompetensrubriker för angivet språk
     *
     * @param GetAllSkillHeadlines $parameters
     * @return GetAllSkillHeadlinesResponse
     */
    public function GetAllSkillHeadlines(GetAllSkillHeadlines $parameters)
    {
      return $this->__soapCall('GetAllSkillHeadlines', array($parameters));
    }

    /**
     * Hämtar en lista med kompetensrubriker för angiven lista med rubriker och språk
     *
     * @param GetSkillHeadlinesBySkillHeadlineIds $parameters
     * @return GetSkillHeadlinesBySkillHeadlineIdsResponse
     */
    public function GetSkillHeadlinesBySkillHeadlineIds(GetSkillHeadlinesBySkillHeadlineIds $parameters)
    {
      return $this->__soapCall('GetSkillHeadlinesBySkillHeadlineIds', array($parameters));
    }

    /**
     * Hämtar en lista med kompetensrubriker för angiven huvudrubrik och språk
     *
     * @param GetSkillHeadlinesBySkillMainHeadlineId $parameters
     * @return GetSkillHeadlinesBySkillMainHeadlineIdResponse
     */
    public function GetSkillHeadlinesBySkillMainHeadlineId(GetSkillHeadlinesBySkillMainHeadlineId $parameters)
    {
      return $this->__soapCall('GetSkillHeadlinesBySkillMainHeadlineId', array($parameters));
    }

    /**
     * Hämtar en lista med SkillHeadlines som matchar angiven text (term) och languageId, exactMatch: true=exakt,  false=mönstermatchning
     *
     * @param GetSkillHeadlinesByText $parameters
     * @return GetSkillHeadlinesByTextResponse
     */
    public function GetSkillHeadlinesByText(GetSkillHeadlinesByText $parameters)
    {
      return $this->__soapCall('GetSkillHeadlinesByText', array($parameters));
    }

    /**
     * Hämtar en lista med alla kompetenshuvudrubriker för angivet språk
     *
     * @param GetAllSkillMainHeadlines $parameters
     * @return GetAllSkillMainHeadlinesResponse
     */
    public function GetAllSkillMainHeadlines(GetAllSkillMainHeadlines $parameters)
    {
      return $this->__soapCall('GetAllSkillMainHeadlines', array($parameters));
    }

    /**
     * Hämtar en lista med kompetenshuvudrubriker för angiven lista av ID och språk
     *
     * @param GetSkillMainHeadlinesBySkillMainHeadlineIds $parameters
     * @return GetSkillMainHeadlinesBySkillMainHeadlineIdsResponse
     */
    public function GetSkillMainHeadlinesBySkillMainHeadlineIds(GetSkillMainHeadlinesBySkillMainHeadlineIds $parameters)
    {
      return $this->__soapCall('GetSkillMainHeadlinesBySkillMainHeadlineIds', array($parameters));
    }

    /**
     * Hämtar en lista med kompetenshuvudrubriker som matchar angiven beteckning och språk, exactMatch: true=exakt,  false=mönstermatchning
     *
     * @param GetSkillMainHeadlinesByText $parameters
     * @return GetSkillMainHeadlinesByTextResponse
     */
    public function GetSkillMainHeadlinesByText(GetSkillMainHeadlinesByText $parameters)
    {
      return $this->__soapCall('GetSkillMainHeadlinesByText', array($parameters));
    }

    /**
     * Hämtar en lista med alla körkort för angivet språk
     *
     * @param GetAllDrivingLicences $parameters
     * @return GetAllDrivingLicencesResponse
     */
    public function GetAllDrivingLicences(GetAllDrivingLicences $parameters)
    {
      return $this->__soapCall('GetAllDrivingLicences', array($parameters));
    }

    /**
     * Hämtar en lista med alla språk för angivet språk
     *
     * @param GetAllLanguages $parameters
     * @return GetAllLanguagesResponse
     */
    public function GetAllLanguages(GetAllLanguages $parameters)
    {
      return $this->__soapCall('GetAllLanguages', array($parameters));
    }

    /**
     * Hämtar en lista med alla språk för angivet språk, inklusive ISO-kod
     *
     * @param GetAllLanguagesWithISO $parameters
     * @return GetAllLanguagesWithISOResponse
     */
    public function GetAllLanguagesWithISO(GetAllLanguagesWithISO $parameters)
    {
      return $this->__soapCall('GetAllLanguagesWithISO', array($parameters));
    }

    /**
     * Hämtar språkID, motsvarande angiven ISO2-kod
     *
     * @param GetLanguageIDByISO2Code $parameters
     * @return GetLanguageIDByISO2CodeResponse
     */
    public function GetLanguageIDByISO2Code(GetLanguageIDByISO2Code $parameters)
    {
      return $this->__soapCall('GetLanguageIDByISO2Code', array($parameters));
    }

    /**
     * Hämtar en lista med alla språknivåer för angivet språk
     *
     * @param GetAllLanguageLevels $parameters
     * @return GetAllLanguageLevelsResponse
     */
    public function GetAllLanguageLevels(GetAllLanguageLevels $parameters)
    {
      return $this->__soapCall('GetAllLanguageLevels', array($parameters));
    }

    /**
     * DEPRECATED - Gammalt värdeförråd, använd SUN-metoderna istället - Hämtar en lista med alla utbildningsnivåer (ej SUN) för angivet språk
     *
     * @param GetAllEducationLevels $parameters
     * @return GetAllEducationLevelsResponse
     */
    public function GetAllEducationLevels(GetAllEducationLevels $parameters)
    {
      return $this->__soapCall('GetAllEducationLevels', array($parameters));
    }

    /**
     * DEPRECATED - Gammalt värdeförråd, använd SUN-metoderna istället - Hämtar en lista med alla utbildningsområden (ej SUN) för angivet språk
     *
     * @param GetAllEducationFields $parameters
     * @return GetAllEducationFieldsResponse
     */
    public function GetAllEducationFields(GetAllEducationFields $parameters)
    {
      return $this->__soapCall('GetAllEducationFields', array($parameters));
    }

    /**
     * Hämtar en lista med tidslängder för hur lång erfarenhet man har i exempelvis ett yrke, för angivet språk
     *
     * @param GetAllExperiencesYear $parameters
     * @return GetAllExperiencesYearResponse
     */
    public function GetAllExperiencesYear(GetAllExperiencesYear $parameters)
    {
      return $this->__soapCall('GetAllExperiencesYear', array($parameters));
    }

    /**
     * Hämtar en lista med förslag på tidsangivelser när du senast arbetade med ett yrke (erfarenhet senast) för angivet språk
     *
     * @param GetAllExperiencesLast $parameters
     * @return GetAllExperiencesLastResponse
     */
    public function GetAllExperiencesLast(GetAllExperiencesLast $parameters)
    {
      return $this->__soapCall('GetAllExperiencesLast', array($parameters));
    }

    /**
     * Hämtar en lista med alla SUN-poster (utbildningsnivå 1) för angivet språk
     *
     * @param GetAllSUNLevel1 $parameters
     * @return GetAllSUNLevel1Response
     */
    public function GetAllSUNLevel1(GetAllSUNLevel1 $parameters)
    {
      return $this->__soapCall('GetAllSUNLevel1', array($parameters));
    }

    /**
     * Hämtar en lista med alla SUN-poster (utbildningsnivå 2) för angivet språk
     *
     * @param GetAllSUNLevel2 $parameters
     * @return GetAllSUNLevel2Response
     */
    public function GetAllSUNLevel2(GetAllSUNLevel2 $parameters)
    {
      return $this->__soapCall('GetAllSUNLevel2', array($parameters));
    }

    /**
     * Hämtar en lista med alla SUN-poster (utbildningsnivå 3) för angivet språk
     *
     * @param GetAllSUNLevel3 $parameters
     * @return GetAllSUNLevel3Response
     */
    public function GetAllSUNLevel3(GetAllSUNLevel3 $parameters)
    {
      return $this->__soapCall('GetAllSUNLevel3', array($parameters));
    }

    /**
     * Hämtar en lista med alla SUN-poster (utbildningsinriktning 1) för angivet språk
     *
     * @param GetAllSUNField1 $parameters
     * @return GetAllSUNField1Response
     */
    public function GetAllSUNField1(GetAllSUNField1 $parameters)
    {
      return $this->__soapCall('GetAllSUNField1', array($parameters));
    }

    /**
     * Hämtar en lista med alla SUN-poster (utbildningsinriktning 2) för angivet språk
     *
     * @param GetAllSUNField2 $parameters
     * @return GetAllSUNField2Response
     */
    public function GetAllSUNField2(GetAllSUNField2 $parameters)
    {
      return $this->__soapCall('GetAllSUNField2', array($parameters));
    }

    /**
     * Hämtar en lista med alla SUN-poster (utbildningsinriktning 3) för angivet språk
     *
     * @param GetAllSUNField3 $parameters
     * @return GetAllSUNField3Response
     */
    public function GetAllSUNField3(GetAllSUNField3 $parameters)
    {
      return $this->__soapCall('GetAllSUNField3', array($parameters));
    }

    /**
     * Hämtar en lista med alla SUN-poster (utbildningsinriktning 3) för angivet språk och nivå 1 enligt AF:s guide
     *
     * @param GetSUNField3ByGuide $parameters
     * @return GetSUNField3ByGuideResponse
     */
    public function GetSUNField3ByGuide(GetSUNField3ByGuide $parameters)
    {
      return $this->__soapCall('GetSUNField3ByGuide', array($parameters));
    }

    /**
     * Hämtar ett träd (utbildningsnivå 1, utbildningsinriktning 2 och utbildningsinriktning 3) uppbyggt enligt den guidetabell som AF skapat för kopplingar mellan nivå 1 och inriktning 3
     *
     * @param GetSUNGuideTree $parameters
     * @return GetSUNGuideTreeResponse
     */
    public function GetSUNGuideTree(GetSUNGuideTree $parameters)
    {
      return $this->__soapCall('GetSUNGuideTree', array($parameters));
    }

    /**
     * Hämtar en lista med alla AID-poster
     *
     * @param GetAllAIDOccupationNames $parameters
     * @return GetAllAIDOccupationNamesResponse
     */
    public function GetAllAIDOccupationNames(GetAllAIDOccupationNames $parameters)
    {
      return $this->__soapCall('GetAllAIDOccupationNames', array($parameters));
    }

    /**
     * Hämtar en lista med alla AID-poster för angiven etikett
     *
     * @param GetAIDOccupationNameByLabel $parameters
     * @return GetAIDOccupationNameByLabelResponse
     */
    public function GetAIDOccupationNameByLabel(GetAIDOccupationNameByLabel $parameters)
    {
      return $this->__soapCall('GetAIDOccupationNameByLabel', array($parameters));
    }

    /**
     * DEPRECATED - Använd GetAllAIDOccupationNames istället - Hämtar en lista med alla BEF-poster
     *
     * @param GetAllBEFOccupationNames $parameters
     * @return GetAllBEFOccupationNamesResponse
     */
    public function GetAllBEFOccupationNames(GetAllBEFOccupationNames $parameters)
    {
      return $this->__soapCall('GetAllBEFOccupationNames', array($parameters));
    }

    /**
     * DEPRECATED - Använd GetAIDOccupationNameByLabel istället - Hämtar en lista med alla BEF-poster för angiven etikett
     *
     * @param GetBEFOccupationNameByLabel $parameters
     * @return GetBEFOccupationNameByLabelResponse
     */
    public function GetBEFOccupationNameByLabel(GetBEFOccupationNameByLabel $parameters)
    {
      return $this->__soapCall('GetBEFOccupationNameByLabel', array($parameters));
    }

    /**
     * DEPRECATED - Använd GetAllAIDOccupationNames istället - Hämtar en lista med alla BSK-poster
     *
     * @param GetAllBSKOccupationNames $parameters
     * @return GetAllBSKOccupationNamesResponse
     */
    public function GetAllBSKOccupationNames(GetAllBSKOccupationNames $parameters)
    {
      return $this->__soapCall('GetAllBSKOccupationNames', array($parameters));
    }

    /**
     * DEPRECATED - Använd GetAIDOccupationNameByLabel istället - Hämtar en lista med alla BSK-poster för angiven etikett
     *
     * @param GetBSKOccupationNameByLabel $parameters
     * @return GetBSKOccupationNameByLabelResponse
     */
    public function GetBSKOccupationNameByLabel(GetBSKOccupationNameByLabel $parameters)
    {
      return $this->__soapCall('GetBSKOccupationNameByLabel', array($parameters));
    }

    /**
     * Hämtar version information. Vilka versioner som är tillgängliga
     *
     * @param GetVersionInformations $parameters
     * @return GetVersionInformationsResponse
     */
    public function GetVersionInformations(GetVersionInformations $parameters)
    {
      return $this->__soapCall('GetVersionInformations', array($parameters));
    }

    /**
     * Hämtar en lista med alla anställningsformer för angivet språk
     *
     * @param GetAllEmploymentTypes $parameters
     * @return GetAllEmploymentTypesResponse
     */
    public function GetAllEmploymentTypes(GetAllEmploymentTypes $parameters)
    {
      return $this->__soapCall('GetAllEmploymentTypes', array($parameters));
    }

    /**
     * Hämtar en lista med alla arbetstidsomfattningar för angivet språk
     *
     * @param GetAllWorkTimeExtents $parameters
     * @return GetAllWorkTimeExtentsResponse
     */
    public function GetAllWorkTimeExtents(GetAllWorkTimeExtents $parameters)
    {
      return $this->__soapCall('GetAllWorkTimeExtents', array($parameters));
    }

    /**
     * Hämtar en lista med alla löneformer för angivet språk
     *
     * @param GetAllWageTypes $parameters
     * @return GetAllWageTypesResponse
     */
    public function GetAllWageTypes(GetAllWageTypes $parameters)
    {
      return $this->__soapCall('GetAllWageTypes', array($parameters));
    }

    /**
     * Hämtar en lista med alla anställningsvaraktigheter för angivet språk
     *
     * @param GetAllEmploymentDurations $parameters
     * @return GetAllEmploymentDurationsResponse
     */
    public function GetAllEmploymentDurations(GetAllEmploymentDurations $parameters)
    {
      return $this->__soapCall('GetAllEmploymentDurations', array($parameters));
    }

    /**
     * Hämtar en lista med alla arbetssituationer, externt bruk, för angivet språk
     *
     * @param GetAllJobSituations $parameters
     * @return GetAllJobSituationsResponse
     */
    public function GetAllJobSituations(GetAllJobSituations $parameters)
    {
      return $this->__soapCall('GetAllJobSituations', array($parameters));
    }

    /**
     * Hämtar en lista med alla arbetssituationer för angivet språk som handläggare kan behöva, internt bruk
     *
     * @param GetAllInternalJobSituations $parameters
     * @return GetAllInternalJobSituationsResponse
     */
    public function GetAllInternalJobSituations(GetAllInternalJobSituations $parameters)
    {
      return $this->__soapCall('GetAllInternalJobSituations', array($parameters));
    }

    /**
     * DEPRECATED - Använd CPR som källa, denna lista uppdateras inte - Hämtar en lista med alla arbetsförmedlingar för angivet språk
     *
     * @param GetAllAFOffices $parameters
     * @return GetAllAFOfficesResponse
     */
    public function GetAllAFOffices(GetAllAFOffices $parameters)
    {
      return $this->__soapCall('GetAllAFOffices', array($parameters));
    }

    /**
     * Hämtar en lista med alla A-kassor för angivet språk
     *
     * @param GetAllUnemploymentBenefitSocieties $parameters
     * @return GetAllUnemploymentBenefitSocietiesResponse
     */
    public function GetAllUnemploymentBenefitSocieties(GetAllUnemploymentBenefitSocieties $parameters)
    {
      return $this->__soapCall('GetAllUnemploymentBenefitSocieties', array($parameters));
    }

    /**
     * Hämtar en lista med alla kommunhemsidor
     *
     * @param GetAllMunicipalityHomePages $parameters
     * @return GetAllMunicipalityHomePagesResponse
     */
    public function GetAllMunicipalityHomePages(GetAllMunicipalityHomePages $parameters)
    {
      return $this->__soapCall('GetAllMunicipalityHomePages', array($parameters));
    }

    /**
     * Hämtar en lista med alla SNI-poster (nivå 1) för angivet språk
     *
     * @param GetAllSNILevel1 $parameters
     * @return GetAllSNILevel1Response
     */
    public function GetAllSNILevel1(GetAllSNILevel1 $parameters)
    {
      return $this->__soapCall('GetAllSNILevel1', array($parameters));
    }

    /**
     * Hämtar en lista med alla SNI-poster (nivå 2) för angivet språk
     *
     * @param GetAllSNILevel2 $parameters
     * @return GetAllSNILevel2Response
     */
    public function GetAllSNILevel2(GetAllSNILevel2 $parameters)
    {
      return $this->__soapCall('GetAllSNILevel2', array($parameters));
    }

}
