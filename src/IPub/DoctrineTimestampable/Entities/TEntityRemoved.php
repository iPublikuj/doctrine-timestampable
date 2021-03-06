<?php
/**
 * TEntityRemoved.php
 *
 * @copyright      More in license.md
 * @license        https://www.ipublikuj.eu
 * @author         Adam Kadlec <adam.kadlec@ipublikuj.eu>
 * @package        iPublikuj:DoctrineTimestampable!
 * @subpackage     Entities
 * @since          1.0.0
 *
 * @date           06.01.15
 */

declare(strict_types = 1);

namespace IPub\DoctrineTimestampable\Entities;

use DateTimeInterface;

use IPub\DoctrineTimestampable\Mapping\Annotation as IPub;

/**
 * Doctrine timestampable removing entity
 *
 * @package        iPublikuj:DoctrineTimestampable!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@ipublikuj.eu>
 */
trait TEntityRemoved
{
	/**
	 * @var DateTimeInterface|NULL
	 *
	 * @IPub\Timestampable(on="delete")
	 */
	protected $deletedAt;

	/**
	 * @param DateTimeInterface $deletedAt
	 *
	 * @return void
	 */
	public function setDeletedAt(DateTimeInterface $deletedAt) : void
	{
		$this->deletedAt = $deletedAt;
	}

	/**
	 * @return DateTimeInterface|NULL
	 */
	public function getDeletedAt() : ?DateTimeInterface
	{
		return $this->deletedAt;
	}
}
