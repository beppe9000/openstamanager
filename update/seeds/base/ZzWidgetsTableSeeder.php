<?php

use Update\Seed;

class ZzWidgetsTableSeeder extends Seed
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $this->capsule->table('zz_widgets')->truncate();

        $this->capsule->table('zz_widgets')->insert([
            [
                'id' => 1,
                'name' => 'Numero di clienti',
                'type' => 'stats',
                'id_module' => 2,
                'location' => 'controller_top',
                'class' => 'col-md-2',
            'query' => 'SELECT COUNT(an_anagrafiche.idanagrafica) AS dato FROM an_anagrafiche INNER JOIN (an_tipianagrafiche_anagrafiche INNER JOIN an_tipianagrafiche ON an_tipianagrafiche_anagrafiche.idtipoanagrafica=an_tipianagrafiche.idtipoanagrafica) ON an_anagrafiche.idanagrafica=an_tipianagrafiche_anagrafiche.idanagrafica WHERE 1=1 AND descrizione="Cliente" AND `deleted_at` IS NULL HAVING 2=2',
                'bgcolor' => '#37a02d',
                'icon' => 'fa fa-user',
                'print_link' => '',
            'more_link' => 'if($(\'#th_Tipologia input\').val()!= \'Cliente\'){ $(\'#th_Tipologia input\').val(\'Cliente\').trigger(\'keyup\');} else reset(\'Tipologia\');',
                'more_link_type' => 'javascript',
                'php_include' => '',
                'text' => 'Clienti',
                'enabled' => 1,
                'order' => 0,
                'help' => null,
            ],
            [
                'id' => 2,
                'name' => 'Numero di tecnici',
                'type' => 'stats',
                'id_module' => 2,
                'location' => 'controller_top',
                'class' => 'col-md-2',
            'query' => 'SELECT COUNT(an_anagrafiche.idanagrafica) AS dato FROM an_anagrafiche INNER JOIN (an_tipianagrafiche_anagrafiche INNER JOIN an_tipianagrafiche ON an_tipianagrafiche_anagrafiche.idtipoanagrafica=an_tipianagrafiche.idtipoanagrafica) ON an_anagrafiche.idanagrafica=an_tipianagrafiche_anagrafiche.idanagrafica WHERE 1=1 AND descrizione="Tecnico" AND `deleted_at` IS NULL HAVING 2=2',
                'bgcolor' => '#ff7e00',
                'icon' => 'fa fa-cog',
                'print_link' => '',
            'more_link' => 'if($(\'#th_Tipologia input\').val()!= \'Tecnico\'){ $(\'#th_Tipologia input\').val(\'Tecnico\').trigger(\'keyup\');} else reset(\'Tipologia\');',
                'more_link_type' => 'javascript',
                'php_include' => '',
                'text' => 'Tecnici',
                'enabled' => 1,
                'order' => 1,
                'help' => null,
            ],
            [
                'id' => 3,
                'name' => 'Numero di fornitori',
                'type' => 'stats',
                'id_module' => 2,
                'location' => 'controller_top',
                'class' => 'col-md-2',
            'query' => 'SELECT COUNT(an_anagrafiche.idanagrafica) AS dato FROM an_anagrafiche INNER JOIN (an_tipianagrafiche_anagrafiche INNER JOIN an_tipianagrafiche ON an_tipianagrafiche_anagrafiche.idtipoanagrafica=an_tipianagrafiche.idtipoanagrafica) ON an_anagrafiche.idanagrafica=an_tipianagrafiche_anagrafiche.idanagrafica WHERE 1=1 AND descrizione="Fornitore" AND `deleted_at` IS NULL HAVING 2=2',
                'bgcolor' => '#a15d2d',
                'icon' => 'fa fa-truck',
                'print_link' => '',
            'more_link' => 'if($(\'#th_Tipologia input\').val()!= \'Fornitore\'){ $(\'#th_Tipologia input\').val(\'Fornitore\').trigger(\'keyup\');} else reset(\'Tipologia\');',
                'more_link_type' => 'javascript',
                'php_include' => '',
                'text' => 'Fornitori',
                'enabled' => 1,
                'order' => 3,
                'help' => null,
            ],
            [
                'id' => 4,
                'name' => 'Numero di agenti',
                'type' => 'stats',
                'id_module' => 2,
                'location' => 'controller_top',
                'class' => 'col-md-2',
            'query' => 'SELECT COUNT(an_anagrafiche.idanagrafica) AS dato FROM an_anagrafiche INNER JOIN (an_tipianagrafiche_anagrafiche INNER JOIN an_tipianagrafiche ON an_tipianagrafiche_anagrafiche.idtipoanagrafica=an_tipianagrafiche.idtipoanagrafica) ON an_anagrafiche.idanagrafica=an_tipianagrafiche_anagrafiche.idanagrafica WHERE 1=1 AND descrizione="Agente" AND `deleted_at` IS NULL HAVING 2=2',
                'bgcolor' => '#2d70a1',
                'icon' => 'fa fa-briefcase',
                'print_link' => '',
            'more_link' => 'if($(\'#th_Tipologia input\').val()!= \'Agente\'){$(\'#th_Tipologia input\').val(\'Agente\').trigger(\'keyup\');} else reset(\'Tipologia\');',
                'more_link_type' => 'javascript',
                'php_include' => '',
                'text' => 'Agenti',
                'enabled' => 1,
                'order' => 3,
                'help' => null,
            ],
            [
                'id' => 5,
                'name' => 'Interventi da pianificare',
                'type' => 'stats',
                'id_module' => 1,
                'location' => 'controller_top',
                'class' => 'col-md-3',
            'query' => 'SELECT COUNT(id) AS dato FROM co_promemoria WHERE idcontratto IN( SELECT id FROM co_contratti WHERE idstato IN (SELECT id FROM co_staticontratti WHERE pianificabile = 1)) AND idintervento IS NULL',
                'bgcolor' => '#ff7e00',
                'icon' => 'fa fa-cog',
                'print_link' => '',
                'more_link' => './modules/contratti/widgets/contratti.pianificazionedashboard.interventi.php',
                'more_link_type' => 'popup',
                'php_include' => '',
                'text' => 'Promemoria contratti da pianificare',
                'enabled' => 1,
                'order' => 0,
                'help' => null,
            ],
            [
                'id' => 6,
                'name' => 'Ordini di servizio da impostare',
                'type' => 'stats',
                'id_module' => 1,
                'location' => 'controller_top',
                'class' => 'col-md-3',
            'query' => 'SELECT COUNT(id) AS dato FROM co_ordiniservizio WHERE idcontratto IN( SELECT id FROM co_contratti WHERE idstato IN(SELECT id FROM co_staticontratti WHERE pianificabile = 1)) AND idintervento IS NULL',
                'bgcolor' => '#45a9f1',
                'icon' => 'fa fa-gears',
                'print_link' => '',
                'more_link' => './modules/contratti/widgets/contratti.pianificazionedashboard.php',
                'more_link_type' => 'popup',
                'php_include' => '',
                'text' => 'Ordini di servizio da impostare',
                'enabled' => 0,
                'order' => 1,
                'help' => null,
            ],
            [
                'id' => 7,
                'name' => 'Scadenze',
                'type' => 'stats',
                'id_module' => 1,
                'location' => 'controller_top',
                'class' => 'col-md-3',
            'query' => 'SELECT COUNT(co_documenti.id) AS dato FROM co_scadenziario INNER JOIN (((co_documenti INNER JOIN an_anagrafiche ON co_documenti.idanagrafica=an_anagrafiche.idanagrafica) INNER JOIN co_pagamenti ON co_documenti.idpagamento=co_pagamenti.id) INNER JOIN co_tipidocumento ON co_documenti.idtipodocumento=co_tipidocumento.id) ON co_scadenziario.iddocumento=co_documenti.id WHERE ABS(pagato) < ABS(da_pagare) AND idstatodocumento=(SELECT id FROM co_statidocumento WHERE descrizione="Emessa") AND scadenza >= "|period_start|" AND scadenza <= "|period_end|" ORDER BY scadenza ASC',
                'bgcolor' => '#c62f2a',
                'icon' => 'fa fa-money',
                'print_link' => '',
                'more_link' => './controller.php?id_module=18',
                'more_link_type' => 'link',
                'php_include' => '',
                'text' => 'Scadenze',
                'enabled' => 1,
                'order' => 2,
                'help' => null,
            ],
            [
                'id' => 8,
                'name' => 'Articoli in esaurimento',
                'type' => 'stats',
                'id_module' => 1,
                'location' => 'controller_top',
                'class' => 'col-md-3',
            'query' => 'SELECT COUNT(id) AS dato FROM mg_articoli WHERE qta < threshold_qta AND attivo=1',
                'bgcolor' => '#a15d2d',
                'icon' => 'fa fa-truck',
                'print_link' => '',
                'more_link' => './modules/articoli/widgets/articoli.dashboard.php',
                'more_link_type' => 'popup',
                'php_include' => '',
                'text' => 'Articoli in esaurimento',
                'enabled' => 1,
                'order' => 3,
                'help' => null,
            ],
            [
                'id' => 9,
                'name' => 'Preventivi in lavorazione',
                'type' => 'stats',
                'id_module' => 1,
                'location' => 'controller_top',
                'class' => 'col-md-12',
            'query' => 'SELECT COUNT(id) AS dato FROM co_preventivi WHERE idstato=(SELECT id FROM co_statipreventivi WHERE descrizione="In lavorazione")',
                'bgcolor' => '#44aae4',
                'icon' => 'fa fa-tasks',
                'print_link' => '',
                'more_link' => './modules/preventivi/widgets/preventivi.dashboard.php',
                'more_link_type' => 'popup',
                'php_include' => '',
                'text' => 'Preventivi in lavorazione',
                'enabled' => 1,
                'order' => 4,
                'help' => null,
            ],
            [
                'id' => 10,
                'name' => 'Contratti in scadenza',
                'type' => 'stats',
                'id_module' => 1,
                'location' => 'controller_top',
                'class' => 'col-md-12',
            'query' => 'SELECT COUNT(id) AS dato, co_contratti.id, DATEDIFF( data_conclusione, NOW() ) AS giorni_rimanenti FROM co_contratti WHERE idstato IN(SELECT id FROM co_staticontratti WHERE fatturabile = 1) AND rinnovabile=1 AND NOW() > DATE_ADD( data_conclusione, INTERVAL - ABS(giorni_preavviso_rinnovo) DAY) AND YEAR(data_conclusione) > 1970 HAVING ISNULL((SELECT id FROM co_contratti contratti WHERE contratti.idcontratto_prev=co_contratti.id )) ORDER BY giorni_rimanenti ASC',
                'bgcolor' => '#c62f2a',
                'icon' => 'fa fa-edit',
                'print_link' => '',
                'more_link' => './modules/contratti/widgets/contratti_scadenza.dashboard.php',
                'more_link_type' => 'popup',
                'php_include' => '',
                'text' => 'Contratti in scadenza',
                'enabled' => 1,
                'order' => 5,
                'help' => null,
            ],
            [
                'id' => 11,
                'name' => 'Rate contrattuali',
                'type' => 'stats',
                'id_module' => 1,
                'location' => 'controller_top',
                'class' => 'col-md-12',
            'query' => 'SELECT COUNT(id) AS dato FROM co_ordiniservizio_pianificazionefatture WHERE idcontratto IN( SELECT id FROM co_contratti WHERE idstato IN(SELECT id FROM co_staticontratti WHERE descrizione IN("Bozza", "Accettato", "In lavorazione", "In attesa di pagamento")) ) AND co_ordiniservizio_pianificazionefatture.iddocumento=0',
                'bgcolor' => '#4ccc4c',
                'icon' => 'fa fa-folder-open',
                'print_link' => '',
                'more_link' => './modules/contratti/widgets/contratti.ratecontrattuali.php',
                'more_link_type' => 'popup',
                'php_include' => '',
                'text' => 'Rate contrattuali',
                'enabled' => 1,
                'order' => 6,
                'help' => null,
            ],
            [
                'id' => 12,
                'name' => 'Stampa inventario',
                'type' => 'print',
                'id_module' => 21,
                'location' => 'controller_top',
                'class' => 'col-md-12',
                'query' => '',
                'bgcolor' => '#45a9f1',
                'icon' => 'fa fa-print',
                'print_link' => '',
            'more_link' => 'if( confirm(\'Stampare l\\\'inventario?\') ){ window.open(\'pdfgen.php?ptype=magazzino_inventario&search_codice=\'+$(\'#th_Codice input\').val()+\'&search_descrizione=\'+$(\'#th_Descrizione input\').val()+\'&search_categoria=\'+$(\'#th_Categoria input\').val()+\'&search_subcategoria=\'+$(\'#th_Subcategoria input\').val()+\'&search_tipo=solo prodotti attivi\'); }',
                'more_link_type' => 'javascript',
                'php_include' => '',
                'text' => 'Stampa inventario',
                'enabled' => 1,
                'order' => 1,
                'help' => null,
            ],
            [
                'id' => 13,
                'name' => 'Fatturato',
                'type' => 'stats',
                'id_module' => 14,
                'location' => 'controller_top',
                'class' => 'col-md-6',
            'query' => 'SELECT CONCAT_WS(" ", REPLACE(REPLACE(REPLACE(FORMAT((SELECT ABS(SUM(da_pagare))), 2), ",", "#"), ".", ","), "#", "."), "&euro;") AS dato FROM (co_scadenziario INNER JOIN co_documenti ON co_scadenziario.iddocumento=co_documenti.id) INNER JOIN co_tipidocumento ON co_documenti.idtipodocumento=co_tipidocumento.id WHERE co_tipidocumento.dir=\'entrata\' |segment|  AND data_emissione >= "|period_start|" AND data_emissione <= "|period_end|" AND 1=1',
                'bgcolor' => '#4dc347',
                'icon' => 'fa fa-money',
                'print_link' => '',
                'more_link' => '',
                'more_link_type' => '',
                'php_include' => '',
                'text' => 'Fatturato',
                'enabled' => 1,
                'order' => 1,
                'help' => 'Fatturato IVA inclusa.',
            ],
            [
                'id' => 14,
                'name' => 'Acquisti',
                'type' => 'stats',
                'id_module' => 15,
                'location' => 'controller_top',
                'class' => 'col-md-6',
            'query' => 'SELECT CONCAT_WS(" ", REPLACE(REPLACE(REPLACE(FORMAT((SELECT ABS(SUM(da_pagare))), 2), ",", "#"), ".", ","), "#", "."), "&euro;") AS dato FROM (co_scadenziario INNER JOIN co_documenti ON co_scadenziario.iddocumento=co_documenti.id) INNER JOIN co_tipidocumento ON co_documenti.idtipodocumento=co_tipidocumento.id WHERE co_tipidocumento.dir=\'uscita\' |segment| AND data_emissione >= "|period_start|" AND data_emissione <= "|period_end|" AND 1=1',
                'bgcolor' => '#c2464c',
                'icon' => 'fa fa-money',
                'print_link' => '',
                'more_link' => '',
                'more_link_type' => '',
                'php_include' => '',
                'text' => 'Acquisti',
                'enabled' => 1,
                'order' => 1,
                'help' => 'Fatturato IVA inclusa.',
            ],
            [
                'id' => 15,
                'name' => 'Crediti da clienti',
                'type' => 'stats',
                'id_module' => 14,
                'location' => 'controller_top',
                'class' => 'col-md-6',
            'query' => 'SELECT CONCAT_WS(" ", REPLACE(REPLACE(REPLACE(FORMAT((SELECT ABS(SUM(da_pagare-pagato))), 2), ",", "#"), ".", ","), "#", "."), "&euro;") AS dato FROM (co_scadenziario INNER JOIN co_documenti ON co_scadenziario.iddocumento=co_documenti.id) INNER JOIN co_tipidocumento ON co_documenti.idtipodocumento=co_tipidocumento.id WHERE co_tipidocumento.dir=\'entrata\' |segment|  AND 1=1',
                'bgcolor' => '#f4af1b',
                'icon' => 'fa fa-warning',
                'print_link' => '',
                'more_link' => '',
                'more_link_type' => '',
                'php_include' => '',
                'text' => 'Crediti da clienti',
                'enabled' => 1,
                'order' => 2,
                'help' => 'Crediti IVA inclusa.',
            ],
            [
                'id' => 16,
                'name' => 'Debiti verso fornitori',
                'type' => 'stats',
                'id_module' => 15,
                'location' => 'controller_top',
                'class' => 'col-md-6',
            'query' => 'SELECT CONCAT_WS(\' \', REPLACE(REPLACE(REPLACE(FORMAT((SELECT ABS(SUM(da_pagare-pagato))), 2), \',\', \'#\'), \'.\', \',\'),\'#\', \'.\'), \'&euro;\') AS dato FROM (co_scadenziario INNER JOIN co_documenti ON co_scadenziario.iddocumento=co_documenti.id) INNER JOIN co_tipidocumento ON co_documenti.idtipodocumento=co_tipidocumento.id WHERE co_tipidocumento.dir=\'uscita\' |segment| AND 1=1',
                'bgcolor' => '#f4af1b',
                'icon' => 'fa fa-warning',
                'print_link' => '',
                'more_link' => '',
                'more_link_type' => '',
                'php_include' => '',
                'text' => 'Debiti verso fornitori',
                'enabled' => 1,
                'order' => 2,
                'help' => 'Debiti IVA inclusa.',
            ],
            [
                'id' => 17,
                'name' => 'Numero di vettori',
                'type' => 'stats',
                'id_module' => 2,
                'location' => 'controller_top',
                'class' => 'col-md-2',
            'query' => 'SELECT COUNT(an_anagrafiche.idanagrafica) AS dato FROM an_anagrafiche INNER JOIN (an_tipianagrafiche_anagrafiche INNER JOIN an_tipianagrafiche ON an_tipianagrafiche_anagrafiche.idtipoanagrafica=an_tipianagrafiche.idtipoanagrafica) ON an_anagrafiche.idanagrafica=an_tipianagrafiche_anagrafiche.idanagrafica WHERE 1=1 AND descrizione="Vettore" AND `deleted_at` IS NULL HAVING 2=2',
                'bgcolor' => '#00C0EF',
                'icon' => 'fa fa-truck',
                'print_link' => '',
            'more_link' => 'if($(\'#th_Tipologia input\').val()!= \'Vettore\'){$(\'#th_Tipologia input\').val(\'Vettore\').trigger(\'keyup\');} else reset(\'Tipologia\');',
                'more_link_type' => 'javascript',
                'php_include' => '',
                'text' => 'Vettori',
                'enabled' => 1,
                'order' => 4,
                'help' => null,
            ],
            [
                'id' => 18,
                'name' => 'Tutte le anagrafiche',
                'type' => 'stats',
                'id_module' => 2,
                'location' => 'controller_top',
                'class' => 'col-md-2',
            'query' => 'SELECT COUNT(an_anagrafiche.idanagrafica) AS dato FROM an_anagrafiche INNER JOIN (an_tipianagrafiche_anagrafiche INNER JOIN an_tipianagrafiche ON an_tipianagrafiche_anagrafiche.idtipoanagrafica=an_tipianagrafiche.idtipoanagrafica) ON an_anagrafiche.idanagrafica=an_tipianagrafiche_anagrafiche.idanagrafica WHERE 1=1 AND `deleted_at` IS NULL HAVING 2=2',
                'bgcolor' => '#CCCCCC',
                'icon' => 'fa fa-users',
                'print_link' => '',
            'more_link' => 'reset(\'Tipologia\');',
                'more_link_type' => 'javascript',
                'php_include' => '',
                'text' => 'Tutti',
                'enabled' => 1,
                'order' => 5,
                'help' => null,
            ],
            [
                'id' => 19,
                'name' => 'Stampa riepilogo',
                'type' => 'print',
                'id_module' => 3,
                'location' => 'controller_right',
                'class' => 'col-md-12',
                'query' => '',
                'bgcolor' => '#45a9f1',
                'icon' => 'fa fa-print',
                'print_link' => '',
            'more_link' => 'if(confirm(\'Stampare il riepilogo?\')){ window.open(\'pdfgen.php?ptype=riepilogo_interventi&id_module=$id_module$\'); }',
                'more_link_type' => 'javascript',
                'php_include' => '',
                'text' => 'Stampa riepilogo',
                'enabled' => 1,
                'order' => 1,
                'help' => null,
            ],
            [
                'id' => 20,
                'name' => 'Valore magazzino',
                'type' => 'stats',
                'id_module' => 21,
                'location' => 'controller_top',
                'class' => 'col-md-12',
            'query' => 'SELECT CONCAT_WS(" ", REPLACE(REPLACE(REPLACE(FORMAT(SUM(prezzo_acquisto*qta),2), ",", "#"), ".", ","), "#", "."), "&euro;") AS dato FROM mg_articoli WHERE qta>0',
                'bgcolor' => '#A15D2D',
                'icon' => 'fa fa-money',
                'print_link' => '',
                'more_link' => '',
                'more_link_type' => '',
                'php_include' => '',
                'text' => 'Valore magazzino',
                'enabled' => 1,
                'order' => 1,
                'help' => null,
            ],
            [
                'id' => 21,
                'name' => 'Articoli in magazzino',
                'type' => 'stats',
                'id_module' => 21,
                'location' => 'controller_top',
                'class' => 'col-md-12',
            'query' => 'SELECT CONCAT_WS(" ", REPLACE(REPLACE(REPLACE(FORMAT(SUM(qta),2), ",", "#"), ".", ","), "#", "."), "unit&agrave;") AS dato FROM mg_articoli WHERE qta>0',
                'bgcolor' => '#45A9F1',
                'icon' => 'fa fa-check-square-o',
                'print_link' => '',
                'more_link' => '',
                'more_link_type' => '',
                'php_include' => '',
                'text' => 'Articoli in magazzino',
                'enabled' => 1,
                'order' => 1,
                'help' => null,
            ],
            [
                'id' => 22,
                'name' => 'Stampa calendario',
                'type' => 'print',
                'id_module' => 1,
                'location' => 'controller_top',
                'class' => 'col-md-12',
                'query' => null,
                'bgcolor' => '#4ccc4c',
                'icon' => 'fa fa-print',
                'print_link' => '',
                'more_link' => './modules/dashboard/widgets/stampa_calendario.dashboard.php',
                'more_link_type' => 'popup',
                'php_include' => '',
                'text' => 'Stampa calendario',
                'enabled' => 1,
                'order' => 7,
                'help' => null,
            ],
            [
                'id' => 23,
                'name' => 'Attività da pianificare',
                'type' => 'stats',
                'id_module' => 1,
                'location' => 'controller_top',
                'class' => 'col-md-3',
            'query' => 'SELECT COUNT(id) AS dato FROM in_interventi WHERE id NOT IN (SELECT idintervento FROM in_interventi_tecnici) AND idstatointervento IN (SELECT idstatointervento FROM in_statiintervento WHERE completato = 0) ',
                'bgcolor' => '#6dab3c',
                'icon' => 'fa fa-cogs',
                'print_link' => '',
                'more_link' => './modules/interventi/widgets/interventi.pianificazionedashboard.interventi.php',
                'more_link_type' => 'popup',
                'php_include' => '',
                'text' => 'Promemoria attività da pianificare',
                'enabled' => 1,
                'order' => 0,
                'help' => null,
            ],
        ]);
    }
}