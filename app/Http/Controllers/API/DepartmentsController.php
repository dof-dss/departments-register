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
            'long_name' => 'The Executive Office',
            'locations' => [
                [
                'building_name' => 'SD03 Stormont Castle',
                'primary_thorfare' => 'Stormont Estate',
                'town' => 'Belfast',
                'postcode' => 'BT4 3TT'
                ]
            ],
        ],
        [
            'id' => 2,
            'short_name' => 'DAERA',
            'long_name' => 'Department of Agriculture, Environment and Rural Affairs',
            'locations' => [
                [
                    'building_name' => 'Dundonald House',
                    'primary_thorfare' => 'Upper Newtownards Road',
                    'townland' => 'Ballymiscaw',
                    'town' => 'Belfast',
                    'postcode' => 'BT4 3SB'
                ],
                [
                    'building_name' => 'Ballykelly House',
                    'building_number' => '111',
                    'primary_thorfare' => 'Ballykelly Road',
                    'town' => 'Limavady',
                    'postcode' => 'BT49 9HP'
                ],
                [
                    'building_name' => 'Klondyke Building',
                    'primary_thorfare' => 'Cromac Avenue',
                    'locality' => 'Gasworks Business Park',
                    'town' => 'Belfast',
                    'postcode' => 'BT7 2JA'
                ]
            ]
        ],
        [
            'id' => 3,
            'short_name' => 'DfC',
            'long_name' => 'Department for Communities',
            'locations' => [
                [
                  'building_name' => 'Causeway Exchange',
                  'building_number' => '1-7',
                  'primary_thorfare' => 'Bedford Street',
                  'town' => 'Belfast',
                  'postcode' => 'BT2 7EG'
                ]
            ]
        ],
        [
            'id' => 4,
            'short_name' => 'DfE',
            'long_name' => 'Department for the Economy',
            'locations' => [
                [
                  'building_name' => 'Netherleigh',
                  'primary_thorfare' => 'Massey Avenue',
                  'town' => 'Belfast',
                  'postcode' => 'BT4 2JP'
                ]
            ]

        ],
        [
            'id' => 5,
            'short_name' => 'DE',
            'long_name' => 'Department of Education',
            'locations' => [
                [
                  'building_name' => 'Rathgael House',
                  'primary_thorfare' => 'Balloo Road',
                  'town' => 'Bangor',
                  'postcode' => 'BT19 7PR'
                ]
            ]
        ],
        [
            'id' => 6,
            'short_name' => 'DoF',
            'long_name' => 'Department of Finance',
            'locations' => [
                [
                  'building_name' => 'Clare House',
                  'building_number' => '303',
                  'primary_thorfare' => 'Airport Road',
                  'town' => 'Belfast',
                  'postcode' => 'BT3 9ED'
                ]
            ]
        ],
        [
            'id' => 7,
            'short_name' => 'DoH',
            'long_name' => 'Department of Health',
            'locations' => [
                [
                  'building_name' => 'Castle Buildings',
                  'Locality' => 'Stormont Estate',
                  'town' => 'Belfast',
                  'postcode' => 'BT4 3SQ'
                ]
            ]
        ],
        [
            'id' => 8,
            'short_name' => 'DfI',
            'long_name' => 'Department for Infrastructure',
            'locations' => [
                [
                  'building_name' => 'Clarence Court',
                  'building_number' => '10-18',
                  'primary_thorfare' => 'Adelaide Street',
                  'town' => 'Belfast',
                  'postcode' => 'BT2 8GB'
                ]
            ]
        ],
        [
            'id' => 9,
            'short_name' => 'DoJ',
            'long_name' => 'Department of Justice',
            'locations' => [
                [
                  'building_name' => 'Castle Buildings',
                  'sub_building_name' => 'Block B',
                  'Locality' => 'Stormont Estate',
                  'town' => 'Belfast',
                  'postcode' => 'BT4 3SG'
                ]
            ]
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
        } else {
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
