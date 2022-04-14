<?php

namespace Drupal\farm_animal_purchase\Plugin\Log\LogType;

use Drupal\farm_entity\Plugin\Log\LogType\FarmLogType;

/**
 * Provides the animal purchase log type.
 *
 * @LogType(
 *   id = "animal_purchase",
 *   label = @Translation("Animal Purchase"),
 * )
 */
class Animal_Purchase extends FarmLogType {

  /**
   * {@inheritdoc}
   */
  public function buildFieldDefinitions() {
    $fields = parent::buildFieldDefinitions();

    // Purchase Source.
    $options = [
      'type' => 'string',
      'label' => $this->t('Purchase Source'),
      'description' => $this->t('enter source details here (farm/mart etc.)'),
      'weight' => [
        'form' => 20,
        'view' => 20,
      ],
    ];
    $fields['purchase'] = $this->farmFieldFactory->bundleFieldDefinition($options);

    return $fields;
  }

}
