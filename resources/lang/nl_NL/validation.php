<?php

/**
 * validation.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


declare(strict_types=1);

return [
    'missing_where'                  => 'Array mist "where"-clausule',
    'missing_update'                 => 'Array mist "update"-clausule',
    'invalid_where_key'              => 'JSON bevat een ongeldige key in de "where"-clausule',
    'invalid_update_key'             => 'JSON bevat een ongeldige key in de "update"-clausule',
    'invalid_query_data'             => 'Er zitten ongeldige gegevens in het %s:%s veld van je query.',
    'invalid_query_account_type'     => 'Je query bevat accounts van verschillende types, wat niet is toegestaan.',
    'invalid_query_currency'         => 'Je query bevat account met verschillende valuta-instellingen, wat niet is toegestaan.',
    'iban'                           => 'Dit is niet een geldige IBAN.',
    'zero_or_more'                   => 'De waarde mag niet negatief zijn.',
    'date_or_time'                   => 'De waarde moet een geldige datum of tijdwaarde zijn (ISO 8601).',
    'source_equals_destination'      => 'De bronrekening is gelijk aan de doelrekening.',
    'unique_account_number_for_user' => 'Het lijkt erop dat dit rekeningnummer al in gebruik is.',
    'unique_iban_for_user'           => 'Het lijkt erop dat deze IBAN al in gebruik is.',
    'deleted_user'                   => 'Je kan je niet registreren met dit e-mailadres.',
    'rule_trigger_value'             => 'Deze waarde is niet geldig voor de geselecteerde trigger.',
    'rule_action_value'              => 'Deze waarde is niet geldig voor de geselecteerde actie.',
    'file_already_attached'          => 'Het geuploade bestand ":name" is al gelinkt aan deze transactie.',
    'file_attached'                  => 'Bestand ":name" is succesvol geüpload.',
    'must_exist'                     => 'Het ID in veld :attribute bestaat niet.',
    'all_accounts_equal'             => 'Alle rekeningen in dit veld moeten gelijk zijn.',
    'group_title_mandatory'          => 'Een groepstitel is verplicht wanneer er meer dan één transactie is.',
    'transaction_types_equal'        => 'Alle splits moeten van hetzelfde type zijn.',
    'invalid_transaction_type'       => 'Ongeldig transactietype.',
    'invalid_selection'              => 'Ongeldige selectie.',
    'belongs_user'                   => 'Deze waarde is ongeldig voor dit veld.',
    'at_least_one_transaction'       => 'Er is op zijn minst één transactie nodig.',
    'at_least_one_repetition'        => 'Er is op zijn minst één herhaling nodig.',
    'require_repeat_until'           => 'Je moet een aantal herhalingen opgeven, of een einddatum (repeat_until). Niet beide.',
    'require_currency_info'          => 'De inhoud van dit veld is ongeldig zonder valutagegevens.',
    'not_transfer_account'           => 'Deze account kan je niet gebruiken voor overschrijvingen.',
    'require_currency_amount'        => 'De inhoud van dit veld is ongeldig zonder bedrag in vreemde valuta.',
    'equal_description'              => 'Transactiebeschrijving mag niet gelijk zijn aan globale beschrijving.',
    'file_invalid_mime'              => 'Bestand ":name" is van het type ":mime", en die kan je niet uploaden.',
    'file_too_large'                 => 'Bestand ":name" is te groot.',
    'belongs_to_user'                => 'De waarde van :attribute is onbekend.',
    'accepted'                       => ':attribute moet geaccepteerd zijn.',
    'bic'                            => 'Dit is geen geldige BIC.',
    'at_least_one_trigger'           => 'De regel moet minstens één trigger hebben.',
    'at_least_one_active_trigger'    => 'De regel moet minstens één actieve trigger hebben.',
    'at_least_one_action'            => 'De regel moet minstens één actie hebben.',
    'at_least_one_active_action'     => 'De regel moet minstens één actieve actie hebben.',
    'base64'                         => 'Dit is geen geldige base64 gecodeerde data.',
    'model_id_invalid'               => 'Dit ID past niet bij dit object.',
    'less'                           => ':attribute moet minder zijn dan 10.000.000',
    'active_url'                     => ':attribute is geen geldige URL.',
    'after'                          => ':attribute moet een datum na :date zijn.',
    'date_after'                     => 'De startdatum moet vóór de einddatum zijn.',
    'alpha'                          => ':attribute mag alleen letters bevatten.',
    'alpha_dash'                     => ':attribute mag alleen letters, nummers, onderstreep(_) en strepen(-) bevatten.',
    'alpha_num'                      => ':attribute mag alleen letters en nummers bevatten.',
    'array'                          => ':attribute moet geselecteerde elementen bevatten.',
    'unique_for_user'                => 'Er is al een entry met deze :attribute.',
    'before'                         => ':attribute moet een datum voor :date zijn.',
    'unique_object_for_user'         => 'Deze naam is al in gebruik.',
    'unique_account_for_user'        => 'Deze rekeningnaam is al in gebruik.',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    'between.numeric'            => ':attribute moet tussen :min en :max zijn.',
    'between.file'               => ':attribute moet tussen :min en :max kilobytes zijn.',
    'between.string'             => ':attribute moet tussen :min en :max karakters zijn.',
    'between.array'              => ':attribute moet tussen :min en :max items bevatten.',
    'boolean'                    => ':attribute moet true of false zijn.',
    'confirmed'                  => ':attribute bevestiging komt niet overeen.',
    'date'                       => ':attribute moet een datum bevatten.',
    'date_format'                => ':attribute moet een geldig datum formaat bevatten.',
    'different'                  => ':attribute en :other moeten verschillend zijn.',
    'digits'                     => ':attribute moet bestaan uit :digits cijfers.',
    'digits_between'             => ':attribute moet bestaan uit minimaal :min en maximaal :max cijfers.',
    'email'                      => ':attribute is geen geldig e-mailadres.',
    'filled'                     => ':attribute is verplicht.',
    'exists'                     => ':attribute bestaat niet.',
    'image'                      => ':attribute moet een afbeelding zijn.',
    'in'                         => ':attribute is ongeldig.',
    'integer'                    => ':attribute moet een getal zijn.',
    'ip'                         => ':attribute moet een geldig IP-adres zijn.',
    'json'                       => 'De :attribute moet een JSON tekst zijn.',
    'max.numeric'                => ':attribute mag niet hoger dan :max zijn.',
    'max.file'                   => ':attribute mag niet meer dan :max kilobytes zijn.',
    'max.string'                 => ':attribute mag niet uit meer dan :max karakters bestaan.',
    'max.array'                  => ':attribute mag niet meer dan :max items bevatten.',
    'mimes'                      => ':attribute moet een bestand zijn van het bestandstype :values.',
    'min.numeric'                => ':attribute moet minimaal :min zijn.',
    'lte.numeric'                => 'Veld :attribute moet minder zijn dan :value.',
    'min.file'                   => ':attribute moet minimaal :min kilobytes zijn.',
    'min.string'                 => ':attribute moet minimaal :min karakters zijn.',
    'min.array'                  => ':attribute moet minimaal :min items bevatten.',
    'not_in'                     => 'Het formaat van :attribute is ongeldig.',
    'numeric'                    => ':attribute moet een nummer zijn.',
    'numeric_native'             => 'Het originele bedrag moet een getal zijn.',
    'numeric_destination'        => 'Het doelbedrag moet een getal zijn.',
    'numeric_source'             => 'Het bronbedrag moet een getal zijn.',
    'regex'                      => ':attribute formaat is ongeldig.',
    'required'                   => ':attribute is verplicht.',
    'required_if'                => ':attribute is verplicht indien :other gelijk is aan :value.',
    'required_unless'            => ':attribute is verplicht tenzij :other gelijk is aan :values.',
    'required_with'              => ':attribute is verplicht i.c.m. :values',
    'required_with_all'          => ':attribute is verplicht i.c.m. :values',
    'required_without'           => ':attribute is verplicht als :values niet ingevuld is.',
    'required_without_all'       => ':attribute is verplicht als :values niet ingevuld zijn.',
    'same'                       => ':attribute en :other moeten overeenkomen.',
    'size.numeric'               => ':attribute moet :size zijn.',
    'amount_min_over_max'        => 'Het minimumbedrag mag niet groter zijn dan het maximale bedrag.',
    'size.file'                  => ':attribute moet :size kilobyte zijn.',
    'size.string'                => ':attribute moet :size karakters zijn.',
    'size.array'                 => ':attribute moet :size items bevatten.',
    'unique'                     => ':attribute is al in gebruik.',
    'string'                     => 'Het :attribute moet een tekenreeks zijn.',
    'url'                        => ':attribute is geen geldige URL.',
    'timezone'                   => 'Het :attribute moet een geldige zone zijn.',
    '2fa_code'                   => 'De waarde in het :attribute-veld is niet geldig.',
    'dimensions'                 => 'Het :attribute heeft het verkeerde afbeeldingsformaat.',
    'distinct'                   => 'Het :attribute veld heeft een dubbele waarde.',
    'file'                       => ':attribute moet een bestand zijn.',
    'in_array'                   => 'Het :attribute veld bestaat niet in :other.',
    'present'                    => 'Het :attribute veld moet aanwezig zijn.',
    'amount_zero'                => 'Het totaalbedrag kan niet nul zijn.',
    'current_target_amount'      => 'Het huidige bedrag moet minder zijn dan het doelbedrag.',
    'unique_piggy_bank_for_user' => 'De naam van de spaarpot moet uniek zijn.',
    'unique_object_group'        => 'De groepsnaam moet uniek zijn',
    'starts_with'                => 'De waarde moet beginnen met :values.',
    'unique_webhook'             => 'Je hebt al een webhook met deze combinatie van URL, trigger, reactie en bericht.',
    'unique_existing_webhook'    => 'Je hebt al een andere webhook met deze combinatie van URL, trigger, reactie en bericht.',
    'same_account_type'          => 'Beide rekeningen moeten van hetzelfde rekeningtype zijn',
    'same_account_currency'      => 'Beide rekeningen moeten dezelfde valuta hebben',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    'secure_password'             => 'Dit is geen veilig wachtwoord. Probeer het nog een keer. Zie ook: https://bit.ly/FF3-password-security',
    'valid_recurrence_rep_type'   => 'Dit is geen geldige herhaling voor periodieke transacties.',
    'valid_recurrence_rep_moment' => 'Ongeldig herhaalmoment voor dit type herhaling.',
    'invalid_account_info'        => 'Ongeldige rekeninginformatie.',
    'attributes'                  => [
        'email'                   => 'e-mailadres',
        'description'             => 'omschrijving',
        'amount'                  => 'bedrag',
        'transactions.*.amount'   => 'transactiebedrag',
        'name'                    => 'naam',
        'piggy_bank_id'           => 'spaarpot ID',
        'targetamount'            => 'doelbedrag',
        'opening_balance_date'    => 'startsaldodatum',
        'opening_balance'         => 'startsaldo',
        'match'                   => 'overeenkomst',
        'amount_min'              => 'minimumbedrag',
        'amount_max'              => 'maximumbedrag',
        'title'                   => 'titel',
        'tag'                     => 'tag',
        'transaction_description' => 'transactiebeschrijving',
        'rule-action-value.1'     => 'actiewaarde #1',
        'rule-action-value.2'     => 'actiewaarde #2',
        'rule-action-value.3'     => 'actiewaarde #3',
        'rule-action-value.4'     => 'actiewaarde #4',
        'rule-action-value.5'     => 'actiewaarde #5',
        'rule-action.1'           => 'regelactie #1',
        'rule-action.2'           => 'regelactie #2',
        'rule-action.3'           => 'regelactie #3',
        'rule-action.4'           => 'regelactie #4',
        'rule-action.5'           => 'regelactie #5',
        'rule-trigger-value.1'    => 'triggerwaarde #1',
        'rule-trigger-value.2'    => 'triggerwaarde #2',
        'rule-trigger-value.3'    => 'triggerwaarde #3',
        'rule-trigger-value.4'    => 'triggerwaarde #4',
        'rule-trigger-value.5'    => 'triggerwaarde #5',
        'rule-trigger.1'          => 'regeltrigger #1',
        'rule-trigger.2'          => 'regeltrigger #2',
        'rule-trigger.3'          => 'regeltrigger #3',
        'rule-trigger.4'          => 'regeltrigger #4',
        'rule-trigger.5'          => 'regeltrigger #5',
    ],

    // validation of accounts:
    'withdrawal_source_need_data' => 'Om door te gaan moet een geldige bronrekening ID en/of geldige bronrekeningnaam worden gevonden.',
    'withdrawal_source_bad_data'  => 'Kan geen geldige bronrekening vinden bij het zoeken naar ID ":id" of naam ":name".',
    'withdrawal_dest_need_data'   => 'Om door te gaan moet een geldig bronrekening ID en/of geldige bronrekeningnaam worden gevonden.',
    'withdrawal_dest_bad_data'    => 'Kan geen geldige doelrekening vinden bij het zoeken naar ID ":id" of naam ":name".',

    'reconciliation_source_bad_data' => 'Kan geen geldige afstemmingsrekening vinden bij het zoeken naar ID ":id" of naam ":name".',

    'generic_source_bad_data' => 'Kan geen geldige bronrekening vinden bij het zoeken naar ID ":id" of naam ":name".',

    'deposit_source_need_data' => 'Om door te gaan moet een geldige bronrekening ID en/of geldige bronrekeningnaam worden gevonden.',
    'deposit_source_bad_data'  => 'Kan geen geldige bronrekening vinden bij het zoeken naar ID ":id" of naam ":name".',
    'deposit_dest_need_data'   => 'Om door te gaan moet een geldig doelrekening ID en/of geldige doelrekeningnaam worden gevonden.',
    'deposit_dest_bad_data'    => 'Kan geen geldige doelrekening vinden bij het zoeken naar ID ":id" of naam ":name".',
    'deposit_dest_wrong_type'  => 'De ingevoerde doelrekening is niet van het juiste type.',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    'transfer_source_need_data' => 'Om door te gaan moet een geldig bronaccount ID en/of geldige bronaccountnaam worden gevonden.',
    'transfer_source_bad_data'  => 'Kan geen geldige bronrekening vinden bij het zoeken naar ID ":id" of naam ":name".',
    'transfer_dest_need_data'   => 'Om door te gaan moet een geldig doelrekening ID en/of geldige doelrekeningnaam worden gevonden.',
    'transfer_dest_bad_data'    => 'Kan geen geldige doelrekening vinden bij het zoeken naar ID ":id" of naam ":name".',
    'need_id_in_edit'           => 'Elke split moet een transaction_journal_id hebben (een geldig ID of 0).',

    'ob_source_need_data'           => 'Om door te gaan moet er een geldig bronrekening ID en/of geldige bronrekeningnaam worden gevonden.',
    'lc_source_need_data'           => 'Er moet een geldig bronrekening-ID zijn om door te gaan.',
    'ob_dest_need_data'             => 'Om door te gaan moet een geldig doelrekening ID en/of geldige doelrekeningnaam worden gevonden.',
    'ob_dest_bad_data'              => 'Kan geen geldige doelrekening vinden bij het zoeken naar ID ":id" of naam ":name".',
    'reconciliation_either_account' => 'Om een afstemmingstransactie in te dienen moet je een bron- of doelrekening insturen. Niet beide, niet geen beide.',

    'generic_invalid_source'      => 'Je kan deze rekening niet gebruiken als bronrekening.',
    'generic_invalid_destination' => 'Je kan deze rekening niet gebruiken als doelrekening.',

    'generic_no_source'      => 'Je moet ook bronrekeninginformatie meegeven.',
    'generic_no_destination' => 'Je moet ook doelrekeninginformatie meegeven.',

    'gte.numeric' => ':attribute moet groter of gelijk zijn aan :value.',
    'gt.numeric'  => ':attribute moet groter zijn dan :value.',
    'gte.file'    => ':attribute moet groter of gelijk zijn aan :value kilobytes.',
    'gte.string'  => ':attribute moet :value karakters of meer bevatten.',
    'gte.array'   => ':attribute moet :value items of meer bevatten.',

    'amount_required_for_auto_budget' => 'Bedrag is vereist.',
    'auto_budget_amount_positive'     => 'Het bedrag moet meer zijn dan nul.',
    'auto_budget_period_mandatory'    => 'De auto-budgetperiode is verplicht.',

    // no access to administration:
    'no_access_user_group'            => 'U hebt niet de juiste toegangsrechten voor deze administratie.',
];

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */
