@extends('layout')
@section('main_content')
    {!! grid_view([
        'dataProvider' => $dataProvider,
        'useFilters' => true,
        'columnFields' => [
            'id',
            'name',
        ]
    ]) !!}
<h1>Новый грид</h1>

    @gridView([
        'dataProvider' => $dataProvider,
        'columnFields' => [
            [
                'label' => 'First Name', // Column label.
                'attribute' => 'id', // Attribute, by which the row column data will be taken from a model.
            ],
            [
                'label' => 'Last Name',
                'value' => function ($row)
                    {
                        return $row->name;
                    },
                'sort' => 'name' // To sort rows. Have to set if an 'attribute' is not defined for column.
            ],
        ]
    ])
<h1>Eще пример</h1>
    {!! grid_view(
    [
        'dataProvider' => $dataProvider,
        'columnFields' =>
        [
            [
                'attribute' => 'id'
            ],
            [
                'attribute' => 'name',
            ],
            [
                'label' => 'Actions', // Optional
                'class' => Itstructure\GridView\Columns\ActionColumn::class, // Required
                'actionTypes' =>
                    [ // Required
                        'view',
                        'edit' => function ($data)
                            {
                                return '/admin/pages/' . $data->id . '/edit';
                            },
                        [
                            'class' => Itstructure\GridView\Actions\Delete::class, // Required
                            'url' => function ($data)
                                { // Optional
                                    return '/admin/pages/' . $data->id . '/delete';
                                },
                            'htmlAttributes' => [ // Optional
                            'target' => '_blank',
                            'style' => 'color: yellow; font-size: 16px;',
                            'onclick' => 'return window.confirm("Are you sure you want to delete?");'
                            ]
                        ],
                        'htmlAttributes' => [
                            'style' => 'width: 180px' // Width of table column.
                        ]
                    ]
            ]
        ]
    ]) !!}

    <h1>CheckboxColumn </h1>
    @gridView([
        'dataProvider' => $dataProvider,
        'columnFields' => [
            [
                'class' => Itstructure\GridView\Columns\CheckboxColumn::class,
                'field' => 'id',
                'attribute' => 'name'
            ]
        ]
    ])

    <h1>Filters</h1>
    @gridView([
    'dataProvider' => $dataProvider,
    'columnFields' => [
    [
    'filter' => [
    'class' => Itstructure\GridView\Filters\DropdownFilter::class,
    'name' => 'name',
    'data' => ['key' => 'value', 'key' => 'value'] // Array keys are for html <option> tag values, array values are for titles.
        ]
        ]
        ]
        ])


    <h1>URL</h1>
        @gridView([
        'dataProvider' => $dataProvider,
        'columnFields' => [
        [
        'attribute' => 'url',
        'format' => [
        'class' => Itstructure\GridView\Formatters\UrlFormatter::class,
        'title' => 'Source',
        'htmlAttributes' => [
        'target' => '_blank'
        ]
        ]
        ],
        [
        'attribute' => 'content',
        'format' => 'html'
        ]
        ]
        ])

    <h1>egtergerrytr</h1>
        @php
            $gridData = [
                'dataProvider' => $dataProvider,
                'paginatorOptions' => [ // Here you can set some options of paginator Illuminate\Pagination\LengthAwarePaginator, used in a package.
                    'pageName' => 'p'
                ],
                'rowsPerPage' => 5, // The number of rows in one page. By default 10.
                'title' => 'Panel title', // It can be empty ''
                'strictFilters' => true, // If true, then a searching by filters will be strict, using an equal '=' SQL operator instead of 'like'.
                'rowsFormAction' => '/admin/pages/deletion', // Route url to send slected checkbox items for deleting rows, for example.
                'useSendButtonAnyway' => true, // If true, even if there are no checkbox column, the main send button will be displayed.
                'searchButtonLabel' => 'Find',
                'columnFields' => [
                    [
                        'attribute' => 'id', // REQUIRED if value is not defined. Attribute name to get row column data.
                        'label' => 'ID', // Column label.
                        'filter' => false, // If false, then column will be without a search filter form field.,
                        'htmlAttributes' => [
                            'width' => '5%' // Width of table column.
                        ]
                    ],
                    [
                        'label' => 'Active', // Column label.
                        'value' => function ($row) { // You can set 'value' as a callback function to get a row data value dynamically.
                            return '<span class="icon fas '.($row->active == 1 ? 'fa-check' : 'fa-times').'"></span>';
                        },
                        'filter' => [ // For dropdown it is necessary to set 'data' array. Array keys are for html <option> tag values, array values are for titles.
                            'class' => Itstructure\GridView\Filters\DropdownFilter::class, // REQUIRED. For this case it is necessary to set 'class'.
                            'name' => 'active', // REQUIRED if 'attribute' is not defined for column.
                            'data' => [ // REQUIRED.
                                0 => 'No active',
                                1 => 'Active',
                            ]
                        ],
                        'format' => 'html', // To render column content without lossless of html tags, set 'html' formatter.
                        'sort' => 'active' // To sort rows. Have to set if an attribute is not defined for column.
                    ],
                    [
                        'label' => 'Icon', // Column label.
                        'value' => function ($row) { // You can set 'value' as a callback function to get a row data value dynamically.
                            return $row->icon;
                        },
                        'filter' => false, // If false, then column will be without a search filter form field.
                        'format' => [ // Set special formatter. If $row->icon value is a url to image, it will be inserted in to 'src' attribute of <img> tag.
                            'class' => Itstructure\GridView\Formatters\ImageFormatter::class, // REQUIRED. For this case it is necessary to set 'class'.
                            'htmlAttributes' => [ // Html attributes for <img> tag.
                                'width' => '100'
                            ]
                        ]
                    ],
                    'created_at', // Simple column setting by string.
                    [ // Set Action Buttons.
                        'class' => Itstructure\GridView\Columns\ActionColumn::class, // REQUIRED.
                        'actionTypes' => [ // REQUIRED.
                            'view',
                            'edit' => function ($data) {
                                return '/admin/pages/' . $data->id . '/edit';
                            },
                            [
                                'class' => Itstructure\GridView\Actions\Delete::class, // REQUIRED
                                'url' => function ($data) {
                                    return '/admin/pages/' . $data->id . '/delete';
                                },
                                'htmlAttributes' => [
                                    'target' => '_blank',
                                    'style' => 'color: yellow; font-size: 16px;',
                                    'onclick' => 'return window.confirm("Sure to delete?");'
                                ]
                            ]
                        ]
                    ],
                    [
                        // For this case checkboxes will be rendered according with: <input type="checkbox" name="delete[]" value="{{ $row->id }}" />
                        'class' => Itstructure\GridView\Columns\CheckboxColumn::class, // REQUIRED.
                        'field' => 'delete', // REQUIRED.
                        'attribute' => 'id', // REQUIRED.
                        'display' => function ($row) {
                            return '{...condition to return true for displaying...}';
                        }
                    ]
                ]
            ];
        @endphp
        @gridView($gridData)
@endsection
