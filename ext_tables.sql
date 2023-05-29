CREATE TABLE tx_publications_domain_model_publication (
	bibtype varchar(255) DEFAULT '' NOT NULL,
	type varchar(255) DEFAULT '' NOT NULL,
	citeid varchar(255) DEFAULT '' NOT NULL,
	status int(11) DEFAULT '0' NOT NULL,
	title text NOT NULL,
	abstract text,
	journal varchar(255) DEFAULT '' NOT NULL,
	journal_abbr varchar(255) DEFAULT '' NOT NULL,
	`year` varchar(255) DEFAULT '' NOT NULL,
	`month` int(2) DEFAULT '0' NOT NULL,
	`day` varchar(255) DEFAULT '' NOT NULL,
	volume varchar(255) DEFAULT '' NOT NULL,
  `number` varchar(255) DEFAULT '' NOT NULL,
	number2 varchar(255) DEFAULT '' NOT NULL,
	pages varchar(255) DEFAULT '' NOT NULL,
	affiliation varchar(255) DEFAULT '' NOT NULL,
	note varchar(255) DEFAULT '' NOT NULL,
	annotation varchar(255) DEFAULT '' NOT NULL,
	keywords text,
	tags text,
	file_url varchar(255) DEFAULT '' NOT NULL,
	web_url varchar(255) DEFAULT '' NOT NULL,
	web_url_date varchar(255) DEFAULT '' NOT NULL,
	web_url2 varchar(255) DEFAULT '' NOT NULL,
	miscellaneous varchar(255) DEFAULT '' NOT NULL,
	miscellaneous2 varchar(255) DEFAULT '' NOT NULL,
	editor varchar(1000) DEFAULT '' NOT NULL,
	publisher varchar(255) DEFAULT '' NOT NULL,
	series varchar(255) DEFAULT '' NOT NULL,
	address text,
	edition varchar(255) DEFAULT '' NOT NULL,
	chapter varchar(255) DEFAULT '' NOT NULL,
	extern tinyint(4) unsigned DEFAULT '0' NOT NULL,
	reviewed tinyint(4) unsigned DEFAULT '0' NOT NULL,
	in_library tinyint(4) unsigned DEFAULT '0' NOT NULL,
	borrowed_by varchar(255) DEFAULT '' NOT NULL,
	howpublished varchar(255) DEFAULT '' NOT NULL,
	event_name varchar(255) DEFAULT '' NOT NULL,
	event_place varchar(255) DEFAULT '' NOT NULL,
	event_date varchar(255) DEFAULT '' NOT NULL,
	language varchar(255) DEFAULT '' NOT NULL,
	booktitle text,
	organization varchar(255) DEFAULT '' NOT NULL,
	school varchar(255) DEFAULT '' NOT NULL,
	institution varchar(255) DEFAULT '' NOT NULL,
	institute varchar(255) DEFAULT '' NOT NULL,
	isbn varchar(255) DEFAULT '' NOT NULL,
	issn varchar(255) DEFAULT '' NOT NULL,
	doi varchar(255) DEFAULT '' NOT NULL,
	pmid varchar(255) DEFAULT '' NOT NULL,
	authors int(11) unsigned DEFAULT '0' NOT NULL,
	patent varchar(255) DEFAULT '' NOT NULL,
);

CREATE TABLE tx_publications_domain_model_author (
	first_name varchar(255) DEFAULT '' NOT NULL,
	last_name varchar(255) DEFAULT '' NOT NULL,
	url varchar(255) DEFAULT '' NOT NULL,
	orcid varchar(255) DEFAULT '' NOT NULL,
);
