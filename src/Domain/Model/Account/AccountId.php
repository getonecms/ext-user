<?php
declare(strict_types=1);

namespace OneCMS\User\Domain\Model\Account;

use OneCMS\Base\Domain\Service\Identity\IdentityServiceInterface;

/**
 * Class AccountId
 *
 * @package getonecms/user
 * @version 0.0.1
 * @since   0.0.1
 * @author  Mohammed Shifreen
 */
final class AccountId
{
    /**
     * @var string
     */
    private readonly string $value;
    
    /**
     * AccountId constructor.
     *
     * @param IdentityServiceInterface $identityService
     */
    public function __construct(IdentityServiceInterface $identityService)
    {
        $this->value = (string) $identityService->getId();
    }
    
    public function getValue(): string
    {
        return $this->value;
    }
}
