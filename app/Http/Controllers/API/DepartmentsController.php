<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class DepartmentsController extends Controller
{
    protected $departments = [
        [
            'id' => 1,
            'short_name' => 'TEO',
            'long_name' => 'The Executive Office'
        ],
        [
            'id' => 2,
            'short_name' => 'DAERA',
            'long_name' => 'Department of Agriculture, Environment and Rural Affairs'
        ],
        [
            'id' => 3,
            'short_name' => 'DfC',
            'long_name' => 'Department for Communities'
        ],
        [
            'id' => 4,
            'short_name' => 'DfE',
            'long_name' => 'Department for the Economy'
        ],
        [
            'id' => 5,
            'short_name' => 'DE',
            'long_name' => 'Department of Education'
        ],
        [
            'id' => 6,
            'short_name' => 'DoF',
            'long_name' => 'Department of Finance'
        ],
        [
            'id' => 7,
            'short_name' => 'DoH',
            'long_name' => 'Department of Health'
        ],
        [
            'id' => 8,
            'short_name' => 'DfI',
            'long_name' => 'Department for Infrastructure'
        ],
        [
            'id' => 9,
            'short_name' => 'DoJ',
            'long_name' => 'Department of Justice'
        ],
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $response = [
            // 'href' => $request->url(),
            'createdTimestamp' => Carbon::now(),
            'departments' => $this->departments
        ];
        return $response;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // validation
        if (is_numeric($id) && $id > 0 && $id <= sizeof($this->departments)) {
            $index = $id - 1;
            // build the response
            $response = [
                // 'href' => $request->url(),
                'createdTimestamp' => Carbon::now(),
                'department' => $this->departments[$index]
            ];
            return $response;
        }
        else {
          // resource not found
          return response()->json([
            'message' => 'Department ' . $id . ' not found'
          ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
