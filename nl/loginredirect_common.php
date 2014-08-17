<?php
/**
*
* @package User Login Redirect [Dutch]
* @copyright (c) 2014 david63, Dutch Translation
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ANNOUNCE_OPTIONS'						=> 'Aankondigingsopties',
	'ANNOUNCE_REDIR_TOPIC'					=> 'Aankondigings-doorsturen bij aanmelden',
	'ANNOUNCE_REDIR_TOPIC_EXPLAIN'			=> 'Stuur alle gebruikers door die niet zijn aangemeld sinds een aankondiging was geplaatst.',
	'ANNOUNCE_REDIR_TOPIC_ID'				=> 'Aankondigings-doorsturen bij aanmelden onderwerp-ID',
	'ANNOUNCE_REDIR_TOPIC_ID_EXPLAIN'  		=> 'Vul het ID van het onderwerp in waarnaar je de gebruikers wilt sturen. De tijd van het bericht wordt vergeleken met de tijd wanneer de gebruiker voor het laatst aangemeld was, als de gebruiker niet aangemeld was sinds het onderwerp was geplaatst, dan worden ze doorgestuurd, anders kunnen de gebruikers doorgaan zoals altijd.',

	'LOGIN_ANNOUNCE_REDIRECT_TOPIC'         => 'Je bent succesvol aangemeld. Het beheer heeft een nieuwe aankondiging geplaatst sinds je laatste bezoek, waar je nu naar toe geleid zal worden.',
	'LOGIN_NEW_USER_WELCOME_TOPIC_REDIRECT'	=> 'Je bent succesvol aangemeld. Aangezien dit je eerste bezoek is, zal je doorgestuurd worden naar ons welkomsonderwerp.',
	'LOGIN_REDIRECT'						=> 'Aanmeld-doorsturen',
	'LOGIN_REDIRECT_EXPLAIN'				=> 'Hier kan je kiezen of een nieuwe gebruiker doorgestuurd wordt naar een specifiek onderwerp bij hun eerste keer aanmelden en/of alle gebruikers doorsturen naar een aankondiging die ze nog niet gezien hebben.',

	'NEW_USER_OPTIONS'						=> 'Nieuwe gebruikeropties',
	'NEW_USER_WELCOME_TOPIC'            	=> 'Nieuwe gebruiker welkom doorsturing',
	'NEW_USER_WELCOME_TOPIC_EXPLAIN'		=> 'Stuur alle nieuwe gebruikers door naar een specifiek onderwerp bij hun eerste keer aanmelden op het forum.',
	'NEW_USER_WELCOME_TOPIC_ID'				=> 'Nieuwe gebruikers welkomsonderwerp-ID',
	'NEW_USER_WELCOME_TOPIC_ID_EXPLAIN'		=> 'Vul het ID van het onderwerp in waarnaar je alle nieuwe gebruikers wilt sturen.',

	'REDIRECT_ANNOUNCE_MESSAGE_EXPLAIN'		=> 'Geeft een bericht weer dat de gebruiker vertelt dat hij wordt doorgestuurd naar de aankondiging.',
	'REDIRECT_MESSAGE'						=> 'Toon doorstuurbericht',
	'REDIRECT_USER_MESSAGE_EXPLAIN'			=> 'Geeft een bericht weer dat de nieuwe gebruiker vertelt dat hij wordt doorgestuurd naar de nieuwe gebruikersonderwerp.',
	'RETURN_ANNOUNCE_REDIRECT_TOPIC'		=> '%sDoorgaan naar de aankondiging%s',
	'RETURN_NEW_USER_WELCOME_TOPIC'			=> '%sDoorgaan naar het welkomsonderwerp%s',
));

?>