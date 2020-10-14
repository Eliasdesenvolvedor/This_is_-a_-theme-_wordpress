<html <?php language_attributes(); ?>>

<head>
		<title> <?php bloginfo( 'name' )?> - <?php bloginfo( 'description' )?> </title> <!-- coloca o título(adm geral) e o nome da postagem  -->
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		

		<?php wp_head(); ?> 

	</head>
	
	<style>
	.flex{
		 
	display: flex;
	flex-direction: row;
	height: 900px; 
	}
	
	.principal {
	font-size: 2em;
	 
	width: 80%; 
	height: auto; 
	
		
	}
	.imagemprincipal {
		
		list-style-type: none;
		width:100%; 
		 height: 900px; 
		margin-left:-30%;
		z-index: -1;
	}
	.imagemprincipal img {
		width:100%; 
		 height: auto; 
	}
	
@media only screen and (min-width: 620px) {

.principal {
	font-size: 6em;
	 
	width: 95%; 
	height: 300px; 
	
		
	}
 .imagemprincipal {
		
		list-style-type: none;
		margin-left:-190px;
		width: 100%; 
		height: 300px;
		z-index: -1;
	}





}
.escrita{
	
text-shadow: 1px 1px #333;
	
}
	
	
	</style>
	
	<body <?php body_class(); ?>>
	


	
	
	 
	


