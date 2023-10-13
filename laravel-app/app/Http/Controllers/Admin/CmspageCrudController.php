<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CmspageRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Request;



/**
 * Class CmspageCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CmspageCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Cmspage::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/cmspage');
        CRUD::setEntityNameStrings('cmspage', 'cmspages');

        CRUD::addField([
            'label' => "banner",
            'name' => "image",
            'type' => 'upload',
            'upload'=> true,
            'crop' => true, 
            'aspect_ratio' => 1,
            'withFiles' => [
                'path' => 'image',
            ],
        ]);
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
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(CmspageRequest::class);
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

    public function displayData(Request $request): View
    {
        if(Request::session()->has('userEmail')){
            $cmsPages = DB::table('cmspages')->get()->toArray();
            return view('cmspage/cms', ['cmspages'=>$cmsPages]); 
        }
        else{
            return view('user/login');
        }
    }

    public function displayCMSPage($id): View
    {
        if(Request::session()->has('userEmail')){
            $cmsPage = DB::table('cmspages')->get()->where('id',$id);
            return view('cmspage/single', ['cmspage'=>$cmsPage]);   
        }
        else{
            return view('user/login');
        }        
    }
}
