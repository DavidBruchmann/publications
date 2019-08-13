<?php
use In2code\Publications\Domain\Model\Publication;
use In2code\Publications\Domain\Model\Author;

$llPrefix = 'LLL:EXT:publications/Resources/Private/Language/locallang_db.xlf:';
$llTable = $llPrefix . Publication::TABLE_NAME;

$tca = [
    'ctrl' => [
        'title' => $llTable,
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'default_sortby' => 'ORDER BY title ASC',
        'delete' => 'deleted',
        'iconfile' => 'EXT:publications/Resources/Public/Icons/' . Publication::TABLE_NAME . '.svg',
        'rootLevel' => -1
    ],
    'interface' => [
        'showRecordFieldList' => 'will be filled below...',
    ],
    'types' => [
        '1' => ['showitem' =>
            '--div--;' . $llTable . '.tab.main,' .
            '--palette--;;palette_title,' .
            '--palette--;;palette_type,' .
            '--palette--;;palette_status,' .
            '--palette--;;palette_reviewed,' .
            '--div--;' . $llTable . '.tab.identification,' .
            '--palette--;;palette_identification,' .
            '--div--;' . $llTable . '.tab.organization,' .
            '--palette--;;palette_organization,' .
            '--div--;' . $llTable . '.tab.publishing,' .
            '--palette--;;palette_publishing,' .
            '--palette--;;palette_event,' .
            '--palette--;;palette_number,' .
            '--div--;' . $llTable . '.tab.relations,' .
            '--palette--;;palette_relations,' .
            '--div--;' . $llTable . '.tab.misc,' .
            '--palette--;;palette_note,' .
            '--palette--;;palette_library,' .
            ''
        ],
    ],
    'palettes' => [
        'palette_title' => [
            'showitem' => 'title,abstract'
        ],
        'palette_type' => [
            'showitem' => 'bibtype,type'
        ],
        'palette_status' => [
            'showitem' => 'status,date'
        ],
        'palette_reviewed' => [
            'showitem' => 'reviewed,language'
        ],
        'palette_identification' => [
            'showitem' => 'citeid,isbn,--linebreak--,issn,doi'
        ],
        'palette_organization' => [
            'showitem' => 'organization,school,--linebreak--,institution,institute'
        ],
        'palette_publishing' => [
            'showitem' =>
                'booktitle,journal,--linebreak--,edition,volume,--linebreak--,publisher,address,' .
                '--linebreak--,chapter,series,--linebreak--,howpublished,editor,--linebreak--,pages,' .
                'affiliation,--linebreak--,extern'
        ],
        'palette_event' => [
            'showitem' => 'event_name,event_place'
        ],
        'palette_number' => [
            'showitem' => 'number,number2'
        ],
        'palette_relations' => [
            'showitem' =>
                'authors,--linebreak--,keywords,tags,--linebreak--,web_url,web_url2,' .
                '--linebreak--,web_url_date,file_url'
        ],
        'palette_note' => [
            'showitem' => 'note,annotation,--linebreak--,miscellaneous,miscellaneous2'
        ],
        'palette_library' => [
            'showitem' => 'in_library,borrowed_by'
        ]
    ],
    'columns' => [
        'bibtype' => [
            'exclude' => true,
            'label' => $llTable. '.bibtype',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        '-',
                        ''
                    ],
                    [
                        $llTable . '.bibtype.article',
                        'article'
                    ],
                    [
                        $llTable . '.bibtype.book',
                        'book',
                    ],
                    [
                        $llTable . '.bibtype.booklet',
                        'booklet'
                    ],
                    [
                        $llTable . '.bibtype.conference',
                        'conference'
                    ],
                    [
                        $llTable . '.bibtype.inbook',
                        'inbook'
                    ],
                    [
                        $llTable . '.bibtype.incollection',
                        'incollection'
                    ],
                    [
                        $llTable . '.bibtype.inproceedings',
                        'inproceedings'
                    ],
                    [
                        $llTable . '.bibtype.manual',
                        'manual'
                    ],
                    [
                        $llTable . '.bibtype.manuscript',
                        'manuscript'
                    ],
                    [
                        $llTable . '.bibtype.mastersthesis',
                        'mastersthesis'
                    ],
                    [
                        $llTable . '.bibtype.misc',
                        'misc'
                    ],
                    [
                        $llTable . '.bibtype.phdthesis',
                        'phdthesis'
                    ],
                    [
                        $llTable . '.bibtype.poster',
                        'poster'
                    ],
                    [
                        $llTable . '.bibtype.proceedings',
                        'proceedings'
                    ],
                    [
                        $llTable . '.bibtype.report',
                        'report'
                    ],
                    [
                        $llTable . '.bibtype.techreport',
                        'techreport'
                    ],
                    [
                        $llTable . '.bibtype.thesis',
                        'thesis'
                    ],
                    [
                        $llTable . '.bibtype.unpublished',
                        'unpublished'
                    ],
                    [
                        $llTable . '.bibtype.url',
                        'url'
                    ],
                ],
                'size' => 1,
                'maxitems' => 1,
                'default' => ''
            ]
        ],
        'type' => [
            'exclude' => true,
            'label' => $llTable . '.type',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'citeid' => [
            'exclude' => true,
            'label' => $llTable . '.citeid',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'status' => [
            'exclude' => true,
            'label' => $llTable . '.status',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        $llTable . '.status.0',
                        0
                    ],
                    [
                        $llTable . '.status.1',
                        1
                    ],
                    [
                        $llTable . '.status.2',
                        2
                    ],
                    [
                        $llTable . '.status.3',
                        3
                    ],
                    [
                        $llTable . '.status.4',
                        4
                    ]
                ],
                'size' => 1,
                'maxitems' => 1,
                'default' => 0
            ]
        ],
        'title' => [
            'exclude' => true,
            'label' => $llTable . '.title',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'abstract' => [
            'exclude' => true,
            'label' => $llTable . '.abstract',
            'config' => [
                'type' => 'text',
                'cols' => 32,
                'rows' => 5,
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'journal' => [
            'exclude' => true,
            'label' => $llTable . '.journal',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'date' => [
            'exclude' => true,
            'label' => $llTable . '.date',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'renderType' => 'inputDateTime',
                'eval' => 'date',
                'default' => 0
            ]
        ],
        'volume' => [
            'exclude' => true,
            'label' => $llTable . '.volume',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'number' => [
            'exclude' => true,
            'label' => $llTable . '.number',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'number2' => [
            'exclude' => true,
            'label' => $llTable . '.number2',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'pages' => [
            'exclude' => true,
            'label' => $llTable . '.pages',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'affiliation' => [
            'exclude' => true,
            'label' => $llTable . '.affiliation',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'note' => [
            'exclude' => true,
            'label' => $llTable . '.note',
            'config' => [
                'type' => 'text',
                'cols' => 32,
                'rows' => 5,
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'annotation' => [
            'exclude' => true,
            'label' => $llTable . '.annotation',
            'config' => [
                'type' => 'text',
                'cols' => 32,
                'rows' => 5,
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'keywords' => [
            'exclude' => true,
            'label' => $llTable . '.keywords',
            'config' => [
                'type' => 'text',
                'cols' => 32,
                'rows' => 5,
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'tags' => [
            'exclude' => true,
            'label' => $llTable . '.tags',
            'config' => [
                'type' => 'text',
                'cols' => 32,
                'rows' => 5,
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'file_url' => [
            'exclude' => true,
            'label' => $llTable . '.file_url',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => '',
                'wizards' => [
                    'link' => [
                        'type' => 'popup',
                        'title' => 'URL',
                        'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_link.gif',
                        'module' => [
                            'name' => 'wizard_link',
                        ],
                        'JSopenParams' => 'height=800,width=600,status=0,menubar=0,scrollbars=1'
                    ]
                ],
                'softref' => 'typolink'
            ]
        ],
        'web_url' => [
            'exclude' => true,
            'label' => $llTable . '.web_url',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => '',
                'wizards' => [
                    'link' => [
                        'type' => 'popup',
                        'title' => 'URL',
                        'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_link.gif',
                        'module' => [
                            'name' => 'wizard_link',
                        ],
                        'JSopenParams' => 'height=800,width=600,status=0,menubar=0,scrollbars=1'
                    ]
                ],
                'softref' => 'typolink'
            ]
        ],
        'web_url2' => [
            'exclude' => true,
            'label' => $llTable . '.web_url2',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => '',
                'wizards' => [
                    'link' => [
                        'type' => 'popup',
                        'title' => 'URL',
                        'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_link.gif',
                        'module' => [
                            'name' => 'wizard_link',
                        ],
                        'JSopenParams' => 'height=800,width=600,status=0,menubar=0,scrollbars=1'
                    ]
                ],
                'softref' => 'typolink'
            ]
        ],
        'web_url_date' => [
            'exclude' => true,
            'label' => $llTable . '.web_url_date',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'miscellaneous' => [
            'exclude' => true,
            'label' => $llTable . '.miscellaneous',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'miscellaneous2' => [
            'exclude' => true,
            'label' => $llTable . '.miscellaneous2',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'editor' => [
            'exclude' => true,
            'label' => $llTable . '.editor',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'publisher' => [
            'exclude' => true,
            'label' => $llTable . '.publisher',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'series' => [
            'exclude' => true,
            'label' => $llTable . '.series',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'address' => [
            'exclude' => true,
            'label' => $llTable . '.address',
            'config' => [
                'type' => 'text',
                'cols' => 32,
                'rows' => 5,
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'edition' => [
            'exclude' => true,
            'label' => $llTable . '.edition',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'chapter' => [
            'exclude' => true,
            'label' => $llTable . '.chapter',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'extern' => [
            'exclude' => true,
            'label' => $llTable . '.extern',
            'config' => [
                'type' => 'check',
                'default' => 0
            ],
        ],
        'reviewed' => [
            'exclude' => true,
            'label' => $llTable . '.reviewed',
            'config' => [
                'type' => 'check',
                'default' => 0
            ],
        ],
        'in_library' => [
            'exclude' => true,
            'label' => $llTable . '.in_library',
            'config' => [
                'type' => 'check',
                'default' => 0
            ],
        ],
        'borrowed_by' => [
            'exclude' => true,
            'label' => $llTable . '.borrowed_by',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'howpublished' => [
            'exclude' => true,
            'label' => $llTable . '.howpublished',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'event_name' => [
            'exclude' => true,
            'label' => $llTable . '.event_name',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'event_place' => [
            'exclude' => true,
            'label' => $llTable . '.event_place',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'language' => [
            'exclude' => true,
            'label' => $llTable . '.language',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'booktitle' => [
            'exclude' => true,
            'label' => $llTable . '.booktitle',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'organization' => [
            'exclude' => true,
            'label' => $llTable . '.organization',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'school' => [
            'exclude' => true,
            'label' => $llTable . '.school',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'institution' => [
            'exclude' => true,
            'label' => $llTable . '.institution',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'institute' => [
            'exclude' => true,
            'label' => $llTable . '.institute',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'isbn' => [
            'exclude' => true,
            'label' => $llTable . '.isbn',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'issn' => [
            'exclude' => true,
            'label' => $llTable . '.issn',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'doi' => [
            'exclude' => true,
            'label' => $llTable . '.doi',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'authors' => [
            'exclude' => true,
            'label' => $llTable . '.authors',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => Author::TABLE_NAME,
                'foreign_table' => Author::TABLE_NAME,
                'MM' => 'tx_publications_publication_author_mm',
                'maxitems' => 9999,
                'size' => 10,
                'wizards' => [
                    'edit' => [
                        'type' => 'popup',
                        'title' => 'Edit',
                        'popup_onlyOpenIfSelected' => 1,
                        'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
                        'module' => [
                            'name' => 'wizard_edit',
                        ],
                        'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_edit.gif'
                    ]
                ]
            ]
        ]
    ]
];

$tca['interface']['showRecordFieldList'] = implode(',', array_keys($tca['columns']));
return $tca;
