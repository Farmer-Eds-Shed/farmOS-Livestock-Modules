<?php

namespace Drupal\farm_reference_animal\Plugin\Asset\AssetType;

use Drupal\farm_entity\Plugin\Asset\AssetType\FarmAssetType;

/**
 * Provides the reference animal asset type.
 *
 * @AssetType(
 *   id = "reference_animal",
 *   label = @Translation("Reference Animal"),
 * )
 */
class Reference_Animal extends FarmAssetType {

  /**
   * {@inheritdoc}
   */
  public function buildFieldDefinitions() {
    $fields = parent::buildFieldDefinitions();
    $field_info = [

      'nickname' => [
        'type' => 'string',
        'label' => $this->t('Nicknames'),
        'description' => $this->t('List any nicknames of this animal.'),
        'multiple' => TRUE,
        'weight' => [
          'form' => 10,
          'view' => -40,
        ],
      ],

    ];
    foreach ($field_info as $name => $info) {
      $fields[$name] = $this->farmFieldFactory->bundleFieldDefinition($info);
    }
    return $fields;
  }

}