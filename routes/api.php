<?php

use Illuminate\Support\Facades\Route;

// example data for the dashboard
Route::middleware(['web', 'auth'])
    ->namespace('Dashboard')
    ->prefix('dashboard')->as('dashboard.')
    ->group(function () {
        Route::get('line', 'ChartController@line')
            ->name('line');
        Route::get('bar', 'ChartController@bar')
            ->name('bar');
        Route::get('pie', 'ChartController@pie')
            ->name('pie');
        Route::get('doughnut', 'ChartController@doughnut')
            ->name('doughnut');
        Route::get('radar', 'ChartController@radar')
            ->name('radar');
        Route::get('polar', 'ChartController@polar')
            ->name('polar');
        Route::get('bubble', 'ChartController@bubble')
            ->name('bubble');
    });

Route::middleware(['web', 'auth', 'core'])
    ->group(function () {
        Route::namespace('Citations')
            ->prefix('citations')
            ->as('citations.')
            ->group(function () {
                Route::get('', 'Index')->name('index');
                Route::get('create', 'Create')->name('create');
                Route::post('', 'Store')->name('store');
                Route::get('{citation}/edit', 'Edit')->name('edit');

                Route::patch('{citation}', 'Update')->name('update');

                Route::delete('{citation}', 'Destroy')->name('destroy');

                Route::get('initTable', 'InitTable')->name('initTable');
                Route::get('tableData', 'TableData')->name('tableData');
                Route::get('exportExcel', 'ExportExcel')->name('exportExcel');

                Route::get('options', 'Options')->name('options');
                Route::get('{citation}', 'Show')->name('show');
            });
    });

Route::middleware(['web', 'auth', 'core'])
    ->group(function () {
        Route::namespace('Families')
            ->prefix('families')
            ->as('families.')
            ->group(function () {
                Route::get('', 'Index')->name('index');
                Route::get('create', 'Create')->name('create');
                Route::post('', 'Store')->name('store');
                Route::get('{family}/edit', 'Edit')->name('edit');

                Route::patch('{family}', 'Update')->name('update');

                Route::delete('{family}', 'Destroy')->name('destroy');

                Route::get('initTable', 'InitTable')->name('initTable');
                Route::get('tableData', 'TableData')->name('tableData');
                Route::get('exportExcel', 'ExportExcel')->name('exportExcel');

                Route::get('options', 'Options')->name('options');
                Route::get('{family}', 'Show')->name('show');
            });
    });

Route::middleware(['web', 'auth', 'core'])
    ->group(function () {
        Route::namespace('Notes')
            ->prefix('notes')
            ->as('notes.')
            ->group(function () {
                Route::get('', 'Index')->name('index');
                Route::get('create', 'Create')->name('create');
                Route::post('', 'Store')->name('store');
                Route::get('{note}/edit', 'Edit')->name('edit');

                Route::patch('{note}', 'Update')->name('update');

                Route::delete('{note}', 'Destroy')->name('destroy');

                Route::get('initTable', 'InitTable')->name('initTable');
                Route::get('tableData', 'TableData')->name('tableData');
                Route::get('exportExcel', 'ExportExcel')->name('exportExcel');

                Route::get('options', 'Options')->name('options');
                Route::get('{note}', 'Show')->name('show');
            });
    });

Route::middleware(['web', 'auth', 'core'])
    ->group(function () {
        Route::namespace('Places')
            ->prefix('places')
            ->as('places.')
            ->group(function () {
                Route::get('', 'Index')->name('index');
                Route::get('create', 'Create')->name('create');
                Route::post('', 'Store')->name('store');
                Route::get('{place}/edit', 'Edit')->name('edit');

                Route::patch('{place}', 'Update')->name('update');

                Route::delete('{place}', 'Destroy')->name('destroy');

                Route::get('initTable', 'InitTable')->name('initTable');
                Route::get('tableData', 'TableData')->name('tableData');
                Route::get('exportExcel', 'ExportExcel')->name('exportExcel');

                Route::get('options', 'Options')->name('options');
                Route::get('{place}', 'Show')->name('show');
            });
    });

Route::middleware(['web', 'auth', 'core'])
    ->group(function () {
        Route::namespace('Repositories')
            ->prefix('repositories')
            ->as('repositories.')
            ->group(function () {
                Route::get('', 'Index')->name('index');
                Route::get('create', 'Create')->name('create');
                Route::post('', 'Store')->name('store');
                Route::get('{repository}/edit', 'Edit')->name('edit');

                Route::patch('{repository}', 'Update')->name('update');

                Route::delete('{repository}', 'Destroy')->name('destroy');

                Route::get('initTable', 'InitTable')->name('initTable');
                Route::get('tableData', 'TableData')->name('tableData');
                Route::get('exportExcel', 'ExportExcel')->name('exportExcel');

                Route::get('options', 'Options')->name('options');
                Route::get('{repository}', 'Show')->name('show');
            });
    });

