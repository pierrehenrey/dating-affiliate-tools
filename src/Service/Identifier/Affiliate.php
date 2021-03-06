<?php
/**
 * @author         Pierre-Henry Soria <pierrehenrysoria@gmail.com>
 * @copyright      (c) 2017, Pierre-Henry Soria. All Rights Reserved.
 * @license        GNU General Public License; <https://www.gnu.org/licenses/gpl-3.0.en.html>
 */

namespace DAT\Service\Identifier;

class Affiliate
{
    const MIN_AFFILIATE_ID_LENGTH = 2;

    /** @var int|string */
    private $affiliateId;

    /**
     * @param int|string $affiliateId
     *
     * @throws InvalidAffiliateIdException
     */
    public function __construct($affiliateId)
    {
        if (!$this->isValid($affiliateId)) {
            throw new InvalidAffiliateIdException('The affiliate ID is invalid');
        }

        $this->affiliateId = $affiliateId;
    }

    /**
     * @return int|string
     */
    public function getValue()
    {
        return $this->affiliateId;
    }

    /**
     * @param int $affiliateId
     *
     * @return bool
     */
    private function isValid($affiliateId)
    {
        return !empty($affiliateId) && strlen($affiliateId) >= self::MIN_AFFILIATE_ID_LENGTH;
    }
}
