<?php

namespace Drupal\farm_animal_sale\Plugin\Log\LogType;

use Drupal\farm_entity\Plugin\Log\LogType\FarmLogType;

/**
 * Provides the animal sale log type.
 *
 * @LogType(
 *   id = "animal_sale",
 *   label = @Translation("Aniaml Sale"),
 * )
 */
class Animal_Sale extends FarmLogType {

  /**
   * {@inheritdoc}
   */
  public function buildFieldDefinitions() {
    $fields = parent::buildFieldDefinitions();

    // Lot number.
    $options = [
      'type' => 'string',
      'label' => $this->t('Lot number'),
      'description' => $this->t('If this Sale is part of a batch or lot, enter the lot number here.'),
      'weight' => [
        'form' => 20,
        'view' => 20,
      ],
    ];
    $fields['lot_number'] = $this->farmFieldFactory->bundleFieldDefinition($options);

    return $fields;
  }

}