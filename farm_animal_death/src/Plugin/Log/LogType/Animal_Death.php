<?php

namespace Drupal\farm_animal_death\Plugin\Log\LogType;

use Drupal\farm_entity\Plugin\Log\LogType\FarmLogType;

/**
 * Provides the animal sale log type.
 *
 * @LogType(
 *   id = "animal_death",
 *   label = @Translation("Aniaml Death"),
 * )
 */
class Animal_Death extends FarmLogType {

  /**
   * {@inheritdoc}
   */
  public function buildFieldDefinitions() {
    $fields = parent::buildFieldDefinitions();

    // Knackery.
    $options = [
      'type' => 'string',
      'label' => $this->t('Knackery'),
      'description' => $this->t('enter Knackery details here.'),
      'weight' => [
        'form' => 20,
        'view' => 20,
      ],
    ];
    $fields['Knackery'] = $this->farmFieldFactory->bundleFieldDefinition($options);

    return $fields;
  }

}