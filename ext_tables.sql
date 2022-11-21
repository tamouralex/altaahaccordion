CREATE TABLE tt_content (
    tx_altaahaccordion_acco int(11) unsigned DEFAULT '0' NOT NULL
);
CREATE TABLE tx_altaahaccordion_acco (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    tx_altaahaccordion_accoheader varchar(255) DEFAULT '' NOT NULL,
    tx_altaahaccordion_accocontent mediumtext,
    KEY language (l10n_parent,sys_language_uid)
);
