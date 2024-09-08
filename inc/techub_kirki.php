

<?php 

new \Kirki\Panel(
	'techub_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Techub oftions', 'kirki' ),
		'description' => esc_html__( 'My Panel Description.', 'kirki' ),
	]
);


new \Kirki\Section(
	'techub_header_section',
	[
		'title'       => esc_html__( 'Header info', 'kirki' ),
		'description' => esc_html__( 'My Section Description.', 'kirki' ),
		'panel'       => 'techub_panel',
		'priority'    => 160,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'address_text',
		'label'    => esc_html__( 'Address Text', 'kirki' ),
		'section'  => 'techub_header_section',
		'default'  => esc_html__( ' Manchester 21, Zurich, CH', 'kirki' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'address_url',
		'label'    => esc_html__( 'Address URL', 'kirki' ),
		'section'  => 'techub_header_section',
		'default'  => esc_html__( '#', 'kirki' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'email_address',
		'label'    => esc_html__( 'Email ID', 'kirki' ),
		'section'  => 'techub_header_section',
		'default'  => esc_html__( '#', 'kirki' ),
		'priority' => 10,
	]
);