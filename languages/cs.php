<?php

return [

	// admin menu items
	'admin:widgets' => "Udělátka",
	'admin:widgets:manage' => "Spravovat",
	'admin:widgets:manage:index' => "Spravovat úvodní stránku",
	'admin:statistics:widgets' => "Použití udělátek",

	// widget edit wrapper
	'widget_manager:widgets:edit:custom_title' => "Vlastní název",
	'widget_manager:widgets:edit:custom_url' => "Vlastní odkaz názvu",
	'widget_manager:widgets:edit:custom_more_title' => "Vlastní text pro 'více'",
	'widget_manager:widgets:edit:custom_more_url' => "Vlastní odkaz pro 'více'",
	'widget_manager:widgets:edit:hide_header' => "Schovat záhlaví",
	'widget_manager:widgets:edit:custom_class' => "Vlastní CSS třída",
	'widget_manager:widgets:edit:disable_widget_content_style' => "Bez stylu udělátka",
	'widget_manager:widgets:edit:fixed_height' => "Pevná výška udělátka (v pixelech)",
	'widget_manager:widgets:edit:collapse_disable' => "Zakázat schopnost zabalení",
	'widget_manager:widgets:edit:collapse_state' => "Výchozí stav zabalení",

	// group
	'widget_manager:groups:enable_widget_manager' => "Povolit správu udělátek",

	// admin settings
	'widget_manager:settings:index' => "Úvodní stránka",
	'widget_manager:settings:group' => "Skupina",

	'widget_manager:settings:custom_index' => "Použít vlastní úvodní stránku Správce udělátek?",
	'widget_manager:settings:custom_index:non_loggedin' => "Pouze pro nepřihlášené uživatele",
	'widget_manager:settings:custom_index:loggedin' => "Pouze pro přihlášené uživatele",
	'widget_manager:settings:custom_index:all' => "Pro všechny uživatele",

	'widget_manager:settings:widget_layout' => "Zvolte rozvržení udělátek",
	'widget_manager:settings:widget_layout:33|33|33' => "Výchozí rozvržení (33 % na sloupec)",
	'widget_manager:settings:widget_layout:50|25|25' => "Široký levý sloupec (50 %, 25 %, 25 %)",
	'widget_manager:settings:widget_layout:25|50|25' => "Široký prostřední sloupec (25 %, 50 %, 25 %)",
	'widget_manager:settings:widget_layout:25|25|50' => "Široký pravý sloupec (25 %, 25 %, 50 %)",
	'widget_manager:settings:widget_layout:75|25' => "Dva sloupce (75 %, 25 %)",
	'widget_manager:settings:widget_layout:60|40' => "Dva sloupce (60 %, 40 %)",
	'widget_manager:settings:widget_layout:50|50' => "Dva sloupce (50 %, 50 %)",
	'widget_manager:settings:widget_layout:40|60' => "Dva sloupce (40 %, 60 %)",
	'widget_manager:settings:widget_layout:25|75' => "Dva sloupce (25 %, 75 %)",
	'widget_manager:settings:widget_layout:100' => "Jeden sloupec (100 %)",

	'widget_manager:settings:index_top_row' => "Horní řádek na úvodní stránce",
	'widget_manager:settings:index_top_row:none' => "Bez horního řádku",
	'widget_manager:settings:index_top_row:full_row' => "Řádek v plné šířce",
	'widget_manager:settings:index_top_row:two_column_left' => "Dvousloupcový zarovnaný vlevo",

	'widget_manager:settings:group:enable' => "Povolit Správce udělátek pro skupiny",
	'widget_manager:settings:group:enable:yes' => "Ano, volitelný přes nastavení skupiny",
	'widget_manager:settings:group:enable:forced' => "Ano, vždy zapnutý",
	'widget_manager:settings:group:option_default_enabled' => "Správce udělátek pro skupiny je ve výchozím stavu povolen",
	'widget_manager:settings:group:option_admin_only' => "Skupinová udělátka může povolit pouze správce",
	'widget_manager:settings:group:force_tool_widgets' => "Vynutit udělátka skupiny",
	'widget_manager:settings:group:force_tool_widgets:confirm' => "Jste si jistý/á? Tímto ve všech skupinách, kde je povolena správa udělátek, přidáte nebo odeberete všechna udělátka související s nastavením",

	'widget_manager:settings:extra_contexts' => "Dostupnost udělátek na dalších místech",
	'widget_manager:settings:extra_contexts:add' => "Přidat stránku",
	'widget_manager:settings:extra_contexts:description' => "Zadejte jméno zpracovače /handler/ nové stránky, který dostane rozložení podobné úvodní stránce. Můžete přidat tolik stránek kolik potřebujete. Ujistěte se, že nepřidáváte již použitý zpracovač. Pro stránku také můžete nastavit rozvržení sloupců a volitelně přidat zadáním uživatelských jmen běžné uživatele jako její správce. Pro přidání více správců je oddělte čárkou.",
	'widget_manager:settings:extra_contexts:page' => "Stránka",
	'widget_manager:settings:extra_contexts:layout' => "Rozvržení",
	'widget_manager:settings:extra_contexts:top_row' => "Dodatečný horní řádek",
	'widget_manager:settings:extra_contexts:manager' => "Správce",

	// views
	// settings
	'widget_manager:forms:manage_widgets:no_widgets' => "Žádná udělátka ke správě",
	'widget_manager:forms:manage_widgets:context' => 'K dispozici na',
	'widget_manager:forms:manage_widgets:can_add' => "Může být přidáno",
	'widget_manager:forms:manage_widgets:multiple' => "Může být několik stejných udělátek",
	'widget_manager:forms:manage_widgets:non_default' => "Toto nastavení se liší od výchozího",
	'widget_manager:forms:manage_widgets:unsupported_context:confirm' => "Jste si jistý/á, že chcete povolit udělátko na tomto místě? Mohou nastat problémy pokud udělátko toto místo nepodporuje.",

	// groups widget access
	'widget_manager:forms:groups_widget_access:title' => "Přístup k udělátkům",
	'widget_manager:forms:groups_widget_access:description' => "Tímto formulářem můžete všem udělátkům v této skupině nastavit úroveň přístupu na zadanou hodnotu.",
	
	// lightbox
	'widget_manager:button:add' => "Přidat udělátko",
	'widget_manager:widgets:lightbox:title:dashboard' => "Přidat udělátka do vaší osobní nástěnky",
	'widget_manager:widgets:lightbox:title:profile' => "Přidat udělátka do vašeho veřejného profilu",
	'widget_manager:widgets:lightbox:title:index' => "Přidat udělátka na úvodní stránku",
	'widget_manager:widgets:lightbox:title:groups' => "Přidat udělátka na profil skupiny",
	'widget_manager:widgets:lightbox:title:admin' => "Přidat udělátka na vaší správcovskou nástěnku",

	// actions
	// manage
	'widget_manager:action:manage:success' => "Nastavení udělátek bylo úspěšně uloženo",

	// force tool widgets
	'widget_manager:action:force_tool_widgets:error:not_enabled' => "Pro skupiny není povolena správa udělátek",
	'widget_manager:action:force_tool_widgets:succes' => "Pro %s skupin byla vynucena udělátka",
	
	// groups update widget access
	'widget_manager:action:groups:update_widget_access:success' => "Byl aktualizován přístup ke všem udělátkům v této skupině",
	
	// widgets
	'widget_manager:widgets:edit:advanced' => "Pokročilé",
	'widget_manager:widgets:fix' => "Vnutit toto udělátko na nástěnku nebo profil",
];
