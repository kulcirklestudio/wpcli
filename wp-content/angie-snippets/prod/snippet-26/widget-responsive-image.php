<?php

namespace AngieSnippets;

if ( ! defined( 'ABSPATH' ) ) { exit; }

if ( class_exists( '\AngieSnippets\Responsive_Image_3b4e5958' ) ) { return; }

class Responsive_Image_3b4e5958 extends \Elementor\Widget_Base {

    public function get_name() { return 'responsive_image_3b4e5958'; }
    public function get_title() { return esc_html__( 'Responsive Image', 'angie-snippets' ); }
    public function get_icon() { return 'eicon-image'; }
    public function get_categories() { return [ 'angie-widgets', 'general' ]; }
    public function get_style_depends() { return [ 'responsive-image-style-3b4e5958' ]; }

    protected function register_controls() {

        // --- Content Tab: Desktop Image ---
        $this->start_controls_section( 'section_desktop_image', [
            'label' => esc_html__( 'Desktop Image', 'angie-snippets' ),
            'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
        ] );

        $this->add_control( 'desktop_image', [
            'label'   => esc_html__( 'Choose Image', 'angie-snippets' ),
            'type'    => \Elementor\Controls_Manager::MEDIA,
            'default' => [ 'url' => \Elementor\Utils::get_placeholder_image_src() ],
        ] );

        $this->add_group_control( \Elementor\Group_Control_Image_Size::get_type(), [
            'name'    => 'desktop_image_size',
            'default' => 'full',
        ] );

        $this->add_control( 'desktop_alt', [
            'label'       => esc_html__( 'Alt Text', 'angie-snippets' ),
            'type'        => \Elementor\Controls_Manager::TEXT,
            'default'     => '',
            'placeholder' => esc_html__( 'Enter alt text', 'angie-snippets' ),
            'label_block' => true,
        ] );

        $this->add_control( 'desktop_link', [
            'label'       => esc_html__( 'Link', 'angie-snippets' ),
            'type'        => \Elementor\Controls_Manager::URL,
            'placeholder' => esc_html__( 'https://your-link.com', 'angie-snippets' ),
            'default'     => [ 'url' => '' ],
        ] );

        $this->end_controls_section();

        // --- Content Tab: Mobile Image ---
        $this->start_controls_section( 'section_mobile_image', [
            'label' => esc_html__( 'Mobile Image', 'angie-snippets' ),
            'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
        ] );

        $this->add_control( 'mobile_image', [
            'label'   => esc_html__( 'Choose Image', 'angie-snippets' ),
            'type'    => \Elementor\Controls_Manager::MEDIA,
            'default' => [ 'url' => \Elementor\Utils::get_placeholder_image_src() ],
        ] );

        $this->add_group_control( \Elementor\Group_Control_Image_Size::get_type(), [
            'name'    => 'mobile_image_size',
            'default' => 'full',
        ] );

        $this->add_control( 'mobile_alt', [
            'label'       => esc_html__( 'Alt Text', 'angie-snippets' ),
            'type'        => \Elementor\Controls_Manager::TEXT,
            'default'     => '',
            'placeholder' => esc_html__( 'Enter alt text', 'angie-snippets' ),
            'label_block' => true,
        ] );

        $this->add_control( 'mobile_link', [
            'label'       => esc_html__( 'Link', 'angie-snippets' ),
            'type'        => \Elementor\Controls_Manager::URL,
            'placeholder' => esc_html__( 'https://your-link.com', 'angie-snippets' ),
            'default'     => [ 'url' => '' ],
        ] );

        $this->end_controls_section();

        // --- Content Tab: Breakpoint ---
        $this->start_controls_section( 'section_breakpoint', [
            'label' => esc_html__( 'Breakpoint', 'angie-snippets' ),
            'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
        ] );

        $this->add_control( 'breakpoint', [
            'label'       => esc_html__( 'Mobile Max Width (px)', 'angie-snippets' ),
            'type'        => \Elementor\Controls_Manager::NUMBER,
            'default'     => 767,
            'min'         => 320,
            'max'         => 1440,
            'description' => esc_html__( 'Screens at or below this width will show the mobile image.', 'angie-snippets' ),
        ] );

        $this->end_controls_section();

        // --- Style Tab: Image Style ---
        $this->start_controls_section( 'section_style_image', [
            'label' => esc_html__( 'Image', 'angie-snippets' ),
            'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
        ] );

        $this->add_responsive_control( 'image_width', [
            'label'      => esc_html__( 'Width', 'angie-snippets' ),
            'type'       => \Elementor\Controls_Manager::SLIDER,
            'size_units' => [ 'px', '%', 'vw' ],
            'range'      => [
                'px' => [ 'min' => 0, 'max' => 2000 ],
                '%'  => [ 'min' => 0, 'max' => 100 ],
                'vw' => [ 'min' => 0, 'max' => 100 ],
            ],
            'selectors' => [
                '{{WRAPPER}} .ri-3b4e5958-picture img' => 'width: {{SIZE}}{{UNIT}};',
            ],
        ] );

        $this->add_responsive_control( 'image_max_width', [
            'label'      => esc_html__( 'Max Width', 'angie-snippets' ),
            'type'       => \Elementor\Controls_Manager::SLIDER,
            'size_units' => [ 'px', '%' ],
            'range'      => [
                'px' => [ 'min' => 0, 'max' => 2000 ],
                '%'  => [ 'min' => 0, 'max' => 100 ],
            ],
            'selectors' => [
                '{{WRAPPER}} .ri-3b4e5958-picture img' => 'max-width: {{SIZE}}{{UNIT}};',
            ],
        ] );

        $this->add_responsive_control( 'image_height', [
            'label'      => esc_html__( 'Height', 'angie-snippets' ),
            'type'       => \Elementor\Controls_Manager::SLIDER,
            'size_units' => [ 'px', 'vh' ],
            'range'      => [
                'px' => [ 'min' => 0, 'max' => 2000 ],
                'vh' => [ 'min' => 0, 'max' => 100 ],
            ],
            'selectors' => [
                '{{WRAPPER}} .ri-3b4e5958-picture img' => 'height: {{SIZE}}{{UNIT}};',
            ],
        ] );

        $this->add_responsive_control( 'image_object_fit', [
            'label'   => esc_html__( 'Object Fit', 'angie-snippets' ),
            'type'    => \Elementor\Controls_Manager::SELECT,
            'default' => '',
            'options' => [
                ''        => esc_html__( 'Default', 'angie-snippets' ),
                'cover'   => esc_html__( 'Cover', 'angie-snippets' ),
                'contain' => esc_html__( 'Contain', 'angie-snippets' ),
                'fill'    => esc_html__( 'Fill', 'angie-snippets' ),
            ],
            'selectors' => [
                '{{WRAPPER}} .ri-3b4e5958-picture img' => 'object-fit: {{VALUE}};',
            ],
        ] );

        $this->add_responsive_control( 'image_align', [
            'label'   => esc_html__( 'Alignment', 'angie-snippets' ),
            'type'    => \Elementor\Controls_Manager::CHOOSE,
            'options' => [
                'left'   => [ 'title' => esc_html__( 'Left', 'angie-snippets' ), 'icon' => 'eicon-text-align-left' ],
                'center' => [ 'title' => esc_html__( 'Center', 'angie-snippets' ), 'icon' => 'eicon-text-align-center' ],
                'right'  => [ 'title' => esc_html__( 'Right', 'angie-snippets' ), 'icon' => 'eicon-text-align-right' ],
            ],
            'selectors' => [
                '{{WRAPPER}} .ri-3b4e5958-wrapper' => 'text-align: {{VALUE}};',
            ],
        ] );

        $this->add_group_control( \Elementor\Group_Control_Border::get_type(), [
            'name'     => 'image_border',
            'selector' => '{{WRAPPER}} .ri-3b4e5958-picture img',
        ] );

        $this->add_responsive_control( 'image_border_radius', [
            'label'      => esc_html__( 'Border Radius', 'angie-snippets' ),
            'type'       => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%' ],
            'selectors'  => [
                '{{WRAPPER}} .ri-3b4e5958-picture img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ] );

        $this->add_group_control( \Elementor\Group_Control_Box_Shadow::get_type(), [
            'name'     => 'image_box_shadow',
            'selector' => '{{WRAPPER}} .ri-3b4e5958-picture img',
        ] );

        $this->add_control( 'image_opacity', [
            'label'   => esc_html__( 'Opacity', 'angie-snippets' ),
            'type'    => \Elementor\Controls_Manager::SLIDER,
            'range'   => [ 'px' => [ 'min' => 0, 'max' => 1, 'step' => 0.05 ] ],
            'selectors' => [
                '{{WRAPPER}} .ri-3b4e5958-picture img' => 'opacity: {{SIZE}};',
            ],
        ] );

        $this->add_control( 'image_hover_opacity', [
            'label'   => esc_html__( 'Hover Opacity', 'angie-snippets' ),
            'type'    => \Elementor\Controls_Manager::SLIDER,
            'range'   => [ 'px' => [ 'min' => 0, 'max' => 1, 'step' => 0.05 ] ],
            'selectors' => [
                '{{WRAPPER}} .ri-3b4e5958-picture img:hover' => 'opacity: {{SIZE}};',
            ],
        ] );

        $this->add_control( 'image_transition', [
            'label'   => esc_html__( 'Transition Duration (s)', 'angie-snippets' ),
            'type'    => \Elementor\Controls_Manager::SLIDER,
            'range'   => [ 'px' => [ 'min' => 0, 'max' => 3, 'step' => 0.1 ] ],
            'default' => [ 'size' => 0.3 ],
            'selectors' => [
                '{{WRAPPER}} .ri-3b4e5958-picture img' => 'transition: opacity {{SIZE}}s;',
            ],
        ] );

        $this->end_controls_section();
    }

    private function get_image_url( $image_settings, $size_prefix ) {
        $settings = $this->get_settings_for_display();
        if ( ! empty( $image_settings['id'] ) ) {
            $size = ! empty( $settings[ $size_prefix . '_size' ] ) ? $settings[ $size_prefix . '_size' ] : 'full';
            $url  = wp_get_attachment_image_url( $image_settings['id'], $size );
            if ( $url ) {
                return $url;
            }
        }
        return ! empty( $image_settings['url'] ) ? $image_settings['url'] : '';
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        $desktop_url = $this->get_image_url( $settings['desktop_image'], 'desktop_image_size' );
        $mobile_url  = $this->get_image_url( $settings['mobile_image'], 'mobile_image_size' );
        $breakpoint  = ! empty( $settings['breakpoint'] ) ? absint( $settings['breakpoint'] ) : 767;

        $desktop_alt = ! empty( $settings['desktop_alt'] ) ? $settings['desktop_alt'] : '';
        $mobile_alt  = ! empty( $settings['mobile_alt'] ) ? $settings['mobile_alt'] : '';

        $desktop_link = ! empty( $settings['desktop_link']['url'] ) ? $settings['desktop_link'] : null;
        $mobile_link  = ! empty( $settings['mobile_link']['url'] ) ? $settings['mobile_link'] : null;

        $link = $desktop_link ? $desktop_link : $mobile_link;

        $has_link = ! empty( $link['url'] );

        echo '<div class="ri-3b4e5958-wrapper">';

        if ( $has_link ) {
            $this->add_link_attributes( 'image_link', $link );
            echo '<a ' . $this->get_render_attribute_string( 'image_link' ) . '>';
        }

        echo '<picture class="ri-3b4e5958-picture">';

        if ( $mobile_url ) {
            echo '<source media="(max-width: ' . esc_attr( $breakpoint ) . 'px)" srcset="' . esc_url( $mobile_url ) . '">';
        }

        if ( $desktop_url ) {
            echo '<img src="' . esc_url( $desktop_url ) . '" alt="' . esc_attr( $desktop_alt ) . '" class="ri-3b4e5958-img">';
        }

        echo '</picture>';

        if ( $has_link ) {
            echo '</a>';
        }

        echo '</div>';
    }

    protected function content_template() {
        ?>
        <#
        var desktopUrl = '';
        var mobileUrl  = '';

        if ( settings.desktop_image && settings.desktop_image.url ) {
            desktopUrl = settings.desktop_image.url;
        }
        if ( settings.mobile_image && settings.mobile_image.url ) {
            mobileUrl = settings.mobile_image.url;
        }

        var breakpoint  = settings.breakpoint ? settings.breakpoint : 767;
        var desktopAlt  = settings.desktop_alt ? settings.desktop_alt : '';
        var mobileAlt   = settings.mobile_alt ? settings.mobile_alt : '';

        var hasDesktopLink = settings.desktop_link && settings.desktop_link.url;
        var hasMobileLink  = settings.mobile_link && settings.mobile_link.url;
        var linkUrl = hasDesktopLink ? settings.desktop_link.url : ( hasMobileLink ? settings.mobile_link.url : '' );
        var linkTarget = '';
        var linkRel = '';

        if ( hasDesktopLink ) {
            linkTarget = settings.desktop_link.is_external ? ' target="_blank"' : '';
            linkRel = settings.desktop_link.nofollow ? ' rel="nofollow"' : '';
        } else if ( hasMobileLink ) {
            linkTarget = settings.mobile_link.is_external ? ' target="_blank"' : '';
            linkRel = settings.mobile_link.nofollow ? ' rel="nofollow"' : '';
        }
        #>
        <div class="ri-3b4e5958-wrapper">
            <# if ( linkUrl ) { #>
                <a href="{{{ linkUrl }}}" {{{ linkTarget }}} {{{ linkRel }}}>
            <# } #>
            <picture class="ri-3b4e5958-picture">
                <# if ( mobileUrl ) { #>
                    <source media="(max-width: {{ breakpoint }}px)" srcset="{{{ mobileUrl }}}">
                <# } #>
                <# if ( desktopUrl ) { #>
                    <img src="{{{ desktopUrl }}}" alt="{{ desktopAlt }}" class="ri-3b4e5958-img">
                <# } #>
            </picture>
            <# if ( linkUrl ) { #>
                </a>
            <# } #>
        </div>
        <?php
    }
}
