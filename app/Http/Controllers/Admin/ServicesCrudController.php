<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ServicesRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ServicesCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ServicesCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Services::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/services');
        CRUD::setEntityNameStrings('services', 'services');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */

    protected function setupShowOperation()
    {
        // CRUD::setFromDb(); // columns
        // $this->crud->setColumns(['title', 'text']);

        $this->crud->addColumn([
            'name' => 'title',
            'type' => 'text',
            'label' => 'title',
        ]);
        $this->crud->addColumn([
            'name' => 'text',
            'type' => 'text',
            'label' => 'text',
        ]);
        $this->crud->addColumn([
            'name' => 'servicesbg',
            'type' => 'image',
            'label' => 'Background image',
        ]);
        $this->crud->addColumn([
            'name' => 'servicesicon',
            'type' => 'image',
            'label' => 'Icon',
        ]);

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    protected function setupListOperation()
    {
        // CRUD::setFromDb(); // columns

        $this->crud->addColumn([
            'name' => 'title',
            'type' => 'text',
            'label' => 'title',
        ]);
        $this->crud->addColumn([
            'name' => 'text',
            'type' => 'text',
            'label' => 'text',
        ]);
        $this->crud->addColumn([
            'name' => 'servicesbg',
            'type' => 'image',
            'label' => 'Background image',
        ]);
        $this->crud->addColumn([
            'name' => 'servicesicon',
            'type' => 'image',
            'label' => 'Icon',
        ]);

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
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
        CRUD::setValidation(ServicesRequest::class);

        // CRUD::setFromDb(); // fields

        $this->crud->addField([
            'name' => 'title',
            'type' => 'text',
            'label' => "Title"
          ]);
          $this->crud->addField([
            'name' => 'text',
            'type' => 'textarea',
            'label' => "Text",
            'attributes' => [
                'rows' => 10,
                'cols' => 10
            ]
          ]);
          $this->crud->addField([
            'label' => "Background image",
            'name' => "servicesbg",
            'type' => 'image',
            // 'crop' => true, // set to true to allow cropping, false to disable
            // 'aspect_ratio' => 1, // omit or set to 0 to allow any aspect ratio
            // 'disk'      => 's3_bucket', // in case you need to show images from a different disk
            // 'prefix'    => 'uploads/images/profile_pictures/' // in case your db value is only the file name (no path), you can use this to prepend your path to the image src (in HTML), before it's shown to the user;
        ]);
        $this->crud->addField([
            'label' => "Icon",
            'name' => "servicesicon",
            'type' => 'image',
            // 'crop' => true, // set to true to allow cropping, false to disable
            // 'aspect_ratio' => 1, // omit or set to 0 to allow any aspect ratio
            // 'disk'      => 's3_bucket', // in case you need to show images from a different disk
            // 'prefix'    => 'uploads/images/profile_pictures/' // in case your db value is only the file name (no path), you can use this to prepend your path to the image src (in HTML), before it's shown to the user;
        ]);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
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
}
