<?php

namespace BalazsKirkUpdate\Http\Controllers;

use BalazsKirkUpdate\WPTables\Html\WPTable;

class ExampleTableController extends Controller
{
  public function load()
  {
    ExampleTable::registerScreenOption();
  }

  public function index()
  {
    $table = new ExampleTable();

    return BalazsKirkUpdate()->view('dashboard.table')->with('table', $table);
  }

  public function loadFluentExample()
  {
    WPTable::name('Books')
      ->columns([
        'id' => 'Name',
        'description' => 'Description',
      ])
      ->screenOptionLabel('Rows')
      ->registerScreenOption();
  }

  public function indexFluentExample()
  {
    $items = [];

    for ($i = 0; $i < 20; $i++) {
      $items[] = [
        'id' => "Book {$i}",
        'description' => 'Some description...',
      ];
    }

    $table = WPTable::name('Books')
      ->title('My Awesome Books')
      ->columns([
        'id' => 'Name',
        'description' => 'Description',
      ])
      ->setItems($items);

    return BalazsKirkUpdate()->view('dashboard.table')->with('table', $table);
  }

  public function loadSearchExample()
  {
    SearchTable::registerScreenOption();
  }

  public function indexSearchExample()
  {
    $table = new SearchTable();

    return BalazsKirkUpdate()->view('dashboard.table')->with('table', $table);
  }
}
