<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TouristRequest;
use App\Models\Tourists_Address;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Backpack\CRUD\app\Library\Widget;
use App\Models\Tourist;

/**
 * Class TouristCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class TouristCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(Tourist::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/tourist');
        CRUD::setEntityNameStrings('tourist', 'tourists');

    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // set columns from db columns.

        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */

        $totalTourists = Tourist::count();
        Widget::add()->to('before_content')->type('div')->class('row')->content([
            Widget::make(
                [
                    'type'       => 'card',
                    'class'   => 'tourists_details',
                    'wrapper' => ['class' => 'tourists_details_container'],
                    'content'    => [
                        'header' => 'Number of Tourists : '.$totalTourists, 
                        'body' => 'HAPPY JOURNEY',                       
                    ]
                ]
            ),
        ]
        );
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(TouristRequest::class);
        CRUD::setFromDb(); // set fields from db columns.

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */

        
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    public function index(){
        $touristId = Tourist::all('id');
        $address = Tourist::find(1)->tourist_address;
        $touristAddress = Tourists_Address::where('tourist_id', $touristId)->first();
    }
}
