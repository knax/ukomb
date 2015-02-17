<?php

class CrudController extends \BaseController
{

    /**
     * Display a listing of the resource.
     * GET /crud
     *
     * @return Response
     */
    public function index($table)
    {
        $className = $this->toClassName($table);

        $data['table']['name'] = $table;
        $data['table']['className'] = $className;
        $data['table']['header'] = Schema::getColumnListing($table);
        $data['table']['body'] = $className::paginate(5);

        return View::make('admin.crud.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     * GET /crud/create
     *
     * @return Response
     */
    public function create($table)
    {
        $data['table']['name'] = $table;
        $data['table']['field'] = $this->removeId(Schema::getColumnListing($table));

        return View::make('admin.crud.create')->with($data);
	}

    /**
     * Store a newly created resource in storage.
     * POST /crud
     *
     * @return Response
     */
    public function store($table)
    {
        $className = $this->toClassName($table);

        $className::create(Input::all());

        return Redirect::action('admin.crud.index', ['table' => $table]);
    }

    /**
     * Display the specified resource.
     * GET /crud/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /crud/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($table, $id)
    {
        $className = $this->toClassName($table);

        $data['table']['name'] = $table;
        $data['table']['field'] = $this->removeId(Schema::getColumnListing($table));
        $data['table']['data'] = $className::find($id);

        return View::make('admin.crud.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     * PUT /crud/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($table, $id)
    {
        $className = $this->toClassName($table);

        $data = $className::find($id);

        $data->fill(Input::all());

        $data->save();

        return Redirect::action('admin.crud.index', ['table' => $table]);
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /crud/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($table, $id)
    {
        $className = $this->toClassName($table);
        $className::destroy($id);

        return Redirect::action('admin.crud.index', ['table' => $table]);
    }


    private function removeId($header)
    {
        $temp = $header;
        array_shift($temp);

        return $temp;
    }

    private function toClassName($table)
    {
        return ucfirst(camel_case($table));
    }
}