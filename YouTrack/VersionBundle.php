<?php
namespace YouTrack;

/**
 * Class VersionBundle
 *
 * @method VersionField[] getValues()
 */
class VersionBundle extends Bundle
{
    /**
     * @param \SimpleXMLElement|null $xml
     * @param Connection|null $youtrack
     */
    public function __construct(\SimpleXMLElement $xml = null, Connection $youtrack = null)
    {
        parent::__construct('value', 'versionBundle', $xml, $youtrack);
    }

    /**
     * @param \SimpleXMLElement $xml
     * @param Connection|null $youtrack
     *
     * @return VersionField
     */
    protected function createElement(\SimpleXMLElement $xml, Connection $youtrack = null)
    {
        return new VersionField($xml, $youtrack);
    }
}
