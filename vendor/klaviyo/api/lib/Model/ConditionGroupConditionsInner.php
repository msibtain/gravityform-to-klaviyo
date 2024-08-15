<?php
/**
 * ConditionGroupConditionsInner
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  KlaviyoAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Klaviyo API
 *
 * The Klaviyo REST API. Please visit https://developers.klaviyo.com for more details.
 *
 * The version of the OpenAPI document: 2024-07-15
 * Contact: developers@klaviyo.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace KlaviyoAPI\Model;

use \ArrayAccess;
use \KlaviyoAPI\ObjectSerializer;

/**
 * ConditionGroupConditionsInner Class Doc Comment
 *
 * @category Class
 * @package  KlaviyoAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ConditionGroupConditionsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConditionGroup_conditions_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => '\KlaviyoAPI\Model\ProfilePredictiveAnalyticsEnum',
        'is_member' => 'bool',
        'group_ids' => 'string[]',
        'timeframe_filter' => '\KlaviyoAPI\Model\ProfileMetricConditionTimeframeFilter',
        'metric_id' => 'string',
        'measurement' => 'string',
        'measurement_filter' => '\KlaviyoAPI\Model\NumericOperatorFilter',
        'metric_filters' => '\KlaviyoAPI\Model\ProfileMetricPropertyFilter[]',
        'consent' => '\KlaviyoAPI\Model\ProfileMarketingConsentConditionConsent',
        'country_code' => 'string',
        'postal_code' => 'string',
        'unit' => 'string',
        'filter' => '\KlaviyoAPI\Model\ProfilePredictiveAnalyticsStringFilter',
        'property' => 'string',
        'in_region' => 'bool',
        'region' => 'string',
        'dimension' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'is_member' => null,
        'group_ids' => null,
        'timeframe_filter' => null,
        'metric_id' => null,
        'measurement' => null,
        'measurement_filter' => null,
        'metric_filters' => null,
        'consent' => null,
        'country_code' => null,
        'postal_code' => null,
        'unit' => null,
        'filter' => null,
        'property' => null,
        'in_region' => null,
        'region' => null,
        'dimension' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'type' => false,
		'is_member' => false,
		'group_ids' => false,
		'timeframe_filter' => false,
		'metric_id' => false,
		'measurement' => false,
		'measurement_filter' => false,
		'metric_filters' => true,
		'consent' => false,
		'country_code' => false,
		'postal_code' => false,
		'unit' => false,
		'filter' => false,
		'property' => false,
		'in_region' => false,
		'region' => false,
		'dimension' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'type' => 'type',
        'is_member' => 'is_member',
        'group_ids' => 'group_ids',
        'timeframe_filter' => 'timeframe_filter',
        'metric_id' => 'metric_id',
        'measurement' => 'measurement',
        'measurement_filter' => 'measurement_filter',
        'metric_filters' => 'metric_filters',
        'consent' => 'consent',
        'country_code' => 'country_code',
        'postal_code' => 'postal_code',
        'unit' => 'unit',
        'filter' => 'filter',
        'property' => 'property',
        'in_region' => 'in_region',
        'region' => 'region',
        'dimension' => 'dimension'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'is_member' => 'setIsMember',
        'group_ids' => 'setGroupIds',
        'timeframe_filter' => 'setTimeframeFilter',
        'metric_id' => 'setMetricId',
        'measurement' => 'setMeasurement',
        'measurement_filter' => 'setMeasurementFilter',
        'metric_filters' => 'setMetricFilters',
        'consent' => 'setConsent',
        'country_code' => 'setCountryCode',
        'postal_code' => 'setPostalCode',
        'unit' => 'setUnit',
        'filter' => 'setFilter',
        'property' => 'setProperty',
        'in_region' => 'setInRegion',
        'region' => 'setRegion',
        'dimension' => 'setDimension'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'is_member' => 'getIsMember',
        'group_ids' => 'getGroupIds',
        'timeframe_filter' => 'getTimeframeFilter',
        'metric_id' => 'getMetricId',
        'measurement' => 'getMeasurement',
        'measurement_filter' => 'getMeasurementFilter',
        'metric_filters' => 'getMetricFilters',
        'consent' => 'getConsent',
        'country_code' => 'getCountryCode',
        'postal_code' => 'getPostalCode',
        'unit' => 'getUnit',
        'filter' => 'getFilter',
        'property' => 'getProperty',
        'in_region' => 'getInRegion',
        'region' => 'getRegion',
        'dimension' => 'getDimension'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const IS_MEMBER_FALSE = 'false';
    public const MEASUREMENT_COUNT = 'count';
    public const MEASUREMENT_SUM = 'sum';
    public const UNIT_KILOMETERS = 'kilometers';
    public const UNIT_MILES = 'miles';
    public const REGION_EUROPEAN_UNION = 'european_union';
    public const REGION_UNITED_STATES = 'united_states';
    public const DIMENSION_PREDICTED_GENDER = 'predicted_gender';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIsMemberAllowableValues()
    {
        return [
            self::IS_MEMBER_FALSE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMeasurementAllowableValues()
    {
        return [
            self::MEASUREMENT_COUNT,
            self::MEASUREMENT_SUM,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUnitAllowableValues()
    {
        return [
            self::UNIT_KILOMETERS,
            self::UNIT_MILES,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRegionAllowableValues()
    {
        return [
            self::REGION_EUROPEAN_UNION,
            self::REGION_UNITED_STATES,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDimensionAllowableValues()
    {
        return [
            self::DIMENSION_PREDICTED_GENDER,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('is_member', $data ?? [], null);
        $this->setIfExists('group_ids', $data ?? [], null);
        $this->setIfExists('timeframe_filter', $data ?? [], null);
        $this->setIfExists('metric_id', $data ?? [], null);
        $this->setIfExists('measurement', $data ?? [], null);
        $this->setIfExists('measurement_filter', $data ?? [], null);
        $this->setIfExists('metric_filters', $data ?? [], null);
        $this->setIfExists('consent', $data ?? [], null);
        $this->setIfExists('country_code', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
        $this->setIfExists('unit', $data ?? [], null);
        $this->setIfExists('filter', $data ?? [], null);
        $this->setIfExists('property', $data ?? [], null);
        $this->setIfExists('in_region', $data ?? [], null);
        $this->setIfExists('region', $data ?? [], null);
        $this->setIfExists('dimension', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['is_member'] === null) {
            $invalidProperties[] = "'is_member' can't be null";
        }
        $allowedValues = $this->getIsMemberAllowableValues();
        if (!is_null($this->container['is_member']) && !in_array($this->container['is_member'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'is_member', must be one of '%s'",
                $this->container['is_member'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['group_ids'] === null) {
            $invalidProperties[] = "'group_ids' can't be null";
        }
        if ($this->container['timeframe_filter'] === null) {
            $invalidProperties[] = "'timeframe_filter' can't be null";
        }
        if ($this->container['metric_id'] === null) {
            $invalidProperties[] = "'metric_id' can't be null";
        }
        if ($this->container['measurement'] === null) {
            $invalidProperties[] = "'measurement' can't be null";
        }
        $allowedValues = $this->getMeasurementAllowableValues();
        if (!is_null($this->container['measurement']) && !in_array($this->container['measurement'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'measurement', must be one of '%s'",
                $this->container['measurement'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['measurement_filter'] === null) {
            $invalidProperties[] = "'measurement_filter' can't be null";
        }
        if ($this->container['consent'] === null) {
            $invalidProperties[] = "'consent' can't be null";
        }
        if ($this->container['country_code'] === null) {
            $invalidProperties[] = "'country_code' can't be null";
        }
        if ($this->container['postal_code'] === null) {
            $invalidProperties[] = "'postal_code' can't be null";
        }
        if ($this->container['unit'] === null) {
            $invalidProperties[] = "'unit' can't be null";
        }
        $allowedValues = $this->getUnitAllowableValues();
        if (!is_null($this->container['unit']) && !in_array($this->container['unit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'unit', must be one of '%s'",
                $this->container['unit'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['filter'] === null) {
            $invalidProperties[] = "'filter' can't be null";
        }
        if ($this->container['property'] === null) {
            $invalidProperties[] = "'property' can't be null";
        }
        if ($this->container['in_region'] === null) {
            $invalidProperties[] = "'in_region' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        $allowedValues = $this->getRegionAllowableValues();
        if (!is_null($this->container['region']) && !in_array($this->container['region'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'region', must be one of '%s'",
                $this->container['region'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['dimension'] === null) {
            $invalidProperties[] = "'dimension' can't be null";
        }
        $allowedValues = $this->getDimensionAllowableValues();
        if (!is_null($this->container['dimension']) && !in_array($this->container['dimension'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'dimension', must be one of '%s'",
                $this->container['dimension'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets type
     *
     * @return \KlaviyoAPI\Model\ProfilePredictiveAnalyticsEnum
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \KlaviyoAPI\Model\ProfilePredictiveAnalyticsEnum $type type
     *
     * @return self
     */
    public function setType($type)
    {

        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }

        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets is_member
     *
     * @return bool
     */
    public function getIsMember()
    {
        return $this->container['is_member'];
    }

    /**
     * Sets is_member
     *
     * @param bool $is_member is_member
     *
     * @return self
     */
    public function setIsMember($is_member)
    {
        $allowedValues = $this->getIsMemberAllowableValues();
        if (!in_array($is_member, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'is_member', must be one of '%s'",
                    $is_member,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($is_member)) {
            throw new \InvalidArgumentException('non-nullable is_member cannot be null');
        }

        $this->container['is_member'] = $is_member;

        return $this;
    }

    /**
     * Gets group_ids
     *
     * @return string[]
     */
    public function getGroupIds()
    {
        return $this->container['group_ids'];
    }

    /**
     * Sets group_ids
     *
     * @param string[] $group_ids group_ids
     *
     * @return self
     */
    public function setGroupIds($group_ids)
    {

        if (is_null($group_ids)) {
            throw new \InvalidArgumentException('non-nullable group_ids cannot be null');
        }

        $this->container['group_ids'] = $group_ids;

        return $this;
    }

    /**
     * Gets timeframe_filter
     *
     * @return \KlaviyoAPI\Model\ProfileMetricConditionTimeframeFilter
     */
    public function getTimeframeFilter()
    {
        return $this->container['timeframe_filter'];
    }

    /**
     * Sets timeframe_filter
     *
     * @param \KlaviyoAPI\Model\ProfileMetricConditionTimeframeFilter $timeframe_filter timeframe_filter
     *
     * @return self
     */
    public function setTimeframeFilter($timeframe_filter)
    {

        if (is_null($timeframe_filter)) {
            throw new \InvalidArgumentException('non-nullable timeframe_filter cannot be null');
        }

        $this->container['timeframe_filter'] = $timeframe_filter;

        return $this;
    }

    /**
     * Gets metric_id
     *
     * @return string
     */
    public function getMetricId()
    {
        return $this->container['metric_id'];
    }

    /**
     * Sets metric_id
     *
     * @param string $metric_id metric_id
     *
     * @return self
     */
    public function setMetricId($metric_id)
    {

        if (is_null($metric_id)) {
            throw new \InvalidArgumentException('non-nullable metric_id cannot be null');
        }

        $this->container['metric_id'] = $metric_id;

        return $this;
    }

    /**
     * Gets measurement
     *
     * @return string
     */
    public function getMeasurement()
    {
        return $this->container['measurement'];
    }

    /**
     * Sets measurement
     *
     * @param string $measurement Measurements for profile metrics.
     *
     * @return self
     */
    public function setMeasurement($measurement)
    {
        $allowedValues = $this->getMeasurementAllowableValues();
        if (!in_array($measurement, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'measurement', must be one of '%s'",
                    $measurement,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($measurement)) {
            throw new \InvalidArgumentException('non-nullable measurement cannot be null');
        }

        $this->container['measurement'] = $measurement;

        return $this;
    }

    /**
     * Gets measurement_filter
     *
     * @return \KlaviyoAPI\Model\NumericOperatorFilter
     */
    public function getMeasurementFilter()
    {
        return $this->container['measurement_filter'];
    }

    /**
     * Sets measurement_filter
     *
     * @param \KlaviyoAPI\Model\NumericOperatorFilter $measurement_filter measurement_filter
     *
     * @return self
     */
    public function setMeasurementFilter($measurement_filter)
    {

        if (is_null($measurement_filter)) {
            throw new \InvalidArgumentException('non-nullable measurement_filter cannot be null');
        }

        $this->container['measurement_filter'] = $measurement_filter;

        return $this;
    }

    /**
     * Gets metric_filters
     *
     * @return \KlaviyoAPI\Model\ProfileMetricPropertyFilter[]|null
     */
    public function getMetricFilters()
    {
        return $this->container['metric_filters'];
    }

    /**
     * Sets metric_filters
     *
     * @param \KlaviyoAPI\Model\ProfileMetricPropertyFilter[]|null $metric_filters metric_filters
     *
     * @return self
     */
    public function setMetricFilters($metric_filters)
    {

        if (is_null($metric_filters)) {
            array_push($this->openAPINullablesSetToNull, 'metric_filters');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('metric_filters', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['metric_filters'] = $metric_filters;

        return $this;
    }

    /**
     * Gets consent
     *
     * @return \KlaviyoAPI\Model\ProfileMarketingConsentConditionConsent
     */
    public function getConsent()
    {
        return $this->container['consent'];
    }

    /**
     * Sets consent
     *
     * @param \KlaviyoAPI\Model\ProfileMarketingConsentConditionConsent $consent consent
     *
     * @return self
     */
    public function setConsent($consent)
    {

        if (is_null($consent)) {
            throw new \InvalidArgumentException('non-nullable consent cannot be null');
        }

        $this->container['consent'] = $consent;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code country_code
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {

        if (is_null($country_code)) {
            throw new \InvalidArgumentException('non-nullable country_code cannot be null');
        }

        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code postal_code
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {

        if (is_null($postal_code)) {
            throw new \InvalidArgumentException('non-nullable postal_code cannot be null');
        }

        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string $unit Units for profile postal code distance conditions.
     *
     * @return self
     */
    public function setUnit($unit)
    {
        $allowedValues = $this->getUnitAllowableValues();
        if (!in_array($unit, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'unit', must be one of '%s'",
                    $unit,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($unit)) {
            throw new \InvalidArgumentException('non-nullable unit cannot be null');
        }

        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets filter
     *
     * @return \KlaviyoAPI\Model\ProfilePredictiveAnalyticsStringFilter
     */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
     * Sets filter
     *
     * @param \KlaviyoAPI\Model\ProfilePredictiveAnalyticsStringFilter $filter filter
     *
     * @return self
     */
    public function setFilter($filter)
    {

        if (is_null($filter)) {
            throw new \InvalidArgumentException('non-nullable filter cannot be null');
        }

        $this->container['filter'] = $filter;

        return $this;
    }

    /**
     * Gets property
     *
     * @return string
     */
    public function getProperty()
    {
        return $this->container['property'];
    }

    /**
     * Sets property
     *
     * @param string $property property
     *
     * @return self
     */
    public function setProperty($property)
    {

        if (is_null($property)) {
            throw new \InvalidArgumentException('non-nullable property cannot be null');
        }

        $this->container['property'] = $property;

        return $this;
    }

    /**
     * Gets in_region
     *
     * @return bool
     */
    public function getInRegion()
    {
        return $this->container['in_region'];
    }

    /**
     * Sets in_region
     *
     * @param bool $in_region in_region
     *
     * @return self
     */
    public function setInRegion($in_region)
    {

        if (is_null($in_region)) {
            throw new \InvalidArgumentException('non-nullable in_region cannot be null');
        }

        $this->container['in_region'] = $in_region;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string $region Regions for profile region conditions.
     *
     * @return self
     */
    public function setRegion($region)
    {
        $allowedValues = $this->getRegionAllowableValues();
        if (!in_array($region, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'region', must be one of '%s'",
                    $region,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($region)) {
            throw new \InvalidArgumentException('non-nullable region cannot be null');
        }

        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets dimension
     *
     * @return string
     */
    public function getDimension()
    {
        return $this->container['dimension'];
    }

    /**
     * Sets dimension
     *
     * @param string $dimension Dimension for string profile predictive analytics conditions.
     *
     * @return self
     */
    public function setDimension($dimension)
    {
        $allowedValues = $this->getDimensionAllowableValues();
        if (!in_array($dimension, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'dimension', must be one of '%s'",
                    $dimension,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($dimension)) {
            throw new \InvalidArgumentException('non-nullable dimension cannot be null');
        }

        $this->container['dimension'] = $dimension;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