Route::middleware(['web', 'auth', 'core'])
    ->group(function () {
        Route::namespace('Sources')
            ->prefix('sources')
            ->as('sources.')
            ->group(function () {
                Route::get('', 'Index')->name('index');
                Route::get('create', 'Create')->name('create');
                Route::post('', 'Store')->name('store');
                Route::get('{source}/edit', 'Edit')->name('edit');

                Route::patch('{source}', 'Update')->name('update');

                Route::delete('{source}', 'Destroy')->name('destroy');

                Route::get('initTable', 'InitTable')->name('initTable');
                Route::get('tableData', 'TableData')->name('tableData');
                Route::get('exportExcel', 'ExportExcel')->name('exportExcel');

                Route::get('options', 'Options')->name('options');
                Route::get('{source}', 'Show')->name('show');
            });
    });

Route::middleware(['web', 'auth', 'core'])
    ->group(function () {
        Route::namespace('Types')
            ->prefix('types')
            ->as('types.')
            ->group(function () {
                Route::get('', 'Index')->name('index');
                Route::get('create', 'Create')->name('create');
                Route::post('', 'Store')->name('store');
                Route::get('{type}/edit', 'Edit')->name('edit');

                Route::patch('{type}', 'Update')->name('update');

                Route::delete('{type}', 'Destroy')->name('destroy');

                Route::get('initTable', 'InitTable')->name('initTable');
                Route::get('tableData', 'TableData')->name('tableData');
                Route::get('exportExcel', 'ExportExcel')->name('exportExcel');

                Route::get('options', 'Options')->name('options');
                Route::get('{type}', 'Show')->name('show');
            });
    });

Route::middleware(['web', 'auth', 'core'])
    ->group(function () {
        Route::namespace('Authors')
            ->prefix('authors')
            ->as('authors.')
            ->group(function () {
                Route::get('', 'Index')->name('index');
                Route::get('create', 'Create')->name('create');
                Route::post('', 'Store')->name('store');
                Route::get('{author}/edit', 'Edit')->name('edit');

                Route::patch('{author}', 'Update')->name('update');

                Route::delete('{author}', 'Destroy')->name('destroy');

                Route::get('initTable', 'InitTable')->name('initTable');
                Route::get('tableData', 'TableData')->name('tableData');
                Route::get('exportExcel', 'ExportExcel')->name('exportExcel');

                Route::get('options', 'Options')->name('options');
                Route::get('{author}', 'Show')->name('show');
            });
    });
Route::middleware(['web', 'auth', 'core'])
    ->group(function () {
        Route::namespace('Publications')
            ->prefix('publications')
            ->as('publications.')
            ->group(function () {
                Route::get('', 'Index')->name('index');
                Route::get('create', 'Create')->name('create');
                Route::post('', 'Store')->name('store');
                Route::get('{publication}/edit', 'Edit')->name('edit');

                Route::patch('{publication}', 'Update')->name('update');

                Route::delete('{publication}', 'Destroy')->name('destroy');

                Route::get('initTable', 'InitTable')->name('initTable');
                Route::get('tableData', 'TableData')->name('tableData');
                Route::get('exportExcel', 'ExportExcel')->name('exportExcel');

                Route::get('options', 'Options')->name('options');
                Route::get('{publication}', 'Show')->name('show');
            });
    });

Route::middleware(['web', 'auth', 'core'])
    ->group(function () {
        Route::namespace('Gedcom')
            ->prefix('gedcom')
            ->as('gedcom.')
            ->group(function () {
                Route::post('store', 'Store')->name('store');
            });
    });

Route::middleware(['web', 'auth', 'core'])
    ->group(function () {
        Route::namespace('Trees')
            ->prefix('trees')
            ->as('trees.')
            ->group(function () {
                Route::get('{tree}', 'Show')->name('show');
            });
    });

Route::middleware(['web', 'auth', 'core'])
    ->group(function () {
        Route::namespace('MediaObjects')
            ->prefix('objects')
            ->as('objects.')
            ->group(function () {

                Route::get('', 'Index')->name('index');
                Route::get('create', 'Create')->name('create');
                Route::post('', 'Store')->name('store');
                Route::get('{object}/edit', 'Edit')->name('edit');

                Route::patch('{object}', 'Update')->name('update');

                Route::delete('{object}', 'Destroy')->name('destroy');

                Route::get('initTable', 'InitTable')->name('initTable');
                Route::get('tableData', 'TableData')->name('tableData');
                Route::get('exportExcel', 'ExportExcel')->name('exportExcel');

                Route::get('options', 'Options')->name('options');
                Route::get('{object}', 'Show')->name('show');


        });
    });

