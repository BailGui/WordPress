<?php
/**
 * Gutenverse Accordions
 *
 * @author Jegstudio
 * @since 1.0.0
 * @package gutenverse\style
 */

namespace Gutenverse\Style;

/**
 * Class Accordions
 *
 * @package gutenverse\style
 */
class Accordions extends Style_Abstract {
	/**
	 * Block Name
	 *
	 * @var array
	 */
	protected $name = 'accordions';

	/**
	 * Constructor
	 *
	 * @param array $attrs Attribute.
	 */
	public function __construct( $attrs ) {
		parent::__construct( $attrs );

		$this->set_feature(
			array(
				'background'  => null,
				'border'      => null,
				'positioning' => null,
				'animation'   => null,
				'advance'     => null,
			)
		);
	}

	/**
	 * Generate style base on attribute.
	 */
	public function generate() {
		if ( isset( $this->attrs['accordionBorder'] ) ) {
			$this->handle_border( 'accordionBorder', ".{$this->element_id} .accordion-item" );
		}

		if ( isset( $this->attrs['accordionBorderActive'] ) ) {
			$this->handle_border( 'accordionBorderActive', ".{$this->element_id} .accordion-item.active" );
		}

		if ( isset( $this->attrs['accordionBoxShadow'] ) ) {
			$this->inject_style(
				array(
					'selector'       => ".{$this->element_id} .accordion-item",
					'property'       => function ( $value ) {
						return $this->handle_box_shadow( $value );
					},
					'value'          => $this->attrs['accordionBoxShadow'],
					'device_control' => false,
				)
			);
		}

		if ( isset( $this->attrs['accordionBoxShadowActive'] ) ) {
			$this->inject_style(
				array(
					'selector'       => ".{$this->element_id} .accordion-item.active",
					'property'       => function ( $value ) {
						return $this->handle_box_shadow( $value );
					},
					'value'          => $this->attrs['accordionBoxShadowActive'],
					'device_control' => false,
				)
			);
		}

		if ( isset( $this->attrs['accordionMargin'] ) ) {
			$this->inject_style(
				array(
					'selector'       => ".{$this->element_id} .accordion-item",
					'property'       => function ( $value ) {
						return $this->handle_dimension( $value, 'margin' );
					},
					'value'          => $this->attrs['accordionMargin'],
					'device_control' => true,
				)
			);
		}

		if ( isset( $this->attrs['iconColor'] ) ) {
			$this->inject_style(
				array(
					'selector'       => ".{$this->element_id} .accordion-item .accordion-icon i",
					'property'       => function ( $value ) {
						return $this->handle_color( $value, 'color' );
					},
					'value'          => $this->attrs['iconColor'],
					'device_control' => false,
				)
			);
		}

		if ( isset( $this->attrs['iconActiveColor'] ) ) {
			$this->inject_style(
				array(
					'selector'       => ".{$this->element_id} .accordion-item.active .accordion-icon i",
					'property'       => function ( $value ) {
						return $this->handle_color( $value, 'color' );
					},
					'value'          => $this->attrs['iconActiveColor'],
					'device_control' => false,
				)
			);
		}

		if ( isset( $this->attrs['iconPosition'] ) && isset( $this->attrs['iconSpacing'] ) ) {
			if ( 'left' === $this->attrs['iconPosition'] ) {
				$this->inject_style(
					array(
						'selector'       => ".{$this->element_id} .accordion-item .accordion-icon",
						'property'       => function ( $value ) {
							return "margin-right: {$value}px;";
						},
						'value'          => $this->attrs['iconSpacing'],
						'device_control' => true,
					)
				);
			}

			if ( 'right' === $this->attrs['iconPosition'] ) {
				$this->inject_style(
					array(
						'selector'       => ".{$this->element_id} .accordion-item .accordion-icon",
						'property'       => function ( $value ) {
							return "margin-left: {$value}px;";
						},
						'value'          => $this->attrs['iconSpacing'],
						'device_control' => true,
					)
				);
			}
		}

		if ( isset( $this->attrs['iconSize'] ) ) {
			$this->inject_style(
				array(
					'selector'       => ".{$this->element_id} .accordion-item .accordion-icon",
					'property'       => function ( $value ) {
						return "font-size: {$value}px;";
					},
					'value'          => $this->attrs['iconSize'],
					'device_control' => true,
				)
			);
		}

		if ( isset( $this->attrs['titleBackgroundColor'] ) ) {
			$this->inject_style(
				array(
					'selector'       => ".{$this->element_id} .accordion-item .accordion-heading",
					'property'       => function ( $value ) {
						return $this->handle_color( $value, 'background-color' );
					},
					'value'          => $this->attrs['titleBackgroundColor'],
					'device_control' => false,
				)
			);
		}

		if ( isset( $this->attrs['titleTextColor'] ) ) {
			$this->inject_style(
				array(
					'selector'       => ".{$this->element_id} .accordion-item .accordion-text",
					'property'       => function ( $value ) {
						return $this->handle_color( $value, 'color' );
					},
					'value'          => $this->attrs['titleTextColor'],
					'device_control' => false,
				)
			);
		}

		if ( isset( $this->attrs['titleBackgroundActiveColor'] ) ) {
			$this->inject_style(
				array(
					'selector'       => ".{$this->element_id} .accordion-item.active .accordion-heading",
					'property'       => function ( $value ) {
						return $this->handle_color( $value, 'background-color' );
					},
					'value'          => $this->attrs['titleBackgroundActiveColor'],
					'device_control' => false,
				)
			);
		}

		if ( isset( $this->attrs['titleActiveColor'] ) ) {
			$this->inject_style(
				array(
					'selector'       => ".{$this->element_id} .accordion-item.active .accordion-text",
					'property'       => function ( $value ) {
						return $this->handle_color( $value, 'color' );
					},
					'value'          => $this->attrs['titleActiveColor'],
					'device_control' => false,
				)
			);
		}

		if ( isset( $this->attrs['titleTypography'] ) ) {
			$this->inject_typography(
				array(
					'selector'       => ".{$this->element_id} .accordion-item .accordion-text",
					'property'       => function ( $value ) {},
					'value'          => $this->attrs['titleTypography'],
					'device_control' => false,
				)
			);
		}

		if ( isset( $this->attrs['titlePadding'] ) ) {
			$this->inject_style(
				array(
					'selector'       => ".{$this->element_id} .accordion-item .accordion-heading",
					'property'       => function ( $value ) {
						return $this->handle_dimension( $value, 'padding' );
					},
					'value'          => $this->attrs['titlePadding'],
					'device_control' => true,
				)
			);
		}

		if ( isset( $this->attrs['titleBorder'] ) ) {
			$this->handle_border( 'titleBorder', ".{$this->element_id} .accordion-item .accordion-heading" );
		}

		if ( isset( $this->attrs['titleBorderActive'] ) ) {
			$this->handle_border( 'titleBorderActive', ".{$this->element_id} .accordion-item.active .accordion-heading" );
		}

		if ( isset( $this->attrs['contentBackgroundColor'] ) ) {
			$this->inject_style(
				array(
					'selector'       => ".{$this->element_id} .accordion-item .accordion-content",
					'property'       => function ( $value ) {
						return $this->handle_color( $value, 'background-color' );
					},
					'value'          => $this->attrs['contentBackgroundColor'],
					'device_control' => false,
				)
			);
		}

		if ( isset( $this->attrs['contentTextColor'] ) ) {
			$this->inject_style(
				array(
					'selector'       => ".{$this->element_id} .accordion-item .accordion-content",
					'property'       => function ( $value ) {
						return $this->handle_color( $value, 'color' );
					},
					'value'          => $this->attrs['contentTextColor'],
					'device_control' => false,
				)
			);
		}

		if ( isset( $this->attrs['contentBackgroundColorActive'] ) ) {
			$this->inject_style(
				array(
					'selector'       => ".{$this->element_id} .accordion-item.active .accordion-content",
					'property'       => function ( $value ) {
						return $this->handle_color( $value, 'background-color' );
					},
					'value'          => $this->attrs['contentBackgroundColorActive'],
					'device_control' => false,
				)
			);
		}

		if ( isset( $this->attrs['contentTextColorActive'] ) ) {
			$this->inject_style(
				array(
					'selector'       => ".{$this->element_id} .accordion-item.active .accordion-content",
					'property'       => function ( $value ) {
						return $this->handle_color( $value, 'color' );
					},
					'value'          => $this->attrs['contentTextColorActive'],
					'device_control' => false,
				)
			);
		}

		if ( isset( $this->attrs['contentTypography'] ) ) {
			$this->inject_typography(
				array(
					'selector'       => ".{$this->element_id} .accordion-item .accordion-content",
					'property'       => function ( $value ) {},
					'value'          => $this->attrs['contentTypography'],
					'device_control' => false,
				)
			);
		}

		if ( isset( $this->attrs['contentPadding'] ) ) {
			$this->inject_style(
				array(
					'selector'       => ".{$this->element_id} .accordion-item .accordion-content",
					'property'       => function ( $value ) {
						return $this->handle_dimension( $value, 'padding' );
					},
					'value'          => $this->attrs['contentPadding'],
					'device_control' => true,
				)
			);
		}

		if ( isset( $this->attrs['contentBorder'] ) ) {
			$this->handle_border( 'contentBorder', ".{$this->element_id} .accordion-item .accordion-content" );
		}

		if ( isset( $this->attrs['contentBorderActive'] ) ) {
			$this->handle_border( 'contentBorderActive', ".{$this->element_id} .accordion-item.active .accordion-content" );
		}
	}
}
