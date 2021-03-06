<?php

namespace Drupal\commerce_installments\Entity;

use Drupal\commerce_payment\Entity\EntityWithPaymentGatewayInterface;
use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\RevisionLogInterface;

use Drupal\Core\Entity\EntityChangedInterface;


/**
 * Provides an interface for defining Installment Plan entities.
 *
 * @ingroup commerce_installments
 */
interface InstallmentPlanInterface extends ContentEntityInterface, RevisionLogInterface, EntityChangedInterface, EntityWithPaymentGatewayInterface {

  /**
   * Gets the payment method.
   *
   * @return \Drupal\commerce_payment\Entity\PaymentMethodInterface|null
   *   The payment method entity, or null if unknown.
   */
  public function getPaymentMethod();

  /**
   * Gets the payment method ID.
   *
   * @return int|null
   *   The payment method ID, or null if unknown.
   */
  public function getPaymentMethodId();

  /**
   * Gets the parent order.
   *
   * @return \Drupal\commerce_order\Entity\OrderInterface|null
   *   The order entity, or null.
   */
  public function getOrder();

  /**
   * Gets the parent order ID.
   *
   * @return int|null
   *   The order ID, or null.
   */
  public function getOrderId();

  /**
   * Gets the Installment Plan creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Installment Plan.
   */
  public function getCreatedTime();

  /**
   * Sets the Installment Plan creation timestamp.
   *
   * @param int $timestamp
   *   The Installment Plan creation timestamp.
   *
   * @return \Drupal\commerce_installments\Entity\InstallmentPlanInterface
   *   The called Installment Plan entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Gets the Installment Plan revision creation timestamp.
   *
   * @return int
   *   The UNIX timestamp of when this revision was created.
   */
  public function getRevisionCreationTime();

  /**
   * Sets the Installment Plan revision creation timestamp.
   *
   * @param int $timestamp
   *   The UNIX timestamp of when this revision was created.
   *
   * @return \Drupal\commerce_installments\Entity\InstallmentPlanInterface
   *   The called Installment Plan entity.
   */
  public function setRevisionCreationTime($timestamp);

  /**
   * Gets the Installment Plan revision author.
   *
   * @return \Drupal\user\UserInterface
   *   The user entity for the revision author.
   */
  public function getRevisionUser();

  /**
   * Sets the Installment Plan revision author.
   *
   * @param int $uid
   *   The user ID of the revision author.
   *
   * @return \Drupal\commerce_installments\Entity\InstallmentPlanInterface
   *   The called Installment Plan entity.
   */
  public function setRevisionUserId($uid);

}
